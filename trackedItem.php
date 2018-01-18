<div class="row trackedItem">
    <div class="col-md-12">
        <div class="row">                    
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 mapBackground" style="margin-bottom:10px;">
                        <div class="row">
                            <div class="col-md-12 " style="height:30vh;width:100%;background-image: url(images/map.jpg);background-position:center;background-size:cover;background-repeat:no-repeat">
                                <div class="row">
                                    <div class="col-md-12 shipmentHeader">
                                        <ul>
                                            <li><p><b style="font-variant:small-caps">tracking number:</b> <?php echo $obj->tracking_number;?></p></li>
                                            <li><p><b style="font-variant:small-caps">product:</b> <?php echo $obj->product_name;?></p></li>
                                            <li><p><b style="font-variant:small-caps">date:</b> <?php echo date("F jS, Y", strtotime($obj->tracking_date)) ;?></p></li>
                                        </ul>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="post">      
                    <div class="col-md-12">
                        <div class="row editTrackingData">
                            <div class="col-md-4 trackingData">
                                <input type="hidden" name="updateProductID" value="<?php echo $obj->id;?>"/>

                                <label><b>tracking number</b></label>
                                <input type="text" name="updateTrackingNumber" class="form-control" placeholder="Tracking Number" value="<?php echo $obj->tracking_number;?>"/>
                            </div> 
                            <div class="col-md-4 trackingData">
                                <label><b>product</b></label>
                                <input type="text" name="updateProductName" class="form-control" placeholder="Product" value="<?php echo $obj->product_name;?>" />
                            </div>
                            <div class="col-md-4 trackingData">
                                <label><b>last tracked</b></label>
                                <input type="text" class="form-control" placeholder="Date" value="<?php echo date("F jS, Y", strtotime($obj->tracking_date)) ;?>" disabled/>
                            </div>
                            <div class="col-md-4 trackingData">
                                <label><b>longitude</b></label>
                                <input type="text" name="updateLongitude" class="form-control" placeholder="Longitude" value="<?php echo $obj->longitude;?>" />
                            </div> 
                            <div class="col-md-4 trackingData">
                                <label><b>latitude</b></label>
                                <input type="text" name="updateLatitude" class="form-control" placeholder="Latitude" value="<?php echo $obj->latitude;?>" />
                            </div>
                            <div class="col-md-4 trackingData">
                                <label><b>elevation</b></label>
                                <input type="text" name="updateElevation" class="form-control" placeholder="Elevation" value="<?php echo $obj->elevation;?>" />
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-12 d-flex align-items-center justify-content-end stateButtons">
                        <a type="button" href="#" onclick="removeViewing(<?php echo $obj->id ;?>);" class="btn btn-danger">Delete</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>  
                    </form>
                    
                    <form id="<?php echo $obj->id ;?>" method="post">
			         <input type="hidden" name="deleteTrackingItem" id="deleteTrackingItem" value="<?php echo $obj->id; ?>" />
                  </form>
                    
                </div> 
            </div>
        </div>
    </div>
</div>