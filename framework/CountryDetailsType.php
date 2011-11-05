<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'CountryCodeType.php';
require_once 'EbatNs_ComplexType.php';

/**
 * Details about a specific country. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/CountryDetailsType.html
 *
 */
class CountryDetailsType extends EbatNs_ComplexType
{
	/**
	 * @var CountryCodeType
	 */
	protected $Country;
	/**
	 * @var string
	 */
	protected $Description;

	/**
	 * @return CountryCodeType
	 */
	function getCountry()
	{
		return $this->Country;
	}
	/**
	 * @return void
	 * @param CountryCodeType $value 
	 */
	function setCountry($value)
	{
		$this->Country = $value;
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
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('CountryDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Country' =>
					array(
						'required' => false,
						'type' => 'CountryCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
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
					)
				));
	}
}
?>
