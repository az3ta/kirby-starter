<footer class="p-4 bg-blue-200">
  <p>&#169;<?= date("Y"); ?> <?= $site->title() ?></p>
  <ul>
    <?php if ($site->socialMediaOptions() == 'Text') : ?>
      <?php foreach ($site->socialMedia()->toStructure() as $socialItem) : ?>
        <li><a href="<?= $socialItem->url() ?>" target="_blank" rel="noopener noreferrer"><?= $socialItem->platform() ?></a></li>
      <?php endforeach ?>

    <?php else : ?>
      <p>do social with icons...</p>
    <?php endif ?>
  </ul>

</footer>

</body>

</html>