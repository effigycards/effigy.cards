<?php

namespace App;

use App\Traits\GetsGeo;
use App\Traits\NotNullOrEmpty;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property string $honorific_prefix
 * @property string $given_name
 * @property string $additional_name
 * @property string $family_name
 * @property string $sort_string
 * @property string $honorific_suffix
 * @property string $nickname
 * @property string $logo
 * @property string $photo
 * @property string $url
 * @property string $uid
 * @property string $category
 * @property string $tel
 * @property string $note
 * @property string $bday
 * @property string $key
 * @property string $org
 * @property string $job_title
 * @property string $role
 * @property string $impp
 * @property string $sex
 * @property string $gender_identity
 * @property string $anniversary
 * @property string $organization_name
 * @property string $organization_unit
 * @property string $tz
 * @property string $rev
 * @property string $post_office_box
 * @property string $extended_address
 * @property string $street_address
 * @property string $locality
 * @property string $region
 * @property string $postal_code
 * @property string $country_name
 * @property string $label
 * @property string $latitude
 * @property string $longitude
 * @property string $altitude
 * @property-read array $adr
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $readNotifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereHonorificPrefix($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereGivenName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAdditionalName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereFamilyName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereSortString($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereHonorificSuffix($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLogo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCategory($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereTel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereBday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereOrg($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereJobTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRole($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereImpp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereSex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereGenderIdentity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAnniversary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereOrganizationName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereOrganizationUnit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereTz($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePostOfficeBox($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereExtendedAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereStreetAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLocality($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRegion($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePostalCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCountryName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLabel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAltitude($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use GetsGeo, Notifiable, NotNullOrEmpty;

    /**
     * The accessors to append to the model's array form.
     *
     * @var string[]
     */
    protected $appends = ['adr'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'altitude',
        'country_name',
        'created_at',
        'extended_address',
        'id',
        'label',
        'latitude',
        'locality',
        'longitude',
        'password',
        'postal_code',
        'post_office_box',
        'region',
        'remember_token',
        'street_address',
        'updated_at'
    ];

    /**
     * Get the adr for the card for serialization.
     *
     * @return array
     */
    public function getAdrAttribute()
    {
        $adr        = [];
        $properties = [
            'country_name',
            'extended_address',
            'label',
            'locality',
            'postal_code',
            'post_office_box',
            'region',
            'street_address'
        ];

        $adr['geo'] = $this->getGeo();

        foreach ($properties as $property) {
            $adr[$property] = $this->attributes[$property];
        }

        return static::filterNotNullOrEmpty($adr);
    }

    /**
     * Convert the model instance to an array.
     *
     * @return array
     */
    public function toArray()
    {
        $attributes = parent::toArray();

        return static::filterNotNullOrEmpty($attributes);
    }
}
