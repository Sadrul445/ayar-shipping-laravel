<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Vacancy extends Model
{
    protected $fillable = ['title', 'vessel_type', 'location', 'employment_type', 'description', 'requirements', 'closing_date', 'is_active'];
    protected $casts = ['closing_date' => 'date', 'is_active' => 'boolean'];
    public function applications(): HasMany { return $this->hasMany(CrewApplication::class); }
}
