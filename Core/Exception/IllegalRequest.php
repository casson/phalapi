<?php
/**
 +------------------------------------------------------------------------------
 * Core_Exception_IllegalRequest 非法请求异常类
 +------------------------------------------------------------------------------
 * @author: dogstar 2014-10-02
 +------------------------------------------------------------------------------
 */

class Core_Exception_IllegalRequest extends Core_Exception
{
	public function __construct($message, $code = 0)
	{
		parent::__construct('Illegal Request: ' . $message, 1100 + $code);
	}
}