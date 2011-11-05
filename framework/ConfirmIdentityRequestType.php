<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Identifies a user without requiring UserID or password or user token. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ConfirmIdentityRequestType.html
 *
 */
class ConfirmIdentityRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $SessionID;

	/**
	 * @return string
	 */
	function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSessionID($value)
	{
		$this->SessionID = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ConfirmIdentityRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SessionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>