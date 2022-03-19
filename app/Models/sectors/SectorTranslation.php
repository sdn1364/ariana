<?php

namespace App\Models\sectors;

use Baloot\EloquentHelper;
use Illuminate\Database\Eloquent\Model;

class SectorTranslation extends Model
{

    protected $fillable = ['title', 'content'];


    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
