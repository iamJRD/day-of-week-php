<?php
    class DayofWeek
    {
        function week_day ($input_date) {

          list($year, $month, $day) = explode("-", $input_date);

          return date("l", mktime(0, 0, 0, $month, $day, $year));
      }
  }
?>
