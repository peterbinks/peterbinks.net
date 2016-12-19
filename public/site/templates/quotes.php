<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="container quotes">
    <?php echo kirbytext($page->text()) ?>
    <?php foreach($page->children()->visible() as $quote): ?>
      <blockquote>
         <?php echo $quote->quote() ?>
         <span class="author">
            <?php echo $quote->author() ?>
         </span>
     </blockquote>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>
