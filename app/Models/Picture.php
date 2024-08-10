<?php
/**
 * Picture
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Picture
 */
class Picture extends Model {
    protected $primaryKey = 'student_id';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'student_id',
        'large',
        'medium',
        'thumbnail',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
