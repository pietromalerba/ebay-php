<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
//
require_once 'AbstractRequestType.php';

/**
 * Retrieves user token.The call can be used to get a token only after a user, at 
 * an eBay sign-in page,gives consent for the token to be generated.After token 
 * retrieval, the token can be used to authenticate other calls made on behalf of 
 * the user. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/FetchTokenRequestType.html
 *
 */
class FetchTokenRequestType extends AbstractRequestType
{
	/**
	 * @var string
	 */
	protected $SecretID;
	/**
	 * @var string
	 */
	protected $SessionID;
	/**
	 * @var boolean
	 */
	protected $IncludeRESTToken;

	/**
	 * @return string
	 */
	function getSecretID()
	{
		return $this->SecretID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSecretID($value)
	{
		$this->SecretID = $value;
	}
	/**
	 * @return string
	 */
	function getSessionID()
	{
		return $this->SessionID;
	}
	/**
	 * @return void
	 * @param string $value 
	 */
	function setSessionID($value)
	{
		$this->SessionID = $value;
	}
	/**
	 * @return boolean
	 */
	function getIncludeRESTToken()
	{
		return $this->IncludeRESTToken;
	}
	/**
	 * @return void
	 * @param boolean $value 
	 */
	function setIncludeRESTToken($value)
	{
		$this->IncludeRESTToken = $value;
	}
	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('FetchTokenRequestType', 'urn:ebay:apis:eBLBaseComponents');
		if (!isset(self::$_elements[__CLASS__]))
				self::$_elements[__CLASS__] = array_merge(self::$_elements[get_parent_class()],
				array(
					'SecretID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'SessionID' =>
					array(
						'required' => false,
						'type' => 'string',
						'nsURI' => 'http://www.w3.org/2001/XMLSchema',
						'array' => false,
						'cardinality' => '0..1'
					),
					'IncludeRESTToken' =>
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
