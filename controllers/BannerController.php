<?php

namespace app\controllers;

use Yii;
use app\models\Banner;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use app\models\BannerSearch;
use yii\web\NotFoundHttpException;

/**
 * BannerController implements the CRUD actions for Banner model.
 */
class BannerController extends Controller
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
     * Lists all Banner models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new BannerSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banner model.
     * @param int $banner_id Banner ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($banner_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($banner_id),
        ]);
    }

    /**
     * Creates a new Banner model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Banner();

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());

            $imageEn = UploadedFile::getInstance($model, 'image_en');
            $imageAr = UploadedFile::getInstance($model, 'image_ar');

            if ($model->validate()) {
                if ($imageEn) {
                    $imageNameEn = 'banner_' . time() . '_en.' . $imageEn->extension;
                    $imageEn->saveAs(Yii::getAlias('@webroot/uploads/') . $imageNameEn);
                    $model->image_en = $imageNameEn;
                }

                if ($imageAr) {
                    $imageNameAr = 'banner_' . time() . '_ar.' . $imageAr->extension;
                    $imageAr->saveAs(Yii::getAlias('@webroot/uploads/') . $imageNameAr);
                    $model->image_ar = $imageNameAr;
                }

                if ($model->save(false)) {
                    return $this->redirect(['view', 'banner_id' => $model->banner_id]);
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
     * Updates an existing Banner model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $banner_id Banner ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($banner_id)
    {
        $model = $this->findModel($banner_id);
        $oldImageEn = $model->image_en;
        $oldImageAr = $model->image_ar;
        if (Yii::$app->request->isPost && $model->load(Yii::$app->request->post())) {
            $imageEn = UploadedFile::getInstance($model, 'image_en');
            $imageAr = UploadedFile::getInstance($model, 'image_ar');
            if ($imageEn) {
                $imageNameEn = 'banner_' . time() . '_en.' . $imageEn->extension;
                $imageEn->saveAs(Yii::getAlias('@webroot/uploads/') . $imageNameEn);
                $model->image_en = $imageNameEn;
            } else {
                $model->image_en = $oldImageEn;
            }

            if ($imageAr) {
                $imageNameAr = 'banner_' . time() . '_ar.' . $imageAr->extension;
                $imageAr->saveAs(Yii::getAlias('@webroot/uploads/') . $imageNameAr);
                $model->image_ar = $imageNameAr;
            } else {
                $model->image_ar = $oldImageAr;
            }

            if ($model->save(false)) {
                return $this->redirect(['view', 'banner_id' => $model->banner_id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }


    /**
     * Deletes an existing Banner model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $banner_id Banner ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($banner_id)
    {
        $this->findModel($banner_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Banner model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $banner_id Banner ID
     * @return Banner the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($banner_id)
    {
        if (($model = Banner::findOne(['banner_id' => $banner_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
