<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name'];

    protected $casts = [
        'updated_at' => 'date:Y-m-d',
        'created_at' => 'date:Y-m-d',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class)->orderBy('priority');
    }
}
