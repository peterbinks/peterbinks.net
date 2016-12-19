<?php snippet('header') ?>
<?php snippet('menu') ?>
<div class="container books">
    <?php echo kirbytext($page->text()) ?>
    <?php foreach($page->children()->visible() as $book): ?>
      <div class="book">
         <h2><?php echo kirbytext($book->Title()) ?></h2>
         <?php if($image = $book->image()): ?>
         <span class="book-cover">
             <img src="<?php echo $image->url() ?>" alt="">
        </span>
        <?php endif ?>
        <?php echo kirbytext($book->Description()) ?>
     </div>
    <?php endforeach ?>
</div>
<?php snippet('footer') ?>
