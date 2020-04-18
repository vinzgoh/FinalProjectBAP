<?php 

include 'headerAdmin.php';
include 'function.php';

?>

<h1 align="center">Add Artist</h1>
<form action="addAlbumSubmit.php" method="POST" enctype="multipart/form-data">
        <div class="container">
    <table align="center">
        <tr>
            <td><label>Album Title</label></td>
            <td><input style="background-color: BLACK; border: 1px solid white;"  type="text" name="title"> <br/></td>
        </tr>
        <tr>
            <td><label>Artist</label></td>
            <td>
                <select style="background-color: BLACK; border: 1px solid white;" name="artist" class="form-control" required>
                    <option   value="">Select Artist</option>
                    <?php echo fill_artist($con);?>
                </select>
            </td>
        </tr>   
        <tr>
            <td><label>Album Picture</label></td>
            <td><input type="file" name="gambar"> <br/></td>
        </tr>



    </table>
</div>

<div style="padding-top: 10px " class="buttonItems"><input class="button" align="center" type="submit" name="addAlbum" value="Add Album"></div>
