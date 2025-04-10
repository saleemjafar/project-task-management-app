<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name', 'priority', 'project_id'];

    protected $casts = [
        'priority' => 'integer',
        'updated_at' => 'date:Y-m-d',
        'created_at' => 'date:Y-m-d',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
