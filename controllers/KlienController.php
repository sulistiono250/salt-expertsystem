<?php

namespace app\controllers;

use Yii;
use app\models\Klien;
use app\models\Login;
use app\models\search\KlienSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KlienController implements the CRUD actions for Klien model.
 */
class KlienController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
         Yii::$app->controller->enableCsrfValidation = false;
        
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],

             'access' => [
                        'class' => \yii\filters\AccessControl::className(),
                        'only' => ['index','create','delete','update','informasi','informasi2','informasi3'],
                        'rules' => [
                            // allow authenticated users
                            [
                                'allow' => true,
                                'roles' => ['@'],
                            ],
                            // everything else is denied
                        ],
                    ],   
        ];
    }

    /**
     * Lists all Klien models.
     * @return mixed
     */
    public function actionInformasi()
    {
       

        return $this->render('informasi');
    }
     public function actionInformasi2()
    {
       

        return $this->render('informasi2');
    }

      public function actionInformasi3()
    {
       

        return $this->render('informasi3');
    }
    
    public function actionIndex()
    {
        $searchModel = new KlienSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Klien model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
         return $this->render('view', [
            'model' => $this->findModel($id),
            'model_login'=>Login::find()->where(['username'=>$id])->one(),
        ]);

    }

     public function actionDetail($id)
    {
        return $this->render('view_detail', [
            'model' => $this->findModel($id),
            'model_login'=>Login::find()->where(['username'=>$id])->one(),
        ]);
    }


    public function actionReg($id)
    {
         $this->layout='column5';

        return $this->render('view_klien', [
            'model' => $this->findModel($id),
            'model_login'=>Login::find()->where(['username'=>$id])->one(),
        ]);
    }

    /**
     * Creates a new Klien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
          $model = new Klien();
        
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        $model_login = new Login();
        $model_login->username=$model->id_user;
        $model_login->password=$model->password;
        $model_login->role='user';
        $model_login->save();

               return $this->redirect(['view', 'id' => $model->id_user]);

        } else {
        $dat="admin";
        $data=Klien::find()->where(['<>','id_user',$dat])->orderBy(['id_user'=>SORT_DESC])->one();
        if(count($data)<1){
        $kode="U0001";
        }else{
        $kode= "U". substr( "00000". strval(substr($data->id_user,-4)+1),-4) ;
        }
         $model->id_user=$kode;

            return $this->render('create', [
                'model' => $model,
                'kode'=>$kode,
            ]);
        }
    }

    public function actionNew()
    {
        $this->layout='column5';
        $model = new Klien();
        
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
        $model_login = new Login();
        $model_login->username=$model->id_user;
        $model_login->password=$model->password;
        $model_login->role='user';
        $model_login->save();

               return $this->redirect(['reg', 'id' => $model->id_user]);

        } else {
        $dat="admin";
        $data=Klien::find()->where(['<>','id_user',$dat])->orderBy(['id_user'=>SORT_DESC])->one();
        if(count($data)<1){
        $kode="U0001";
        }else{
        $kode= "U". substr( "00000". strval(substr($data->id_user,-4)+1),-4) ;
        }
         $model->id_user=$kode;

            return $this->render('new', [
                'model' => $model,
                'kode'=>$kode,
            ]);
        }
    }

    /**
     * Updates an existing Klien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model_login=Login::find()->where(['username'=>$id])->one();
        $model->password=$model_login->password;
        $model->repassword=$model_login->password;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model_login->load(Yii::$app->request->post()) && $model_login->save()) {
            return $this->redirect(['detail', 'id' => $model->id_user]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
                'model_login'=>$model_login,
            ]);
        }
    }

    /**
     * Deletes an existing Klien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        Login::find()->where(['username'=>$id])->one()->delete();
        return $this->redirect(['index']);
    }

    /**
     * Finds the Klien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Klien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Klien::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
