<?php
include "helper.php";
$data=job_select();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table border='1' align="center" cellpadding=5 cellspacing=5>
<tr>
<td>id</td>
<td>job title</td>
<td>job description</td>
<td>salary</td>
<td>location</td>
</tr>
<?php
$id=1;
foreach($data as $item)
{
?>
<tr>
<td><?php echo $id;?></td>
<td><?php echo $item[1];?></td>
<td><?php echo $item[2];?></td>
<td><?php echo $item[3];?></td>
<td><?php echo $item[4];?></td>
</tr>
<?php
$id++;
}
?>
</table>
</body>
</html>

