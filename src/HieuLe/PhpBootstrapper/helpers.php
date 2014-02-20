<?php

if (!function_exists('has_error_class'))
{
    function has_error_class(Illuminate\Support\MessageBag $errors, $key)
    {
	if ($errors->has($key))
	    return 'has-error';
	return '';
    }
}

if (!function_exists('has_error_content'))
{
    function has_error_content(Illuminate\Support\MessageBag $errors, $key, $content)
    {
	if ($errors->has($key))
	    return $content;
	return '';
    }
}
