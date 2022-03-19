<?php

namespace App\Models\careers;

use Illuminate\Database\Eloquent\Model;

class CareerTranslation extends Model
{

    protected $fillable = ['title', 'summary', 'section', 'location', 'responsibilities','requirements'];


    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }



}
