<?php
function db_connect()
{
	try
	{
	$pdo=new PDO("mysql:host=localhost;dbname=recruitment","root","");
	return $pdo;
	}
	catch(Exception $e)
	{
	return false;
	}
}
function job_insert($title,$desc,$salary,$location)
{
	if($dbo=db_connect())
	{
	$stmt=$dbo->prepare("insert into job(job_title ,job_desc,salary ,job_location)values('$title','$desc',$salary,'$location')");
	$stmt->execute();
	if($stmt->rowCount()>0)
		{
		echo "value inserted";
		}
	else
		{
		return false;
		}
	}
}
function job_delete($id)
{
	if($dbo=db_connect())
	{
	$stmt=$dbo->prepare("delete  from job where id=$id") ;
	$stmt->execute();
	if($stmt->rowCount()>0)
		{
		echo "value deleted";
		}
	else
		{
		return false;
		}
	}
}
function job_update($id,$title,$desc,$salary,$location)
{
	if($dbo=db_connect())
	{
	$stmt=$dbo->prepare("update job set job_title ='$title',job_desc='$desc',salary=$salary, job_location='$location'") ;
	$stmt->execute();
	if($stmt->rowCount()>0)
		{
		echo "value updated";
		}
	else
		{
		return false;
		}
	}
}
function job_select()
{
	if($dbo=db_connect())
	{
	$stmt=$dbo->prepare("select * from job  ") ;
	$stmt->execute();
	return $stmt->fetchAll();
	
	}
}
//job_insert('system manager','new','30000','trivandrum');	
//job_delete('2');
//job_select();
//job_update('1','sql','programming','2000','calicut');
/*$data=job_select();
foreach($data as $akhil)
{
echo $akhil[0]." ".$akhil[1]." ".$akhil[2]." ".$akhil[3]." ".$akhil[4]."<br>";
}
*/

?>
