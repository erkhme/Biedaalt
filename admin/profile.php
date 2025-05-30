<?php

   include '../components/connect.php';

   if(isset($_COOKIE['tutor_id'])){
      $tutor_id = $_COOKIE['tutor_id'];
   }else{
      $tutor_id = '';
      header('location:login.php');
   }

   $select_playlists = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
   $select_playlists->execute([$tutor_id]);
   $total_playlists = $select_playlists->rowCount();

   $select_contents = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ?");
   $select_contents->execute([$tutor_id]);
   $total_contents = $select_contents->rowCount();

   $select_likes = $conn->prepare("SELECT * FROM `likes` WHERE tutor_id = ?");
   $select_likes->execute([$tutor_id]);
   $total_likes = $select_likes->rowCount();

   $select_comments = $conn->prepare("SELECT * FROM `comments` WHERE tutor_id = ?");
   $select_comments->execute([$tutor_id]);
   $total_comments = $select_comments->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>
   
<section class="tutor-profile" style="min-height: calc(100vh - 19rem);"> 

   <h1 class="heading">Профайлын дэлгэрэнгүй</h1>

   <div class="details">
      <div class="tutor">
         <img src="../uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
         <h3><?= $fetch_profile['name']; ?></h3>
         <span><?= $fetch_profile['profession']; ?></span>
         <a href="update.php" class="inline-btn">Профайл шинэчлэх</a>
      </div>
      <div class="flex">
         <div class="box">
            <span><?= $total_playlists; ?></span>
            <p>Нийт жагсаалтууд</p>
            <a href="playlists.php" class="btn">Жагсаалтуудыг харах</a>
         </div>
         <div class="box">
            <span><?= $total_contents; ?></span>
            <p>Нийт видеонууд</p>
            <a href="contents.php" class="btn">Контентуудыг харах</a>
         </div>
         <div class="box">
            <span><?= $total_likes; ?></span>
            <p>Нийт лайкууд</p>
            <a href="contents.php" class="btn">Контентуудыг харах</a>
         </div>
         <div class="box">
            <span><?= $total_comments; ?></span>
            <p>Нийт сэтгэгдлүүд</p>
            <a href="comments.php" class="btn">Сэтгэгдлүүдийг харах</a>
         </div>
      </div>
   </div>

</section>















<?php include '../components/footer.php'; ?>

<script src="../js/admin_script.js"></script>

</body>
</html>