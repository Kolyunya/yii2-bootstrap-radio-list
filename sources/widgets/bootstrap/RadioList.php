<?php

namespace kolyunya\yii2\widgets\bootstrap;

use yii\widgets\InputWidget;

class RadioList extends InputWidget
{

    public $items = [];

    public $item;

    public $select;

    public $type = 'primary';

    public $size = 'default';

    public function run()
    {

        if ( true === isset ( $this->select ) )
        {
            $this->model[$this->attribute] = $this->select;
        }

        return $this->render
        (
            'RadioList',
            [
                'model' => $this->model,
                'attribute' => $this->attribute,
                'items' => $this->items,
                'item' => $this->item,
            ]
        );

    }

}

