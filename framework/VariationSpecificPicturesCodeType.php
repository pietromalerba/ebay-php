<?php
// autogenerated file 04.06.2009 09:55
// $Id: $
// $Log: $
//
require_once 'EbatNs_FacetType.php';

/**
 * Defines the rules for using Item Specifics to classifyvariation pictures. 
 *
 * @link http://developer.ebay.com/DevZone/XML/docs/Reference/eBay/types/VariationSpecificPicturesCodeType.html
 *
 * @property string Required
 * @property string Enabled
 * @property string Disabled
 * @property string CustomCode
 */
class VariationSpecificPicturesCodeType extends EbatNs_FacetType
{
	const CodeType_Required = 'Required';
	const CodeType_Enabled = 'Enabled';
	const CodeType_Disabled = 'Disabled';
	const CodeType_CustomCode = 'CustomCode';

	/**
	 * @return 
	 */
	function __construct()
	{
		parent::__construct('VariationSpecificPicturesCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_VariationSpecificPicturesCodeType = new VariationSpecificPicturesCodeType();

?>
