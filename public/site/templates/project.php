<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
  <div class="container">
      <div class="content">
          <h1 class="project-title"><?php echo $page->title()->html() ?></h1>
          <?php $tags = $page->tags()->split(); ?>

          <?php if($page->content()->url()->isNotEmpty()): ?>
            <span class="clickthrough"><a href="<?php echo $page->content()->url() ?>">Visit The Project</a></span>
         <?php endif ?>
         
            <ul class="tag-list">
                <?php foreach($tags as $tag): ?>
                  <li class="tag"><span class="check">&check;</span><?php echo $tag ?></li>
                <?php endforeach ?>
            </ul>
          <?php echo $page->text()->kirbytext() ?>
      </div>
  </div>
</section>
<?php snippet('footer') ?>
