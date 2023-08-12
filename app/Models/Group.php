<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function chats()
    {
        return $this->hasMany(Chat::class);
    }
    
    public function getByChat(int $limit_count=10)
    {
        return $this->chats()->with('group')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
