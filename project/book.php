<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href= "style.css">
</head>
<body>
    
<section class="header">

    <a href="home.php" class="logo">JOIN TRAVEL</a>

    <nav class="navbar">
        <a href="home.php">Anasayfa</a>
        <a href="about.php">Hakkımızda</a>
        <a href="package.php">Paketlerimiz</a>
        <a href="book.php">Rezervasyon</a>
        
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>
    
</section>

<div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
    <h1>Şimdi Rezervasyon Yap</h1>
</div>

<!-- rezervasyon bölümü başlar -->
<section class="booking">

<h1 class="heading-title">Seyahatinizi Ayırtın!</h1>
<form action="book_from.php" method="post" class="book-form">
    <div class="flex">
        <div class="inputBox">
            <span>Ad:</span>
            <input type="text" placeholder="Adınızı giriniz" name="ad">
        </div>
        <div class="inputBox">
            <span>Email :</span>
            <input type="email" placeholder="E-postanızı giriniz" name="email">
        </div>
        <div class="inputBox">
            <span>Telefon :</span>
            <input type="number" placeholder="Numaranı giriniz" name="telefon">
        </div>
        <div class="inputBox">
            <span>Adres :</span>
            <input type="text" placeholder="Adresini giriniz" name="adres">
        </div>
        <div class="inputBox">
            <span>Nereye</span>
            <input type="text" placeholder="Ziyaret etmek istediğiniz yer" name="konum">
        </div>
        <div class="inputBox">
            <span>Kaç Kişi:</span>
            <input type="number" placeholder="Kaç misafir" name="Misafirler">
        </div>
        <div class="inputBox">
            <span>Gidiş :</span>
            <input type="date"  name="Gidis">
        </div>
        <div class="inputBox">
            <span>Dönüş :</span>
            <input type="date"  name="Donus">
        </div>
    </div>

<input type="submit" value="gönder" class="btn" name="send">

</form>
</section>
<!-- rezervasyon bölümü biter -->

<!-- altbilgi bölümü başlar -->
<section class="footer">
   <div class="box-container">

       <div class="box">
        <h3>quick links</h3> 
        <a href="home.php"><i class="fas fa-angle-right"></i>Anasayfa</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>Hakkında</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Paketler</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Rezervasyon</a>
       </div>

       <div class="box">
        <h3>Ekstra Bağlantılar</h3> 
        <a href="#"><i class="fas fa-angle-right"></i>Yardım</a>
        <a href="#"><i class="fas fa-angle-right"></i>Hakkımızda</a>
        <a href="#"><i class="fas fa-angle-right"></i>Gizlilik Politikası</a>
        <a href="#"><i class="fas fa-angle-right"></i>Kullanım Koşulları</a>
       </div>

       <div class="box">
        <h3>İletişim Bilgileri</h3> 
        <a href="#"><i class="fas fa-phone"></i> 0850 333 3 333 </a>
        <a href="#"><i class="fas fa-phone"></i> 0850 350 3 355 </a>
        <a href="#"><i class="fas fa-envelope"></i> jointravel@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i> Antalya,Türkiye </a>
       </div>

       <div class="box">
        <h3>Bizi Takip Edin</h3> 
        <a href="#"><i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"><i class="fab fa-twitter"></i> twitter </a>
        <a href="#"><i class="fab fa-instagram"></i> instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin </a>
       </div>
   </div>

</section>
<!-- altbilgi bölümü biter -->

<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="script.js"></script>

</body>
</html>