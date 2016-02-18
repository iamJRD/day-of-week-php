<?php

    require_once "src/DayofWeek.php";

    class DayofWeekTest extends PHPUnit_Framework_TestCase
    {

        function test_DayofWeek() {

            $test_DayofWeek = new DayofWeek;
            $input = "2014-7-11";

            $result = $test_DayofWeek->week_day($input);

            $this->assertEquals("Friday", $result);
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
