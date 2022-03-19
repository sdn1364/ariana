<?php

namespace App\Models\pageMaker;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PmElement extends Model implements HasMedia,TranslatableContract
{
    use HasFactory, Translatable,InteractsWithMedia;
    public $translatedAttributes = ['content'];
    protected $fillable = ['pm_row_id', 'part', 'sub_type','img', 'padding', 'type', 'relation', 'relation_id', 'icon', 'file', 'link', 'content'];
}
