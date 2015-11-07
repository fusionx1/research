<?php 
//dsm($form);
$form['submitted']['first_name']['#title']= '';
$form['submitted']['first_name']['#attributes'] = array('class'=>array('inputarea'),
'placeholder'=>'First Name');

$form['submitted']['last_name']['#title']= '';
$form['submitted']['last_name']['#attributes'] = array('class'=>array('inputarea'),
'placeholder'=>'Last Name');
$form['submitted']['email']['#title']= '';
$form['submitted']['email']['#attributes'] = array('class'=>array('inputarea'),
'placeholder'=>'Email');

$form['submitted']['your_question']['#title']= '';
$form['submitted']['your_question']['#attributes'] = array('class'=>array('inputarea'),
'placeholder'=>'Question');

$form['actions']['submit']['#value'] = 'Send Question';
$form['actions']['submit']['#attributes'] = array('class'=>array('news-btn'));
?>

<div class="profile-wrp clearfix">
       	<div class="col-sm-8">
        <h2><?php print t('Ask Your Question'); ?></h2>
        	<div class="question-form">
            	<?php print render($form['submitted']['first_name']);?>
                <?php print render($form['submitted']['last_name']);?>
                <?php print render($form['submitted']['email']);?>
                <?php print render($form['submitted']['your_question']);?>
               <?php print render($form['actions']['submit']);?>              
                
            </div>            
        </div>        

     </div>
<?php print drupal_render_children($form); ?>
