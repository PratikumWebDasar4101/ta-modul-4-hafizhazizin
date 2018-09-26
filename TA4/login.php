<?php
session_start();
$akun=array(
    array("hafizh","hafizh")
);
?>

<form method="POST">
    ID :<input type="text" name="name">
    Password :<input type="password" name="password" id="">
    <input type="submit" value="Login">
</form>
<?php
    if(Isset($_POST['name'])){
        $username = $_POST['name'];
        $password =$_POST['password'];

        $_SESSION['name'] = $username;

        $cek =0;
        for ($i=0; $i < count($akun) ; $i++) { 
            if($akun[$i][0]==$username && $akun[$i][1] == $password){
                header("Location:form.php");
                $cek = 1;
            }
        }
        if($cek == 0){
            echo "Password atau ID anda salah";
        }
    }

?>