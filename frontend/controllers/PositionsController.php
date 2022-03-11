<?php

namespace frontend\controllers;

use frontend\modules\models\Positions;
use frontend\modules\models\PositionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use frontend\modules\models\SalaryGrades;

/**
 * PositionsController implements the CRUD actions for Positions model.
 */
class PositionsController extends Controller
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
     * Lists all Positions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PositionsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Positions model.
     * @param string $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Positions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Positions();
        $salary_grades = ArrayHelper::map(SalaryGrades::find()->all(), 'id', 'salary_grade_number');

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {

                $id_generator = microtime(true)*10000;
                $id_generator = $this->id_generator.rand(1000,9999).rand(1000,9999);
                $model->id = $id_generator;

                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);

                /*return $this->render('create', [
                    'model' => $model,
                    'salary_grades' => $salary_grades,
                    'notification' => array("color"=>"success","message"=>$stored_position_number." Was successfully added"),
                ]);*/
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
            'salary_grades' => $salary_grades,
            //'notification' => array(),
        ]);
    }

    /**
     * Updates an existing Positions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $salary_grades = ArrayHelper::map(SalaryGrades::find()->all(), 'id', 'salary_grade_number');

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            /*return $this->render('create', [
                'model' => $model,
                'salary_grades' => $salary_grades,
                'notification' => array("color"=>"success","message"=>$stored_position_number." Was successfully added"),
            ]);*/
        }

        return $this->render('update', [
            'model' => $model,
            'salary_grades' => $salary_grades,
            //'notification' => array(),
        ]);
    }

    /**
     * Deletes an existing Positions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Positions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id ID
     * @return Positions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Positions::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
