<?php


namespace Tonic;


class NoContentException extends Exception
{
	protected $code = 204;
	protected $message = 'There is no content for the request resource';
}
