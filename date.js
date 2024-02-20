<script>
  var start_date= new Date(" ");
  var currentDate = new Date();
  var timeDifference = start_date.getTime() - currentDate.getTime();
  Var daysDifference = Math.floor(timeDifference/1000*3600*24);

  if (daysDifference === 21)
  {
  document.getElementById("notification").style.display ="block";
  }
  </script>