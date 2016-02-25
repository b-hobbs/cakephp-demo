<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
	<?php echo $this->Html->script('jquery'); ?>
    <script src="/js/bootstrap.min.js"></script>
	<?php echo $this->Js->writeBuffer(); ?>
  </head>

  <body>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
				<?php if ($userData): ?>
				<?php echo $this->Html->link('Logout', array('controller'=>'customers', 'action'=>'logout')); ?>
				<?php else: ?>
                <?php echo $this->Html->link('Login', array('controller'=>'customers', 'action'=>'login')); ?>
				<?php endif; ?>
              </li>
			  <?php if ($userData): ?>
              <li class="">
                <?php echo $this->Html->link('Parts', array('controller'=>'parts', 'action'=>'index')); ?>
              </li>
              <li class="">
                <?php echo $this->Html->link('Cart', array('controller'=>'cart', 'action'=>'index')); ?>
              </li>
              <li class="">
                <?php echo $this->Html->link('Orders', array('controller'=>'orders', 'action'=>'index')); ?>
              </li>
           
			  <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      		

			<?php echo $this->Session->flash(); ?>

	<?php echo $this->fetch('content'); ?>
		

    </div> <!-- /container -->

  </body>
</html>