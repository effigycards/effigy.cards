<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Adr
 *
 * @property integer $id
 * @property string $post_office_box
 * @property string $extended_address
 * @property string $street_address
 * @property string $locality
 * @property string $region
 * @property string $postal_code
 * @property string $country_name
 * @property string $label
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr wherePostOfficeBox($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereExtendedAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereStreetAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereLocality($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr wherePostalCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereCountryName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereLabel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Adr whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Adr extends Model
{

}
