<?php global $user ; ?>
<div class="carousel-inner" role="listbox">
<?php $i=0; foreach($rows as $row_count => $row):  ?>
<?php //dsm($row);?>
  <div class="item <?php if($i==1){print 'active';}  ?>">
 <?php //print_r($row[0]);?>
     <?php print $row['field_slider_image']; ?>
      <div class="img-overlay"></div>
      <div class="carousel-caption">
      	<h1><?php print strip_tags($row['title']);?></h1>
        <div class="slider-sub-heading"><?php print $row['body'];?> </div>
        <div class="btn-slider"><a href="<?php print $row['field_add_link_1'];?>" class="slider-btn"><?php print $row['field_add_link']?></a></div>
      <?php if($user->uid == '1'):?>
      <?php print $row['edit_node'];?>
      <?php endif ;?>
      </div>
       </div>
      <?php //die ; ?>
  <?php $i++; endforeach; ?>
  </div>
    </div>
