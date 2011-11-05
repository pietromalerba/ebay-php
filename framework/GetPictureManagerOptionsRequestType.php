<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * This call will be deprecated by late 2009.<br><br> Requests a list of Picture 
 * Manager options and allowed values,such as subscription type and picture 
 * display. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetPictureManagerOptionsRequestType.html
 *
 */
class GetPictureManagerOptionsRequestType extends AbstractRequestType
{

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetPictureManagerOptionsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__])) {
			self::$_elements[__CLASS__] = array();
		}
	}
}
?>
