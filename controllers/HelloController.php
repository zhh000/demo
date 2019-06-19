<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/18
 * Time: 14:39
 */

namespace app\controllers;

use YII;
use yii\caching\DbDependency;
use yii\filters\PageCache;
use yii\web\Controller;

class HelloController extends Controller
{
    public function behaviors()
    {
        return [
            [
                'class' =>  PageCache::className(),
            ]
        ];
    }

    public function actionIndex(){
        /*$res = YII::$app->response;

        //$res->setStatusCode('404');
        //$res->headers->add('pragma','no-cache');
        //$res->headers->add('pragma','max-age=5');
        //$res->headers->add('location','https://baidu.com');
        //$this->redirect('https://baidu.com');
        $res->sendFile('');
        */

        //$session = YII::$app->session;
        //$session->set('user','hehe');

        //$session->remove('user');
        $cache = YII::$app->cache;
        //$cache->add('key1','hello everyone');
//        $dependency = new DbDependency(
//            ['sql' => 'SELECT COUNT(*) FROM demo.user']
//        );
        //$cache->set('key1','hehe',3000, $dependency);
        //$cache->delete('key1');
//        $data = $cache->get('key1');
//        var_dump($data);
        var_dump(120);

    }
}