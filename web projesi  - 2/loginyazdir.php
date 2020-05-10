<?php
if(isset($_POST['kullanici']) && isset($_POST['sifre'])) {
   $kullanici = $_POST['kullanici'];
   $sifre = $_POST['sifre'];
 
   if(empty($kullanici) || empty($sifre)) {
      echo 'Lütfen boş bırakmayın';
   } else {
      if($kullanici == 'b161210005@sakarya.edu.tr' && $sifre == '1234567890') {
         session_start();
         $_SESSION['kullanici'] = 'b161210005@sakarya.edu.tr';
         $_SESSION['sifre'] = '1234567890';
         echo 'Giriş başarılı! Hoşgeldin Ahmet Alphan Reel';
		 header("Refresh: 3; url=index.html");
      } else {
         echo 'Yanlış bilgi! Login sayfasına yeniden yönlendiriliyosunuz!';
		 header("Refresh: 3; url=login.php");
      }
   }
} else {
   echo 'Lütfen formu kullanın';
}
?>