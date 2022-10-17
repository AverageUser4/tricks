<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | CSS-Tricks</title>
  <link rel="stylesheet" href="css/home-main.css">
  <script type="module" src="js/home-main.js"></script>

</head>

<body>

  <?php echo file_get_contents('components/search-button.html'); ?>

  <?php echo file_get_contents('components/header.html'); ?>

  <div class="website-content">

    <?php echo file_get_contents('components/sponsors-promo.html'); ?>

    <main class="the-main">
  
      <article class="article-preview article-preview--big">

        <a class="article-preview__image-link">
          <img class="article-preview__image" src="images/misc/big-article.jpg" alt="Image representing the article.">
        </a>

        <div class="article-preview-text-part">

          <ul class="horizontal-list horizontal-list--stylish">
            <li><a class="link link--color-2">Container-Queries</a></li>
          </ul>

          <h2 class="heading heading--huge">
            <a class="link link--color-3">Early Days of Container Style Queries</a>
          </h2>

          <p class="article-preview__text">
            We’re still in suuuuuper early days with container queries. Too early
            for broad browser support, but Chromium already supports it,
            Safari started supporting it in version 16, and Firefox is
            presumably not far behind. Most early days conversations revolving
            around container queries usually compare the syntax to media queries.
          </p>

          <div class="author">

            <a>
              <img class="author__picture" src="images/icons/person.png" alt="Author's profile picture.">
            </a>

            <span>
              <a class="link link--color-3 author__name">Geoff Graham</a> on Oct 12, 2022
            </span>

          </div>

        </div>

      </article>

      <section class="fancy-cards-container">

        <div class="fancy-category-card">

          <div>

            <h2 class="heading heading--color-2 fancy-category-card__heading">Popular this month</h2>
            <span class="fancy-category-card__span">Powered by</span>
            <a class="link">DigitalOcean</a>

          </div>

        </div>

        <ul class="fancy-cards-list">

          <?php echo str_repeat(file_get_contents('components/template-fancy-cards-list-items.html'), 4); ?>

        </ul>

      </section>

      <section class="content-and-ads">

        <div class="content-and-ads__content">

          <?php echo str_repeat(file_get_contents('components/template-article-previews.html'), 4); ?>

          <button class="button content-and-ads__special-content-item">Keep browsing in the Archives</button>

        </div>

        <div class="content-and-ads__ads">

          <?php echo file_get_contents('components/template-ads.html'); ?>

        </div>

      </section>

      <section class="fancy-cards-container">

        <div class="fancy-category-card">

          <div>

            <h2 class="heading heading--color-2 fancy-category-card__heading">The Monthly Mixup</h2>
            <span class="fancy-category-card__span">Powered by</span>
            <a class="link">DigitalOcean</a>

          </div>

        </div>

        <ul class="fancy-cards-list">

          <?php echo str_repeat(file_get_contents('components/template-fancy-cards-list-items.html'), 3); ?>

        </ul>

      </section>
  
    </main>
    
  </div>

  <?php echo file_get_contents('components/footer.html'); ?>

</body>

</html>