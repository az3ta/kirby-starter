<?php
/**
 * @var $kirby \Kirby\Cms\App
 * @var $site \Kirby\Cms\Site
 * @var $pages \Kirby\Cms\Pages
 * @var $page \Kirby\Cms\Page
 */
?>

<?php snippet('layouts/default', slots: true) ?>
<?php snippet('header') ?>

<main class="flex-grow mb-auto bg-yellow-200">

  <h1><?= $page->title() ?></h1>

</main>
