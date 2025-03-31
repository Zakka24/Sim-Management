<?php
/**
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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset('utf-8'); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo 'cmssviluppo.fri-el.it > '.$this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
                echo $this->Html->css('../../../auth/css/generic');
		echo $this->Html->css('dedicated');
                
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
                echo $this->Html->script('../../../auth/js/jquery/external/jquery/jquery.js');
	?>
</head>
<body>
    <div id="container">
            <div id="header">
                <?php // echo $this->Html->image('../../../auth/img/FRI-EL Control System.png', array('class' => 'floatLeft', 'alt' => 'FRI-EL CONTROL SYSTEM')); ?>
                <div class="chiudi"></div>
                <?php  if($this->action != 'login') {  ?>
                    <?php echo $this->element('navigation'); ?>
                <?php } ?>
            </div>
            <div id="content">

                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">
                <div class="floatRight">
                    <?php echo $this->Html->image('../../../auth/img/logo_greenpower.png', array('alt' => 'FRI-EL GREEN POWER')); ?>
                </div>
            </div>
    </div>
    <?php // echo $this->element('sql_dump'); ?>
    <?php echo $this->Js->writeBuffer(); // Write cached scripts ?>
</body>
</html>
