<?php

namespace app\modules\api\controllers;

use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $redis=\Yii::$app->redis;
        echo $redis->get('a');exit();
        return $this->render('index');
    }
}
