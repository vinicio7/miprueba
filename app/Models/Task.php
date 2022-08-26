<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use JamesDordoy\LaravelVueDatatable\Traits\LaravelVueDatatableTrait;

class Task extends Model
{    
    use LaravelVueDatatableTrait;
    protected $table = 'user';
    protected $fillable = [
        'task_id',
        'description',
        'start_date',
        'end_date',
        'priority',
        'user_id',
    ];

    public $primaryKey  = 'task_id';
    protected $dataTableColumns = [
        'task_id' => [
            'searchable' => false,
        ],
        'description' => [
            'searchable' => true,
        ],
        'start_date' => [
            'searchable' => true,
        ],
        'end_date' => [
            'searchable' => true,
        ],
        'priority' => [
            'searchable' => true,
        ],
        'user_id' => [
            'searchable' => true,
        ],
    ];

    
}
