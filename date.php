<?php 
  $date = date_create("2023-08-27");
  date_add($date, date_interval_create_form_date_string("21 days"));
  echo date_formate($date ,"d-m-y");
 ?>