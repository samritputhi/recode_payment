<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
 
class History extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}