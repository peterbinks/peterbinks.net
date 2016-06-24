<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
  <div class="container">
    <article>

      <div class="content">
        <h1><?php echo $page->title()->html() ?></h1>
        <?php echo $page->text()->kirbytext() ?>
      </div>

    </article>
  </div>
</section>
<?php snippet('footer') ?>
