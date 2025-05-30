<?php

include '../components/connect.php';

if(isset($_POST['submit'])){

   $id = unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $profession = $_POST['profession'];
   $profession = filter_var($profession, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $ext = pathinfo($image, PATHINFO_EXTENSION);
   $rename = unique_id().'.'.$ext;
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../uploaded_files/'.$rename;

   $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE email = ?");
   $select_tutor->execute([$email]);
   
   if($select_tutor->rowCount() > 0){
      $message[] = 'email already taken!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm passowrd not matched!';
      }else{
         $insert_tutor = $conn->prepare("INSERT INTO `tutors`(id, name, profession, email, password, image) VALUES(?,?,?,?,?,?)");
         $insert_tutor->execute([$id, $name, $profession, $email, $cpass, $rename]);
         move_uploaded_file($image_tmp_name, $image_folder);
         $message[] = 'new tutor registered! please login now';
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<body style="padding-left: 0;">

<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message form">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<!-- register section starts  -->

<section class="form-container">

   <form class="register" action="" method="post" enctype="multipart/form-data">
      <h3>Шинээр бүртгүүлэх</h3>
      <div class="flex">
         <div class="col">
            <p>Таны нэр <span>*</span></p>
            <input type="text" name="name" placeholder="Нэрээ оруулна уу" maxlength="50" required class="box">
            <p>Таны мэргэжил <span>*</span></p>
            <select name="profession" class="box" required>
               <option value="" disabled selected>-- Мэргэжлээ сонгоно уу --</option>
               <option value="developer">Хөгжүүлэгч</option>
               <option value="designer">Дизайнер</option>
               <option value="musician">Хөгжимчин</option>
               <option value="biologist">Биологич</option>
               <option value="teacher">Багш</option>
               <option value="engineer">Инженер</option>
               <option value="lawyer">Хуульч</option>
               <option value="accountant">Нягтлан бодогч</option>
               <option value="doctor">Эмч</option>
               <option value="journalist">Сэтгүүлч</option>
               <option value="photographer">Гэрэл зурагчин</option>
            </select>
            <p>Таны имэйл <span>*</span></p>
            <input type="email" name="email" placeholder="Имэйл хаягаа оруулна уу" maxlength="50" required class="box">
         </div>
         <div class="col">
            <p>Таны нууц үг <span>*</span></p>
            <input type="password" name="pass" placeholder="Нууц үгээ оруулна уу" maxlength="50" required class="box">
            <p>Нууц үгээ баталгаажуулах <span>*</span></p>
            <input type="password" name="cpass" placeholder="Нууц үгээ дахин оруулна уу" maxlength="50" required class="box">
            <p>Зураг сонгох <span>*</span></p>
            <input type="file" name="image" accept="image/*" required class="box">
         </div>
      </div>
      <p class="link">Бүртгэлтэй юу? <a href="login.php">Нэвтрэх</a></p>
      <input type="submit" name="submit" value="Бүртгүүлэх" class="btn">
   </form>

</section>

<!-- registe section ends -->












<script>

let darkMode = localStorage.getItem('dark-mode');
let body = document.body;

const enabelDarkMode = () =>{
   body.classList.add('dark');
   localStorage.setItem('dark-mode', 'enabled');
}

const disableDarkMode = () =>{
   body.classList.remove('dark');
   localStorage.setItem('dark-mode', 'disabled');
}

if(darkMode === 'enabled'){
   enabelDarkMode();
}else{
   disableDarkMode();
}

</script>
   
</body>
</html>