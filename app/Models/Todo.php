<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Todo extends Model
{
    //
    protected $connection = 'mongodb';

    protected $collection = 'todos';

    protected $fillable = [
        'title',
        'due_date',
        'bestOption',
        'category',
        'description',
    ];
}
