<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'code',
        'capital',
        'region',
        'currency',
        'population',
        'flag'
    ];

    public function weather()
    {
        return $this->hasOne(WeatherData::class);
    }

    public function economy()
    {
        return $this->hasOne(EconomicData::class);
    }

    public function currencyRate()
    {
        return $this->hasOne(CurrencyRate::class);
    }

    public function risk()
    {
        return $this->hasOne(RiskScore::class);
    }

    public function news()
    {
        return $this->hasMany(NewsCache::class);
    }

    public function ports()
    {
        return $this->hasMany(Port::class);
    }

    public function watchlists()
    {
        return $this->hasMany(Watchlist::class);
    }
}