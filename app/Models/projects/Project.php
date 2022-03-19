<?php

namespace App\Models\projects;

use App\Models\sectors\Sector;
use App\Models\services\Service;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Baloot\EloquentHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Project extends Model  implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable,InteractsWithMedia;

    public $translatedAttributes = ['title', 'background', 'roles', 'location', 'client'];
    protected $fillable = ['start_date', 'due_date', 'progress', 'long', 'lat', 'sector_id', 'service_id', 'brochure'];

    protected $dates = ['start_date','due_date'];

    protected $cast = [
        'start_date'=> 'date',
        'due_date'=> 'date'
    ];

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }

    public function start_date_fa()
    {
        return verta($this->start_date)->format('%B %d، %Y - h:i');
    }

    public function due_date_fa()
    {
        return verta($this->due_date)->format('%B %d، %Y - h:i');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
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
