<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $tittle_for_layout; ?></title>
    <?= $this->Html->css("https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"); ?>
    <?= $this->fetch('css'); ?>
    <!-- <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css"> -->
  </head>
  <body>

    <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Blog</li>
          <li><a href="#">One</a></li>
          <li><a href="#">Two</a></li>
          <li><a href="#">Three</a></li>
          <li> 
            <?=
                  $this->Html->link(
                  'Se deconnecter',array(
                  'controller' => 'users', 
                  'action' => 'logout'
                  )); 
            ?> 
          </li>
        </ul>
      </div>
    </div>

    <div class="callout large primary">
      <div class="row column text-center">
        <h1>Our Blog</h1>
        <h2 class="subheader">Such a Simple Blog Layout</h2>
      </div>
    </div>

    <?= $this->fetch('content'); ?>   

	<?= $this->Html->script("https://code.jquery.com/jquery-2.1.4.min.js"); ?>
	<?= $this->Html->script("https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"); ?>
<!-- <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script> -->
    <!-- <script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script> -->
    <script>
      $(document).foundation();
    </script>
  </body>
</html>


