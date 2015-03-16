<?php snippet('header') ?>

	<main class="main" role="main">
		<div class="constrain">
			<h1><?php echo $page->title()->html() ?></h1>
			<?php echo $page->text()->kirbytext() ?>
			<hr>
			<?php snippet('projects') ?>
		</div>
	</main>

<?php snippet('footer') ?>