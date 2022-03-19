<?php

namespace App\Models\faqs;

use Illuminate\Database\Eloquent\Model;
use function verta;

class FaqTranslation extends Model
{
    protected $fillable = ['question', 'answer'];
    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
