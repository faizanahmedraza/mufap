<?php

namespace App\Models\Dashboard\Funds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;

    protected $table = 'tbl_investors';
    protected $primaryKey = 'InvestorID';
    public $timestamps = FALSE;
      
    protected $dateFormat = 'U';
    protected $dates = ['CreatedOn','UpdatedOn'];   
}
