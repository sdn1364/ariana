<?php

namespace App\Models\contacts;

use Illuminate\Database\Eloquent\Model;
use function verta;

class ContactTranslation extends Model
{
    protected $fillable= ['title', 'address', 'working_time'];

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
