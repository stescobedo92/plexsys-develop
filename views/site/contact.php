<?php

/* @var $this \yii\web\View */

use yii\helpers\Html;


$title = 'Contacto';
?>

<article id="site-contact" class="page">

    <?= $this->render('_header',[
        'title' => $this->title
    ])?>

    <div class="container">

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?= Html::img('@web/images/icons/asterisco.png') ?>
                        <?= Html::img('@web/images/icons/location.png') ?>
                        <p>Paseo Cuesta bonita 315, Cuesta Bonita, 76063 Santiago de Querétaro, Qro</p>
                        <?= Html::img('@web/images/icons/arroba.png') ?>
                        <p>www.fernandoamador.com.mx</p>
                        <?= Html::img('@web/images/icons/phone.png') ?>
                        <p>(442) 706-8861</p>
                        <?= Html::img('@web/images/icons/email.png') ?>
                        <p>hola@fernandoamador.com.mx</p>
                    </div>
                    <div class="col-md-6">
                        <form role="form">
                            <div class="form-group">
                                <label for="nombre">Nombre*</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo Electronico*</label>
                                <input type="email" class="form-control" id="correo">
                            </div>
                            <div class="form-group">
                                <label for="proyecto">Tipo de Proyecto</label>
                                <input type="text" class="form-control" id="proyecto">
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
                </div>
            </div>
        </section>


    </div>

</article>
