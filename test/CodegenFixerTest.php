<?php
namespace TrackMage\Client;

use PHPUnit\Framework\TestCase;

/**
 * Test for dupe_args_fixer
 */
class CodegenFixerTest extends TestCase
{
    /**
     * Load dupe_args_fixer file
     */
    public static function setUpBeforeClass()
    {
        require __DIR__.'/../.openapi-generator/dupe_args_fixer.php';
    }

    /**
     *
     */
    public function testFixesDupeArgs()
    {
        $buggyString = 'public function apiTeamsWorkspacesShipmentsGetSubresource($id, $workspaces, $orderId = null, $orderTrackingNumber = null, $orderStatus = null, $orderOriginCarrier = null, $orderDestinationCarrier = null, $orderCreatedAt = null, $orderUpdatedAt = null, $orderShippedAt = null, $orderLastStatusUpdate = null, $orderExpectedDeliveryDate = null, $orderOriginCountry = null, $orderDestinationCountry = null, $orderOriginCountryIso2 = null, $orderDestinationCountryIso2 = null, $orderEmail = null, $orderDaysInTransit = null, $orderReviewTotalScore = null, $orderNumbers = null, $orderNumbers2 = null, $createdAtBefore = null, $createdAtStrictlyBefore = null, $createdAtAfter = null, $createdAtStrictlyAfter = null, $updatedAtBefore = null, $updatedAtStrictlyBefore = null, $updatedAtAfter = null, $updatedAtStrictlyAfter = null, $shippedAtBefore = null, $shippedAtStrictlyBefore = null, $shippedAtAfter = null, $shippedAtStrictlyAfter = null, $lastStatusUpdateBefore = null, $lastStatusUpdateStrictlyBefore = null, $lastStatusUpdateAfter = null, $lastStatusUpdateStrictlyAfter = null, $expectedDeliveryDateBefore = null, $expectedDeliveryDateStrictlyBefore = null, $expectedDeliveryDateAfter = null, $expectedDeliveryDateStrictlyAfter = null, $id2 = null, $trackingNumber = null, $trackingNumber2 = null, $status = null, $status2 = null, $originCarrier = null, $originCarrier2 = null, $destinationCarrier = null, $destinationCarrier2 = null, $originCountry = null, $originCountryIso2 = null, $originCountryIso3 = null, $destinationCountry = null, $destinationCountryIso2 = null, $destinationCountryIso3 = null, $email = null, $id2 = null, $daysInTransit = null, $daysInTransit2 = null, $daysInTransitBetween = null, $daysInTransitGt = null, $daysInTransitGte = null, $daysInTransitLt = null, $daysInTransitLte = null, $reviewTotalScoreBetween = null, $reviewTotalScoreGt = null, $reviewTotalScoreGte = null, $reviewTotalScoreLt = null, $reviewTotalScoreLte = null)';
        $expected = 'public function apiTeamsWorkspacesShipmentsGetSubresource($id, $workspaces, $orderId = null, $orderTrackingNumber = null, $orderStatus = null, $orderOriginCarrier = null, $orderDestinationCarrier = null, $orderCreatedAt = null, $orderUpdatedAt = null, $orderShippedAt = null, $orderLastStatusUpdate = null, $orderExpectedDeliveryDate = null, $orderOriginCountry = null, $orderDestinationCountry = null, $orderOriginCountryIso2 = null, $orderDestinationCountryIso2 = null, $orderEmail = null, $orderDaysInTransit = null, $orderReviewTotalScore = null, $orderNumbers = null, $orderNumbers2 = null, $createdAtBefore = null, $createdAtStrictlyBefore = null, $createdAtAfter = null, $createdAtStrictlyAfter = null, $updatedAtBefore = null, $updatedAtStrictlyBefore = null, $updatedAtAfter = null, $updatedAtStrictlyAfter = null, $shippedAtBefore = null, $shippedAtStrictlyBefore = null, $shippedAtAfter = null, $shippedAtStrictlyAfter = null, $lastStatusUpdateBefore = null, $lastStatusUpdateStrictlyBefore = null, $lastStatusUpdateAfter = null, $lastStatusUpdateStrictlyAfter = null, $expectedDeliveryDateBefore = null, $expectedDeliveryDateStrictlyBefore = null, $expectedDeliveryDateAfter = null, $expectedDeliveryDateStrictlyAfter = null, $id2 = null, $trackingNumber = null, $trackingNumber2 = null, $status = null, $status2 = null, $originCarrier = null, $originCarrier2 = null, $destinationCarrier = null, $destinationCarrier2 = null, $originCountry = null, $originCountryIso2 = null, $originCountryIso3 = null, $destinationCountry = null, $destinationCountryIso2 = null, $destinationCountryIso3 = null, $email = null, $daysInTransit = null, $daysInTransit2 = null, $daysInTransitBetween = null, $daysInTransitGt = null, $daysInTransitGte = null, $daysInTransitLt = null, $daysInTransitLte = null, $reviewTotalScoreBetween = null, $reviewTotalScoreGt = null, $reviewTotalScoreGte = null, $reviewTotalScoreLt = null, $reviewTotalScoreLte = null)';

        self::assertSame($expected, fix_dupe_args($buggyString, $fixed));
        self::assertSame(1, $fixed);
    }

    /**
     *
     */
    public function testFixesMultipleLines()
    {
        $buggyString = "public function testA(\$id, \$abc, \$id = null) {}\n public function testB(\$id = null, \$cde, \$id) {}";
        $expected = "public function testA(\$id, \$abc) {}\n public function testB(\$id = null, \$cde) {}";

        self::assertSame($expected, fix_dupe_args($buggyString, $fixed));
        self::assertSame(2, $fixed);
    }
}
