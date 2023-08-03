<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'period',
        'day_of_week',
        'classroom',
        'teacher',
        'credit',
        ];
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
