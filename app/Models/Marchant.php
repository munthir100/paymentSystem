<?php

namespace App\Models;

use App\Filters\MarchantFilters;
use Spatie\MediaLibrary\HasMedia;
use Essa\APIToolKit\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\InteractsWithMedia;

class Marchant extends Model implements HasMedia
{
    use HasFactory,Filterable,InteractsWithMedia;

    protected $default_filters = MarchantFilters::class;

    protected $fillable = [
        'name', 
        'identity_number', 
        'phone', 
        'address', 
        'iban', 
        'email', 
        'commercial_registration_number', 
        'tax_number', 
    ];
    
}
