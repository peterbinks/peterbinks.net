<?php snippet('header') ?>
<?php snippet('menu') ?>

<section>
	<div class="container">
		<div class="intro">
			<h2>Me</h2>
			<?php echo kirbytext($page->text()) ?>
		</div>
		<div class="work">
			<?php snippet ('projects'); ?>
		</div>
	</div>
</section>

<section id="blog">
	<div class="container">
		<?php snippet ('latest-posts'); ?>
	</div>
</section>

<?php snippet('footer') ?>