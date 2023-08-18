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
        
    public function formatDayOfWeek(int $day_of_week)
    {
        switch($day_of_week){
        case 0:
            return '月曜日';
        case 1:
            return '火曜日';
        case 2:
            return '水曜日';
        case 3:
            return '木曜日';
        case 4:
            return '金曜日';
        case 5:
            return '土曜日';
        }
    }
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
