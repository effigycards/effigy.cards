<?php

namespace App;

/**
 * App\Card
 *
 * @property integer $id
 * @property string $name
 * @property string $honorific_prefix
 * @property string $given_name
 * @property string $additional_name
 * @property string $family_name
 * @property string $sort_string
 * @property string $honorific_suffix
 * @property string $nickname
 * @property string $email
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
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $adr_id
 * @property integer $geo_id
 * @property-read \App\Adr $adr
 * @property-read \App\Geo $geo
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereHonorificPrefix($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereGivenName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereAdditionalName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereFamilyName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereSortString($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereHonorificSuffix($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereLogo($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card wherePhoto($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereUid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereCategory($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereTel($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereBday($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereOrg($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereJobTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereRole($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereImpp($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereSex($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereGenderIdentity($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereAnniversary($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereOrganizationName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereOrganizationUnit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereTz($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereRev($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereAdrId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereGeoId($value)
 * @mixin \Eloquent
 */
class Card extends BaseModel
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var string[]
     */
    protected $appends = ['adr', 'geo'];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['email', 'name', 'nickname', 'tel', 'url'];

    /**
     * The attributes that should be hidden when serialized to an array or JSON.
     *
     * @var string[]
     */
    protected $hidden = ['adr_id', 'created_at', 'geo_id', 'id', 'updated_at'];

    /**
     * Get the adr for the card.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function adr()
    {
        // All three of these args are required with `::hasOne()` for some reason...
        return $this->hasOne(Adr::class, 'id', 'adr_id');
    }

    /**
     * Get the geo for the card.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function geo()
    {
        // All three of these args are required with `::hasOne()` for some reason...
        return $this->hasOne(Geo::class, 'id', 'geo_id');
    }

    /**
     * Get the adr for the card for serialization.
     *
     * @return Adr|null
     */
    public function getAdrAttribute()
    {
        if (!isset($this->attributes['adr_id'])) {
            return null;
        }

        return Adr::find($this->attributes['adr_id']);
    }

    /**
     * Get the geo for the card for serialization.
     *
     * @return Geo|null
     */
    public function getGeoAttribute()
    {
        if (!isset($this->attributes['geo_id'])) {
            return null;
        }

        return Geo::find($this->attributes['geo_id']);
    }
}
