<?php

/* @var $this \yii\web\View */

use yii\helpers\Html;


$this->title = 'Software';
?>

<article id="site-software" class="page">

    <?= $this->render('_header',[
        'title' => $this->title
    ])?>

    <div class="container">
        <section class="py-5">
            <div class="container">
                <p>
                    Desarrollamos softwares para resolver problemas específicos conforme a sus necesidades.
                </p>
                <br>
                <p>
                    Nuestra amplia experiencia en procesos, re-ingeniería y tecnología nos permite encontrar la mejor
                    solución a su problema.
                </p>
                <br>
                <p >
                    Nos sentimos orgullosos de dar un servicio personalizado, de alta calidad y con la tecnología adecuada a tu
                    proyecto. Generar las herramientas necesarias para el crecimiento de tu negocio a través del internet.
                </p>
                <br>
                <p><a href="#">Obtén un presupuesto</a> -----></p>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-index-text-headers">Por qué nuestro proceso de desarrollo de software es tu mejor opción</h2>
                <div class="row">
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Automatizamos procesos</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Niveles personalizados De seguridad.</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Sistemas personalizados</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Consulta desde cualquier dispositivo</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>100% en línea.</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Información en tiempo real</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Multiusuarios</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Planeación - desarrollo - implementación</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Actualizaciones Constantes</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Multiplataforma</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Soporte técnico Para apoyarte siempre</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Sistemas desarrollados a la medida</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Información siempre disponible</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/check_azul.png') ?>
                        <p>Usamos la tecnología que te conviene</p>
                    </div>
                    <div>
                        <center>
                            <?= Html::a('Conoce nuestro proceso', ['/site/portfolio'], ['class' => 'btn btn-outline-primary'])?>
                        </center>
                    </div>
                </div>
            </div>
        </section>

    </div>

</article>