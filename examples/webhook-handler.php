<?php

validateAuth('webhook_user', 'password');
$trackings = extractTrackingsFromRequest();
saveTrackingsToFile($trackings, __DIR__ . '/trackings-log.csv');
print count($trackings) . ' items processed';

function validateAuth($allowedLogin, $allowedPassword)
{
    if (!isset($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW'])
        || $_SERVER['PHP_AUTH_USER'] !== $allowedLogin
        || $_SERVER['PHP_AUTH_PW'] !== $allowedPassword
    ) {
        header('WWW-Authenticate: Basic realm="Restricted area"');
        http_response_code(401);
        print 'Unauthorized ' . $_SERVER['REQUEST_URI'] . ' from ' . $_SERVER['REMOTE_ADDR'];
        exit;
    }
}

function extractTrackingsFromRequest() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        http_response_code(400);
        print 'Request method must be POST';
        exit;
    }
    $json = file_get_contents('php://input');
    $data = @json_decode($json, true);
    if ($data === null || !isset($data['data'])) {
        http_response_code(400);
        print 'Bad json format';
        exit;
    }
    return $data['data'];
}

function saveTrackingsToFile(array $trackings, $filename) {
    $file = new SplFileObject($filename, 'a');
    $timestamp = (new DateTime())->format('c');
    foreach ($trackings as $tracking) {
        $file->fputcsv([
            $timestamp,
            $tracking['trackingNumber'],
            $tracking['status'],
        ]);
    }
}
