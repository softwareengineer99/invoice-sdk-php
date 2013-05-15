<?php 
namespace PayPal\Types\PT;
use PayPal\Core\PPMessage;  
/**
 * The response object for CreateAndSendInvoice. 
 */
class CreateAndSendInvoiceResponse  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ResponseEnvelope	 
	 */ 
	public $responseEnvelope;

	/**
	 * The created invoice's ID. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceID;

	/**
	 * The created invoice's number. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceNumber;

	/**
	 * The URL which lead merchant to view the invoice details on
	 * web. 
	 * @access public
	 
	 	 	 	 
	 * @var string	 
	 */ 
	public $invoiceURL;

	/**
	 * The total amount of the invoice (cost of items, shipping and
	 * tax, less any discount). 
	 * @access public
	 
	 	 	 	 
	 * @var integer	 
	 */ 
	public $totalAmount;

	/**
	 * 
     * @array
	 * @access public
	 
	 	 	 	 
	 * @var PayPal\Types\Common\ErrorData	 
	 */ 
	public $error;


}
