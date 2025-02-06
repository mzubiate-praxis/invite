<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCodes extends Model
{
    use HasFactory;

    protected $table = 'user_codes';
    protected $fillable = [
        'code_id',
        'name',
        'assistents'
    ];

    public function code() {
        return $this->hasOne(Codes::class, 'id', 'code_id');
    }
}
