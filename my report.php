<?php
function generateCalendar($year)
{
    // Create a new DateTime object for the first day of the year
    $date = new DateTime($year . '-01-01');

    // Create an array to store the calendar
    $calendar = [];

    // Loop through each month
    for ($month = 1; $month <= 12; $month++) {
        // Get the number of days in the current month
        $numDays = cal_days_in_month(CAL_GREGORIAN, $month, $year);

        // Loop through each day of the month
        for ($day = 1; $day <= $numDays; $day++) {
            // Get the day of the week (0 = Sunday, 1 = Monday, etc.)
            $dayOfWeek = $date->format('w');

            // Store the day in the calendar array
            $calendar[$month][$day] = $dayOfWeek;

            // Move to the next day
            $date->modify('+1 day');
        }
    }

    return $calendar;
}

$year = date('Y');
$calendar = generateCalendar($year);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 30px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid black;
            background-color: lightskyblue;
        }
      .table.tr{
          display: inline-flex;

         border-color: lightgray;
       }
        
    </style>
</head>
<body>
    <h1>Calendar for <?php echo $year; ?></h1>
    <table>
    <div >
               <tr>
            <th>Jan</th>
            <th>Feb</th>
            <th>Mar</th>
            <th>Apr</th>
            <th>May</th>
            <th>Jun</th>
            <th>Jul</th>
            <th>Aug</th>
            <th>Sep</th>
            <th>Oct</th>
            <th>Nov</th>
            <th>Dec</th>
        </tr>
        </div>
        <?php
        foreach ($calendar as $month => $days) {
            echo '<tr>';
            foreach ($days as $day => $dayOfWeek) {
                echo '<td onclick="handleClick(' . $month . ', ' . $day . ')">' . $day . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>

    <script>
        function handleClick(month, day) {
            alert('Clicked on ' + month + '/' + day);
        }
    </script>
</body>
</html>