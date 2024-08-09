<?php
/**
 * Student
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Laravel\Scout\Searchable;

/**
 * Student
 */
class Student extends Model {
    use Searchable;

    /** @var int $id */
    public $id = 0;

    /** @var string $gender */
    public $gender = "";

    /** @var string $title */
    public $title = "";

    /** @var string $firstName */
    public $firstName = "";

    /** @var string $lastName */
    public $lastName = "";

    /** @var string $email */
    public $email = "";

    /** @var \DateTime $dob date of birth*/
    public $dob;

    /** @var \DateTime $registered date of registration*/
    public $registered;

    /** @var string $phone */
    public $phone = "";

    /** @var string $idName national identification number type*/
    public $idName = "";

    /** @var string $idValue national identification number value*/
    public $idValue = "";

    /** @var string $nat nationality short code*/
    public $nat = "";

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
}
