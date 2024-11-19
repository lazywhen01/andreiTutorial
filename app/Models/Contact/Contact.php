<?php

namespace App\Models\Contact;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasUuids;
    protected $fillable = [
        'name', 
        'email', 
        'phone_number'
    ];
}
