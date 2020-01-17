<?php

/* @var $this \yii\web\View */

use yii\helpers\Html;


$this->title = 'Apps';
?>

<article id="site-apps" class="page">

    <?= $this->render('_header',[
        'title' => $this->title
    ])?>

    <div class="container">

        <section class="py-5">
            <div class="container">
                <h1 class="section-index-text">!Crea una app móvil y aumenta tus ventas!</h1>
                <ul class="section-index-text">
                    <li>Incrementa un 80% tu volumen de negocio a la vez que ahorras costes automatizando procesos.</li>
                    <li>Aumenta un 60% la reputación de compra o vistas de tus clientes con los más avanzados sistemas de
                        fidelización</li>
                    <li>Obtén un flujo constante de nuevos clientes con las PWAs y los sistemas de Reviews automatizados</li>
                    <li>LLeva tu Negocio hasta las primeras posiciones de Google gracias a las PWAs</li>
                </ul>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h1 class="section-index-text">Te gustaria aparecer en las primeras posisciones de Google</h1>
                <p>Desde mediados de 2018, Google comenzó a posicionar las páginas web en su buscador en función
                   de la versión móvil de esas páginas.</p>
                <p>Una aplicación móvil en android e iphone o contar con una pwa te ayudará a alcanzar los primeros
                    puestos en los rankings y a captar nuevos clientes de forma continua.</p>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <h2 class="section-index-text-headers">Para qué necesito una crear una app móvil</h2>
                <div class="row">
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/estadistica.png') ?>
                        <h3>Inteligencia Empresarial</h3>
                        <p>Recopila la información clave de tus clientes y aumenta el ROI de tu negocio diseñando tu
                            aplicación móvil.</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/rueda.png') ?>
                        <h3>Desarrollo de Negocio</h3>
                        <p>Expande tu negocio con nuevos canales de venta y multiplica tus clientes con las aplicaciones
                            móviles.</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/wifi.png') ?>
                        <h3>Marketing Automatizado</h3>
                        <p>Automatiza todos los procesos de tu empresa, programa la comunicación con los usuarios y mejora
                            tu reputación en la red.</p>
                    </div>
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/flechas.png') ?>
                        <h3>Fidelización de Clientes</h3>
                        <p>Recompensa a tus clientes para incentivar su recurrencia, aumentar su engagement e incremenmtar tus
                            ingresos.</p>
                    </div>
                </div>
            </div>
        </section>


    </div>

</article>
