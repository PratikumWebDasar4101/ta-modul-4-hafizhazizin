<?php
session_start();
?>
<table border="1" width="center">
    <tr>
        <th>Tanggal Pembelian</th>
        <th>data pembeli</th>
        <th>barang yang dibeli</th>
        <th>Jenis pengiriman + harga </th>
        <th>Total Pembayaran</th>
    </tr>
    <tr>
        <td>
            <?php
                $tanggal = date("d-M-Y");
                 echo $tanggal;
            ?>
        </td>
        <td>
            <?php
                echo $_SESSION['name'];
            ?>
        </td>
        <td>
            <?php
            foreach($_SESSION['belanja'] as $pilihan){
             echo $pilihan. "<br>";
            }
            ?>
        </td>
        <td>
            <?php
                    echo $_SESSION['pengiriman']; 
                    echo $_SESSION['harga1'];
            ?>
        </td>
        <td>
            <?php
                echo $_SESSION['total'];
            ?>
        </td>
    </tr>

</table>