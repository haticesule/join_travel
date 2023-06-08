<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkında</title>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
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
<div class="heading" style="background:url(images/home-slide-1.jpg) no-repeat">
    <h1>Hakkımızda</h1>
</div>

<!--  hakkında bölümü başlangıç -->
<section class="about">
    <div class="image">
    <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>Neden bizi seçmelisiniz?</h3>
        <p>Hoş Geldiniz! Biz, JOIN TRAVEL Tatil Şirketi olarak, unutulmaz tatil deneyimleri sunmak için buradayız. Amacımız, siz değerli misafirlerimize unutulmaz anılarla dolu bir tatil yaşatmaktır. Sizler için en iyi hizmeti sunmak için çalışıyor ve tatil planlarınızı gerçeğe dönüştürmek için elimizden geleni yapıyoruz.</p>
        <p>Misyonumuz, müşterilerimizin ihtiyaçlarına ve beklentilerine uygun tatil deneyimleri yaratmaktır. Seyahat etmek, yeni yerler keşfetmek, farklı kültürlerle tanışmak ve unutulmaz anılar biriktirmek bizim için bir tutku haline gelmiştir. Bu tutkuyu size yansıtmak ve hayallerinizi gerçekleştirmek için buradayız.</p>
        <p>Sizleri rüya tatilinize adım atmaya davet ediyoruz. JOIN TRAVEL Tatil Şirketi olarak, sizi hayallerinizin ötesine taşımak için buradayız. Bizimle tatilinizi planlarken, kaliteli hizmet, eşsiz deneyimler ve memnuniyet garantisiyle tanışacaksınız.</p>
        <div class="icons-container">
            <div class="icons">
                <i class=fas fa-map></i>
                <span>En İyi Yerler</span>
            </div>
            <div class="icons">
                <i class=fas fa-hand-holding-usd></i>
                <span>Uygun Fiyat</span>
            </div>
            <div class="icons">
                <i class=fas fa-headset></i>
                <span>7/24 Rehberlik Hizmeti</span>
            </div>

        </div>
    </div>
</section>
<!--  hakkında bölümü bitiş -->

<!-- incelemeler bölümü başlar -->
<section class="reviews">
<!--  Swiper.js kütüphanesinin kullanımıyla müşteri yorumlarını slayt gösterisi olarak gösterilir -->
    <div class="swiper reviews-slider">

        <div class="swiper-wrapper">
            
            <div class=" swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Her şey mükemmeldi, her şey için teşekkürler.</p>
            <h3>Melike Öz</h3>
            <span>Yorumlar</span>
            <img src="images/pic-1.png" alt="">
            </div>

            <div class="swiper-slider slide">

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Gerçekten hakkıyla işini yapan bir şirket. </p>
            <h3>Okan Fidan</h3>
            <span>Yorumlar</span>
            <img src="images/pic-2.png" alt="">
            </div>

            <div class="swiper-slider slide">

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>İyi ki gitmişim, verdiğim paraya değdi.</p>
            <h3>Meltem Kaya</h3>
            <span>Yorumlar</span>
            <img src="images/pic-3.png" alt="">
            </div>

            <div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Unutamayacağım bir macera yaşadım, paraşütle atlamak çok eğlenceliydi.</p>
            <h3>Özlem Maya</h3>
            <span>Yorumlar</span>
            <img src="images/pic-4.png" alt="">
            </div>

            <div class="swiper-slider slide">

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Arkadaşlarla beraber gittik. Tüm senenin yorgunluğunu attık üzerimizden.</p>
            <h3>Burak Ak</h3>
            <span>Yorumlar</span>
            <img src="images/pic-5.png" alt="">
            </div>

            <div class="swiper-slider slide">

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Yemekler ve temizlik konusunda tereddütlerim vardı ama gerçeketen hem yemekleri hemde temizliği içimi rahatlattı.</p>
            <h3>Pelin Ay</h3>
            <span>Yorumlar</span>
            <img src="images/pic-6.png" alt="">
            </div>

        </div>

    </div>

</section>
<!-- incelemeler bölümü bitti -->

<!-- altbilgi bölümü başlar -->
<section class="footer">
   <div class="box-container">

       <div class="box">
        <h3>Bağlantılar</h3> 
        <a href="home.php"><i class="fas fa-angle-right"></i>Anasayfa</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>Hakkımızda</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Paketler</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>Rezervasyon</a>
       </div>


       <div class="box">
        <h3>İletişim Bilgileri</h3> 
        <a href="#"><i class="fas fa-phone"></i>222 25 34 </a>
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