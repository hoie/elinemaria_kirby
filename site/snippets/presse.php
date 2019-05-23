		<!-- Pressebilder -->
		<section id="presse" class="presse"> <!-- style="background-image: url('img/press.jpg') -->		
			<header class="section-header">
				<h1><?= $data->title() ?></h1>
			</header>
			<p><?= $data->text()->kt() ?></p>
		
			<ul>
				<?php foreach($data->images() as $image): ?>
					<li>
						<a href="<?= $image->url() ?>">
						<img src="<?= $image->url() ?>" alt="">
						</a>
					</li>
				<?php endforeach ?>
			</ul>

		</section>
