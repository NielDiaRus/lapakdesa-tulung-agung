<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Mengapa Memilih Koperasi Pemasaran?</h3>
         <p>1. Kebersamaan Membangun Keberlanjutan: Koperasi Pemasaran adalah perwujudan dari semangat kerjasama dan kebersamaan. Bersama, kita dapat mencapai lebih banyak, membangun keberlanjutan, dan memastikan keuntungan yang adil bagi setiap anggota.<br>
            2. Pasar yang Luas, Tanpa Batas: Dengan kehadiran online kami, anggota dapat menjual dan membeli produk dengan lebih mudah, menjangkau pasar yang lebih luas, dan memperluas dampak bisnis mereka.<br>
            3. Dukungan untuk Produk Lokal: Kami mempromosikan produk lokal dan mendukung pelaku usaha lokal. Setiap transaksi di Koperasi Pemasaran tidak hanya mendukung anggota, tetapi juga memperkaya keberagaman produk di pasaran. </p>
         <a href="contact.php" class="btn">Hubungi Kami</a>
      </div>

   </div>

</section>

<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>