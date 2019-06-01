<?php
		$idkom=substr($_POST["id"],7);
		$link = mysqli_connect("localhost", "root", "","cinemania"); 
		$sql="delete from komentar where idkomentar=$idkom";
		//echo $sql;
		mysqli_query($link,$sql);
		mysqli_close($link); 
		header('Location: http://localhost/projekat/Komentari.php');
	?>