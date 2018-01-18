<?php
    $searchQuery = 'SELECT * from trackingInfo';
?>
<div class="col-md-3" style="background:#7952b3;position:absolute;height:93vh;overflow:scroll"><!-- Start Search Sidebar !-->
    <div class="row">
        <div class="col-md-12" style="border-bottom:1px solid #fff;margin-top:-1px;">
            <h1 style="font-variant:small-caps;color:#fff">search</h1>
        </div>                
        
        <div class="col-md-12">
            <label class="form-check-label" style="color:#fff;font-variant:small-caps;">
                <h5>search for:</h5>
            </label>
            <form name="searchForm" method="POST">
            
                    <?php include 'searchCheckboxes.php';?>
          
                <label class="form-check-label" style="color:#fff;font-variant:small-caps;">
                    <h5>from:</h5>
                </label>
                <input id="dateFrom" name="dateFromSearch" placeholder="01/31/2018"
                                       value="<?php if(isset($_POST['dateFromSearch'])){echo $_POST['dateFromSearch'];};?>"/>                 
                <label class="form-check-label" style="color:#fff;font-variant:small-caps;">
                    <h5>to:</h5>
                </label>
                <input id="dateTo" name="dateToSearch" placeholder="01/31/2018"/
                value="<?php if(isset($_POST['dateToSearch'])){echo $_POST['dateToSearch'];};?>"/>                 
                <label class="form-check-label" style="color:#fff;font-variant:small-caps;">
                    <h5>order by:</h5>
                </label>
                <div class="form-group">
                    <select class="form-control" id="searchSortSelect" name="searchSortSelect">
                        <option>Tracking Number: ASC</option>
                        <option>Tracking Number: DESC</option>
                        <option>Product Name: ASC</option>
                        <option>Product Name: DESC</option>
                        <option>Tracking Date: ASC</option>
                        <option>Tracking Date: DESC</option>
                    </select>
                </div>

                   
                <br>
                <button type="submit" class="btn btn-block btn-lg ghost-btn-white">Search</button>   
            </form>
            <br>
                <a href="http://www.mitchelldeyoung.com/texada/"class="btn btn-block btn-lg ghost-btn-white">Clear Search</a>   

        </div>                    
    </div>
</div><!-- End Search Sidebar !-->

<script>
    $('#dateFrom').datepicker({
        uiLibrary: 'bootstrap4'
    });
    $('#dateTo').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>