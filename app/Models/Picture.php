<?php
/**
 * Picture
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

/**
 * Picture
 */
class Picture extends Model {
    use Searchable;

    /** @var string $large */
    public $large = "";

    /** @var string $medium */
    public $medium = "";

    /** @var string $thumbnail */
    public $thumbnail = "";

}
