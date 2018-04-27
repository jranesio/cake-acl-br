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
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('CakeAclBr.bootstrap.min.css') ?>
    <?= $this->Html->css('custom.css') ?>    

    <?php    echo $this->fetch('css'); ?>

</head>
<body>
    <header role="banner" class="navbar navbar-inverse">
        <div class="container">
<?php
    if($loguser){
?>
        <h3 align="center" class="titulo">Título do Aplicativo</h3>
        <h3 class="titulo"><?php echo $this->element('CakeAclBr.topmenu'). '<br>'.$this->fetch('title'). '<spam class="logado pull-right">Logado como: <strong>'. __($loguser).'</strong></spam>' ?></h3>
<?php
    }else{
        echo '<h3 class="titulo">Acesso ao Sistema</h3>';
    }
?>
        <br>
            <?php if ($this->fetch('navbar.top')): ?>
            <nav role="navigation" class="collapse navbar-collapse" id="navbar-top">
                <ul class="nav navbar-nav">
                    <?= $this->fetch('navbar.top'); ?>
                </ul>
            </nav>
            <?php endif; ?>
        </div>
    </header>
    <div class="container">
        <div id="content" class="row">
            <?= $this->Flash->render(); ?>
            <?= $this->fetch('content'); ?>
        </div>
    </div>
</body>
</html>
