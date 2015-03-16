<?php snippet('header') ?>
	<main id="main" role="main">
		<div class="constrain">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
		</div>
		<hr>
		<?php snippet('projects') ?>
	</main>
<?php snippet('footer') ?>