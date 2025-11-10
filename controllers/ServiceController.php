<?php

namespace app\controllers;

use Yii;
use app\models\Service;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\ServiceSearch;
use yii\web\NotFoundHttpException;

/**
 * ServiceController implements the CRUD actions for Service model.
 */
class ServiceController extends Controller
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
     * Lists all Service models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ServiceSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Service model.
     * @param int $service_id Service ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($service_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($service_id),
        ]);
    }

    /**
     * Creates a new Service model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Service();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $imageEn = UploadedFile::getInstance($model, 'image_en');
            $imageAr = UploadedFile::getInstance($model, 'image_ar');
            if ($imageEn) {
                $imageNameEn = 'service' . time() . '_en.' . $imageEn->extension;
                $imageEn->saveAs(Yii::getAlias('@webroot/uploads/') . $imageNameEn);
                $model->image_en = $imageNameEn;
            }

            if ($imageAr) {
                $imageNameAr = 'service' . time() . '_ar.' . $imageAr->extension;
                $imageAr->saveAs(Yii::getAlias('@webroot/uploads/') . $imageNameAr);
                $model->image_ar = $imageNameAr;
            }
            if ($model->validate()) {


                if ($model->save(false)) {
                    return $this->redirect(['view', 'service_id' => $model->service_id]);
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
     * Updates an existing Service model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $service_id Service ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($service_id)
    {
        $model = $this->findModel($service_id);
        $oldImageEn = $model->image_en;
        $oldImageAr = $model->image_ar;

        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $imageEn = UploadedFile::getInstance($model, 'image_en');
            $imageAr = UploadedFile::getInstance($model, 'image_ar');
            if ($imageEn) {
                $imageNameEn = 'service_' . time() . '_en.' . $imageEn->extension;
                $imageEn->saveAs(Yii::getAlias('@webroot/uploads/') . $imageNameEn);
                $model->image_en = $imageNameEn;
            } else {
                $model->image_en = $oldImageEn;
            }

            if ($imageAr) {
                $imageNameAr = 'service_' . time() . '_ar.' . $imageAr->extension;
                $imageAr->saveAs(Yii::getAlias('@webroot/uploads/') . $imageNameAr);
                $model->image_ar = $imageNameAr;
            } else {
                $model->image_ar = $oldImageAr;
            }
            if ($model->validate()) {
                if ($model->save(false)) {
                    return $this->redirect(['view', 'service_id' => $model->service_id]);
                }
            }
        } else {
            $model->image_en = $oldImageEn;
            $model->image_ar = $oldImageAr;
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Service model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $service_id Service ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($service_id)
    {
        $this->findModel($service_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Service model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $service_id Service ID
     * @return Service the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($service_id)
    {
        if (($model = Service::findOne(['service_id' => $service_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
