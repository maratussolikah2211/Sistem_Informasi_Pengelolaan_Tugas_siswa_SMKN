<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


use App\Models\Siswa;
use App\Models\User;

class Kelas extends Model
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

    protected $table = 'kelas';
    protected $guarded =['id'];

    public function siswa()
    {
        return $this->hasMany(Siswa::class,'id_kelas');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_guru');
    }
    
    
}
