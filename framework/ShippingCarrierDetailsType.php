<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'ShippingCarrierCodeType.php';

/**
 * Details about type of Carrier used to ship an item. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShippingCarrierDetailsType.html
 *
 */
class ShippingCarrierDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var int
	 */
	protected $ShippingCarrierID;
	/**
	 * @var string
	 */
	protected $Description;
	/**
	 * @var ShippingCarrierCodeType
	 */
	protected $ShippingCarrier;

	/**
	 * @return int
	 */
	function getShippingCarrierID()
	{
		return $this->ShippingCarrierID;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setShippingCarrierID($value)
	{
		$this->ShippingCarrierID = $value;
	}
	/**
	 * @return string
	 */
	function getDescription()
	{
		return $this->Description;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setDescription($value)
	{
		$this->Description = $value;
	}
	/**
	 * @return ShippingCarrierCodeType
	 */
	function getShippingCarrier()
	{
		return $this->ShippingCarrier;
	}
	/**
	 * @return void
	 * @param ShippingCarrierCodeType $value 
	 */
	function setShippingCarrier($value)
	{
		$this->ShippingCarrier = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShippingCarrierDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShippingCarrierID' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Description' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCarrier' =>
					array(
						'required' => false,
						'type' => 'ShippingCarrierCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
