<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DatabaseUser;

class logCampaign extends Model
{
    use HasFactory;
    protected $table = 'log_campaigns';
    protected $guarded = [''];
    protected $fillable = [
        'campaign_id',
        'database_user_id',
        'phone',
        'email',
        'status'
    ];
}
