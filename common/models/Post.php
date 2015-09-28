<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Post extends ActiveRecord
{
    public $images = [];
    
    public function rules()
    {
        return [
            [['author_id',
            'date_created',
            'content',
            'title',
            'status',
            'date_modified',
            'image',
            'category_id'], 'required']            
        ];
    }
 
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'author_id' => 'Author ID',
            'date_created' => 'Created at',
            'content' => 'Content',
            'title' => 'Title',
            'status' => 'Status',
            'date_modified' => 'Updated at',
            'category_id' => 'Category ID'
        ];
    }
    
    public function getImages()
    {        
        return $this->hasMany(Image::className(), ['film_id' => 'id']);
    }
}


