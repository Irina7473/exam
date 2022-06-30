<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

//    protected $primaryKey = 'id';
//    protected $table = 'topics';
    protected $fillable = ['name'];

    public function sounds()
    {
        return $this->hasMany(Sound::class);
    }
}

