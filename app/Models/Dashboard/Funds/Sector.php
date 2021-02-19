<?php

namespace App\Models\Dashboard\Funds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;

    protected $table = 'tbl_sectors';
    protected $primaryKey = 'SectorID';
    const CREATED_AT = 'CreatedOn';
    const UPDATED_AT = 'UpdatedOn';
}
