<ul class="discusion-listing">
	       <?php foreach($rows as $row_count =>$row):?>
	       
            	<li class="listing">
                	<h3  style="float:left;"><?php print render($row['title']);?></h3>
<h3  style="float:right;"><?php print render($row['comment_count']);?> comments</h3>
                    <p><?php print render($row['body']);?></p>
                   <div class="read-btn"><?php print render($row['title_1']);?></div>
		   
                </li>
                
            
		<?php endforeach;?>
            </ul>
                 
       