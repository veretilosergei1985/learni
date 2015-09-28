<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{
    public $images = [];
    
    public function rules()
    {
        return [
            [['parent_id', 'name'], 'required'],            
        ];
    }
 
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
        ];
    }
    
    
}


