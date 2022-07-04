<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Sound extends Model
{
    use HasFactory;

    protected $fillable = ['topic_id', 'title', 'content', 'file_path'];

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    public function topicTitle($id)
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }

    public  function uploadFile ($file)
    {
        if ($file == null) return;

        $ext = $file->extension();
        if (! in_array($ext, ['mp3'])) return;

        $fileName = 'sound-' . Str::random(5) . '.' . $ext;
        $path = 'sounds/';
        $file->storeAs($path, $fileName, 'uploads');

        $this->removeFile();
        $this->file_path = 'uploads/' . $path . $fileName;
        $this->save();
    }

    public function  removeFile()
    {
        if ($this->file_path != null) {
            $path = str_replace ('uploads/', '', $this->file_path);
            Storage::disk('uploads')->delete($path);
            $this->file_path = null;
        }
    }

    public  function getFile()
    {
        if ($this->file_path) {
            return asset($this->file_path);
        }
        return asset('assets/file/empty.mp3');
    }
}
