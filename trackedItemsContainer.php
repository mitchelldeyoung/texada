<div class="col-md-9 offset-3 trackedContainer" style="overflow-scroll;"><!-- Tracked Items Container !-->
    <div class="row">
        <div class="col-md-12" style="border-bottom:1px solid #7952b3;">
            <h1 style="font-variant:small-caps;">tracking reports <button class="btn ghost-btn-main" data-toggle="modal" data-target="#addItemModal">Add Tracker</button></h1>
        </div>
    </div> 
    
    <!-- loop to grab data. for each entry run trackedItem include !-->
<?php 
if($result = mysqli_query($mysqli,$query)){    
    if (mysqli_num_rows($result) == 0){
 echo '<br><div class="col-md-12"><h3>no results matching your search parameters. please add an entry with the "add tracker" button.</h3></div>';	};
		 while($obj = mysqli_fetch_object($result)){
             include 'trackedItem.php'; 
         };
}else{
    echo '<br><div class="col-md-12"><h3>no results matching your search parameters. please add an entry with the "add tracker" button.</h3></div>';
};
    
    
?>
</div><!-- End Tracked Item Container !-->