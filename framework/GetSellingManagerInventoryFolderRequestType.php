<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves Selling Manager inventory folders.For Selling Manager applications 
 * only.This call is subject to change without notice; the deprecation process 
 * isinapplicable to this call. For moreinformation about writing Selling Manager 
 * applications, please see <a 
 * href="http://developer.ebay.com/products/selling-manager-applications/" 
 * target="_blank">http://developer.ebay.com/products/selling-manager-applications</a>. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/GetSellingManagerInventoryFolderRequestType.html
 *
 */
class GetSellingManagerInventoryFolderRequestType extends AbstractRequestType
{
	/**
	 * @var long
	 */
	protected $FolderID;
	/**
	 * @var int
	 */
	protected $MaxDepth;
	/**
	 * @var boolean
	 */
	protected $FullRecursion;

	/**
	 * @return long
	 */
	function getFolderID()
	{
		return $this->FolderID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setFolderID($value)
	{
		$this->FolderID = $value;
	}
	/**
	 * @return int
	 */
	function getMaxDepth()
	{
		return $this->MaxDepth;
	}
	/**
	 * @return void
	 * @param int $value 
	 */
	function setMaxDepth($value)
	{
		$this->MaxDepth = $value;
	}
	/**
	 * @return boolean
	 */
	function getFullRecursion()
	{
		return $this->FullRecursion;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setFullRecursion($value)
	{
		$this->FullRecursion = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('GetSellingManagerInventoryFolderRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'FolderID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'MaxDepth' =>
					array(
						'required' => false,
						'type' => 'int',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'FullRecursion' =>
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
