<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    use HasFactory;

    protected $fillable = ['topic_id', 'title', 'content', 'file_path'];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
}
