<?php

namespace App\Models\Dashboard\Funds;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    use HasFactory;

    protected $table = 'tbl_channels';
    protected $primaryKey = 'ChannelID';
    const CREATED_AT = 'CreatedOn';
    const UPDATED_AT = 'UpdatedOn';

}
