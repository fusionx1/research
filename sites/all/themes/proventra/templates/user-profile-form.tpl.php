
<div class="container">
	<div class="row">
     <div class="profile-wrp clearfix">
    	<div class="col-sm-6">
        	<h2><?php print t('Member profile'); ?></h2>
            
            <div class="profile-box">
            
<?php //print drupal_render_children($form); ?>

<?php print render($field_first_name); ?>
<?php print render($field_last_name); ?>
<?php print render($picture);?>
<?php print render($field_job_title);?>
<?php print render($field_company);?>
<?php print render($field_sector);?>
<?php //print render($field_address_line_2);?>
<?php //print render($field_zip);?>
<?php echo render($field_city);?>
<?php echo render($field_country);?>
<?php //echo render($field_telephone);?>
<?php //echo render($field_web_address);?>    
<?php print render($field_description); ?>        
<div  class="tdyy"><?php //print render($field_area_of_expertise);?> </div>    
<?php print render($actions); ?><?php print render($cancel); ?>
            
           </div> 
            
        </div>        
        
        <div class="col-sm-6">
        	<h2><?php print t('Change password');?></h2>
            
            <div class="profile-box">

 <?php //print render($mail); ?>
 <?php //print render($name); ?>
<?php print render($current_pass); ?>
<?php print render($pass1); ?>
<?php print render($pass2); ?>
<?php print drupal_render_children($form); ?>

            </div>
        </div>
     </div>   
    </div>
</div>
