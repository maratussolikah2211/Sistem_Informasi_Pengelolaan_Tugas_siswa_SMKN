<?php

namespace App\Models;

use App\Models\Nilai;
use App\Models\Materi;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tugas extends Model
{
    protected $keyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->id = (string) Str::orderedUuid();
        });
    }
    protected $table = 'tugas';
    protected $guarded =['id'];
    
    public function materi()
    {
        return $this->belongsTo(Materi::class, 'id_materi');
    }
    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'id_tugas');
    }
}
