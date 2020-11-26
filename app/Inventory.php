<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use AutoNumberTrait; 

    protected $table = 'inventorys';
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
