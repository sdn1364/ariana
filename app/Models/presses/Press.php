<?php

namespace App\Models\presses;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Press extends Model implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable,InteractsWithMedia;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['tags','subject'];

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }


    public function created_at_human()
    {
        return app()->isLocale('fa') ? verta($this->created_at)->format('%B، %Y'): $this->created_at->format('d M');
    }


    public function isActive(): Bool
    {
        if($this->status == 1){
            return true;
        }else{
            return false;
        }
    }
}
