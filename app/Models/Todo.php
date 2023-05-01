<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory, SoftDeletes;

    /* create */
    protected $fillable = ['title', 'description', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
