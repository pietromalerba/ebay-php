<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'ItemType.php';
require_once 'AbstractRequestType.php';

/**
 * Defines a single new fixed-price listing and lists it on the eBay sitethat you 
 * specified in the HTTP request header or URL. A fixed-price listing can include 
 * multiple identical items for saleby setting the Quantity to a value greater than 
 * 1. <br><br>You also use AddFixedPriceItem to define multi-variation listings 
 * (e.g., a particular shirt in varying sizes and colors).<br><br>To list multiple 
 * unrelated fixed-price items, call AddFixedPriceItem once for each type of 
 * item.<br><br>AddFixedPriceItem supports most of the same input fields as 
 * AddItem. The main differences are:<ul><li>AddFixedPriceItem only supports fields 
 * that are applicable tobasic fixed-price listings and store inventory listings 
 * (no fields that are exclusively applicable to auctions, classifieds, or listings 
 * with Best Offer).</li><li>AddFixedPriceItem gives you an option to track eBay 
 * items by SKU instead of item ID (see Item.InventoryTrackingMethod and 
 * Item.SKU).</li><li>AddFixedPriceItem supports mult-variation listings.</li></ul> 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/AddFixedPriceItemRequestType.html
 *
 */
class AddFixedPriceItemRequestType extends AbstractRequestType
{
	/**
	 * @var ItemType
	 */
	protected $Item;

	/**
	 * @return ItemType
	 */
	function getItem()
	{
		return $this->Item;
	}
	/**
	 * @return void
	 * @param ItemType $value 
	 */
	function setItem($value)
	{
		$this->Item = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('AddFixedPriceItemRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'Item' =>
					array(
						'required' => false,
						'type' => 'ItemType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>