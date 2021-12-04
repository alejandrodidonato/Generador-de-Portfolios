<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name_service',
        'user_id',
        'description_service',
        'icon',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
