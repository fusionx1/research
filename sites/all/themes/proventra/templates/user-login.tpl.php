<div class="left-form">
	<h3>Login:</h3>
	<ul>


      <div>
        <li>
         <?php print render($name); ?>
        </li>
        <li>
           <?php print render($pass); ?>
        </li>
        <p><a href="/user/password" class="forgot-link">Request new password!</a></p>
		<div class="clear"></div>
		<?php print render($actions); ?>
		<h4 class="or">Or Login With</h4>
<?php print drupal_render_children($form); ?>
</div>

    </ul>
	</div>
