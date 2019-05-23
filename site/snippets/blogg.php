
<section id="blogg" class="blogg">

  <div class="blogg__tittel">
    <h1 class="section-header"><?= $data->title() ?></h1>
    <?= $data->text()->kirbytext() ?>
  </div>

  <?php foreach($data->children()->listed()->flip() as $article): ?>

  <article class="blogg__post">
  <?php if($image = $article->image()): ?>
    <img src="<?= $image->url() ?>" alt="Jeg synger på eksamenskonserten" class="blogg__bilde">
  <?php endif ?>
    <div class="blogg__tekst">
      <h1><?= $article->title()->html() ?></h1>
      <p><?= $article->text()->excerpt(300) ?></p>
      <a href="<?= $article->url() ?>">Read more…</a>
    </div>
  </article>

  <?php endforeach ?>

</section>
