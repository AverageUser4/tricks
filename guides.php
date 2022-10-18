<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guides | CSS-Tricks</title>
  <link rel="stylesheet" href="css/guides-main.css">
  <script type="module" src="js/guides-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/search-button.html'); ?>

  <?php echo file_get_contents('components/header.html'); ?>

  <div class="website-content">

    <?php echo file_get_contents('components/sponsors-promo.html'); ?>

    <main class="the-main">
  
      <h1 class="heading heading--jumbo heading--shadow heading--color-2 heading--uppercased heading--even-margin">Guides</h1>

      <section class="content-and-ads">

        <div class="content-and-ads__content">

          <?php echo str_repeat(file_get_contents('components/template-courses.html'), 9); ?>

        </div>

        <div class="content-and-ads__ads">

          <?php echo file_get_contents('components/template-ads.html'); ?>

        </div>

      </section>

    </main>
    
  </div>

  <?php echo file_get_contents('components/footer.html'); ?>

</body>

</html>