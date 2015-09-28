<?php
namespace backend\controllers;

use Yii;
use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = 'common\models\Category';

    public function behaviors()
    {
        return 
        \yii\helpers\ArrayHelper::merge(parent::behaviors(), [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
            ],
        ]);
    }
    
    public function actions()
    {
        return array_merge(parent::actions(), [
            'index' => [
                'class' => 'backend\controllers\actions\IndexAction',
                'modelClass' => $this->modelClass,                
            ],
            'view' => [
                'class' => 'backend\controllers\actions\ViewAction',
                'modelClass' => $this->modelClass,                
            ]
        ]);

    }
}
