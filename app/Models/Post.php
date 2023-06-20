<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['post_title','post_desc','user_id'];

    public function pizza() {
        return $this->belongsTo(User::class,'user_id');
    }
}
