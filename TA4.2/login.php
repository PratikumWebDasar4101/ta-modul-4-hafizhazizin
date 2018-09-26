<?php
session_start();
    $akun = array(
        array("hafizh","hafizh")
    );
?>

<form method="POST">
<H2>Silahkan anda masukan ID member anda</H2><br>
    ID :<input type="text" name="name">
    Password :<input type="password" name="password" name="password">
    <input type="submit" value ="login">
</form>
<?php
    if(isset($_POST['name'])){
        $username = $_POST['name'];
        $password = $_POST['password'];

        $_SESSION['name']= $username;

        $cek=0;
        for ($i=0; $i <count($akun) ; $i++) { 
            if($akun[$i][0]== $username && $akun[$i][1]== $password){
                header("Location:Form.php");
                $cek=1;
            }
        }
        if($cek==0){
            echo "Password atau id anda salah";
        }
    }
?>