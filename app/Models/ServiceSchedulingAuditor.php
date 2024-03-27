<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSchedulingAuditor extends Model
{
    use HasFactory;

    protected $fillable = [
        "service_scheduling_id",
        "action_trigged_by_user_with_id",
        "action",
        "reason"
    ];

    protected $table = "service_scheduling_auditors";
}
