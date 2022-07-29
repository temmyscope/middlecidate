<?php

namespace App\Enums;

enum HttpStatus: int {

    case OK = 200; 
    case CREATED = 201; 
    case DELETED = 204; 
    case UPDATED = 205;

    case BAD_REQUEST = 400; 
    case UNAUTHORIZED = 401; 
    case PAYMENT_REQUIRED = 402; 
    case BLOCKED = 403; 
    case NOT_FOUND = 404; 
    case METHOD_NOT_ALLOWED = 405; 
    case VALIDATION_ERROR = 422; 
    case LIMIT_EXCEED = 429; 

    case INTERNAL_ERROR = 500;
    case SERVER_NOT_READY = 503;

    public function status(): bool { 
        return ($this->value > 299);
    }

    public function message(): string { 
        return match($this) 
        {
            self::OK => 'OK',   
            self::CREATED => 'CREATED',   
            self::DELETED => 'DELETED', 
            self::UPDATED => 'UPDATED',
            self::BAD_REQUEST => 'BAD REQUEST',
            self::UNAUTHORIZED => 'UNAUTHORIZED', 
            self::PAYMENT_REQUIRED => 'PAYMENT REQUIRED',
            self::BLOCKED => 'BLOCKED',
            self::NOT_FOUND => 'NOT FOUND',
            self::METHOD_NOT_ALLOWED => 'METHOD NOT ALLOWED',
            self::VALIDATION_ERROR => 'VALIDATION ERROR',
            self::LIMIT_EXCEED => 'LIMIT EXCEEDED',
            self::INTERNAL_ERROR => 'INTERNAL ERROR',
            self::SERVER_NOT_READY => 'SERVER NOT READY',
            default => 'Another Problem'
        };
    }
    
}