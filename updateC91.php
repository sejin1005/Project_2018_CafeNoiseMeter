<?php 

	$connect = mysqli_connect('localhost', 'root', '', 'test') or die(mysql_error());
	mysqli_query ($connect, 'SET NAMES utf8'); 
	 
     $id = $_POST['id'];
	 $text = $_POST['text'];
	
switch($_GET['mode']){
    case 'insert':
	   
	   $query = "INSERT INTO updatetxt(id, text, time)
	    VALUES('$id', '$text', now())";
		mysqli_query($connect, $query);
		header('Location: '.$uri.'/dashboard/index.html');
        break;
		
		
}	
		mysql_close($connect);
	
?>