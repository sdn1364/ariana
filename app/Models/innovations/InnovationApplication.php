<?php

namespace App\Models\innovations;

use App\Models\User;
use Baloot\EloquentHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InnovationApplication extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'fullname', 'organizational_title','company_name','email','phone_number','field', 'usage', 'explanation', 'sample', 'description', 'conditions', 'benefits', 'obstacles', 'user_id', 'reason','status','level'];


    public function user()
    {
        return $this->belongsTo(User::class);
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
