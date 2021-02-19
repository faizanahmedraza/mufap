<?php

namespace App\Models\Dashboard\Funds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    protected $table = 'tbl_investors';
    protected $primaryKey = 'InvestorID';
    const CREATED_AT = 'CreatedOn';
    const UPDATED_AT = 'UpdatedOn';

}
