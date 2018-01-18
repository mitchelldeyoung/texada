<?php

$query = "SELECT id, tracking_date from trackingInfo";

if($result = mysqli_query($mysqli,$query)){
		 while($obj = mysqli_fetch_object($result)){
             echo $obj->tracking_date;
             $date = strtotime($obj->tracking_date);
             $query2 = "UPDATE trackingInfo SET tracking_date='$date' WHERE id='$obj->id';<br>";
             
             
         };
};

exit;