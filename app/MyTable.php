<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyTable extends Model
{
    protected $table = 'myTable';
    protected $guarded = array('id');
    public $timestamps = false;
}
