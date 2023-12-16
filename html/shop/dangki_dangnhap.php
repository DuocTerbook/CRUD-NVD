<?php
$conn_nvd=new mysqli("localhost","root","","k2cnt3_nvd_shop");
if(!$conn_nvd){
    echo"<h2> lỗi: ". mysqli_error($conn_nvd) ."</h2>";
}else{
    
}
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["dangki"])){
    $userName = $_POST["tk"];
    $userPassword = $_POST["mk"];
    $checkUserName = "select * from account where userName = '$userName'";
    $accountDb = $conn_nvd->query($checkUserName);
    if($accountDb->num_rows>0){
        echo"tài khoản đã tồn tại";
    }else{
        $insert_account = "insert INTO account(userName,userPassword,roll) values ('$userName','$userPassword','Guest')";
        if($conn_nvd->query($insert_account)===true ){
            echo"đăng kí thành công";
        }else{
            echo"lỗi ".$conn_nvd->error;
        }
    }
}
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["dangnhap"])){
    $userName = $_POST["tk"];
    $userPassword = $_POST["mk"];
    $dangnhap_Account = "select * from account where userName = '$userName' and userPassword = '$userPassword'";
    $login = $conn_nvd->query($dangnhap_Account);
    if($login->num_rows>0){
        header("location:sanpham.php");
        exit;
    }else{
        echo"tài khoản không chính xác";
    }
}
?>