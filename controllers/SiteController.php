<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionApps()
    {
        return $this->render('apps');
    }

    public function actionWebsites()
    {
        return $this->render('websites');
    }
    public function actionSoftware()
    {
        return $this->render('software');
    }
    public function actionPortfolio()
    {
        return $this->render('portfolio');
    }
    public function actionContact()
    {
        return $this->render('contact');
    }
}
