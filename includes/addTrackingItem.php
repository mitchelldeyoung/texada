<?php

//print_r($_POST);
if(isset($_POST['addTrackingNumber']) && isset($_POST['addProductName']) && isset($_POST['addTrackingDate']) && isset($_POST['addLongitude'])  && isset($_POST['addLatitude'])  && isset($_POST['addElevation']) && !empty($_POST['addTrackingNumber']) && !empty($_POST['addProductName']) && !empty($_POST['addTrackingDate']) && !empty($_POST['addLongitude'])  && !empty($_POST['addLatitude'])  && !empty($_POST['addElevation'])){

    $addTrackingNumber = filter_input(INPUT_POST, 'addTrackingNumber', FILTER_SANITIZE_STRING);   
    $addProductName = filter_input(INPUT_POST, 'addProductName', FILTER_SANITIZE_STRING);   
    $addTrackingDate = filter_input(INPUT_POST, 'addTrackingDate', FILTER_SANITIZE_STRING);   
    $addLongitude = filter_input(INPUT_POST, 'addLongitude', FILTER_SANITIZE_STRING);   
    $addLatitude = filter_input(INPUT_POST, 'addLatitude', FILTER_SANITIZE_STRING);   
    $addElevation = filter_input(INPUT_POST, 'addElevation', FILTER_SANITIZE_STRING);   

    
    $addTrackingDate = date("Y-m-d", strtotime($addTrackingDate));        
    if($addTrackingDate == '1970-01-01'){
        $error = 'incorrect date format';
    }

    
    if ($insert_stmt = $mysqli->prepare("INSERT INTO trackingInfo (tracking_number, product_name, longitude, latitude, elevation, tracking_date) VALUES (?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssss', $addTrackingNumber, $addProductName, $addLongitude, $addLatitude, $addElevation, $addTrackingDate);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        
        }
    
    
}

