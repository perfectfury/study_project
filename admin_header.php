<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="" class="logo">Панель администратора</a>

      <nav class="navbar">
         <a href="admin_page.php">Главная</a>
         <a href="admin_products.php">Книги</a>
         <a href="admin_orders.php">Выдачи</a>
         <a href="admin_users.php">Пользователи</a>
         <a href="admin_contacts.php">Контакты</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Выйти</a>
         <div><a href="login.php">Войти</a> | <a href="register.php">Регистрация</a></div>
      </div>

   </div>

</header>