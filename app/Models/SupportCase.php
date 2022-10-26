<?php

namespace App\Models;

use App\Traits\HasReplies;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportCase extends Model
{
    use HasFactory, HasReplies;
}
