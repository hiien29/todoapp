<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;
    protected $table = 'folders';

    protected $fillable =[
        'title'
    ];

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
