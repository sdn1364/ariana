<?php

namespace App\Models\tenders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenderApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tender_id',
        'type',
        'status',
        'reason',
        'bank',
        'machinery',
        'registration',
        'executive_record',
        'ads',
        'product-Intro',
        'competence',
        'capacity',
        'chart',
        'records',
        'info',
        'company_info',
        'certificate',
        'product_name',
        'planning',
        'implementation',
        'schedule',
        'material',
        'supply',
        'affordability',
        'documentation',
        'experience',
        'staff',
        'offer',
        'price'
        ];


    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }

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

