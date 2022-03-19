<?php

namespace App\Models;

use App\Models\innovations\InnovationApplication;
use App\Models\tenders\TenderApplication;
use Baloot\EloquentHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable implements HasMedia
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;
    use HasRoles;
    use InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'company'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    public function getFullnameAttribute()
    {
        return $this->name . ' ' . $this->lastname;
    }
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    public function getCdateForHumansAttribute()
    {
        return $this->created_at->format('d M Y - h:m');
    }

    public function getUdateForHumansAttribute()
    {
        return $this->updated_at->format('d M Y - h:m');
    }

    public function innovationApllication()
    {
        return $this->hasMany(InnovationApplication::class);
    }
    public function tenderApplications(){
        return $this->hasMany(TenderApplication::class);
    }
}
