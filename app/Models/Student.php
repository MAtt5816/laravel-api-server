<?php
/**
 * Student
 */
namespace app\Models;

/**
 * Student
 */
class Student {

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

    /** @var \app\Models\Location $location */
    public $location;

    /** @var \app\Models\Picture $picture */
    public $picture;

}
