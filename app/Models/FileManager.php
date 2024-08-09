<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileManager extends Model
{
    use HasFactory;

    protected $table = 'file_managers';

    protected $fillable = ['SubTask_id', 'user_id', 'file_name', 'file_path'];

    public function subTask()
    {
        return $this->belongsTo(SubTask::class, 'SubTask_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
