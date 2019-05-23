<?php snippet('header') ?>
<?php snippet('menu') ?>

<section class="content article">
  <article>
    <h1><?= $data->title()->html() ?></h1>
    <?= $data->text()->kirbytext() ?>

    <a href="<?= url('blog') ?>">Back…</a>

  </article>
</section>

<?php snippet('footer') ?>