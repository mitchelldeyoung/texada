<?php

if(isset($_POST['deleteTrackingItem'])){
    $removeTrackerId = filter_input(INPUT_POST, 'deleteTrackingItem', FILTER_SANITIZE_STRING);   
    $deleteQuery = 'DELETE FROM trackingInfo WHERE id = '.$removeTrackerId.'';
    
if($deleteResult = mysqli_query($mysqli,$deleteQuery)){
		 while($obj = mysqli_fetch_object($deleteResult)){
             
         };
};
};