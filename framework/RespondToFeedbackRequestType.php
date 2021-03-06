<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'FeedbackResponseCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables users to reply to feedback left by the otherparty in the transaction 
 * and/or follow up on thefeedback left for the other party.You cannot use the API 
 * for mutual feedback withdrawal,even though this functionality is available on 
 * the eBay site. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/RespondToFeedbackRequestType.html
 *
 */
class RespondToFeedbackRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $FeedbackID;
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var UserIDType
	 */
	protected $TargetUserID;
	/**
	 * @var FeedbackResponseCodeType
	 */
	protected $ResponseType;
	/**
	 * @var string
	 */
	protected $ResponseText;

	/**
	 * @return string
	 */
	function getFeedbackID()
	{
		return $this->FeedbackID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setFeedbackID($value)
	{
		$this->FeedbackID = $value;
	}
	/**
	 * @return ItemIDType
	 */
	function getItemID()
	{
		return $this->ItemID;
	}
	/**
	 * @return void
	 * @param ItemIDType $value 
	 */
	function setItemID($value)
	{
		$this->ItemID = $value;
	}
	/**
	 * @return string
	 */
	function getTransactionID()
	{
		return $this->TransactionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setTransactionID($value)
	{
		$this->TransactionID = $value;
	}
	/**
	 * @return UserIDType
	 */
	function getTargetUserID()
	{
		return $this->TargetUserID;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setTargetUserID($value)
	{
		$this->TargetUserID = $value;
	}
	/**
	 * @return FeedbackResponseCodeType
	 */
	function getResponseType()
	{
		return $this->ResponseType;
	}
	/**
	 * @return void
	 * @param FeedbackResponseCodeType $value 
	 */
	function setResponseType($value)
	{
		$this->ResponseType = $value;
	}
	/**
	 * @return string
	 */
	function getResponseText()
	{
		return $this->ResponseText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setResponseText($value)
	{
		$this->ResponseText = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('RespondToFeedbackRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FeedbackID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TransactionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'TargetUserID' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ResponseType' =>
					array(
						'required' => false,
						'type' => 'FeedbackResponseCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ResponseText' =>
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
