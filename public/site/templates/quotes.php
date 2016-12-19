<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="container">
    <?php echo kirbytext($page->text()) ?>
    <div class="quotes">
        <?php foreach($page->children()->visible() as $quote): ?>
          <blockquote>
             <?php echo $quote->quote() ?><br>
             <span class="author">
                &mdash; <?php echo $quote->author() ?>
             </span>
         </blockquote>
        <?php endforeach ?>
    </div>
</div>
<?php snippet('footer') ?>
