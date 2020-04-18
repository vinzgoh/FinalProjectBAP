<?php 

include 'headerAdmin.php';

$sql = "SELECT * FROM artists";

$hasil = $con->query($sql);

?>

<h1 align="center">Artist List</h1>
					
		<div class="buttonItems">
			<button class="button green" onclick="window.location.href = 'addArtist.php'">Add Artist</button>
		</div>
<table border="1" id="myTable" align="center">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Picture</th>
		</tr>
	</thead>
	<tbody>
		<?php 


		while ( $row = $hasil->fetch_assoc()) {
			?>
			<tr>
				<td style="padding: 20px" ><?php echo $row['id'];?></td>
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
