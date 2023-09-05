<?php

namespace App\Models;

use App\Models\Siswa;
use App\Models\Tugas;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nilai extends Model
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
    protected $table = 'nilai';
    protected $guarded =['id'];

    public function tugas()
    {
        return $this->belongsTo(Tugas::class, 'id_tugas');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
}
