<div class="right-form">
  <h3>New Account:</h3>
<ul> 
<li>
        <?php echo render($name); ?>
        <div class="clear"> </div>
      </li>
      <li>
        <?php echo render($mail); ?>
        <div class="clear"> </div>
      </li>
      <li>
        <?php echo render($pass); ?>
        <div class="clear"> </div>
      </li>
      <li>
        <?php echo render($pass2); ?>
        <div class="clear"> </div>
      </li>      
      <?php echo render($actions);?>
</ul>

<?php print drupal_render_children($form); ?>

 </div>
