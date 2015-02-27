<?php

require dirname(__FILE__) . '/Runscopificator.php';

class ProfilerTest extends PHPUnit_Framework_TestCase {
    public function testURL() {
        $r = new Runscopificator('abcd');
        $this->assertEquals('http://www-google-com-abcd.runscope.net/test?hai',
                            $r->url('http://www.google.com/test?hai'));
    }
}
