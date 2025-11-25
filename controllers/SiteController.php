<?php

namespace app\controllers;

use app\models\Banner;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Service;
use app\models\ContactInquiries;
use app\models\Team;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
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
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $this->layout = false;

        $bannerModel = (new \yii\db\Query())
    ->from('banners')
    ->where(['is_active' => 1, 'is_deleted' => 0])
    ->orderBy(['banner_id' => SORT_ASC])
    ->all();
        $serviceModel = Service::find()->all();
        // $teamModel = Team::find()->all();
        $teamModel = Team::find()
        ->where(['is_active' => 1, 'is_deleted' => 0])
        ->orderBy(['sort_order' => SORT_ASC])
        ->all();
        $lang = Yii::$app->language; // 'en' or 'ar'
        return $this->render('site-new-update', [
            "bannerModel" => $bannerModel,
            "serviceModel" => $serviceModel,
            "teamModel" => $teamModel,
            'lang'=>$lang,
        ]);
    }
    public function actionDashboard()
    {

        return $this->render('dashboard');
    }


    public function actionTeam()
    {
        $this->layout = false;

        $bannerModel = Banner::find()->all();
        $serviceModel = Service::find()->all();
        return $this->render('site-team', [
            "bannerModel" => $bannerModel,
            "serviceModel" => $serviceModel,
        ]);
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

public function actionSaveContact()
{
    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;

    $request = Yii::$app->request->post();
    if (!$request) {
        return ['status' => 400, 'message' => 'Invalid Request'];
    }

    Yii::$app->db->createCommand()->insert('contact_inquiries', [
        'full_name' => $request['full_name'],
        'email' => $request['email'],
        'phone' => $request['phone'],
        'legal_matter' => $request['subject'],
        'message' => $request['message'],
    ])->execute();

    return ['status' => 200, 'message' => 'Saved Successfully'];
}




}
