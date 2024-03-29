<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCompanyRelationship extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
        'relationship_id',
        'joined_at',
        'left_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function relationship()
    {
        return $this->belongsTo(Relationship::class);
    }
}
