<?php

namespace App\Models\innovations;

use Illuminate\Database\Eloquent\Model;

class InnovationTranslation extends Model
{
    protected $fillable = ['text'];
    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
