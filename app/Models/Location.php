<?php
/**
 * Location
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

/**
 * Location
 */
class Location extends Model {
    use Searchable;

    /** @var int $streetNumber */
    public $streetNumber = 0;

    /** @var string $streetName */
    public $streetName = "";

    /** @var string $city */
    public $city = "";

    /** @var string $state */
    public $state = "";

    /** @var string $country */
    public $country = "";

    /** @var string $postcode */
    public $postcode = "";

    /** @var string $timezone */
    public $timezone = "";

}
