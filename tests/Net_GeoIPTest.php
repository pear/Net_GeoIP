<?php
require_once 'PHPUnit/Framework/TestCase.php';

class Net_GeoIPTest extends PHPUnit_Framework_TestCase
{

    public function testShouldHaveBetterTestCoverage() {
        $this->markTestIncomplete('
    protected function getOrg($ipnum)
    protected function getRecord($ipnum)
    protected function getRegion($ipnum)
    protected function loadSharedMemory($filename)
    protected function lookupCountryId($addr)
    protected function seekCountry($ipnum)
    protected function setupSegments()
    public function __construct($filename = null, $flags = null)
    public function __destruct()
    public function close()
    public function lookupCountryCode($addr)
    public function lookupCountryName($addr)
    public function lookupLocation($addr)
    public function lookupOrg($addr)
    public function lookupRegion($addr)
    public function open($filename, $flags = null)
    public static function getInstance($filename = null, $flags = null)');
    }
}