<?php

namespace App\Models;

use App\Traits\CreatedUpdatedDeletedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visitor extends Model
{
    use SoftDeletes;
    use CreatedUpdatedDeletedBy;

    protected $fillable = [
        "firstName",
        "lastName",
        "email",
        "address",
        "phone_number",
        "cedula",
        "nationality",
        "state_id",
        "city_id",
        "type",
    ];
}
