<?php

namespace App\Libraries\Mitul\Utils;


/**
 * Common app Utils
 *
 * Class CommonAppUtils
 * @package Mitul\Utils
 */
class CommonAppUtils
{
	/**
	 * Returns UUID of 32 characters
	 *
	 * @return string
	 */
	public static function generateUUID()
	{
		$currTime = (string)microtime(true);
		$randNum = (string)rand(10000, 1000000);
		$shuffledStr = str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789");
		return md5($currTime.$randNum.$shuffledStr);
	}
	/**
	 * Casts values of input as given rules
	 *
	 * @param array $castRules
	 * @param array $input
	 */
	public static function castObject($castRules, &$input)
	{
		if(is_array($input))
		{
			foreach($castRules as $key => $value)
			{
				settype($input[$key], $value);
			}
		}
		elseif(is_object($input))
		{
			foreach($castRules as $key => $value)
			{
				settype($input->$key, $value);
			}
		}
	}
	/**
	 * Makes associative array of given array objects for given field
	 *
	 * @param array $arr
	 * @param string $field
	 * @return array
	 */
	public static function makeAssocArrOfObjectsByField($arr, $field)
	{
		$assocArr = array();
		foreach($arr as $arrObj)
		{
			if(isset($arrObj[$field]))
				$assocArr[$arrObj[$field]] = $arrObj;
		}
		return $assocArr;
	}
}