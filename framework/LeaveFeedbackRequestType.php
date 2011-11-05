<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'UserIDType.php';
require_once 'ItemRatingDetailArrayType.php';
require_once 'CommentTypeCodeType.php';
require_once 'AbstractRequestType.php';
require_once 'ItemIDType.php';

/**
 * Enables a user to leave feedback about another user. Both users (thesender and 
 * the recipient) must have a transactional relationship.That is, they must have 
 * both been participants in a successfullyconcluded item sale transaction that 
 * took place no more than 90 daysprior. Also, the sending user cannot have already 
 * left feedback forthe recipient for the transaction. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/LeaveFeedbackRequestType.html
 *
 */
class LeaveFeedbackRequestType extends AbstractRequestType
{
	/**
	 * @var ItemIDType
	 */
	protected $ItemID;
	/**
	 * @var string
	 */
	protected $CommentText;
	/**
	 * @var CommentTypeCodeType
	 */
	protected $CommentType;
	/**
	 * @var string
	 */
	protected $TransactionID;
	/**
	 * @var UserIDType
	 */
	protected $TargetUser;
	/**
	 * @var ItemRatingDetailArrayType
	 */
	protected $SellerItemRatingDetailArray;

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
	function getCommentText()
	{
		return $this->CommentText;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setCommentText($value)
	{
		$this->CommentText = $value;
	}
	/**
	 * @return CommentTypeCodeType
	 */
	function getCommentType()
	{
		return $this->CommentType;
	}
	/**
	 * @return void
	 * @param CommentTypeCodeType $value 
	 */
	function setCommentType($value)
	{
		$this->CommentType = $value;
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
	function getTargetUser()
	{
		return $this->TargetUser;
	}
	/**
	 * @return void
	 * @param UserIDType $value 
	 */
	function setTargetUser($value)
	{
		$this->TargetUser = $value;
	}
	/**
	 * @return ItemRatingDetailArrayType
	 */
	function getSellerItemRatingDetailArray()
	{
		return $this->SellerItemRatingDetailArray;
	}
	/**
	 * @return void
	 * @param ItemRatingDetailArrayType $value 
	 */
	function setSellerItemRatingDetailArray($value)
	{
		$this->SellerItemRatingDetailArray = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('LeaveFeedbackRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'ItemID' =>
					array(
						'required' => false,
						'type' => 'ItemIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CommentText' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'CommentType' =>
					array(
						'required' => false,
						'type' => 'CommentTypeCodeType',
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
					'TargetUser' =>
					array(
						'required' => false,
						'type' => 'UserIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SellerItemRatingDetailArray' =>
					array(
						'required' => false,
						'type' => 'ItemRatingDetailArrayType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					)
				));
	}
}
?>
