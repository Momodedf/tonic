<?php

namespace Tonic;

class NotFoundException extends Exception
{
    protected $code = Response::NOTFOUND;
    protected $message = 'The server has not found anything matching the Request-URI';
}
