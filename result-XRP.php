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

   <link rel="stylesheet" href="./css/style.css">
   <link rel="icon" type="image/x-icon" href="./img/logo.png">
   
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   
</head>

<body>
   <header class="header">
      <div class="header-container container">
         <div class="header-logo">
            <a href=./index.html><img src="./img/logo.png" alt="logo"></a>
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
   <section class="section result">
      <div class="result-container container">
         <h2>
            Exchange
         </h2>
         <div class="transaction__order">Order ID: <span><?php echo $number_order; ?></span></div>
         <div class="result-block">
            <div class="result-item">
               <h3>Pay directly to the wallet</h3>
               <h4>
                  within 15-30 minutes your order will be completed</h4>
               <div class="result-text">
                  <p id="example1">rEzxR8bNEEy4hyhhXvPrsBYQzyYuzoAHFy</p>
                  <p id="example2">rEzxR8bNEEy4hyhhXvPrsB...</p>
                  <button id="button" onclick="triggerExample1()">Click.Me</button>
               </div>
               <a href="./waiting.php" class="result-submit">Submit</a>
            </div>
            <div class="result-item result-img">
               <h2>Pay by scanning the QR code!
               </h2>
               <img src="./img/XRP-result.jpg" alt="1">

            </div>
         </div>
         <a href="./index.html" class="result-cancel">Cancel order</a>
      </div>
   </section>

   <script>
   
    
      /* // Генерация случайного числа размером 10 цифр
      const randomNumber = Math.floor(1000000000 + Math.random() * 9000000000);
      console.log(randomNumber);
      
      var elem = document.getElementById('transaction__order');
      elem.innerHTML = "Order ID: " + randomNumber;
      
      */
      
      
      
      
      
      function triggerExample1() {
         // get the container
         const element = document.querySelector('#example1');
         // Create a fake `textarea` and set the contents to the text
         // you want to copy
         const storage = document.createElement('textarea');
         storage.value = element.innerHTML;
         element.appendChild(storage);

         // Copy the text in the fake `textarea` and remove the `textarea`
         storage.select();
         storage.setSelectionRange(0, 99999);
         document.execCommand('copy');
         element.removeChild(storage);
      }
      
      /*fetch('index-XRP.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
          },
          body: 'randomNumber=' + randomNumber,
      })
        .then(response => response.text())
        .then(data => {
          // Действия после успешной отправки запроса
          console.log(data);
        });*/
      

      const burgerBtn = document.querySelector('.header-burger')
      const burgerMenu = document.querySelector('.header-nav')

      burgerBtn.addEventListener('click', function () {
         burgerBtn.classList.toggle('active')
         burgerMenu.classList.toggle('active')
      })
   </script>
   <script src="js/jquery-3.6.1.min.js"></script>
   <script src="js/jquery.js"></script>
</body>

</html>