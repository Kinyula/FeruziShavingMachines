<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutText extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'about_text'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
