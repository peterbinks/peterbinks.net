<?php snippet('header') ?>
<?php snippet('menu') ?>

<div id="container">
<section class="content blog">

  <?php echo $page->text()->kirbytext() ?>

  <?php foreach($page->children()->visible()->flip() as $article): ?>

<article class="post">

   <h2 class="articletitle">
     <a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a>
   </h2>

   <h3 class="time-stamp"> - <time datetime="<?php echo $article->date('M d Y') ?>" pubdate="pubdate"><?php echo $article->date('M d Y') ?></time></h3>

   <p><?php echo $article->text()->excerpt(300) ?></p>
   
</article>


  <?php endforeach ?>

</section>
</div>

<?php snippet('footer') ?>
