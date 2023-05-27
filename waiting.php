<?php
  session_start();
  $number_order = $_SESSION['number_order'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Exchange</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" type="image/x-icon" href="./img/logo.png">
</head>

<body>
   <header class="header">
      <div class="header-container container">
         <div class="header-logo">
            <img src="./img/logo.png" alt="logo">
         </div>
         <nav class="header-nav">
            <ul class="header-list">
               <li class="header-item">
                  <a href="./index.html" class="header-link">About </a>
               </li>
               <li class="header-item">
                  <a href="./index.html" class="header-link">Exchange</a>
               </li>
               <li class="header-item">
                  <a href="./index.html" class="header-link">How exchange</a>
               </li>

               <li class="header-item">
                  <a href="./index.html" class="header-link">Transactions</a>
               </li>

               <li class="header-item">
                  <a href="./index.html" class="header-link">Support</a>
               </li>
            </ul>
         </nav>
         <div class="header-button">
            <a href="./index.html">Exchange</a>
         </div>

         <div class="header-burger">
            <span></span>
            <span></span>
            <span></span>
         </div>
      </div>
   </header>


   <section class="section wait">
      <div class="container wait-container">
         <h2>
            Exchange
         </h2>
         <div class="transaction__order">Order ID: <span><?php echo $number_order; ?></span></div>
         <div class="wait-item">
            <h3>WAITING FOR CONFIRMATIONS</h3>
            <h4>We are waiting to receive at least one confirmation!</h4>
         </div>
         <a href="./index.html" class="result-cancel">Back to main</a>
      </div>
   </section>

   <script>
      const burgerBtn = document.querySelector('.header-burger')
      const burgerMenu = document.querySelector('.header-nav')

      burgerBtn.addEventListener('click', function () {
         burgerBtn.classList.toggle('active')
         burgerMenu.classList.toggle('active')
      })
   </script>
</body>

</html>