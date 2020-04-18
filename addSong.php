<?php 

include 'headerAdmin.php';
include 'function.php';

?>

<h1 align="center">Add Song</h1>
<form action="addSongSubmit.php" method="POST" enctype="multipart/form-data">
    <table align="center">
        <tr>
            <td><label>Song Title</label></td>
            <td><input style="background-color: BLACK; border: 1px solid white;" type="text" name="title"> <br/></td>
        </tr>
        <tr>
            <td><label>Artist</label></td>
            <td>
                <select style="background-color: BLACK; border: 1px solid white;" name="artist" class="form-control" required>
                    <option value="">Select Artist</option>
                    <?php echo fill_artist($con);?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Album</label></td>
            <td>
                <select style="background-color: BLACK; border: 1px solid white;" name="album" class="form-control" required>
                    <option value="">Select Album</option>
                    <?php echo fill_album($con);?>
                </select>
            </td>
        </tr>   
        

        <tr>
            <td><label>Music File</label></td>
            <td><input  type="file" name="music" required> <br/></td>
        </tr>
        <tr>
            <td><label>Duration</label></td>
            <td><input style="background-color: BLACK; border: 1px solid white;" type="text" name="duration" placeholder="format = mm:ss"> <br/></td>
        </tr>


    </table>

   
        <div style="padding-top: 10px " class="buttonItems"><input class="button" align="center" type="submit" name="addSong" value="Add Song"></div>


