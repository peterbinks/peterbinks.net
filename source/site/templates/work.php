<?php snippet('header') ?>
<?php snippet('menu') ?>
<section>
  <div class="container">
      <div class="content">
        <?php foreach($page->children()->visible()->flip() as $project): ?>
        <a class="project" href="<?php echo $project->url() ?>">
            <h2 class="project-title">
                <?php echo html($project->title()) ?>
            </h2>
                <?php $img = $project->featuredImage()->toFile(); ?>
            <div class="project-image">
                <img src="<?php echo $img->url(); ?>" >
            </div>
            <?php $tags = $project->tags()->split(); ?>
            <ul class="article-tag-list">
            <?php foreach($tags as $tag): ?>
                <li class="article-tag"><span class="check">&check;</span> <?php echo $tag ?></li>
            <?php endforeach ?>
            </ul>
        </a>
        <?php endforeach ?>
      </div>
  </div>
  <?php echo $page->text()->kirbytext() ?>
</section>
<?php snippet('footer') ?>
