<?php

echo \yii\helpers\Html::activeRadioList(
    $this->context->model,
    $this->context->attribute,
    $this->context->items,
    [
        'class' => 'btn-group',
        'data-toggle' => 'buttons',
        'item' => function ($index, $label, $name, $checked, $value) {
            $type = 'btn-' . $this->context->type;
            $size = 'btn-' . $this->context->size;
            $checked = $checked ? 'active' : '';
            $class = "btn $type $size $checked";
            return \yii\helpers\Html::radio(
                $name,
                $checked,
                [
                    'value' => $value,
                    'label' => $label,
                    'container' => false,
                    'labelOptions' =>
                    [
                        'class' => $class,
                    ],
                ]
            );
        }
    ]
);
