<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';

/**
 * An optional attribute that the seller wants to include in the listing.Enables 
 * you to specify an attribute by name rather than by ID.Only valid in Media 
 * categories (Books, DVD and Movies, Music, and Video Game categories).Currently, 
 * only the Condition attribute is supported. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LookupAttributeType.html
 *
 */
class LookupAttributeType extends EbatNs_ComplexType
{
	/**
	 * @var string
	 */
	protected $Name;
	/**
	 * @var string
	 */
	protected $Value;

	/**
	 * @return string
	 */
	function getName()
	{
		return $this->Name;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setName($value)
	{
		$this->Name = $value;
	}
	/**
	 * @return string
	 */
	function getValue()
	{
		return $this->Value;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setValue($value)
	{
		$this->Value = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LookupAttributeType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Name' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Value' =>
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
