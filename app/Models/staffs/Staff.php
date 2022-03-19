<?php

namespace App\Models\staffs;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Staff extends Model implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    public $translatedAttributes = ['name', 'description','position'];
    protected $fillable = ['link','type'];

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
