<?php
session_start();
?>

<form action="proses.php" method="POST" enctype="multipart/form-data">
    Genre Film : <br>
 Horror    <input type="checkbox" name="hobby[]" value="horror"><br>
 Action    <input type="checkbox" name="hobby[]" value="action"><br>
 Anime     <input type="checkbox" name="hobby[]" value="anime"><br>
 Thriller  <input type="checkbox" name="hobby[]" value="thriller"><br>
 Animasi   <input type="checkbox" name="hobby[]" value="animasi"><br><br>
    Tujuan Traveling : <br>
 Bali           <input type="checkbox" name="traveling[]" value="Bali"><br>
 Raja Ampat     <input type="checkbox" name="traveling[]" value="Rajaampat"><br>
 Pulau Dermawan <input type="checkbox" name="traveling[]" value="pulauderawan"><br>
 Bangka Belitung<input type="checkbox" name="traveling[]" value="bangkabelitung"><br>
 Labuan Bajo    <input type="checkbox" name="traveling[]" value="labuanbajo"><br><br>
 <input type="submit" value="submit">
</form>