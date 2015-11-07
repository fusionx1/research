<?php

/**
 * @file
 * Template to display a view as a table.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $header: An array of header labels keyed by field id.
 * - $caption: The caption for this table. May be empty.
 * - $header_classes: An array of header classes keyed by field id.
 * - $fields: An array of CSS IDs to use for each field id.
 * - $classes: A class or classes to apply to the table, based on settings.
 * - $row_classes: An array of classes to apply to each row, indexed by row
 *   number. This matches the index in $rows.
 * - $rows: An array of row items. Each row is an array of content.
 *   $rows are keyed by row number, fields within rows are keyed by field ID.
 * - $field_classes: An array of classes to apply to each field, indexed by
 *   field id, then row number. This matches the index in $rows.
 * @ingroup views_templates
 */
?>

<?php foreach($rows as $row_count=>$row):?>

<?php //dsm($row);?>
<!--<h2>Latest Whitepapers</h2>-->
            
            <ul>
            	<li class="news">
<?php //if($row['field_discussion_image']): ?>
                	<div class="news-img">

			<?php print $row['picture'];?>
			</div>
<?php //endif; ?>
                    <div class="news-detail">
                    	<h4><?php print $row['title'];?></h4>
                        <ul class="post-detail">
                        	<li>Posted on <span class="bold"><?php print $row['created'];?></span> </li>
                            <li>Posted by <span class="blue-text bold"> <?php print $row['name'];?></span></li>
                            <li>Comments: <?php print $row['comment_count'];?></li>
                        </ul>
                        
                        <p><?php print $row['body'];?></p>
                        
                       
                         <a class="news-btn news-hide-button" href="<?php print $row['path']; ?>" >  <?php print t('Read More'); ?></a>
                    
                    </div>
                </li>
	    </ul> 
<?php endforeach ;?>
