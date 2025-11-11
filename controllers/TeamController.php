<?php

namespace app\controllers;

use Yii;
use app\models\Team;

use yii\web\Controller;
use yii\web\UploadedFile;
use app\models\TeamSearch;
use yii\filters\VerbFilter;
use yii\web\NotFoundHttpException;

/**
 * TeamController implements the CRUD actions for Team model.
 */
class TeamController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Team models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TeamSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Team model.
     * @param int $team_id Team ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($team_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($team_id),
        ]);
    }

    /**
     * Creates a new Team model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Team();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $avatar = UploadedFile::getInstance($model, 'avatar');
                if ($avatar) {
                    $avatarFile = 'team_' . time() . '_en.' . $avatar->extension;
                    $avatar->saveAs(\Yii::getAlias('@webroot/uploads/') . $avatarFile);
                    $model->avatar = $avatarFile;
                }

                if ($model->save()) {
                    return $this->redirect(['view', 'team_id' => $model->team_id]);
                }
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Team model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $team_id Team ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($team_id)
    {
        $model = $this->findModel($team_id);
        $oldAvatar = $model->avatar;
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $avatar = UploadedFile::getInstance($model, 'avatar');

            if ($avatar) {
                $avatarName = 'team_' . time() . '_en.' . $avatar->extension;
                $avatar->saveAs(Yii::getAlias('@webroot/uploads/') . $avatarName);
                $model->avatar = $avatarName;
            } else {
                $model->avatar = $oldAvatar;
            }
            if ($model->save(false)) {
                return $this->redirect(['view', 'team_id' => $model->team_id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Team model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $team_id Team ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($team_id)
    {
        $this->findModel($team_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Team model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $team_id Team ID
     * @return Team the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($team_id)
    {
        if (($model = Team::findOne(['team_id' => $team_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
