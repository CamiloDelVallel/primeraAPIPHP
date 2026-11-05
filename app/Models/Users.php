<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'name',
        'gender_id',
        'country_id',
        'document_type_id',
];

}
