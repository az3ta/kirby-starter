<?php
/**
 * @var $kirby \Kirby\Cms\App
 * @var $site \Kirby\Cms\Site
 * @var $pages \Kirby\Cms\Pages
 * @var $page \Kirby\Cms\Page
 */
?>

<?php snippet('layouts/default', slots: true) ?>

<main>

  <h1><?= $page->title() ?></h1>

</main>
