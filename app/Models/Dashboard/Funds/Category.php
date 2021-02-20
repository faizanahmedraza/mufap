<?php

namespace App\Models\Dashboard\Funds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tbl_categories';
    protected $primaryKey = "CategoryID";
    public $timestamps = FALSE;
      
    protected $dateFormat = 'U';
    protected $dates = ['CreatedOn','UpdatedOn'];    
}
