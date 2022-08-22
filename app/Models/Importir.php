<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Importir extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'address', 'country', 'phone_number', 'faximile', 'email', 'website', 'product', 'contact_person'
    ];
}
