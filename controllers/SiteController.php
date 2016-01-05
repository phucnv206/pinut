<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actionIndex($test = false)
    {
        if (!$test) {
            die('Coming soon...');
        }
        if (Yii::$app->session->has('lang')) {
            Yii::$app->language = Yii::$app->session->get('lang');
        }
        return $this->render('index');
    }
    
    public function actionLocation($lang = 'vi', $returnUrl = '/')
    {
        $sessLang = $lang === 'vi' ? 'vi-VN' : 'en-US';
        Yii::$app->session->set('lang', $sessLang);
        return $this->redirect($returnUrl);
    }

}
