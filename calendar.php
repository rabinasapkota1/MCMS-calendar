

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calendar</title>
    <link rel="stylesheet" type="text/css" href="calender.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
  
<!-- use data attribute into html and get data value when clicking any date -->
<script src="js/calendar.js" defer></script>
</head>
<body>
    <h1>Mensuration date</h1>
        <h2>Your mensuration date is recorded , you will get notification when your next date is near</h2>
    

    <div id ="dateElement"data-date="isToday"></div>
<div class="wrapper">
        <header>
<p class="current-date"></p>
                <div class="icons">
                <span id="prev" class="material-icons-outlined">chevron_left</span>
                <span id ="next" class="material-icons-outlined">chevron_right</span>  
            </div>
        </header>
        <div class="calendar">
            <ul class="weeks">
                <li>Sun</li>
                <li>Mon</li>
                <li>Tue</li>
                <li>Wed</li>
                <li>Thu</li>
                <li>Fri</li>
                <li>Sat</li>
            </ul>
            <ul class="days">
            </ul>

        </div>
    </div>
</body>
</html>