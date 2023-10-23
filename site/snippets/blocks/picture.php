<?php
if (!$image) {
  return;
}
?>

<picture>
  <?php foreach (['avif', 'webp', 'jpg'] as $format) : ?>

    <?php
    $srcset = [
      '300w'  => ['width' => 300, 'format' => $format],
      '600w'  => ['width' => 600, 'format' => $format],
      '900w'  => ['width' => 900, 'format' => $format],
      '1200w' => ['width' => 1200, 'format' => $format],
      '1800w' => ['width' => 1800, 'format' => $format],
    ];
    ?>

    <?php if ($format != 'jpg') : ?>

      <source type="image/<?= $format ?> " sizes="<?= $sizes ?? '' ?>" srcset="<?= $image->srcset($srcset) ?>">
    <?php else : ?>
      <img loading="lazy" class="lazy <?= $class ?? '' ?>" style="<?= $style ?? '' ?>" src="<?= $image->srcset($srcset) ?>" sizes="<?= $sizes ?? '' ?>" alt="<?= $alt ?? '' ?>">
    <?php endif ?>
  <?php endforeach; ?>
</picture>