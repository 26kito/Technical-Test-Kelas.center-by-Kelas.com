<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'price', 'monthly_payment'];

    public function features()
    {
        return $this->hasMany(PackageFeature::class);
    }
}
