<?php

namespace Tonic;

class UnauthorizedException extends Exception
{
    protected $code = Response::UNAUTHORIZED;
    protected $message = 'The request requires user authentication';
}
