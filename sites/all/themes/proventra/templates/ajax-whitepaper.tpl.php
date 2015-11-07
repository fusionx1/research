<?php //dsm($comment);
$image_filename = $comment->picture->filename ;
$image_path = '/sites/default/files/pictures/';

$curr_date = date('Y-m-d');

$comm_date = date("Y-m-d", $comment->created);
$date1 = date_create($curr_date);
$date2 = date_create($comm_date);

$diff = date_diff($date2, $date1);
$days = $diff->d;
$months = $diff->m;
$years = $diff->y;

$cid  = $comment->cid ;
$like = db_query("SELECT flag_counts_comment.count AS flag_counts_comment_count, comment.created AS comment_created
FROM 
{comment} comment
LEFT JOIN {flag_counts} flag_counts_comment ON comment.cid = flag_counts_comment.entity_id AND flag_counts_comment.fid = '3'
WHERE (( (comment.cid = '$cid' ) )AND(( (comment.status <> '0') )))")->fetchAll();
$likedislike = $like[0]->flag_counts_comment_count ;
//print  $years . " years, " . $months." months, ".$days." days ago" ;
//echo "difference " . $diff->y . " years, " . $diff->m." months, ".$diff->d." days ";
echo 'kapil-purohit';
?>
