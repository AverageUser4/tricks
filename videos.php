<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Videos | CSS-Tricks</title>
  <link rel="stylesheet" href="css/videos-main.css">
  <script type="module" src="js/videos-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/search-button.html'); ?>

  <?php echo file_get_contents('components/header.html'); ?>

  <div class="website-content">

    <?php echo file_get_contents('components/sponsors-promo.html'); ?>

    <main class="the-main">
  
      <h1 class="heading heading--jumbo heading--shadow heading--color-2 heading--uppercased heading--even-margin">Screencasts</h1>

      <section class="content-and-ads">

        <div class="content-and-ads__content">

          <?php echo str_repeat(file_get_contents('components/template-screencast-previews.html'), 7); ?>

          <ul class="pagination horizontal-list content-and-ads__special-content-item">

            <li><a class="link link--color-4">1</a></li>
            <li><a class="link link--color-6">2</a></li>
            <li><a class="link link--color-6">3</a></li>
            <li>...<a class="link link--color-6">11</a></li>
            <li><a class="link link--color-4 pagination__older-link">Older</a></li>

          </ul>

        </div>

        <div class="content-and-ads__ads">

          <?php echo file_get_contents('components/template-ads.html'); ?>

        </div>

      </section>

      <h2 class="heading heading--color-2">Free Video Courses</h2>

      <section class="full-width-grid">

        <?php echo str_repeat(file_get_contents('components/template-courses.html'), 2) ?>

      </section>

    </main>
    
  </div>

  <?php echo file_get_contents('components/footer.html'); ?>

</body>

</html>