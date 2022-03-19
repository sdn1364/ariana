<?php

namespace App\Models\pages;

use App\Models\pageMaker\PmRow;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Page extends Model implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable,InteractsWithMedia;

    public $translatedAttributes = ['title','content'];
    protected $fillable = ['parent_id'];

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }

    public function getParentPages(){
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function getChildPages() {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function pmRows(){
        return $this->hasMany(PmRow::class);
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
