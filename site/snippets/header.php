<!-- <!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/home.css', '@auto']) ?>

</head>
<body>

  <div class="page">
    <header class="header">
      <!-- <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a> -->

      <nav id="menu" class="menu">
        <?php foreach ($site->children()->listed() as $item): ?>
        <?= $item->title()->link() ?>
        <?php endforeach ?>
      </nav>
    </header>
 -->

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

	<link href="https://fonts.googleapis.com/css?family=Cinzel+Decorative|Lato|Gentium+Basic|Montaga|Source+Sans+Pro|Nanum+Gothic&display=swap" rel="stylesheet">

	<?= css(['assets/css/home.css', '@auto']) ?>
	
	<!-- custom css -->
<?= css($page->files()->filterBy('extension', 'css')->pluck('url')) ?>




</head>
<body>

	<header class="header">
      <!-- <a class="logo" href="<?= $site->url() ?>"><?= $site->title() ?></a> -->

      <nav id="menu" class="menu">
				<ul>
					<li>
						<?php foreach ($site->children()->listed() as $item): ?>
						<?= $item->title()->link() ?>
						<?php endforeach ?>
					</li>
				</ul>
      </nav>
    </header>

	<div class="container">

			<!-- Forside -->
		<section class="hero"> <!-- style="background-image: url('img/ElineMariaRefvem-JohannesLFSunde-011-min.jpg') -->
			<h1 class="hero--title">Eline <br/>Maria <br/>Refvem</h1>
		</section>
	
