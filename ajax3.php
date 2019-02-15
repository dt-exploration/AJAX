<html>
<head>

<?php

$vote=$_GET['vote'];

$file = fopen("ajaxpoll.txt", "r");
$file_read = fread($file, filesize('ajaxpoll.txt'));
fclose($file);

$yesno_matrix=explode('|', $file_read);

$yes=$yesno_matrix[1];
$no=$yesno_matrix[0];

if($vote == 1) {
    $yes++;
} else {
    $no++;
}

$insert_vote=$no.'|'.$yes;
$file=fopen('ajaxpoll.txt', 'w');
fwrite($file,$insert_vote);
fclose($file);

?>

<h2>Result:</h2>
<table>
<tr>
<td>Yes:</td>
<td>
<img src="plava.jpg"
width='<?php echo round(100*($yes/($yes+$no)), 2);?>'
height='20'>
<?php echo round(100*($yes/($yes+$no)), 2); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="plava.jpg"
width='<?php echo round(100*($no/($yes+$no)), 2);?>'
height='20'>
<?php echo round(100*($no/($yes+$no)), 2);?>%
</td>
</tr>
</table>

</body>
</html>
