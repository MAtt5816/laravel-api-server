<?php
/**
 * Location
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Location
 */
class Location extends Model {
    protected $primaryKey = 'student_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'student_id',
        'street_number',
        'street_name',
        'city',
        'state',
        'country',
        'postcode',
        'timezone',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
