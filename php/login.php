<?php

error_reporting(0);

if(isset($_POST['login'])){
    $kulAd="b211210028";
    $sifre="555555";
    $kullaniciAdi=$_POST["kullaniciAdi"];
    $parola=$_POST["parola"];
    if($kullaniciAdi!="" && $parola!=""){
        if($kullaniciAdi==$kulAd && $parola==$sifre){
            echo "Hoşgeldiniz <br><hr>";
            echo "$kullaniciAdi";
        }
        else{
            header("Location:login.html");
        }
    }
    else{
        header("Location:login.html");
    }
}
else {
    header("Location:login.html");
}
?>