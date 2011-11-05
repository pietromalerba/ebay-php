<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves some or all of a user's preferences. The set of preferences retrieved 
 * dependson the set of flags specified in the request. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetUserPreferencesRequestType.html
 *
 */
class GetUserPreferencesRequestType extends AbstractRequestType
{
	/**
	 * @var boolean
	 */
	protected $ShowBidderNoticePreferences;
	/**
	 * @var boolean
	 */
	protected $ShowCombinedPaymentPreferences;
	/**
	 * @var boolean
	 */
	protected $ShowCrossPromotionPreferences;
	/**
	 * @var boolean
	 */
	protected $ShowSellerPaymentPreferences;
	/**
	 * @var boolean
	 */
	protected $ShowEndOfAuctionEmailPreferences;
	/**
	 * @var boolean
	 */
	protected $ShowSellerFavoriteItemPreferences;
	/**
	 * @var boolean
	 */
	protected $ShowProStoresPreferences;
	/**
	 * @var boolean
	 */
	protected $ShowEmailShipmentTrackingNumberPreference;

	/**
	 * @return boolean
	 */
	function getShowBidderNoticePreferences()
	{
		return $this->ShowBidderNoticePreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowBidderNoticePreferences($value)
	{
		$this->ShowBidderNoticePreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getShowCombinedPaymentPreferences()
	{
		return $this->ShowCombinedPaymentPreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowCombinedPaymentPreferences($value)
	{
		$this->ShowCombinedPaymentPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getShowCrossPromotionPreferences()
	{
		return $this->ShowCrossPromotionPreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowCrossPromotionPreferences($value)
	{
		$this->ShowCrossPromotionPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getShowSellerPaymentPreferences()
	{
		return $this->ShowSellerPaymentPreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowSellerPaymentPreferences($value)
	{
		$this->ShowSellerPaymentPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getShowEndOfAuctionEmailPreferences()
	{
		return $this->ShowEndOfAuctionEmailPreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowEndOfAuctionEmailPreferences($value)
	{
		$this->ShowEndOfAuctionEmailPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getShowSellerFavoriteItemPreferences()
	{
		return $this->ShowSellerFavoriteItemPreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowSellerFavoriteItemPreferences($value)
	{
		$this->ShowSellerFavoriteItemPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getShowProStoresPreferences()
	{
		return $this->ShowProStoresPreferences;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowProStoresPreferences($value)
	{
		$this->ShowProStoresPreferences = $value;
	}
	/**
	 * @return boolean
	 */
	function getShowEmailShipmentTrackingNumberPreference()
	{
		return $this->ShowEmailShipmentTrackingNumberPreference;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setShowEmailShipmentTrackingNumberPreference($value)
	{
		$this->ShowEmailShipmentTrackingNumberPreference = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetUserPreferencesRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ShowBidderNoticePreferences' =>
					array(
						'required' => true,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'ShowCombinedPaymentPreferences' =>
					array(
						'required' => true,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'ShowCrossPromotionPreferences' =>
					array(
						'required' => true,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'ShowSellerPaymentPreferences' =>
					array(
						'required' => true,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '1..1'
					),
					'ShowEndOfAuctionEmailPreferences' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShowSellerFavoriteItemPreferences' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShowProStoresPreferences' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShowEmailShipmentTrackingNumberPreference' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
