
<?php include "header.php" ?>
    <style>
      .swiper-container {
        width: 100%;
      } 

      .swiper-container img {
        display: block;
        width: 100%;
      }
    </style>


    <div class="swiper-container">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide"><img src="./images/swiper-1.jpg" /></div>
        <div class="swiper-slide"><img src="./images/swiper-2.jpg" /></div>
        <div class="swiper-slide"><img src="./images/swiper-3.jpg" /></div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>
    </div>




    <script src="js/swiper.js"></script>

    <script>
      $(".swiper-container").swiper({
        loop: true,
        autoplay: 3000
      });
    </script>
<?php include "footer.php" ?>
