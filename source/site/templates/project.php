<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
  <div class="container">
      <div class="content">
          <h1 class="project-title"><?php echo $page->title()->html() ?></h1>
          <?php $tags = $page->tags()->split(); ?>
            <ul class="tag-list">
            <?php foreach($tags as $tag): ?>
              <li class="tag"><span class="check">&check;</span><?php echo $tag ?></li>
            <?php endforeach ?>
            </ul>
            <span class="clickthrough"><a href="<?php $page->field()->URL() ?>">Visit The Site</a></span>
          <?php echo $page->text()->kirbytext() ?>
      </div>
  </div>
</section>
<?php snippet('footer') ?>
