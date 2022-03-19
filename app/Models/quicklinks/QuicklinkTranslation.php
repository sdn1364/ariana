<?php

namespace App\Models\quicklinks;

use Illuminate\Database\Eloquent\Model;

class QuicklinkTranslation extends Model
{
    protected $fillable = ['title', 'text'];
    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
