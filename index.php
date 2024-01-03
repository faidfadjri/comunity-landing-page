  <html>

  <head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;900&display=swap" rel="stylesheet" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1" />
    <style>
      body {
        font-family: "Inter", sans-serif;
      }
    </style>

    <title>By.DEV</title>
    <link rel="shortcut icon" href="/assets/images/logo.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>

  <body>
    <div class="py-2 bg-gray-100 text-gray-900 min-h-screen">
      <?php include('./components/navbar.php'); ?>

      <main class="w-full">
        <?php include('./components/hero.php'); ?>

        <?php include('./components/companies.php'); ?>

        <?php include('./components/event.php'); ?>

        <?php include('./components/challenge.php'); ?>

        <?php include('./components/rules.php'); ?>

        <?php include('./components/contact.php'); ?>

        <?php include('./components/feedback.php'); ?>

        <?php include('./components/footer.php'); ?>
      </main>


    </div>



    <script src="./assets/js/script.js"></script>
  </body>

  </html>