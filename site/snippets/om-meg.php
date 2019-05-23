

<section id="om-meg" class="om-meg">
  <h1 class="section-header"><?= $data->title() ?></h1>
  

  <div class="om-meg__innledning">
    <?= $data->tekst()->kirbytext() ?>
  </div>

  <div class="om-meg__opptredener">
    <ul>
      <?php foreach ($data->cv()->toStructure() as $cv): ?>
        <li>
          <?= $cv->arrangement()->kirbytext() ?>
        </li>
      <?php endforeach ?>
    </ul>
  </div>

</section>