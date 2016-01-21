<?php

namespace app\controllers;

use app\models\EssayAnalyzer;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    /**
     * @return array
     */
    public function behaviors()
    {
        $this->enableCsrfValidation = false;

        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @return array
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {

        return $this->render('index');
    }

    public function actionEssayanalyzer()
    {
        if (Yii::$app->request->isAjax) {
            if (!empty(Yii::$app->request->post())) {
                $key = '99f2ec4ae6ef04d3109fed0349964c12055dd14d';

                $model = new EssayAnalyzer($key);

                $postData = Yii::$app->request->post();
                $myUrl = $postData['ownUrl'];
                $myText = $postData['ownText'];

                if (!empty($myText)) {
                    $response['sentiment'] = $model->sentiment("text", $myText, null);
                    $response['sentiment_targeted'] = $model->sentiment_targeted("text", $myText, null);
                    $response[''] = $model->author("text", $myText, null);
                    $response
                }

                if(!empty($myUrl)) {

                }

                $model->setOurArticle($postData['ourArticle']);
                $model->setKeywordMedian($postData['keywordMedian']);
                $model->setArticles($postData['articles']);

                $data = $model->getData();

                return $data;
            }
        } else {
            return $this->render('index');
        }
        {
            return $this->render('essayanalyzer');
        }


    }
}
