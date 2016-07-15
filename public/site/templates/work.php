<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
  <div class="container">
      <div class="content">
        <?php foreach($page->children()->visible()->flip() as $project): ?>
        <a class="project" href="<?php echo $project->url() ?>">
            <h2 class="projecttitle">
                <?php echo html($project->title()) ?>
            </h2>
            <?php $tags = $project->tags()->split(); ?>
            <ul class="article-tag-list">
            <?php foreach($tags as $tag): ?>
                <li class="article-tag"><span class="check">&check;</span> <?php echo $tag ?></li>
            <?php endforeach ?>
            </ul>
        </a>
        <hr>
        <?php endforeach ?>

        <?php echo $page->text()->kirbytext() ?>
      </div>
  </div>
</section>
<?php snippet('footer') ?>
