<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'password',
        ];
    
    public function confirm(int $user_id, int $group_id, string $check_password, string $collate_password, User $user)
    {
        if($check_password == $collate_password && !(null !== ($user->groups()->where('groups.id', $group_id)->get()))){
            Group::find($group_id)->users()->attach($user_id);
            return "/groups/$group_id/chat/$user_id";
        }else{
            return "/groups/entry/$user_id?miss=0";
        }
    }
    
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
