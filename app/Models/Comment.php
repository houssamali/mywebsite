<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table="comments";
    protected $fillable=[
        'user_id',
        'name',
        'email',
        'comment_ar',
        'comment_en',
    ];


    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
