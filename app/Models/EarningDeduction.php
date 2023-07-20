<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EarningDeduction extends Model
{
    use HasFactory;
    protected $table = 'earnings_deductions';
    protected $fillable = ['name', 'amount', 'type'];

}
