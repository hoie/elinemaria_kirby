<section id="media" class="media">
  <div class="media__container">
	  <h1 class="section-header"><?= $data->title() ?></h1>
	    <?= $data->text()->kirbytext() ?>
	  
	    
	    <?php foreach(page('media')->children()->listed()->flip() as $media): ?>
	  		<div class="video">
	  			<div class="well">
	  				<div class="video-container">
	  					<?= video($media->video()->toUrl()) ?>
	  					<!-- <iframe width="560" height="315" src="<?= $media->video()->toUrl() ?>?rel=0" frameborder="0" allowfullscreen></iframe> -->
	  				</div>
	  				<div>
	  					<h4><?= $media->title() ?></h4>
	  					<p><?= $media->text()->kirbytext() ?></p>
	  				</div>
	  			</div>
	  		</div>
	    <?php endforeach ?>
  </div>

</section>
