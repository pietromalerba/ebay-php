<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'OrderType.php';
require_once 'AbstractRequestType.php';

/**
 * Combines two or more transactions into a single order, enabling a buyerto pay 
 * for all of those transactions with a single payment (and, ifso arranged, ship 
 * all of the items together).<br><br>Strong recommendation: avoid mixing digital 
 * and non-digital listings in the same order.(In the future, AddOrder may enforce 
 * this recommendation.) 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddOrderRequestType.html
 *
 */
class AddOrderRequestType extends AbstractRequestType
{
	/**
	 * @var OrderType
	 */
	protected $Order;

	/**
	 * @return OrderType
	 */
	function getOrder()
	{
		return $this->Order;
	}
	/**
	 * @return void
	 * @param OrderType $value 
	 */
	function setOrder($value)
	{
		$this->Order = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddOrderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Order' =>
					array(
						'required' => false,
						'type' => 'OrderType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
