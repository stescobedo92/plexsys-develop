<?php

/* @var $this yii\web\View */
/* @var $title string */

use yii\helpers\Html;


$this->title = 'Somos el área de programación de tu agencia que te salva de los gastos fijos';
?>
<article id="site-index" class="page">

    <?= $this->render('_header',[
        'title' => $this->title
    ])?>

    <section class="py-5">
        <div class="container">
            <p class="section-index-text">!Buscamos y nos buscan empresas como la tuya!</p>
            <ul class="section-index-text">
                <li>Estudios de Diseño. </li>
                <li>Agencias de Publicidad.</li>
                <li>Agencias de Marketing Digital.</li>
            </ul>
            <p class="section-index-text">Con el objetivo de hacer alianzas que convienen para trabajar por proyecto</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-index-text-headers">Nos proporcionas el diseño y nosotros lo programamos.</h2>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-index-text-headers">Qué te ofrecemos?</h2>
            <p class="section-index-text">
                Calidad en programacion de sitios web, tiendas en linea, desarrollo de software a la medida y Apps.
            </p>
            <p class="section-index-text">
                Costos especiales que te permiten ofrecer un gran trabajo a tu cliente y obtener un buen margen de ganancia.
            Compromiso en calidad y tiempos de trabajo.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-index-text-headers">Cómo es esto posible?</h2>
            <p class="section-index-text">
                Plexsys cuenta con un equipo de programadores con experiencia y alto rendimiento. Lo que nos permite involucrarnos
                en diversos proyectos sin descuidar de la calidad de cada una de nuetsras alianzas y proyectos.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="section-index-text-headers">Con quiénes trabajamos actualmente?</h2>
            <p class="section-index-text">
                Con agencias, estudios y freelancers alrededor de la república mexicana.
            </p>
        </div>
    </section>

    <section class="py-5">
        <div>
            <center>
                <?= Html::a('Visitar portafolio', ['/site/portfolio'], ['class' => 'btn btn-primary'])?>
            </center>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <p class="section-index-text-headers">
                Contactanos para platicar sobre los detalles y acordar nuestras posibles formas de trabajo
                según tu tipo de clientes.
            </p>
        </div>
        <div>
            <center>
                <?= Html::a('Visitar portafolio', ['/site/portfolio'], ['class' => 'btn btn-primary'])?>
            </center>
        </div>
    </section>





</article>
