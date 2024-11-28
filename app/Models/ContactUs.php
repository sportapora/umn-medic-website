<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contactUs';

    protected $fillable = [
        'nama_acara', 
        'tanggal_acara',
        'status'
    ];
    public function getStatusAttribute($value)
    {
        switch ($value) {
            case 1:
                return 'Approve';
            case 2:
                return 'Decline';
            case 0:
                return 'Pending';
            default:
                return 'Pending';
        }
    }
}