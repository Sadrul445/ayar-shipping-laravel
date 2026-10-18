<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class CrewApplication extends Model
{
    protected $fillable = ['vacancy_id', 'full_name', 'email', 'phone', 'nationality', 'position', 'experience_years', 'message', 'cv_path', 'certificates', 'status'];
    protected $casts = ['certificates' => 'array'];
    public function vacancy(): BelongsTo { return $this->belongsTo(Vacancy::class); }
}
