<?php

namespace App\Models\careers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    use HasFactory;

    protected $fillable = ['fullname', 'email', 'phone', 'photo', 'resume', 'career_id'];

    public function career()
    {
        return $this->belongsTo(Career::class, 'id', 'career_id');
    }

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }
}
