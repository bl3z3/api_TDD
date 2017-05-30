<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Fruit;

class Fruit extends Model
{
    protected $table = 'fruits';

    protected $fillable = [
    	'name',
    	'color',
    	'weight',
    	'delicious'
    ];

    protected $primaryKey = 'id';
}
