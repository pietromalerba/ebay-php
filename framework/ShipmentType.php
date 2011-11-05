<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'ShippingCarrierCodeType.php';
require_once 'ShippingPackageCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'ShipmentStatusCodeType.php';
require_once 'ShipmentDeliveryStatusCodeType.php';
require_once 'ShippingFeatureCodeType.php';
require_once 'AmountType.php';
require_once 'MeasureType.php';
require_once 'ItemTransactionIDType.php';
require_once 'AddressType.php';

/**
 *  
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/ShipmentType.html
 *
 */
class ShipmentType extends EbatNs_ComplexType
{
	/**
	 * @var dateTime
	 */
	protected $EstimatedDeliveryDate;
	/**
	 * @var AmountType
	 */
	protected $InsuredValue;
	/**
	 * @var MeasureType
	 */
	protected $PackageDepth;
	/**
	 * @var MeasureType
	 */
	protected $PackageLength;
	/**
	 * @var MeasureType
	 */
	protected $PackageWidth;
	/**
	 * @var string
	 */
	protected $PayPalShipmentID;
	/**
	 * @var long
	 */
	protected $ShipmentID;
	/**
	 * @var AmountType
	 */
	protected $PostageTotal;
	/**
	 * @var dateTime
	 */
	protected $PrintedTime;
	/**
	 * @var AddressType
	 */
	protected $ShipFromAddress;
	/**
	 * @var AddressType
	 */
	protected $ShippingAddress;
	/**
	 * @var ShippingCarrierCodeType
	 */
	protected $ShippingCarrierUsed;
	/**
	 * @var ShippingFeatureCodeType
	 */
	protected $ShippingFeature;
	/**
	 * @var ShippingPackageCodeType
	 */
	protected $ShippingPackage;
	/**
	 * @var token
	 */
	protected $ShippingServiceUsed;
	/**
	 * @var string
	 */
	protected $ShipmentTrackingNumber;
	/**
	 * @var MeasureType
	 */
	protected $WeightMajor;
	/**
	 * @var MeasureType
	 */
	protected $WeightMinor;
	/**
	 * @var ItemTransactionIDType
	 */
	protected $ItemTransactionID;
	/**
	 * @var dateTime
	 */
	protected $DeliveryDate;
	/**
	 * @var ShipmentDeliveryStatusCodeType
	 */
	protected $DeliveryStatus;
	/**
	 * @var dateTime
	 */
	protected $RefundGrantedTime;
	/**
	 * @var dateTime
	 */
	protected $RefundRequestedTime;
	/**
	 * @var ShipmentStatusCodeType
	 */
	protected $Status;
	/**
	 * @var dateTime
	 */
	protected $ShippedTime;
	/**
	 * @var string
	 */
	protected $Notes;

	/**
	 * @return dateTime
	 */
	function getEstimatedDeliveryDate()
	{
		return $this->EstimatedDeliveryDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setEstimatedDeliveryDate($value)
	{
		$this->EstimatedDeliveryDate = $value;
	}
	/**
	 * @return AmountType
	 */
	function getInsuredValue()
	{
		return $this->InsuredValue;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setInsuredValue($value)
	{
		$this->InsuredValue = $value;
	}
	/**
	 * @return MeasureType
	 */
	function getPackageDepth()
	{
		return $this->PackageDepth;
	}
	/**
	 * @return void
	 * @param MeasureType $value 
	 */
	function setPackageDepth($value)
	{
		$this->PackageDepth = $value;
	}
	/**
	 * @return MeasureType
	 */
	function getPackageLength()
	{
		return $this->PackageLength;
	}
	/**
	 * @return void
	 * @param MeasureType $value 
	 */
	function setPackageLength($value)
	{
		$this->PackageLength = $value;
	}
	/**
	 * @return MeasureType
	 */
	function getPackageWidth()
	{
		return $this->PackageWidth;
	}
	/**
	 * @return void
	 * @param MeasureType $value 
	 */
	function setPackageWidth($value)
	{
		$this->PackageWidth = $value;
	}
	/**
	 * @return string
	 */
	function getPayPalShipmentID()
	{
		return $this->PayPalShipmentID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setPayPalShipmentID($value)
	{
		$this->PayPalShipmentID = $value;
	}
	/**
	 * @return long
	 */
	function getShipmentID()
	{
		return $this->ShipmentID;
	}
	/**
	 * @return void
	 * @param long $value 
	 */
	function setShipmentID($value)
	{
		$this->ShipmentID = $value;
	}
	/**
	 * @return AmountType
	 */
	function getPostageTotal()
	{
		return $this->PostageTotal;
	}
	/**
	 * @return void
	 * @param AmountType $value 
	 */
	function setPostageTotal($value)
	{
		$this->PostageTotal = $value;
	}
	/**
	 * @return dateTime
	 */
	function getPrintedTime()
	{
		return $this->PrintedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setPrintedTime($value)
	{
		$this->PrintedTime = $value;
	}
	/**
	 * @return AddressType
	 */
	function getShipFromAddress()
	{
		return $this->ShipFromAddress;
	}
	/**
	 * @return void
	 * @param AddressType $value 
	 */
	function setShipFromAddress($value)
	{
		$this->ShipFromAddress = $value;
	}
	/**
	 * @return AddressType
	 */
	function getShippingAddress()
	{
		return $this->ShippingAddress;
	}
	/**
	 * @return void
	 * @param AddressType $value 
	 */
	function setShippingAddress($value)
	{
		$this->ShippingAddress = $value;
	}
	/**
	 * @return ShippingCarrierCodeType
	 */
	function getShippingCarrierUsed()
	{
		return $this->ShippingCarrierUsed;
	}
	/**
	 * @return void
	 * @param ShippingCarrierCodeType $value 
	 */
	function setShippingCarrierUsed($value)
	{
		$this->ShippingCarrierUsed = $value;
	}
	/**
	 * @return ShippingFeatureCodeType
	 * @param integer $index 
	 */
	function getShippingFeature($index = null)
	{
		if ($index !== null) {
			return $this->ShippingFeature[$index];
		} else {
			return $this->ShippingFeature;
		}
	}
	/**
	 * @return void
	 * @param ShippingFeatureCodeType $value 
	 * @param  $index 
	 */
	function setShippingFeature($value, $index = null)
	{
		if ($index !== null) {
			$this->ShippingFeature[$index] = $value;
		} else {
			$this->ShippingFeature = $value;
		}
	}
	/**
	 * @return void
	 * @param ShippingFeatureCodeType $value 
	 */
	function addShippingFeature($value)
	{
		$this->ShippingFeature[] = $value;
	}
	/**
	 * @return ShippingPackageCodeType
	 */
	function getShippingPackage()
	{
		return $this->ShippingPackage;
	}
	/**
	 * @return void
	 * @param ShippingPackageCodeType $value 
	 */
	function setShippingPackage($value)
	{
		$this->ShippingPackage = $value;
	}
	/**
	 * @return token
	 */
	function getShippingServiceUsed()
	{
		return $this->ShippingServiceUsed;
	}
	/**
	 * @return void
	 * @param token $value 
	 */
	function setShippingServiceUsed($value)
	{
		$this->ShippingServiceUsed = $value;
	}
	/**
	 * @return string
	 */
	function getShipmentTrackingNumber()
	{
		return $this->ShipmentTrackingNumber;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setShipmentTrackingNumber($value)
	{
		$this->ShipmentTrackingNumber = $value;
	}
	/**
	 * @return MeasureType
	 */
	function getWeightMajor()
	{
		return $this->WeightMajor;
	}
	/**
	 * @return void
	 * @param MeasureType $value 
	 */
	function setWeightMajor($value)
	{
		$this->WeightMajor = $value;
	}
	/**
	 * @return MeasureType
	 */
	function getWeightMinor()
	{
		return $this->WeightMinor;
	}
	/**
	 * @return void
	 * @param MeasureType $value 
	 */
	function setWeightMinor($value)
	{
		$this->WeightMinor = $value;
	}
	/**
	 * @return ItemTransactionIDType
	 * @param integer $index 
	 */
	function getItemTransactionID($index = null)
	{
		if ($index !== null) {
			return $this->ItemTransactionID[$index];
		} else {
			return $this->ItemTransactionID;
		}
	}
	/**
	 * @return void
	 * @param ItemTransactionIDType $value 
	 * @param  $index 
	 */
	function setItemTransactionID($value, $index = null)
	{
		if ($index !== null) {
			$this->ItemTransactionID[$index] = $value;
		} else {
			$this->ItemTransactionID = $value;
		}
	}
	/**
	 * @return void
	 * @param ItemTransactionIDType $value 
	 */
	function addItemTransactionID($value)
	{
		$this->ItemTransactionID[] = $value;
	}
	/**
	 * @return dateTime
	 */
	function getDeliveryDate()
	{
		return $this->DeliveryDate;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setDeliveryDate($value)
	{
		$this->DeliveryDate = $value;
	}
	/**
	 * @return ShipmentDeliveryStatusCodeType
	 */
	function getDeliveryStatus()
	{
		return $this->DeliveryStatus;
	}
	/**
	 * @return void
	 * @param ShipmentDeliveryStatusCodeType $value 
	 */
	function setDeliveryStatus($value)
	{
		$this->DeliveryStatus = $value;
	}
	/**
	 * @return dateTime
	 */
	function getRefundGrantedTime()
	{
		return $this->RefundGrantedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setRefundGrantedTime($value)
	{
		$this->RefundGrantedTime = $value;
	}
	/**
	 * @return dateTime
	 */
	function getRefundRequestedTime()
	{
		return $this->RefundRequestedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setRefundRequestedTime($value)
	{
		$this->RefundRequestedTime = $value;
	}
	/**
	 * @return ShipmentStatusCodeType
	 */
	function getStatus()
	{
		return $this->Status;
	}
	/**
	 * @return void
	 * @param ShipmentStatusCodeType $value 
	 */
	function setStatus($value)
	{
		$this->Status = $value;
	}
	/**
	 * @return dateTime
	 */
	function getShippedTime()
	{
		return $this->ShippedTime;
	}
	/**
	 * @return void
	 * @param dateTime $value 
	 */
	function setShippedTime($value)
	{
		$this->ShippedTime = $value;
	}
	/**
	 * @return string
	 */
	function getNotes()
	{
		return $this->Notes;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setNotes($value)
	{
		$this->Notes = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('ShipmentType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'EstimatedDeliveryDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'InsuredValue' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PackageDepth' =>
					array(
						'required' => false,
						'type' => 'MeasureType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PackageLength' =>
					array(
						'required' => false,
						'type' => 'MeasureType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PackageWidth' =>
					array(
						'required' => false,
						'type' => 'MeasureType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PayPalShipmentID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipmentID' =>
					array(
						'required' => false,
						'type' => 'long',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PostageTotal' =>
					array(
						'required' => false,
						'type' => 'AmountType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'PrintedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipFromAddress' =>
					array(
						'required' => false,
						'type' => 'AddressType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingAddress' =>
					array(
						'required' => false,
						'type' => 'AddressType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingCarrierUsed' =>
					array(
						'required' => false,
						'type' => 'ShippingCarrierCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingFeature' =>
					array(
						'required' => false,
						'type' => 'ShippingFeatureCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'ShippingPackage' =>
					array(
						'required' => false,
						'type' => 'ShippingPackageCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippingServiceUsed' =>
					array(
						'required' => false,
						'type' => 'token',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShipmentTrackingNumber' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WeightMajor' =>
					array(
						'required' => false,
						'type' => 'MeasureType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'WeightMinor' =>
					array(
						'required' => false,
						'type' => 'MeasureType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ItemTransactionID' =>
					array(
						'required' => false,
						'type' => 'ItemTransactionIDType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => true,
						'cardinality' => '0..*'
					),
					'DeliveryDate' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'DeliveryStatus' =>
					array(
						'required' => false,
						'type' => 'ShipmentDeliveryStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundGrantedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'RefundRequestedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Status' =>
					array(
						'required' => false,
						'type' => 'ShipmentStatusCodeType',
						'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
						'array' => false,
						'cardinality' => '0..1'
					),
					'ShippedTime' =>
					array(
						'required' => false,
						'type' => 'dateTime',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'Notes' =>
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
