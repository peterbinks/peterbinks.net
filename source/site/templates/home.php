<?php snippet('header') ?>
<?php snippet('menu') ?>

<section id="main">
	<div class="container">
		<div class="seven columns intro">
			<?php echo kirbytext($page->intro()) ?>
		</div>
		<div class="five columns currently">
			<?php echo kirbytext($page->currently()) ?>
		</div>
	</div>
</section>

<?php snippet('footer') ?>
