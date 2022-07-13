<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyData extends Model
{
    use HasFactory;
    protected $table = 'monthlydatachanges';
    protected $fillable = [
        'status_1',
        'two_noc_dept',
        'look_ahead_plan',
        'welding_material_booking_1_8_6010_kgs',
        'welding_material_booking_5_32_7010_kgs',
        'welding_material_booking_3_16_7010_kgs',
        'welding_material_booking_cutting_disc_nos',
        'welding_material_booking_grinding_disc_nos',
        'welding_material_booking_power_brush_nos',
        'actual',
        'balance',
        
    ];
}
