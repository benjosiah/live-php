<?php


namespace Core\exception;


class NotFoundExection extends \Exception
{
    protected $code = 404;
    protected $message= "Page Not Found";
}