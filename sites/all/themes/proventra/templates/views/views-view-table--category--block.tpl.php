<dl class="accordion1">
<?php foreach ($rows as $row_count => $row): ?>
<dt><a href=""><?php print strip_tags($row['name']);?> </a></dt>
<dd><?php $innerCntent = explode(",",$row['field_sub_category']); ?>
<ul>
<?php foreach($innerCntent as $sub_cartegory_value): ?>
<li><?php print $sub_cartegory_value; ?></li>
<?php endforeach ;?>
</ul>
</dd>
<?php endforeach; ?>
</dl>
<style>
.accordion1 {
   margin: 50px;   
   dt, dd {
      padding: 10px;
      border: 1px solid black;
      border-bottom: 0; 
      &:last-of-type {
        border-bottom: 1px solid black; 
      }
      a {
        display: block;
        color: black;
        font-weight: bold;
      }
   }
  dd {
     border-top: 0; 
     font-size: 12px;
     &:last-of-type {
       border-top: 1px solid white;
       position: relative;
       top: -1px;
     }
  }
}
</style>
<script>
(function($) {
  var allPanels = $('.accordion1 > dd').hide();
    
  jQuery('.accordion1 > dt > a').click(function() {
    allPanels.slideUp();
    $(this).parent().next().slideDown();
    return false;
  });

})(jQuery);
</script>
