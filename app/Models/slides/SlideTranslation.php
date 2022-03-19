<?php

namespace App\Models\slides;

use Illuminate\Database\Eloquent\Model;

class SlideTranslation extends Model
{
    protected $fillable = ['title'];
    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
