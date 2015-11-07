
<div class="container">
	<div class="row">
     <div class="profile-wrp clearfix">
    	<div class="col-sm-6">
        	<h2><?php print t('Newsletter subscription'); ?></h2>
            
            <div class="profile-box">
                        
 <?php print render($email); ?>
 <?php print render($firstname); ?>
 <?php print render($lastname); ?>
 <?php print render($gender); ?>
 <?php //print render($format); ?>
 <?php print render($actions); ?>
 <?php print drupal_render_children($form); ?>
           </div> 
            
        </div>       
        
        

            
     </div>   
    </div>
</div>
