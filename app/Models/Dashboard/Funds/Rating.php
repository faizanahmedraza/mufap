<?php

namespace App\Models\Dashboard\Funds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'tbl_ratings';
    protected $primaryKey = 'RatingID';
    public $timestamps = FALSE;
      
    protected $dateFormat = 'U';
    protected $dates = ['CreatedOn','UpdatedOn'];   
}
