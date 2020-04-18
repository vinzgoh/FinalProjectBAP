<?php 

include("includes/config.php"); 



if (isset($_POST['addSong'])) {
	$title = $_POST['title'];
	$artist = $_POST['artist'];
	$album = $_POST['album'];
	$music = $_FILES['music'];
		$namafile = $music['name'];
	$duration = $_POST['duration'];
	

	// echo $title;
	// echo $artist;
	// echo $album;
	// echo $namafile;
	// echo $duration;

	$sql = "SELECT COUNT(*) AS jumlahdata FROM songs WHERE album = '$album'";

	$hasil = $con->query($sql);
	$row = $hasil->fetch_assoc();

	// echo $row['jumlahdata'];



	$albumOrder = $row['jumlahdata'] + 1;


	// echo $albumOrder;



	
		$sql = 
		"

		INSERT INTO songs (id,title,artist,album,genre,duration,path,albumOrder,plays) 

		VALUES (NULL,'$title','$artist','$album','1','$duration','assets/music/$namafile','$albumOrder','0')

		";

		if ($con->query($sql) === TRUE) {
			$message = "Song added";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:1; url=songadmin.php" );
		} else {
			echo "Error : " . $con->error;
		}

	



} else {
	echo "gagal";
}


?>
