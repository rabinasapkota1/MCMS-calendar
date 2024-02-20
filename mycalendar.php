<?php
function generate_calendar($month, $year) {
    $days_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    $first_day = date("N", strtotime("{$year}-{$month}-01")); 
    $last_day = date("N", strtotime("{$year}-{$month}-{$days_in_month}")); 
    
    echo '<tr>';
    for ($i = 1; $i < $first_day; $i++) {
        echo '<td></td>'; // empty cells before the first day of the month
    }
    
    for ($day = 1; $day <= $days_in_month; $day++) {
        if ($day === date('j') && $month === date('n') && $year === date('Y')) {
            echo '<td class="today" onclick="handleClick(' . $day . ')">' . $day . '</td>';
        } else {
            echo '<td onclick="handleClick(' . $day . ')">' . $day . '</td>';
        }
        
        if (date('N', strtotime("{$year}-{$month}-{$day}")) == 7) {
            echo '</tr><tr>'; // start a new row for each Sunday
        }
    }
    
    for ($i = $last_day; $i < 7; $i++) {
        echo '<td></td>'; // empty cells after the last day of the month
    }
    echo '</tr>';
}

// Get the current month and year
$current_month = date('n');
$current_year = date('Y');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mensuration Calendar</title>
    <style>
       *{
    margin:2px;
    padding:4px;
    box-sizing:border-box;
    font-family:sans-serif;
}

body{
    /*display: flex start;*/
    align-items: center;
    justify-content: auto;
    min-height: 100vh;
    background: lightpink;
}
.calendar{
    padding: 20px;
    box-sizing: border-box;

}
.calendar li{
    display: flex;
    list-style: none;
    flex-wrap: wrap;
    text-align: center;
}
.calendar tbody th{
    display: inline-flex;
}

    </style>
</head>
<body>
    <h1>Mensuration Calendar</h1>
    <div class="calendar">
        <table>
            <thead>
                <tr>
                <li>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </li>
                </tr>
            </thead>
            <tbody>
                <?php generate_calendar($current_month, $current_year); ?>
            </tbody>
        </table>
    </div>
    
    <script>
        function handleClick(day) {
            alert("Clicked on day " + day);
           
        }
    </script>
</body>
</html>