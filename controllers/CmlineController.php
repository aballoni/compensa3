<?php

namespace app\controllers;

use Yii;
use app\models\Cmline;
use app\models\CmlineSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CmlineController implements the CRUD actions for Cmline model.
 */
class CmlineController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Cmline models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CmlineSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Cmline model.
     * @param integer $id
     * @param integer $cm_id
     * @return mixed
     */
    public function actionView($id, $cm_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $cm_id),
        ]);
    }

    /**
     * Creates a new Cmline model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cmline();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'cm_id' => $model->cm_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cmline model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $cm_id
     * @return mixed
     */
    public function actionUpdate($id, $cm_id)
    {
        $model = $this->findModel($id, $cm_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'cm_id' => $model->cm_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Cmline model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $cm_id
     * @return mixed
     */
    public function actionDelete($id, $cm_id)
    {
        $this->findModel($id, $cm_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Cmline model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $cm_id
     * @return Cmline the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $cm_id)
    {
        if (($model = Cmline::findOne(['id' => $id, 'cm_id' => $cm_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
