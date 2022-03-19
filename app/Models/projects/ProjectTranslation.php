<?php

namespace App\Models\projects;

use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends Model
{
    protected $fillable = ['title', 'background', 'roles', 'location', 'client'];
    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
