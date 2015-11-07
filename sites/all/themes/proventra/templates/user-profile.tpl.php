<?php
//dsm($form);
$form['user_relationships_ui']['actions']['#attributes'] = array('class'=>array('btn-a'));
$form['user_relationships_ui']['relations']['#title'] = t('');
$form['user_relationships_ui']['actions']['#title'] = t('');
$form['user_relationships_ui']['#title'] = t('');
global $user ;
$arg = arg(1);
//drupal_set_message($arg);
$uid = user_load($arg);
$logg_uid = $user->uid ;
//dsm($uid);
$l_uid = $uid->uid ;
$file_path = '/sites/default/files/styles/thumbnail/public/pictures/';
$pic_name = $uid->picture->uri ;
$img_name = str_replace("public://pictures/","/",$pic_name);
//dsm(user_load($user->uid));
?>

	<div class="col-sm-8">
        	<div class="professional-detail">
			<?php if($uid->picture != ''){?>
            	<div class="user-profile"><img src="<?php print $file_path.$img_name;?>" alt="" /> </div><br>
		<?php } elseif($uid->picture == ''){ ?>
		<div class="user-profile"><img src="/sites/all/themes/proventra/images/defaultimg.jpeg" alt="" /> </div><br>
		<?php }?>
		
		

              <div class="user-detail">
		<?php if($uid->field_first_name['und'][0]['value'] || $uid->field_last_name['und'][0]['value']):?>
               	<h3><?php print $uid->field_first_name['und'][0]['value']." ".$uid->field_last_name['und'][0]['value']?></h3>
		<?php endif;?>	
                
                <div class="clearfix"> </div>
                <?php if($l_uid == $logg_uid):?>
             <a class ="btn"href="/user/<?php echo $logg_uid;?>/edit">Edit Profile</a>
             <?php endif;?>
                <h4><?php print t('General Information');?></h4>                
                <ul class="user-info">
			<?php if($uid->field_job_title['und'][0]['value']):?>
                	<li class="info-heading"><?php print t('Job Title');?></li>
                    <li><?php print $uid->field_job_title['und'][0]['value'];?> </li>
			<?php endif;?>
                    <?php if($uid->field_description['und'][0]['value']):?>
                    <li class="info-heading"><?php print t('About me'); ?></li>
                    <li><p class="rtlflt"><?php print $uid->field_description['und'][0]['value']?></p> </li>
		    <?php endif; ?>

                </ul>
                
                
                <h4><?php print t('Company Information'); ?></h4>                
                <ul class="user-info">
			<?php if($uid->field_company['und'][0]['value']): ?>
                	<li class="info-heading"><?php print t('Company Name'); ?></li>
                    <li><?php print $uid->field_company['und'][0]['value']?> </li>
			<?php endif; ?>
                    <?php if($uid->field_address_line_1['und'][0]['value']):?>
                    <li class="info-heading"><?php print t('Address Line 1'); ?></li>
                     <li><?php print $uid->field_address_line_1['und'][0]['value']; ?> </li>
			<?php endif; ?>

			<?php if($uid->field_address_line_2['und'][0]['value']): ?>
                    <li class="info-heading"><?php print t('Address Line 2');?></li>
                    <li><?php print $uid->field_address_line_2['und'][0]['value']; ?> </li>
			<?php endif; ?>
                    <?php if($uid->field_city['und'][0]['value']): ?>
                    <li class="info-heading"><?php print t('City'); ?></li>
                    <li><?php print $uid->field_city['und'][0]['value']?> </li>
		    <?php endif; ?>
		    <?php if($uid->field_country['und'][0]['value']): ?>
                    <li class="info-heading"><?php print t('Country'); ?></li>
                    <li><?php print $uid->field_country['und'][0]['value']?> </li>
		    <?php endif; ?>
                    <?php if($uid->field_zip['und'][0]['value']): ?>
                    <li class="info-heading"><?php print t('Zip'); ?></li>
                   <li><?php print $uid->field_zip['und'][0]['value']?> </li>
			<?php endif; ?>
                    <?php if($uid->field_telephone['und'][0]['value']): ?>
                    <li class="info-heading"><?php print t('Telephone'); ?></li>                  
			<li><?php print t('+').$uid->field_telephone['und'][0]['value']?> </li>
		    <?php endif; ?>
                    
		    <?php if($uid->field_web_address['und'][0]['value']):?>
                    <li class="info-heading"><?php print t('Web Address');?></li>
                    <li><?php print $uid->field_web_address['und'][0]['value']?> </li>
		     <?php endif; ?>
                    
		     <?php if($uid->field_sector['und'][0]['value']):?>
                    <li class="info-heading"><?php print t('Sector'); ?></li>
                    <li><?php print $uid->field_sector['und'][0]['value']?> </li>
			<?php endif; ?>
                </ul>
		<?php if($user->uid != $arg):?>
                <div class="text-right sent">
			<?php if($res = db_query("SELECT * FROM user_relationships WHERE (requester_id = '$logg_uid'  && requestee_id = '$l_uid')||(requester_id = '$l_uid'&& requestee_id = '$logg_uid') && approved ='1'")->fetchAll())
        	{?>
			<a href="/messages/new?uid=<?php print $uid->name;?>" class="btn-a"><?php print t('Send Message');?></a>
			<?php }?>
			<?php print render($form['user_relationships_ui']);?>
        	</div>
                <?php endif;?>
                </div>
            </div>            
        </div>    
