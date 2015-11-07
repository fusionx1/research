<?php
global $user;
$uid = user_load($user->uid);
$file_path = '/sites/default/files/styles/thumbnail/public/pictures/';
$pic_name = $uid->picture->uri ;
$img_name = str_replace("public://pictures/","/",$pic_name);
//dsm(user_load($user->uid));
$u_name = $uid->name;

 ?>
<div class="dropdown open">
                <span class="small-pic">
				<?php if($uid->picture != ''){?>
				<img src="<?php print $file_path.$img_name;?>">
		<?php }  elseif($uid->picture == ''){?>
		<img src="/sites/all/themes/proventra/images/defaultimg.jpeg"/>
		<?php }?>
		</span>
                <span><?php print t('Hi').',&nbsp;'.$u_name;?></span>
                <button class="dropdown-toggle drop-btn" type="button" id="showmenu" > <span class="caret"></span></button>
                
		<ul class="dropdown-menu" style="display:none;">
		  <li><a href="/user"><i class="fa fa-user"></i> <?php print t('My Account');?></a></li>
                  <li><a href="/user-setting"><i class="fa fa-gear"></i> <?php print t('User Setting');?></a></li>
                  <li><a href="/relationships"><i class="fa fa-key"></i> <?php print t('My Connections');?></a></li>
		  <li><a href="/messages"><i class="fa fa-envelope-o"></i> <?php print t('Messages');?></a></li>
                  <li><a href="/user/logout"><i class="fa fa-unlock"></i> <?php print t('Log Out');?></a></li>
                </ul>
            </div>

