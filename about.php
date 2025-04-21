<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="Бидний тухай">
      </div>

      <div class="content">
         <h3>Яагаад бид гэж?</h3>
         <p>Бид хүссэн хичээлийг хэзээ ч хаана ч үзэж болдог давуу тал, олон хичээлийн сонголт, шилдэг багш нараар баялаг бөгөөд 21-р зууны хөгжлийн гарааг эндээс эхлүүлээрэй.</p>
         <a href="courses.html" class="inline-btn">Бидний хичээлүүд</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>боломжит хичээл</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>ухаалаг сурагчид</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>шилдэг багш нар</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>ажилд орох боломж</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Сурагчдын сэтгэгдэл</h1>

   <div class="box-container">

      <div class="box">
         <p>Энэ платформ нь миний сурах үйл явцыг маш их хялбарчилсан. Багш нарын заах арга барил гайхалтай!</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="Жон Дэо">
            <div>
               <h3>Төрөө</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Эндээс би өөрийн хүссэн хичээлүүдийг олж, маш их зүйлийг сурч чадсан. Баярлалаа!</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="Жейн Смит">
            <div>
               <h3>Ундраа</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Энэ платформ нь миний сурах үйл явцыг маш их хялбарчилсан. Багш нарын заах арга барил гайхалтай!</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="Жон Дэо">
            <div>
               <h3>Гэрлээ</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Энэ платформ нь миний сурах үйл явцыг маш их хялбарчилсан. Багш нарын заах арга барил гайхалтай!</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="Жон Дэо">
            <div>
               <h3>Болдоо</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Энэ платформ нь миний сурах үйл явцыг маш их хялбарчилсан. Багш нарын заах арга барил гайхалтай!</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="Жон Дэо">
            <div>
               <h3>Батаа</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Энэ платформ нь миний сурах үйл явцыг маш их хялбарчилсан. Багш нарын заах арга барил гайхалтай!</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="Жон Дэо">
            <div>
               <h3>Баяраа</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>