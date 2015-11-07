<?php

$file_path = '/sites/default/files/styles/thumbnail/public/pictures/';
global $user ;
$uid = user_load($user->uid);
$arg = arg(1);
$tid = $term->tid ;
$voc = taxonomy_vocabulary_load($vid);
if($voc->machine_name == 'area_of_expertises'){

$query =  db_query("SELECT users.name AS users_name, users.uid AS uid, users.created AS users_created
FROM 
{users} users
LEFT JOIN {field_data_field_area_of_expertises} field_data_field_area_of_expertises ON users.uid = field_data_field_area_of_expertises.entity_id AND (field_data_field_area_of_expertises.entity_type = 'user' AND field_data_field_area_of_expertises.deleted = '0')
WHERE (( (field_data_field_area_of_expertises.field_area_of_expertises_tid = '$tid' ) )AND(( (users.status <> '0') AND (users.name NOT LIKE 'admin') )))")->fetchAll();
foreach($query as $row_count => $rows){
  $row =  user_load($rows->uid);
//dsm($row);
//$pic_name = $row->picture->filename ;
$link = drupal_get_path_alias('user/'.$row->uid);
$pic_name = $row->picture->uri ;
$img_name = str_replace("public://pictures/","/",$pic_name);
$f_name = $row->field_first_name['und'][0]['value'];

$l_name  = $row->field_last_name['und'][0]['value'] ;
$j_title = $row->field_job_title['und'][0]['value'] ;
$c_name  = $row->field_company['und'][0]['value'] ;
$descript = $row->field_description['und'][0]['value'] ;
?>
<ul class="discusion-listing ques-list">
            	<li class="listing ques-list">
		  <?php if($row->picture != '') {?>
                	<div class="profile-img"><img alt="" src="<?php print $file_path.$img_name ;?> "></div>
                    <?php }
		    elseif($row->picture == ''){
		     ?>
		     <div class="profile-img"><img alt="" src="/sites/all/themes/proventra/images/defaultimg.jpeg"></div>
		     <?php }?>
                    <div class="news-detail">
                	<h3>
                            <?php
                                    if ($f_name == '') {
                                        print $row->name;
                                    } elseif ($j_title != "" && $c_name != "") {
                                        print $f_name . '&nbsp;' . $l_name . '&nbsp;,&nbsp;' . $j_title . '&nbsp;-&nbsp;' . $c_name;
                                    } elseif ($j_title != "" && $c_name == "") {
                                        print $f_name . '&nbsp;' . $l_name . '&nbsp;,&nbsp;' . $j_title;
                                    } elseif ($j_title == "" && $c_name != "") {
                                        print $f_name . '&nbsp;' . $l_name . '&nbsp;,&nbsp;' . $c_name;
                                    } else {
                                        print $f_name . '&nbsp;' . $l_name;
                                    }
                                    ?>
                        
                        </h3>
                    <p><?php print $descript ;?> </p>
                    <div class="row">
                       <div class="col-xs-6 btn-box"> <a href="<?php print '/'.$link;?>" class="read-btn">Read More</a></div>
                       <div class="col-xs-6 text-right btn-box"><a href="/ask-your-question?uid=<?php echo $row->uid;?>" class="ask-btn">Ask a question</a></div>
                    </div>
                    
                    
                    </div>
</ul>

<?php }
}?>

<?php
if($voc->machine_name =='discussion_sub_category_'){
$tid = $term->tid ;
$res = db_query("SELECT node.nid AS nid, node.created AS node_created FROM {node} node LEFT JOIN (SELECT td.*, tn.nid AS nid FROM  {taxonomy_term_data} td
LEFT JOIN {taxonomy_vocabulary} tv ON td.vid = tv.vid
LEFT JOIN {taxonomy_index} tn ON tn.tid = td.tid
WHERE  (tv.machine_name IN  ('discussion_sub_category_')) ) taxonomy_term_data_node ON node.nid = taxonomy_term_data_node.nid
WHERE (( (taxonomy_term_data_node.tid = '$tid' ) )AND(( (node.status = '1') AND (node.type IN  ('community_discussions')) )))")->fetchAll();
?>

<div class="container wrapper">
<div class="row">
     <div class="profile-wrp clearfix">
       	<div class="col-sm-8">

            <ul class="discusion-listing">
		<?php foreach($res as $row_id => $row_val):
		$row_nid = $row_val->nid ;
                    //dsm($row_nid);
                   $nid  = node_load($row_nid);
		   //dsm($nid);
		?>
            	<li class="listing">
                	<h3><a href="/node/<?php print$row_nid ;?>"><?php print $nid->title; ?></a></h3>
                      
                    <ul class="post-detail profile-detail listing-area">
                       <li>[<?php print ucfirst($nid->name); ?>]</li>
                       <li><?php print date('d/m/Y',$nid->created);?></li>
                       <li><i class="fa fa-comments"></i><?php print $nid->comment_count;?> comments</li>
                    </ul>
            
                    <?php print $nid->body['und'][0]['value'] ;?>
                     <div class="read-btn"><a href="/node/<?php print $row_nid;?>">Read more</a></div>
                </li>
                      <?php endforeach; ?>
 </ul>
            
        </div>        
        
     </div>   
    </div>
</div>


<?php }
?>
