<?php

use app\assets\AppAsset;
namespace frontend\component;

class MenuHelper
{

    public static function getMenu()
    {
        $parentId = 0;
        $result = static::getMenuRecrusive($parentId);
        return $result;
    }

    private static function getMenuRecrusive($parentId)
    {
        $items = \common\models\Category::find()
            ->where(['parent_id' => $parentId])
            ->asArray()
            ->all();
        /*
        $result = []; 

        foreach ($items as $item) {
            $result[] = [
                    'label' => $item['name'],
                    'url' => ['#'],
                    'items' => static::getMenuRecrusive($item['id']),
                    
                ];
        }
        return $result;
         * 
         */
        
        return $items;
    }

    

}