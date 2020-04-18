	<?php 

include 'headerAdmin.php';

$sql = "SELECT albums.id, title, artists.name, albums.artworkPath FROM albums JOIN artists ON albums.artist = artists.id ";

$hasil = $con->query($sql);

?>

<h1 align="center">Album List</h1>
		<div class="buttonItems">
			<button class="button green" onclick="window.location.href = 'addAlbum.php'">Add Album</button>
		</div>

<table border="1" id="myTable" align="center">
	<thead>
		<tr>
			<th>Id</th>
			<th>Title</th>
			<th>Artist</th>
			<th>Album Picture</th>
		</tr>
	</thead>
	<tbody>
		<?php 


		while ( $row = $hasil->fetch_assoc()) {
			?>
			<tr>
				<td style="padding: 20px" ><?php echo $row['id'];?></td>
				<td style="padding: 20px"><?php echo $row['title'];?></td>
				<td style="padding: 20px"><?php echo $row['name'];?></td>
				<td style="padding: 20px"><img width="100px" height="100px" src="<?php echo $row['artworkPath'] ?>" ></td>
				<!-- <td style="padding: 20px">
					<a href="edit-guest.php?id= <?php echo $row['id'];?>">Edit</a> 
					
					<a href="hapusguest.php?id= <?php echo $row['id'];?>" onclick="return confirm('Apakah anda yakin akan menghapus data???')">Hapus</a></td> -->
				</tr>

				<?php

			}
			?>
			
		</tbody>
		
	</table>
