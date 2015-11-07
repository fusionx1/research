<?php //dsm($content);?>
<?php //dsm($comment);
$image_filename = $comment->picture->filename ;
$image_path = '/sites/default/files/pictures/';

$curr_date = date('Y-m-d');

$comm_date = date("Y-m-d", $comment->created);
$date1 = date_create($curr_date);
$date2 = date_create($comm_date);

$diff = date_diff($date2, $date1);
$days = $diff->d;
$months = $diff->m;
$years = $diff->y;
$link = drupal_get_path_alias('user/'.$comment->uid);

//print  $years . " years, " . $months." months, ".$days." days ago" ;
    


//echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days ";

?>

          <ul class="all-list">
            	<li>
                	 <div class="profile">
   <?php if($content['field_tag']['#object']->picture != ''){ ?>   
<img src= '<?php print $image_path.$image_filename; ?>'width="80px" height="80x">
  <?php } elseif($content['field_tag']['#object']->picture == ''){?>
 <img src="/sites/all/themes/proventra/images/defaultimg.jpeg" width="80px" height="" alt="80px" />  
 <?php } ?>
                    <div class="all-info">
                    	<div class="profile-heading"><h5><a href="/<?php echo $link;?>"><?php print $comment->name ;?></a></h5><span class="date-box"><?php if($years >0 && $months< 1 && $days< 1)
{
	echo $years.'&nbspyears ago';
}
elseif($years >0 && $months>0 && $days< 1)
{
	echo  $years.'&nbsp;years'.$months.'&nbsp;months ago';
} 
elseif($years >0 && $months>0 && $days>0)
{
	echo  $years.'&nbsp;years'.$months.'&nbsp;months'.$days.'&nbsp;days ago';
}
elseif($years <1 && $months>0 && $days<1){
	echo $months.'&nbsp;months ago';
	}
	
elseif($years<1 && $months>0 && $days > 0){
	echo $months .'&nbsp;months'.$days.'&nbsp;days ago';
	}
elseif($years<1 && $months<1 && $days > 0){
	echo $days.'&nbsp;days ago';
	}
?></span></div>
                        <p><?php print $comment->comment_body['und'][0]['value'];?></p>
                        <?php if($comment->field_tag['und'] != NULL):?>
	     <?php print 'Tag : &nbsp;';?>           
         
       <?php foreach($comment->field_tag['und'] as $row_count => $rows):?>
	<?php $link = drupal_get_path_alias('user/'.$rows['entity']->uid);?>
       <a href="<?php echo '/'.$link;?>"><?php print $rows['entity']->name;?></a>
       <?php print '&nbsp; ,&nbsp;';?>
         <?php endforeach ;?>
           <?php endif;?>
                        <div class="like"><?php print $comment->like;?><?php print render($content['links']); ?></div>
			
                    </div>
                </li>
                
            </ul>
