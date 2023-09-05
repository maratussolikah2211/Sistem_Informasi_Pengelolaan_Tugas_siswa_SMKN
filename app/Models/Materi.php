<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Materi extends Model
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
    protected $table = 'materi';
    protected $guarded =['id'];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_guru');
    }
    public function tugas()
    {
        return $this->hasMany(Tugas::class, 'id_materi');
    }
}
