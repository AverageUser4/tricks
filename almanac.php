<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Almanac | CSS-Tricks</title>
  <link rel="stylesheet" href="css/almanac-main.css">
  <script type="module" src="js/almanac-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/search-button.html'); ?>

  <?php echo file_get_contents('components/header.html'); ?>

  <div class="website-content">

    <?php echo file_get_contents('components/sponsors-promo.html'); ?>

    <main class="the-main">
  
      <h1 class="heading heading--jumbo heading--shadow heading--color-2 heading--uppercased heading--even-margin">Articles</h1>

      <div class="general-info">

        <ul class="horizontal-list">
          <?php 
            for($i = 65; $i <= 90; $i++) {
              $j = chr($i);
              echo "<li><a class='link link--color-7 link--special-font'>$j</a></li>";
            }
          ?>
        </ul>

      </div>

      <section class="content-and-ads">

        <div class="content-and-ads__slim-content">

          <section class="alphabetical-container">

            <div class="fancy-head">

              <h2 class="heading">Selectors</h2>

              <p>CSS selectors are patterns used to select elements in the DOM.</p>

            </div>

            <?php 
            
              echo str_repeat("
                <div class='alphabetical-container-part'>

                  <h3 class='heading heading--color-3 heading--no-margin heading--serif'>A</h3>

                  <ul class='vertical-list'>
                    <li><a class='link link--color-7'>::after / ::before</a></li>
                    <li><a class='link link--color-7'>:active</a></li>
                    <li><a class='link link--color-7'>:any-link</a></li>
                    <li><a class='link link--color-7'>:autofill</a></li>
                    <li><a class='link link--color-7'>Adjacent sibling</a></li>
                    <li><a class='link link--color-7'>[attribute]</a></li>
                  </ul>

                </div>
              ", 12);

            ?>

          </section>

          <section class="alphabetical-container">

            <div class="fancy-head fancy-head--color-2">

              <h2 class="heading">Properties</h2>

              <p>CSS properties style elements through their values.</p>

            </div>

            <?php 
            
              echo str_repeat("
                <div class='alphabetical-container-part'>

                  <h3 class='heading heading--color-4 heading--no-margin heading--serif'>A</h3>

                  <ul class='vertical-list'>
                    <li><a class='link link--color-7'>accent-color</a></li>
                    <li><a class='link link--color-7'>align-content</a></li>
                    <li><a class='link link--color-7'>align-items</a></li>
                    <li><a class='link link--color-7'>align-self</a></li>
                    <li><a class='link link--color-7'>all</a></li>
                    <li><a class='link link--color-7'>animation</a></li>
                    <li><a class='link link--color-7'>appearance</a></li>
                    <li><a class='link link--color-7'>aspect-ratio</a></li>
                  </ul>

                </div>
              ", 12); 
            
            ?>

          </section>

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