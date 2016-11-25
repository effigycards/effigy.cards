<?php

namespace App;

/**
 * App\Geo
 *
 * @property integer $id
 * @property string $latitude
 * @property string $longitude
 * @property string $altitude
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Geo whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Geo whereLatitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Geo whereLongitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Geo whereAltitude($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Geo whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Geo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Geo extends BaseModel
{
    /**
     * The attributes that should be hidden when serialized to an array or JSON.
     *
     * @var string[]
     */
    protected $hidden = ['created_at', 'id', 'updated_at'];
}
