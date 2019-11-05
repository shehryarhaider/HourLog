<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'client';
    protected $fillable = ['name','contact_no'];
}
