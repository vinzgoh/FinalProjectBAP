<?php 

include 'headerAdmin.php';

$sql = "SELECT songs.id, songs.title as songtitle, artists.name, albums.title as albumtitle, duration FROM songs JOIN artists ON songs.artist = artists.id JOIN albums ON songs.album = albums.id";

$hasil = $con->query($sql);


 ?>

<h1 align="center">Song List</h1>
		<div class="buttonItems">
			<button class="button green" onclick="window.location.href = 'addSong.php'">Add Song</button>
		</div>

<table border="1" id="myTable" align="center">
	<thead>
		<tr>
			<th>Id</th>
			<th>Song Title</th>
			<th>Artist</th>
			<th>Album</th>
			<th>Duration</th>
		</tr>
	</thead>
	<tbody>
		<?php 


		while ( $row = $hasil->fetch_assoc()) {
			?>
			<tr>
				<td style="padding: 20px" ><?php echo $row['id'];?></td>
				<td style="padding: 20px"><?php echo $row['songtitle'];?></td>
				<td style="padding: 20px"><?php echo $row['name'];?></td>
				<td style="padding: 20px"><?php echo $row['albumtitle'];?></td>
				<td style="padding: 20px"><?php echo $row['duration'];?></td>
				<!-- <td style="padding: 20px">
					<a href="edit-guest.php?id= <?php echo $row['id'];?>">Edit</a> 
					
					<a href="hapusguest.php?id= <?php echo $row['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data???')">Hapus</a></td>
				</tr> -->

				<?php

			}
			?>
			
		</tbody>
		
	</table>
