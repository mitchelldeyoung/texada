<?php

if(isset($_POST['updateProductID']) && isset($_POST['updateProductName']) && isset($_POST['updateTrackingNumber']) && isset($_POST['updateLongitude']) && isset($_POST['updateLatitude']) && isset($_POST['updateElevation']) && !empty($_POST['updateProductID']) && !empty($_POST['updateProductName']) && !empty($_POST['updateTrackingNumber']) && !empty($_POST['updateLongitude']) && !empty($_POST['updateLatitude']) && !empty($_POST['updateElevation']) ){
    
    $updateProductID = filter_input(INPUT_POST, 'updateProductID', FILTER_SANITIZE_STRING);   
    $updateProductName = filter_input(INPUT_POST, 'updateProductName', FILTER_SANITIZE_STRING);   
    $updateTrackingNumber = filter_input(INPUT_POST, 'updateTrackingNumber', FILTER_SANITIZE_STRING);   
    $updateLongitude = filter_input(INPUT_POST, 'updateLongitude', FILTER_SANITIZE_STRING);   
    $updateLatitude = filter_input(INPUT_POST, 'updateLatitude', FILTER_SANITIZE_STRING);   
    $updateElevation = filter_input(INPUT_POST, 'updateElevation', FILTER_SANITIZE_STRING);   
    
    $updateQuery = 'UPDATE trackingInfo SET tracking_number = "'.$updateTrackingNumber.'", product_name ="'.$updateProductName.'", longitude = "'.$updateLongitude.'", latitude = "'.$updateLatitude.'", elevation = "'.$updateElevation.'" WHERE id = "'.$updateProductID.'"';
        
if($updateResult = mysqli_query($mysqli,$updateQuery)){
		 while($obj = mysqli_fetch_object($updateResult)){
             
         };
};
    
};