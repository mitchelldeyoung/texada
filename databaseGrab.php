<?php
if(isset($_POST['searchSortSelect'])){
    
    $query = 'SELECT * from trackingInfo';
    
    $filteredProductName = filter_input(INPUT_POST, 'productNameSearch', FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);   
    if(!empty($filteredProductName)){
        $filteredProductName = array_keys($filteredProductName);
        $queryAddon = " WHERE";
        $x = 0;
    foreach($filteredProductName as $filteredProduct){
        if($x == 0){
            $queryAddon .= " (product_name LIKE ";
        }else{
            $queryAddon .= " OR product_name LIKE ";
        };
        $queryAddon .= "'" . $filteredProduct . "'";
        $x++;
    };
        $queryAddon .= ")";
    };
    

    if(!empty($_POST['dateFromSearch'])  && !empty($_POST['dateToSearch']) ){
        
        $dateFromSearch = filter_input(INPUT_POST, 'dateFromSearch', FILTER_SANITIZE_STRING);   
        $dateToSearch = filter_input(INPUT_POST, 'dateToSearch', FILTER_SANITIZE_STRING); 
        $dateFromSearch = date("Y-m-d", strtotime($dateFromSearch));
        $dateToSearch = date("Y-m-d", strtotime($dateToSearch));
        if(!isset($queryAddon)){
            $queryAddon = " WHERE";
        }else{
            $queryAddon .= " AND tracking_date BETWEEN '$dateFromSearch' AND '$dateToSearch'";
        }
        
    }
        
    $searchSortSelect = filter_input(INPUT_POST, 'searchSortSelect', FILTER_SANITIZE_STRING);   
    if(!isset($queryAddon)){
            $queryAddon = " ORDER BY";
        }else{
            $queryAddon .= " ORDER BY ";
        }
    

    switch ($searchSortSelect) {
    case 'Tracking Number: ASC':
        $queryAddon .= " tracking_number ASC ";
        break;
    case 'Tracking Number: DESC':
        $queryAddon .= " tracking_number DESC ";
        break;
    case 'Product Name: ASC':
        $queryAddon .= " product_name ASC ";
        break;
    case 'Product Name: DESC':
        $queryAddon .= " product_name DESC ";
        break;
    case 'Tracking Date: ASC':
        $queryAddon .= " tracking_date ASC ";
        break;
    case 'Tracking Date: DESC':
        $queryAddon .= " tracking_date DESC ";
        break;
   
};

    $query .= $queryAddon;
    
    
}else{
    $query = 'SELECT * from trackingInfo ORDER BY tracking_number ASC, tracking_date ASC';
};