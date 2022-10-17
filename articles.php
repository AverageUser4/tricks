<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Articles | CSS-Tricks</title>
  <link rel="stylesheet" href="css/articles-main.css">
  <script type="module" src="js/articles-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/search-button.html'); ?>

  <?php echo file_get_contents('components/header.html'); ?>

  <div class="website-content">

    <?php echo file_get_contents('components/sponsors-promo.html'); ?>

    <main class="the-main">
  
      <h1 class="heading heading--jumbo heading--shadow heading--color-2 heading--uppercased heading--even-margin">Articles</h1>

      <div class="general-info">

        <div class="juicy-select-container">
          
          <select class="juicy-select">
            <option>Top Tags</option>
            <option>SVG</option>
            <option>Sass</option>
            <option>JavaScript</option>
          </select>

        </div>

        <div class="general-info__right">

          7824 Articles
          <button class="text-alike-button general-info__button" data-dropdown-toggler="sorting">Sorting</button>

        </div>

        <div class="simple-dropdown" data-dropdown="sorting" data-active-class="simple-dropdown--active">

          <div>{</div>

          <div class="simple-dropdown__element">
            
            <span>'order' =></span>

            <div class="juicy-select-container juicy-select-container--small">

              <select class="juicy-select juicy-select--fancy">
                <option>DESC</option>
                <option>ASC</option>
              </select>

            </div>

          </div>
          
          <div class="simple-dropdown__element">
            
            <span>'orderby' =></span>

            <div class="juicy-select-container juicy-select-container--small">

              <select class="juicy-select juicy-select--fancy">
                <option>date</option>
                <option>modified</option>
                <option>rand</option>
                <option>comment_count</option>
              </select>

            </div>

          </div>

          <div>}</div>

        </div>

      </div>

      <section class="content-and-ads">

        <div class="content-and-ads__content">

          <?php echo str_repeat(file_get_contents('components/template-article-previews.html'), 4); ?>

          <ul class="pagination horizontal-list content-and-ads__special-content-item">

            <li><a class="link link--color-4">1</a></li>
            <li><a class="link link--color-6">2</a></li>
            <li><a class="link link--color-6">3</a></li>
            <li>...<a class="link link--color-6">712</a></li>
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