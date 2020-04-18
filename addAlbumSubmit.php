<?php 
include("includes/config.php"); 


if (isset($_POST['addAlbum'])) {
	$title = $_POST['title'];
	$artist = $_POST['artist'];
	$gambar = $_FILES['gambar'];
		$namafile = $gambar['name'];

	if ($namafile == NULL) {
		$sql = 
		"
		
		INSERT INTO albums (id,title,artist,genre,artworkPath) 

		VALUES (NULL,'$title','$artist','1','assets/images/artwork/unknown_album.png')

		";

		if ($con->query($sql) === TRUE) {
			$message = "Album added";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:1; url=albumadmin.php" );
		} else {
			echo "Error : " . $con->error;
		}

	} else {
		$sql = 
		"

		INSERT INTO albums (id,title,artist,genre,artworkPath) 

		VALUES (NULL,'$title','$artist','1','assets/images/artwork/$namafile')

		";

		if ($con->query($sql) === TRUE) {
			$message = "Album added";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:1; url=albumadmin.php" );
		} else {
			echo "Error : " . $con->error;
		}
	}

	

} else {
	echo "gagal";
}
?>
