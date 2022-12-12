<?php

namespace App;

use App\Models\Visitor;
use App\Traits\CreatedUpdatedDeletedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visit extends Model
{

    use SoftDeletes;
    use CreatedUpdatedDeletedBy;

    protected $fillable = [
        "visitor_id",
        "reason",
        "observaciones",
        "date",
        "time_entry",
        "time_departure",
    ];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
