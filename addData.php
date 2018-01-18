<?php

$individualData[] = ['1', 'Cesna 120', '2016-10-12T12:00:00-05:00', '43.2583264', '-81.8149807', '500']; 
$individualData[] = ['1','Cesna 120','2016-10-13T12:00:00-05:00','42.559112','-79.286693','550']; 
$individualData[] =['1','Cesna 120','2016-10-14T12:00:00-05:00','43.559112','-85.286693','600']; 
$individualData[] =['1','Cesna 120','2016-10-15T12:00:00-05:00',	'42.3119735','-83.0941179',	'650']; 

$individualData[] =['2', 'DC-6 Twin Otter', '2016-10-12T12:00:00-05:00','43.459112','-80.386693', '500']; 
$individualData[] =['2','DC-6 Twin Otter', '2016-10-13T12:00:00-05:00',	'42.459112','-79.386693','550']; 
$individualData[] =['2', 'DC-6 Twin Otter',	'2016-10-14T12:00:00-05:00','43.459112','-85.386693','450']; 
$individualData[] =['2','DC-6 Twin Otter','2016-10-15T12:00:00-05:00','44.459112','-81.386693',	'400']; 

$individualData[] =['3','Piper M600','2016-10-15T12:00:00-05:00','44.459112','-81.386693','500']; 
$individualData[] =['3','Piper M600','2016-10-15T12:00:00-05:00','45.459112','-82.386693','600']; 
$individualData[] =['3','Piper M600','2016-10-15T12:00:00-05:00','46.459112','-83.386693', '700']; 
$individualData[] =['3', 'Piper M600',	'2016-10-15T12:00:00-05:00','47.459112','-84.386693','800']; 
$individualData[] =['3','Piper M600','2016-10-15T12:00:00-05:00','48.459112','-85.386693','900']; 

$individualData[] =['4','Art Boom 6500','2017-08-04T14:20:38-05:00','43.7634618','-79.3688191',	'800']; 
$individualData[] =['4', 'Art Boom 6500','2017-08-04T16:20:38-05:00', '43.8001468',	'-79.2342365','400'	]; 
$individualData[] =['4','Art Boom 6500','2017-08-04T14:20:38-05:00','44.51165',	'-80.1239422','550'	]; 
$individualData[] =['4', 'Art Boom 6500','2017-08-04T14:20:38-05:00','43.1501439','-79.0504945','300']; 
//$individualData[] =[]; 

for($i = 0; $i < count($individualData) ; $i++){
if ($insert_stmt = $mysqli->prepare("INSERT INTO trackingInfo (tracking_number, product_name, longitude, latitude, elevation, tracking_date) VALUES (?, ?, ?, ?, ?, ?)")) {
            $insert_stmt->bind_param('ssssss', $individualData[$i][0], $individualData[$i][1], $individualData[$i][3], $individualData[$i][4], $individualData[$i][5], $individualData[$i][2]);
            // Execute the prepared query.
            if (! $insert_stmt->execute()) {
                header('Location: ../error.php?err=Registration failure: INSERT');
            }
        }};
