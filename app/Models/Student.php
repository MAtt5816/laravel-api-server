<?php
/**
 * Student
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Student
 */
class Student extends Model {
    public $timestamps = false;

    protected $fillable = [
        'gender',
        'title',
        'first_name',
        'last_name',
        'email',
        'dob',
        'registered',
        'phone',
        'id_name',
        'id_value',
        'nat'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'dob' => 'date',
        'registered' => 'datetime',
    ];

    /**
     * @return HasOne
     */
    public function location()
    {
            return $this->hasOne(Location::class);
    }

    /**
     * @return HasOne
     */
    public function picture()
    {
        return $this->hasOne(Picture::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($student) {
            $student->location()->delete();
            $student->picture()->delete();
        });
    }
}
