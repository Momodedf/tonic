<?php


namespace Tonic;


class NoContentException extends Exception
{
	protected $code = Response::NOCONTENT;
	protected $message = 'There is no content for the request resource';
}
