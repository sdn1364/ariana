<?php

namespace App\Models\Histories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['content'];

    public function created_at_fa()
    {
        return verta($this->created_at)->format('%B %d، %Y - h:i');
    }

    public function updated_at_fa()
    {
        return verta($this->updated_at)->format('%B %d، %Y - h:i');
    }

    public function isActive(): Bool
    {
        if($this->status == 1){
            return true;
        }else{
            return false;
        }
    }
}
