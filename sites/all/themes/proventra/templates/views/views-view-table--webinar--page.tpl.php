<?php
global $user ;
global $node;
?>
<div class="container wrapper">
<div class="row">
     <div class="profile-wrp clearfix">
       	<div class="col-sm-8">

            <ul class="discusion-listing">
		<?php foreach ($rows as $row_count => $row): //print '<pre>'; print_r($row); ?>
            	<li class="listing">
                	<h3><?php print $row['title']; ?></h3>
                      
                    <ul class="post-detail profile-detail listing-area"> 
                       <li><?php print render($row['field_pdf']);?></li>
                    </ul>
            
                    <?php print $row['body'] ;?>   
                   <div class="read-btn"><a href="<?php print render($row['path']);?>"><?php print t('Read more'); ?></a></div>                  
                </li>
                      <?php endforeach; ?>
 </ul>
            
        </div>        
        
     </div>   
    </div>
</div>


