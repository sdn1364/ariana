<?php

namespace App\Models\services;

use App\Models\Questioner;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Service extends Model implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable,InteractsWithMedia;
    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['status'];

    public function getCdateForHumansAttribute()
    {
        return $this->created_at->format('d M Y - h:m');
    }

    public function getUdateForHumansAttribute()
    {
        return $this->updated_at->format('d M Y - h:m');
    }

    public function questioner(){
       return $this->hasOne(Questioner::class);
    }

}
