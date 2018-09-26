<?php
session_start();
?>
<table border='1'>
    <tr>
        <th>Genre Film</th>
        <th>Tujuan Wisata</th>
    </tr>
    <tr>
        <td>
            <?php
                foreach($_SESSION['hobby'] as $pilihan){
                    echo $pilihan ."<br>";
                }
            ?>
        </td>
        <td>
             <?php
             foreach($_SESSION['traveling'] as $pilihan){
                 echo $pilihan . "<br>";
             }   
             ?>
        </td>
    </tr>
</table>
<a href="form.php">Hapus ???</a>