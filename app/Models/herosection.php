<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class herosection extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'subtitle', 'background'];
    
    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            // jika ada data baru di background dan ada data lama di background, hapus data background yang lama
            if($model->isDirty('background') && $model->getOriginal('background') !== null) {
                Storage::disk('public')->delete($model->getOriginal('background'));
            }
        });
    }
}

