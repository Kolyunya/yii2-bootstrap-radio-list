<?php

namespace kolyunya\yii2\widgets\bootstrap;

use yii\widgets\InputWidget;

class RadioList extends InputWidget
{

    public $items = [];

    public $type = 'primary';

    public $size = 'default';

    public function run()
    {

        return $this->render('RadioList');

    }

}

