<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
  <div class="container">

    <h2><?php echo $page->title()->html() ?></h2>

    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>

    <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

  </div>
</section>
<?php snippet('footer') ?>
