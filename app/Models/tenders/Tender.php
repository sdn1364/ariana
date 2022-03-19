<?php

namespace App\Models\tenders;

use App\Models\sectors\Sector;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Baloot\EloquentHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Tender extends Model implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    public $translatedAttributes = ['title', 'brief', 'roles'];
    protected $fillable = ['code', 'deadline', 'progress', 'sector_id', 'tags', 'document', 'type'];

    protected $dates =['deadline'];
    protected $cast=['deadline'=>'date'];

    public function isActive(): Bool
    {
        if($this->status == 1){
            return true;
        }else{
            return false;
        }
    }

    public function tenderApplications(){
        return $this->hasMany(TenderApplication::class, 'tender_id', 'id');
    }

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }

    public function sector(){
        return $this->belongsTo(Sector::class);
    }
}
