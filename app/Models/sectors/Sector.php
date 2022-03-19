<?php

namespace App\Models\sectors;

use App\Models\projects\Project;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Sector extends Model implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    public $translatedAttributes = ['title', 'content'];
    protected $fillable = ['parent_id','type'];


    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }


    public function getParentSectors(){
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function getChildSectors() {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function isActive(): Bool
    {
        if($this->status == 1){
            return true;
        }else{
            return false;
        }
    }

	public function project(){
        return $this->hasOne(Project::class,'id','sector_id');
    }
}
