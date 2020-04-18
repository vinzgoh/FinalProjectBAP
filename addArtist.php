<?php 

include 'headerAdmin.php';


?>

<h1 align="center">Add Artist</h1>
<form action="addArtistSubmit.php" method="POST" enctype="multipart/form-data">
    <div class="inputtype">
    <div class="container">
        <table align="center">
            <tr>
                <td><label>Artist Name</label></td>
                <td><input style="background-color: BLACK; border: 1px solid white;" type="text" name="name" required> <br/></td>
         
            </tr>
            
            <tr>
                <td><label>Picture</label></td>
                <td><input type="file" name="gambar"> <br/></td>
            </tr>


        </table>
</div>
</div>
        <div style="padding-top: 10px " class="buttonItems"><input class="button" align="center" type="submit" name="addArtist" value="Add Artist"></div>
