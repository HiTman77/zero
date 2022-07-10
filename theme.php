<?php global $Wcms ?>
<!DOCTYPE HTML>
<html>
<head>
<title><?= $Wcms->page('title') ?> - <?= $Wcms->get('config', 'siteTitle') ?></title>
<meta name="description" content="<?= $Wcms->page('description') ?>">
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="/themes/zero/assets/css/main.css?v<?php echo(rand(1,190));?><?php echo(rand(1,10));?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?= $Wcms->css() ?>
</head>
<body class="no-sidebar is-preload">
<?= $Wcms->settings() ?>
<?= $Wcms->alerts() ?>
<div id="page-wrapper">
<div id="header-wrapper">
<div class="container">
<header id="header">
<div class="inner">
<div class="logo"><a href="/"><img height="100%" src="/data/files/logo.png" alt="<?= $Wcms->page('title') ?>"></a></div>
<nav id="nav">
<ul>
<?= $Wcms->menu() ?>
</ul>
</nav>
</div>
</header>
</div>
</div>
<div id="main-wrapper">
<div class="wrapper style2">
<div class="inner">
<div class="container">
<div id="content">
<article>
<header class="major">
<h2><?= $Wcms->page('keywords') ?></h2>
<p><?= $Wcms->page('description') ?></p>
</header>
<?= $Wcms->page('content') ?>
</article>
</div>
</div>
</div>
</div>
<div class="wrapper style3">
<div class="inner">
<div class="container">
<div class="row">
<div class="col-12 col-12-medium">
<section class="box article-list">
<?= $Wcms->block('subside') ?>
</section>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Footer Wrapper -->
<div id="footer-wrapper">
<footer id="footer" class="container">
<div class="row">
<?= $Wcms->footer() ?>
</div>
</footer>
</div>
</div>
<script src="/themes/zero/assets/js/jquery.min.js"></script>
<script src="/themes/zero/assets/js/jquery.dropotron.min.js"></script>
<script src="/themes/zero/assets/js/browser.min.js"></script>
<script src="/themes/zero/assets/js/breakpoints.min.js"></script>
<script src="/themes/zero/assets/js/util.js"></script>
<script src="/themes/zero/assets/js/main.js"></script>
<?= $Wcms->js() ?>
</body>
</html>