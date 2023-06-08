<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'apis';
    protected $fillable = [
        'name','phone'
    ];
}
