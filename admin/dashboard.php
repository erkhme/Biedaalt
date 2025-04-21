<?php

include '../components/connect.php';

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}

$select_contents = $conn->prepare("SELECT * FROM `content` WHERE tutor_id = ?");
$select_contents->execute([$tutor_id]);
$total_contents = $select_contents->rowCount();

$select_playlists = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ?");
$select_playlists->execute([$tutor_id]);
$total_playlists = $select_playlists->rowCount();

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
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body>

<?php include '../components/admin_header.php'; ?>
   
<section class="dashboard">

   <h1 class="heading">Удирдлагын самбар</h1>

   <div class="box-container">

      <div class="box">
         <h3>Тавтай морилно уу!</h3>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="profile.php" class="btn">Профайл харах</a>
      </div>

      <div class="box">
         <h3><?= $total_contents; ?></h3>
         <p>Нийт контентууд</p>
         <a href="add_content.php" class="btn">Шинэ контент нэмэх</a>
      </div>

      <div class="box">
         <h3><?= $total_playlists; ?></h3>
         <p>Нийт жагсаалтууд</p>
         <a href="add_playlist.php" class="btn">Шинэ жагсаалт нэмэх</a>
      </div>

      <div class="box">
         <h3><?= $total_likes; ?></h3>
         <p>Нийт лайкууд</p>
         <a href="contents.php" class="btn">Контентуудыг харах</a>
      </div>

      <div class="box">
         <h3><?= $total_comments; ?></h3>
         <p>Нийт сэтгэгдлүүд</p>
         <a href="comments.php" class="btn">Сэтгэгдлүүдийг харах</a>
      </div>

      <div class="box">
         <h3>Сонголт</h3>
         <p>Нэвтрэх эсвэл бүртгүүлэх</p>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">Нэвтрэх</a>
            <a href="register.php" class="option-btn">Бүртгүүлэх</a>
         </div>
      </div>

   </div>

</section>















<?php include '../components/footer.php'; ?>

<script src="../js/admin_script.js"></script>

</body>
</html>