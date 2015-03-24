<?php

namespace App\Libraries\Utils;


/**
 * Common app Utils
 *
 * Class CommonAppUtils
 *
 * @package Mitul\Utils
 */
class CommonAppUtils
{
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
	 * @param array       $arr
	 * @param string      $field
	 * @param null|string $singleField
	 *
	 * @return array
	 */
	public static function makeAssocArrOfObjectsByField($arr, $field, $singleField = null)
	{
		$assocArr = array();
		foreach($arr as $arrObj)
		{
			if(!isset($arrObj[$field]))
				continue;

			if($singleField)
			{
				if(isset($arrObj[$singleField]))
				{
					$assocArr[$arrObj[$field]] = $arrObj[$singleField];
					continue;
				}
			}

			$assocArr[$arrObj[$field]] = $arrObj;
		}

		return $assocArr;
	}
}