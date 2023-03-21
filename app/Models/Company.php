<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'company_name',
        'company_code',
        'vat_code',
        'address',
        'city',
        'country',
        'postal_code',
        'bank_account',
        'bank_name',
        'company_manager',
    ];
}
