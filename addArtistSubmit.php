<?php 


include("includes/config.php"); 

if (isset($_POST['addArtist'])) {
	$name = $_POST['name'];
	$gambar = $_FILES['gambar'];
	$namafile = $gambar['name'];

	if ($namafile == NULL) {
		$sql = 
		"
		
		INSERT INTO artists (id,name,artworkPath) 

		VALUES (NULL,'$name','assets/images/artwork/artist/unknown_person.gif')

		";

		if ($con->query($sql) === TRUE) {
			$message = "Artist added";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:1; url=artistadmin.php" );
		} else {
			echo "Error : " . $con->error;
		}

	} else {
		$sql = 
		"

		INSERT INTO artists (id,name,artworkPath) 

		VALUES (NULL,'$name','assets/images/artwork/artist/$namafile')

		";

		if ($con->query($sql) === TRUE) {
			$message = "Artist added";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:1; url=artistadmin.php" );
		} else {
			echo "Error : " . $con->error;
		}
	}

	

} else {
	echo "gagal";
}
?>
