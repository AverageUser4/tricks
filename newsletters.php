<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Newsletters | CSS-Tricks</title>
  <link rel="stylesheet" href="css/newsletters-main.css">
  <script type="module" src="js/newsletters-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/search-button.html'); ?>

  <?php echo file_get_contents('components/header.html'); ?>

  <div class="website-content">

    <?php echo file_get_contents('components/sponsors-promo.html'); ?>

    <main class="the-main">
  
      <h1 class="heading heading--jumbo heading--shadow heading--color-2 heading--uppercased heading--even-margin">Newsletters</h1>

      <p class="cool-paragraph cool-paragraph--not-too-long">
        An email newsletter with the most interesting news, ideas, fresh content,
        thoughts, and incredibly mature jokes from Team CSS-Tricks.
        This is your ticket to saying up to date with web dev.
      </p>

      <section class="content-and-ads">

        <div class="content-and-ads__content">

          <?php echo str_repeat(file_get_contents('components/template-newsletters.html'), 5); ?>

          <ul class="pagination horizontal-list content-and-ads__special-content-item">

            <li><a class="link link--color-4">1</a></li>
            <li><a class="link link--color-6">2</a></li>
            <li><a class="link link--color-6">3</a></li>
            <li>...<a class="link link--color-6">16</a></li>
            <li><a class="link link--color-4 pagination__older-link">Older</a></li>

          </ul>

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