<?php

namespace App\Models\contacts;

use Astrotomic\Translatable\Translatable;
use Baloot\EloquentHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes =  ['title', 'address', 'working_time','section'];
    protected $fillable = ['lat', 'long', 'zip', 'phone', 'fax'];

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

}
