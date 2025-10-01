<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Minimal User model to satisfy Laravel's requirements
    // This model exists only to prevent errors, no authentication functionality
    
    protected $fillable = [];
    
    // Disable timestamps if no users table exists
    public $timestamps = false;
    
    // Override authentication methods to prevent errors
    public function getAuthIdentifierName()
    {
        return 'id';
    }
    
    public function getAuthIdentifier()
    {
        return null;
    }
    
    public function getAuthPassword()
    {
        return null;
    }
    
    public function getRememberToken()
    {
        return null;
    }
    
    public function setRememberToken($value)
    {
        // Do nothing
    }
    
    public function getRememberTokenName()
    {
        return null;
    }
}
