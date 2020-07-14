<?php

namespace app\modules\adminka\controllers;

use Yii;
use app\modules\adminka\models\Product;
use app\modules\admin\models\ProductSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;
use yii\web\Session;

/**
 * ProductController implements the CRUD actions for Product model.
 */
class ProductController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Product models.
     * @return mixed
     */
    public function actionIndex()
    {
        
        $searchModel = new ProductSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    
    }

    /**
     * Displays a single Product model.
     * @param integer $id
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
     * Creates a new Product model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Product();        
        if ($model->load(Yii::$app->request->post()) && $model ->save()) {
            $form = UploadedFile::getInstance($model, 'img')?: null;
            $form1 = UploadedFile::getInstance($model, 'img1')?: null;
            $form2 = UploadedFile::getInstance($model, 'img2')?: null;
            if($form!=null){
                $name = 'imgPro'.time().'0.'.$form->extension;
                $form->saveAs('images/product/'.$name);
                }else{
                    $name = 'not/nophoto.png';
                }
                if($form1!=null){
                $name1 = 'imgPro'.time().'1.'.$form1->extension;
                $form1->saveAs('images/product/'.$name1);
                }else{
                    $name1 = 'not/nophoto.png';
                }
                if($form2!=null){
                    $name2 = 'imgPro'.time().'2.'.$form2->extension;
                    $form2->saveAs('images/product/'.$name2);
                    }else{
                        $name2 = 'not/nophoto.png';
                    }
            $model->img = $name;
            $model->img1 = $name1;
            $model->img2 = $name2;
            $model ->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Product model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $form = UploadedFile::getInstance($model, 'img') ?: null;
            $form1 = UploadedFile::getInstance($model, 'img1')?: null;
            $form2 = UploadedFile::getInstance($model, 'img2')?: null;
            if($form!=null){
            $name = 'imgPro'.time().'0.'.$form->extension;
            $form->saveAs('images/product/'.$name);
            }else{
                $name = 'not/nophoto.png';
            }
            if($form1!=null){
            $name1 = 'imgPro'.time().'1.'.$form1->extension;
            $form1->saveAs('images/product/'.$name1);
            }else{
                $name1 = 'not/nophoto.png';
            }
            if($form2!=null){
                $name2 = 'imgPro'.time().'2.'.$form2->extension;
                $form2->saveAs('images/product/'.$name2);
                }else{
                    $name2 = 'not/nophoto.png';
                }
            $model->img = $name;
            $model->img1 = $name1;
            $model->img2 = $name2;
            $model ->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Product model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Product model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Product the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Product::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
