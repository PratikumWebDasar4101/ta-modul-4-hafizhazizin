
<form action="" method="post">
    <h2>Selamat Datang di NEINMARKET</h2> 
    Jenis Barang : <br>
    Mie Instan  <input type="checkbox" name="belanja[]" value="Mie Instan"><br>
    Kecap       <input type="checkbox" name="belanja[]" value="Kecap"><br>
    Sabun Mandi <input type="checkbox" name="belanja[]" value="Sabun Mandi"><br>
    Shampo      <input type="checkbox" name="belanja[]" value="Shampo"><br>
    Sikat GIGI  <input type="checkbox" name="belanja[]" value="Sikat Gigi"><br><br>
    Jenis Pengiriman : <br>
    Ekspres<input type="radio" name="pengiriman" value="Ekspress">
    Reguler<input type="radio" name="pengiriman" value="Reguler"><br><br>

    alamat : <input type="text" name="alamat" required><br><br>

    Jika telah selesai bisa menekan tombol di samping : <input type="submit" value="submit">
</form>

<?php
session_start();

if(isset($_POST['alamat'])){
    $belanja =$_POST['belanja'];
    $pengiriman =$_POST['pengiriman'];
    $totalbelanja=0;
    

//================================
$_SESSION['belanja'] = $belanja;
for ($i=0; $i <count($belanja) ; $i++) { 
    if($belanja[$i] == "Mie Instan"){
        $harga = 5000;
    } elseif($belanja[$i] == "Kecap"){
        $harga = 10000;
    } elseif($belanja[$i] == "Sabun Mandi"){
        $harga = 7500;
    } elseif($belanja[$i] == "Shampo"){
        $harga = 13000;
    } elseif($belanja[$i] == "Sikat Gigi"){
        $harga = 40000;
    }
    $totalbelanja = $totalbelanja +$harga;
}


//=================================
$_SESSION['pengiriman'] = $pengiriman;

if($pengiriman == "Ekspress"){
    $harga1 = 5000;
}elseif($pengiriman == "Reguler"){
    $harga1 = 2000;
}
//================================
$_SESSION["harga1"] = $harga1;

$totalharga = $totalbelanja+ $harga1;
$_SESSION['total'] =$totalharga;

header("Location:halamanakhir.php");

}
?>