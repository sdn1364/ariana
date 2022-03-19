<?php

namespace App\Models\innovations;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use function verta;

class Innovation extends Model implements HasMedia, TranslatableContract
{
    use HasFactory, Translatable, InteractsWithMedia;

    public $translatedAttributes = ['text'];
    protected $fillable = ['link'];

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }

    public function isActive(): bool
    {
        if ($this->status == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getPrevious($id)
    {
        return $this->where('id','<', $id)->get();
    }
}
