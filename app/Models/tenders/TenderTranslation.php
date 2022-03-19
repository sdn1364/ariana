<?php

namespace App\Models\tenders;

use Illuminate\Database\Eloquent\Model;

class TenderTranslation extends Model
{
    protected $fillable = ['title', 'brief', 'roles'];
    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
