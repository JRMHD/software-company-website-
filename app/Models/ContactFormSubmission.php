<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactFormSubmission extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'subject',
        'email',
        'phone',
        'message',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the formatted phone number.
     *
     * @return string
     */
    public function getFormattedPhoneAttribute()
    {
        // This is a simple formatting example. Adjust as needed.
        return preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "($1) $2-$3", $this->phone);
    }

    /**
     * Scope a query to only include submissions from a specific email.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $email
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFromEmail($query, $email)
    {
        return $query->where('email', $email);
    }

    /**
     * Scope a query to only include submissions created after a given date.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  string  $date
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCreatedAfter($query, $date)
    {
        return $query->where('created_at', '>', $date);
    }

    /**
     * Get a summary of the submission.
     *
     * @return string
     */
    public function getSummaryAttribute()
    {
        return substr($this->message, 0, 100) . (strlen($this->message) > 100 ? '...' : '');
    }
}
