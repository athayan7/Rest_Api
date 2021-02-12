<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id';
    protected $fillable = array('list');
}
