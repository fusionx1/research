<div class="container wrapper">
	<div class="row">
     <div class="profile-wrp clearfix">
    	<div class="col-sm-9 white_box">
        	<h2>Create Whitepaper</h2>
            
            <div class="profile-box whitepaper">
            <?php print render($title);?>
           <?php print render($body);?>
       </div> 
            
        </div> 
        
        <div class="col-sm-9 white_box">
        	<h2>Pdf Upload</h2>
            
            <div class="profile-box whitepaper">
          <div class="box_one">
          <h4>Add a new file </h4>
          <div class="all_file clearfix">
          <div class="browse_up ">
         <?php print render($form['field_pdf_upload']);?>
          <div class="browse_in">
          <span class="btn_click">Browse...</span>
          </div>
          </div>
          <div class="browse_scnd">
          <input type="submit" class="btn" value="Upload">
          </div>
          
          </div>
       
           <div class="clearfix"></div> 
          </div>
          
          <div class="box_one">
          <h4>Whitepaper image </h4>
          <div class="all_file clearfix">
          <div class="browse_up ">
          <input type="file" class="browse" value="">
          <div class="browse_in">
          <span class="btn_click">Browse...</span>
          </div>
          </div>
          <div class="browse_scnd">
          <input type="submit" class="btn" value="Upload">
          </div>
          
          </div>
          <div class="description"><span>Files must be less than  <strong>1.98 GB</strong>.</span><br><span>Allowed file types: <strong>png gif jpg jpeg</strong>.</span></div>
           <div class="clearfix"></div> 
          </div>
          
            <div class="upload">
            <input type="submit" class="btn" value="Save">
            </div>
            
           </div> 
            
        </div>       
        
        
     </div>   
    </div>
</div>

