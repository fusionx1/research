<?php
$res = db_query("SELECT field_data_field_country.field_country_iso2 , countries_country.name, COUNT(time_spent_page.uid) as time_spent_page_uid  FROM field_data_field_country INNER JOIN time_spent_page ON
field_data_field_country.entity_id = time_spent_page.uid INNER JOIN  countries_country ON field_data_field_country.field_country_iso2 = countries_country.iso2  GROUP BY field_data_field_country.field_country_iso2")->fetchAll() ; ?>

<table class="sticky-enabled tableheader-processed sticky-table" style="width:600px">
    <thead>
    <tr><th>Country</th>
    <th>User Count</th>
    </tr>
    </thead>
<?php foreach($res as $row => $rows):?>
    <?php //dsm($rows);?>
   <tr class="odd"><td><?php print $rows->name; ?></td>
    <td><?php print $rows->time_spent_page_uid; ?></td>
 </tr>
   
    
  
<?php endforeach ;?>
</table>

