<?php 
if($result = mysqli_query($mysqli,$searchQuery)){
    if (mysqli_num_rows($result) == 0){
					echo '<br><div class="col-md-12 text-center"><h3>no clients found, please add clients in the form above</h3></div>';
	};
		 while($obj = mysqli_fetch_object($result)){
             $checkboxProductName[] = $obj->product_name;
         };
};
    $checkboxProductName = array_unique($checkboxProductName);
    asort($checkboxProductName);
    
    foreach ($checkboxProductName as $item){
        if(isset($_POST['productNameSearch'][$item])){
        $checked = 'checked';
        }else{
        $checked = '';
        };
        
        echo'
            <div class="form-check"><!-- Individual Search Item !-->
                <label class="form-check-label" style="color:#fff">
                    <input type="checkbox" class="form-check-input" name="productNameSearch['.$item.']" '.$checked.'>
                        '.$item.'
                </label>    
            </div><!-- End Individual Search Item !-->
                    ';
    };
    
?>