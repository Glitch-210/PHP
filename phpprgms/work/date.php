<?php
	print_r(getdate());
	echo "<br>";
	var_dump (checkdate(2,29,2001));
		echo "<br>";
	// $date=date_create("04-02-2014");
	// date_add($date,date_interval_create_from_date_string("200 days"));
	// echo date_format($date,"d-M-Y");
	
		// echo "<br>";
		
		// $date1=date_create("2013-04-23");
// $date2=date_create("2013-10-01");
// $date_diff=date_diff($date1,$date2);
// echo $date_diff -> format ("%R%a days");
// echo "<br">;
// $date = date_create("2019-01-27");
// date_modify($date, "-15 days");
// echo date_format($date, "Y-M-d");
// echo "<br><br>";
// mktime(hour,minute,second,month,day,year,is_dst);
echo "The day on 4th February 2014 was ".date("l",mktime(0,0,0,2,4,2014));

echo "<br>";
?>