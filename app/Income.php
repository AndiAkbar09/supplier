<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use AutoNumberTrait;

    protected $table = 'incomes';
    protected $guarded = [];


    public function getAutoNumberOptions()
    {
        return [
            'code' => [
                'format' => function () {
                    return date('d.m.Y') . '/BRG/?'; 
                },
                'length' => 5 
            ]
        ];
    }
}
