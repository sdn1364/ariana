<?php

namespace App\Models\faqs;

use App\Models\services\Service;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    public $translatedAttributes = ['question', 'answer'];
    protected $fillable = ['service_id'];

    public function getCdateForHumansAttribute()
    {
        return $this->created_at->format('d M Y - h:m');
    }

    public function getUdateForHumansAttribute()
    {
        return $this->updated_at->format('d M Y - h:m');
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
