<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'VeROReportItemsType.php';
require_once 'AbstractRequestType.php';

/**
 * Reports items that allegedly infringe your copyright, trademark, or other 
 * intellectual property rights. You can report one or more items at a time with 
 * this call. You must be a member of the Verified Rights Owner (VeRO) Program to 
 * use this call. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VeROReportItemsRequestType.html
 *
 */
class VeROReportItemsRequestType extends AbstractRequestType
{
	/**
	 * @var UserIDType
	 */
	protected $RightsOwnerID;
	/**
	 * @var VeROReportItemsType
	 */
	protected $ReportItems;

	/**
	 * @return UserIDType
	 */
	function getRightsOwnerID()
	{
		return $this->RightsOwnerID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setRightsOwnerID($value)
	{
		$this->RightsOwnerID = $value;
	}
	/**
	 * @return VeROReportItemsType
	 */
	function getReportItems()
	{
		return $this->ReportItems;
	}
	/**
	 * @return void
	 * @param VeROReportItemsType $value 
	 */
	function setReportItems($value)
	{
		$this->ReportItems = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VeROReportItemsRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'RightsOwnerID' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ReportItems' =>
					array(
						'required' => false,
						'type' => 'VeROReportItemsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
