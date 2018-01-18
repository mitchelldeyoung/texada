<!-- Modal -->
<div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addItemModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="border:1px solid #7952b3;border-top-right-radius:0;border-top-left-radius:0;">
      <div class="modal-header" style="background:#7952b3;border-top-right-radius:0;border-top-left-radius:0;">
        <h5 class="modal-title" id="exampleModalLabel" style="color:#fff">Add Tracking Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i style="color:#fff" class="fa fa-times" aria-hidden="true"></i>        
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <div class="row">
                <form method="post">      
                    <div class="col-md-12">
                        <div class="row editTrackingData">
                            <div class="col-md-4 trackingData">
                                <label><b>tracking number</b></label>
                                <input type="text" name="addTrackingNumber" class="form-control" placeholder="Tracking Number" />
                            </div> 
                            <div class="col-md-4 trackingData">
                                <label><b>product</b></label>
                                <input type="text" name="addProductName" class="form-control" placeholder="Product" />
                            </div>
                            <div class="col-md-4 trackingData">
                                <label><b>last tracked</b></label>
                                <input id="addDateTracked" name="addTrackingDate" class="form-control" placeholder="mm/dd/yyyy" />
                            </div>
                            <div class="col-md-4 trackingData">
                                <label><b>longitude</b></label>
                                <input type="text" name="addLongitude" class="form-control" placeholder="Longitude" />
                            </div> 
                            <div class="col-md-4 trackingData">
                                <label><b>latitude</b></label>
                                <input type="text" name="addLatitude" class="form-control" placeholder="Latitude" />
                            </div>
                            <div class="col-md-4 trackingData">
                                <label><b>elevation</b></label>
                                <input type="text" name="addElevation" class="form-control" placeholder="Elevation" />
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-12 d-flex justify-content-end stateButtons">
                        <button type="submit" class="btn ghost-btn-main-inverse">Add Item</button>
                    </div>  
                    </form>
            </div>  
        </div>
      </div>
    </div>
  </div>
</div>
