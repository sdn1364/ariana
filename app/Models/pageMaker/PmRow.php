<?php

namespace App\Models\pageMaker;

use App\Models\pages\Page;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PmRow extends Model
{
    use HasFactory;
    protected $fillable = ['page_id', 'parent_id', 'size','part'];

    public function getParents(){
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function getChildren() {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function getElements()
    {
        return $this->hasMany(PmElement::class);
    }

    public function page(){
        return $this->belongsTo(Page::class);
    }
}
