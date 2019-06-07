<?php
include("config.php");

$comm = mysqli_query($conn,"select * from comments");
while($row=mysqli_fetch_array($comm)){
	$id=$row['id'];
	$name=$row['name'];
	$comment=$row['comment'];
    $time=$row['post_time'];
?>
<div class="chats"><strong><?=$name?>:</strong> <?=$comment?> <p style="float:right"><?=date("j/m/Y g:i:sa", strtotime($time))?></p><p><a href="" onClick="return delete(<?php echo($id) ?>);">delete</a></p></div>
<?php
}
?>