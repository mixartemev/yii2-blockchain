<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'My Yii2 ' . Yii::$app->name;
$loggedIn = !Yii::$app->user->isGuest;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Super!</h1>

        <p class="lead"><?= $loggedIn ? 'Now you can go to' : 'You have successfully install '. Yii::$app->name .' app.' ?></p>

        <p><a class="btn btn-lg btn-primary" href="<?= $loggedIn ? Yii::$app->params['backendUrl'] : Url::to('site/signup') ?>"><?= $loggedIn ? 'backend' : 'At first you must register your node' ?></a></p>

        <?= $loggedIn ? '' : '<p><a class="btn btn-lg btn-success" href="' . Url::to('site/login') . '">or login</a></p>' ?>
    </div>

    <div class="body-content">

        <!--<div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>-->

    </div>
</div>
