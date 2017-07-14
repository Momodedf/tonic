<?php

namespace Tonic;

class UnsupportedMediaTypeException extends Exception
{
    protected $code = Response::UNSUPPORTEDMEDIATYPE;
    protected $message = 'The server is refusing to service the request because the entity of the request is in a format not supported by the requested resource for the requested method';
}
