<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'EbatNs_ComplexType.php';
require_once 'FeedbackRequirementsType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ExpressSellerRequirementsType.html
 *
 */
class ExpressSellerRequirementsType extends EbatNs_ComplexType
{
	/**
	 * @var boolean
	 */
	protected $ExpressSellingPreference;
	/**
	 * @var boolean
	 */
	protected $ExpressApproved;
	/**
	 * @var boolean
	 */
	protected $GoodStanding;
	/**
	 * @var FeedbackRequirementsType
	 */
	protected $FeedbackScore;
	/**
	 * @var FeedbackRequirementsType
	 */
	protected $PositiveFeedbackPercent;
	/**
	 * @var FeedbackRequirementsType
	 */
	protected $FeedbackAsSellerScore;
	/**
	 * @var FeedbackRequirementsType
	 */
	protected $PositiveFeedbackAsSellerPercent;
	/**
	 * @var boolean
	 */
	protected $BusinessSeller;
	/**
	 * @var boolean
	 */
	protected $EligiblePayPalAccount;
	/**
	 * @var boolean
	 */
	protected $PayPalAccountAcceptsUnconfirmedAddress;
	/**
	 * @var boolean
	 */
	protected $CombinedPaymentsAccepted;
	/**
	 * @var boolean
	 */
	protected $FeedbackPublic;

	/**
	 * @return boolean
	 */
	function getExpressSellingPreference()
	{
		return $this->ExpressSellingPreference;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExpressSellingPreference($value)
	{
		$this->ExpressSellingPreference = $value;
	}
	/**
	 * @return boolean
	 */
	function getExpressApproved()
	{
		return $this->ExpressApproved;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setExpressApproved($value)
	{
		$this->ExpressApproved = $value;
	}
	/**
	 * @return boolean
	 */
	function getGoodStanding()
	{
		return $this->GoodStanding;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setGoodStanding($value)
	{
		$this->GoodStanding = $value;
	}
	/**
	 * @return FeedbackRequirementsType
	 */
	function getFeedbackScore()
	{
		return $this->FeedbackScore;
	}
	/**
	 * @return void
	 * @param FeedbackRequirementsType $value 
	 */
	function setFeedbackScore($value)
	{
		$this->FeedbackScore = $value;
	}
	/**
	 * @return FeedbackRequirementsType
	 */
	function getPositiveFeedbackPercent()
	{
		return $this->PositiveFeedbackPercent;
	}
	/**
	 * @return void
	 * @param FeedbackRequirementsType $value 
	 */
	function setPositiveFeedbackPercent($value)
	{
		$this->PositiveFeedbackPercent = $value;
	}
	/**
	 * @return FeedbackRequirementsType
	 */
	function getFeedbackAsSellerScore()
	{
		return $this->FeedbackAsSellerScore;
	}
	/**
	 * @return void
	 * @param FeedbackRequirementsType $value 
	 */
	function setFeedbackAsSellerScore($value)
	{
		$this->FeedbackAsSellerScore = $value;
	}
	/**
	 * @return FeedbackRequirementsType
	 */
	function getPositiveFeedbackAsSellerPercent()
	{
		return $this->PositiveFeedbackAsSellerPercent;
	}
	/**
	 * @return void
	 * @param FeedbackRequirementsType $value 
	 */
	function setPositiveFeedbackAsSellerPercent($value)
	{
		$this->PositiveFeedbackAsSellerPercent = $value;
	}
	/**
	 * @return boolean
	 */
	function getBusinessSeller()
	{
		return $this->BusinessSeller;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setBusinessSeller($value)
	{
		$this->BusinessSeller = $value;
	}
	/**
	 * @return boolean
	 */
	function getEligiblePayPalAccount()
	{
		return $this->EligiblePayPalAccount;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setEligiblePayPalAccount($value)
	{
		$this->EligiblePayPalAccount = $value;
	}
	/**
	 * @return boolean
	 */
	function getPayPalAccountAcceptsUnconfirmedAddress()
	{
		return $this->PayPalAccountAcceptsUnconfirmedAddress;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setPayPalAccountAcceptsUnconfirmedAddress($value)
	{
		$this->PayPalAccountAcceptsUnconfirmedAddress = $value;
	}
	/**
	 * @return boolean
	 */
	function getCombinedPaymentsAccepted()
	{
		return $this->CombinedPaymentsAccepted;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setCombinedPaymentsAccepted($value)
	{
		$this->CombinedPaymentsAccepted = $value;
	}
	/**
	 * @return boolean
	 */
	function getFeedbackPublic()
	{
		return $this->FeedbackPublic;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setFeedbackPublic($value)
	{
		$this->FeedbackPublic = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ExpressSellerRequirementsType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ExpressSellingPreference' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ExpressApproved' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'GoodStanding' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackScore' =>
					array(
						'required' => false,
						'type' => 'FeedbackRequirementsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PositiveFeedbackPercent' =>
					array(
						'required' => false,
						'type' => 'FeedbackRequirementsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackAsSellerScore' =>
					array(
						'required' => false,
						'type' => 'FeedbackRequirementsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PositiveFeedbackAsSellerPercent' =>
					array(
						'required' => false,
						'type' => 'FeedbackRequirementsType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'BusinessSeller' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'EligiblePayPalAccount' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPalAccountAcceptsUnconfirmedAddress' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CombinedPaymentsAccepted' =>
					array(
						'required' => false,
						'type' => 'boolean',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FeedbackPublic' =>
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