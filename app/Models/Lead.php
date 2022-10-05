<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'step',
        'full_name',
        'first_name',
        'last_name',
        'violations',
        'email',
        'mobile',
        'described_as',
        'age',
        'race',
        'gender',
        'company_name',
        'medical_conditions',
        'specific_memo',
        'employee_total',
        'price',
        'workplace_hostile',
        'workplace_discriminated',
        'workplace_remarks',
        'annual_compensation',
        'preferred_method',
        'utm_source',
        'utm_campaign',
        'utm_content',
        'utm_medium',
        'gclid',
    ];
}
