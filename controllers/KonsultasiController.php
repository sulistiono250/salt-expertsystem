<?php

namespace app\controllers;

use Yii;
use app\models\Konsultasi;
use app\models\Rule1;
use app\models\Klien;
use app\models\search\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KonsultasiController implements the CRUD actions for Konsultasi model.
 */
class KonsultasiController extends Controller
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
                        'only' => ['index','create','view','delete','update','detail','home'],
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
     * Lists all Konsultasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

     public function actionDetail()
    {
        $searchModel = new PostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
       $dataProvider->query->where(['id_user'=>Yii::$app->user->identity->username]);
        return $this->render('index2', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionMulai()
    {
       

        return $this->render('mulai');
    }

    
    
    public function actionHasil()
    {
        $request = Yii::$app->request;


        $user=Yii::$app->user->identity->username;
        $tgl=date('Y-m-d');
        $warna=trim($request->post("warna"));
        $rasa=trim($request->post("rasa"));
        $bentuk=trim($request->post("bentuk"));
        $model = new Konsultasi();   
        $model->id_user=$user;
        $model->tgl=$tgl;
        $model->jenis='Jenis Tidak Ada';
        $model->kandungan='Kandungan Tidak Ada';
        $model->ciri=$warna."|".$rasa."|".$bentuk;

        $rule=Rule1::find()->where(['and',['=','warna',$warna],['=','rasa',$rasa],['=','bentuk',$bentuk]])->one();
        if(count($rule)>0){
        $model->hasil=$rule->hasil;    
        $model->kandungan=$rule->kandungan;
        $model->jenis=$rule->jenis;
        }else{
            $model->hasil="Garam Dengan Ci-ciri Tersebut Tidak Ada";
        }
        
        $model->save(false);
        $nama="";
        $alamat="";
        $telp="";
        $pekerjaan="";
        $klien=klien::find()->where(['=','id_user',$user])->one();
        if(count($klien)>0){
        $nama=$klien->nama;
        $alamat=$klien->alamat;
        $telp=$klien->telp;
        $pekerjaan=$klien->pekerjaan;
        }

        return $this->render('hasil',[
            'user'=>$user,
            'nama'=>$nama,
            'alamat'=>$alamat,
            'telp'=>$telp,
            'pekerjaan'=>$pekerjaan,
            'model'=>$model,
             

            ]);
    }

    /**
     * Displays a single Konsultasi model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

     public function actionHome()
    {
        return $this->render('home');
    }

    /**
     * Creates a new Konsultasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Konsultasi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Konsultasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Konsultasi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Konsultasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Konsultasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Konsultasi::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
