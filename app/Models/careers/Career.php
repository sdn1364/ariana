<?php

namespace App\Models\careers;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Career extends Model implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    public $translatedAttributes = ['title', 'summary', 'section', 'location', 'responsibilities','requirements'];

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }

    public function isActive(): Bool
    {
        if($this->status == 1){
            return true;
        }else{
            return false;
        }
    }
	    public function careerApplication(){
        return $this->hasMany(CareerApplication::class);
    }
}
