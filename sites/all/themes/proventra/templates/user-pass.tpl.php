 <div class="container">
	<div class="sigin-wrapper">

        <div class="button-bar">
     <h5><?php  print render($intro_text); ?></h5>
     <?php  print render($name); ?>
     <?php print render($actions); ?>
            <?php print drupal_render_children($form); ?>

        </div>
        </div>
        </div>
