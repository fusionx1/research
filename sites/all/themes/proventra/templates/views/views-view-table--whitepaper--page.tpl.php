<?php
global $user ;
global $node;
$uid = user_load($user->uid);
?>

            <ul class="discusion-listing">
		<?php foreach ($rows as $row_count => $row): ?>
            	<li class="listing">
                	<h3><?php print $row['title']; ?></h3>
                      
                    <ul class="post-detail profile-detail listing-area">
                       <li>[<?php print ucfirst($row['name']); ?>]</li>
                       <li><?php print date('d/m/Y',$node->created);?></li>
                       <li><i class="fa fa-comments"></i><?php print render($row['comment_count']);?> comments</li>
                    </ul>
            
                    <?php print $row['body'] ;?>
                     <div class="read-btn"><?php print render($row['title_1']);?></div>
                </li>
                      <?php endforeach; ?>
 </ul>



