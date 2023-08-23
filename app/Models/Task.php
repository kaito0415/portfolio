<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $fillable = [
        'lecture_id',
        'name',
        'limit',
        ];
    
    public function lecture()
    {
        return $this->belongsTo(Lecture::class);
    }
}
