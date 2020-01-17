<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?> | <?= Yii::$app->name ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?php
NavBar::begin([
    'brandLabel' => Html::img('@web/images/plexsys-logo.png', ['alt' => Yii::$app->name, 'style' => 'width: 210px']),
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-expand-lg navbar-light bg-white fixed-top',
    ],
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right ml-auto'],
    'items' => [
        ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Sitios Web', 'url' => ['/site/websites']],
        ['label' => 'Software a la Medida', 'url' => ['/site/software']],
        ['label' => 'Apps', 'url' => ['/site/apps']],
        ['label' => 'Portafolio', 'url' => ['/site/portfolio']],
        ['label' => 'Contacto', 'url' => ['/site/contact']],
    ],
]);
NavBar::end();
?>

<?= $content ?>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Daxslab <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
