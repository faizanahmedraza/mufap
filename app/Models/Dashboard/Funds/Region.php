<?php

namespace App\Models\Dashboard\Funds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'tbl_regions';
    protected $primaryKey = 'RegionID';
    public $timestamps = FALSE;
      
    protected $dateFormat = 'U';
    protected $dates = ['CreatedOn','UpdatedOn'];   
}
