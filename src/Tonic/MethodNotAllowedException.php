<?php

namespace Tonic;

class MethodNotAllowedException extends Exception
{
    protected $code = Response::METHODNOTALLOWED;
    protected $message = 'The HTTP method specified in the Request-Line is not allowed for the resource identified by the Request-URI';
}
