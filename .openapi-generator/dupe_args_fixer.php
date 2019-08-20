#!/usr/bin/env php

<?php

if (isset($_SERVER['argv'][1]) && $_SERVER['argv'][1] === '--fix') {
    $paths = file('php://stdin');
    $fixed = fix_in_files($paths);
    print 'Processed files: '.count($paths).PHP_EOL;
    print 'Fixed dupe arguments: '.$fixed.PHP_EOL;
}

/**
 * @param array $paths
 * @return int
 */
function fix_in_files(array $paths) {
    $fixedTotal = 0;
    foreach ($paths as $path) {
        $fixed = 0;
        $path = trim($path);
        $content = file_get_contents($path);
        $content = fix_dupe_args($content, $fixed);
        if ($fixed > 0 && $content !== null) {
            file_put_contents($path, $content);
            $fixedTotal += $fixed;
        }
    }

    return $fixedTotal;
}

/**
 * @param string $input
 * @param int $fixed
 * @return string|null
 */
function fix_dupe_args($input, &$fixed) {
    if (!is_int($fixed)) {
        $fixed = 0;
    }
    return preg_replace_callback(
        "/(function\s\S+)\((.*)\)/i",
        static function($results) use(&$fixed) {
            list(, $prefix, $argstr) = $results;
            $rawArgs = explode(',', $argstr);

            $uniqueArgs = [];
            foreach ($rawArgs as $rawArg) {
                list($name) = explode('=', $rawArg);
                $name = strtolower(trim($name));
                if (isset($uniqueArgs[$name])) {
                    $fixed++;
                    continue;
                }
                $uniqueArgs[$name] = $rawArg;
            }
            $uniqueArgs = array_values($uniqueArgs);

            return $prefix.'('.implode(',', $uniqueArgs).')';
        },
        $input
    );
}
