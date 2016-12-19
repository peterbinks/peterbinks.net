<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="container quotes">
    <?php echo kirbytext($page->text()) ?>
    <?php foreach($page->children()->visible()->flip() as $quote): ?>
      <blockquote>
         <?php echo kirbytext($quote->quote()) ?>
         <span class="author">
            <?php echo kirbytext($quote->author()) ?>
         </span>
     </blockquote>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>
