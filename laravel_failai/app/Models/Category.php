<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * @property int $id
     * @property string $Name
     * @property Carbon $deleted_at
     * @property Carbon $created_at
     * @property Carbon $updated_at
     */
    use HasFactory;
}
