<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class advertisement extends Model
{
    use HasFactory;
    protected $table = 'advertisement';
    protected $primeryKey = 'aid';
}
