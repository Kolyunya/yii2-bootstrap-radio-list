<?php

namespace kolyunya\yii2\widgets\bootstrap;

use yii\widgets\InputWidget;

class RadioList extends InputWidget
{

    public $items = [];

    public $select = null;

    public $type = 'primary';

    public $size = 'default';

    public function run()
    {

        if ( isset($this->select) )
        {
            $this->model[$this->attribute] = $this->select;
        }

        return $this->render('RadioList');

    }

}

