<ul class="category-list">
<?php foreach ($rows as $row_count => $row): ?>
    
<li><?php print render($row['tid']);?></li> 
    <?php// dsm($row);?>
    <?php endforeach;?>
</ul>

