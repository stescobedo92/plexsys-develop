<?php

/* @var $this \yii\web\View */

use yii\helpers\Html;


$this->title = 'Sitios Web';
?>

<article id="site-websites" class="page">

    <?= $this->render('_header',[
        'title' => $this->title
    ])?>

    <section class="py-5">
        <div class="container">
            <p class="section-index-text">
                El desarrollo web de páginas web poderosas se ha transformado en pilar fundamental para el desarrollo comercial
                de todas las empresas.
            </p>
            <br>
            <p class="section-index-text">
                El internet está, hoy más que nunca, saturado de información y opciones de productos y servicios que compiten
                para llegar a más y mejores usuarios, por esta razón, es imprescindible contar con un aliado estratégico de 24
                horas que nos permita llegar a todos aquellos potenciales clientes.
                de todas las empresas.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form role="form">
                        <div class="form-group">
                            <label for="nombre">Nombre Completo</label>
                            <input type="text" class="form-control" id="nombre_completo">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" class="form-control" id="telefono">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Mensaje</label>
                            <div class="col-md-8">
                                <textarea class="form-control" id="mensaje" name="mensaje" ></textarea>
                            </div>
                        </div>
                        <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary']) ?>
                    </form>
                </div>
                <div class="col-md-6">
                    <p>Beneficios</p>
                    <ul>
                        <li>Plataformas escalables</li>
                        <li>Promoción en nuestras redes sociales</li>
                        <li>Administración de hosting y dominio</li>
                        <li>Páginas Web y tiendas en línea.</li>
                        <li>Posisionamiento básico(SEO)</li>
                        <li>Diversas formas y planes de pago</li>
                        <li>Podemops trabajar con el diseñador de tu elección</li>
                    </ul>
                    <p><a href="#">Conoce nuestro proceso</a> -----></p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-index-text-headers">Porqué nuestros sitios son tu mejor opción</h2>
            <div class="row">
                <div class="col-md-6">
                    <?= Html::img('@web/images/icons/cell.png') ?>
                    <h3>Diseño adaptable</h3>
                    <p>Sitios web en computadoras y dispositivos moviles 100% funcionales.</p>
                </div>
                <div class="col-md-6">
                    <?= Html::img('@web/images/icons/dollar.png') ?>
                    <h3>Plataformas de pago</h3>
                    <p>Tu tienda en línea con diferentes paltaformas de pago como:</p>
                </div>
                <div class="col-md-6">
                    <?= Html::img('@web/images/icons/check.png') ?>
                    <h3>Posicionamiento web</h3>
                    <p>Sitios web en computadoras y dispositivos moviles 100% funcionales.</p>
                </div>
                <div class="col-md-6">
                    <?= Html::img('@web/images/icons/edit.png') ?>
                    <h3>Totalmente administrable</h3>
                    <p>Sitio web totalmente administrable en caso de requerido.</p>
                </div>
                <div class="col-md-6">
                    <?= Html::img('@web/images/icons/paqueteria.png') ?>
                    <h3>Paqueteria</h3>
                    <p>Sitios web en computadoras y dispositivos moviles 100% funcionales.</p>
                </div>
                <div class="col-md-6">
                    <?= Html::img('@web/images/icons/chat.png') ?>
                    <h3>Correos electrónicos</h3>
                    <p>Administramos tus correos electrónicos.</p>
                </div>
                <div class="col-md-6">
                    <?= Html::img('@web/images/icons/peoples.png') ?>
                    <h3>Captación de nuevos clientes</h3>
                    <p>Gracias a nuestra indexación hacemos que los sitios web lleguen mas clientes.</p>
                </div>
                <div class="col-md-6">
                    <p>Conoce nuestro portafolio y solicita un presupuesto</p>
                    <div>
                        <center>
                            <?= Html::a('Visitar portafolio', ['/site/portfolio'], ['class' => 'btn btn-outline-primary'])?>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>

</article>

<div class="body-content">


</div>
