<?php
/**
 * "Downloads" is a light weight download handling module for ImpressCMS
 *
 * File: /class/Review.php
 * 
 * Class representing Download review objects
 * 
 * @copyright	Copyright QM-B (Steffen Flohrer) 2011
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * ----------------------------------------------------------------------------------------------------------
 * 				Downloads
 * @since		1.00
 * @author		QM-B <qm-b@hotmail.de>
 * @version		$Id$
 * @package		downloads
 *
 */

defined("ICMS_ROOT_PATH") or die("ICMS root path not defined");

class DownloadsReview extends icms_ipf_Object {
	
	public function __construct(&$handler) {
		parent::__construct($handler);

		$this->quickInitVar("review_id", XOBJ_DTYPE_INT, TRUE);
		$this->quickInitVar("review_item_id", XOBJ_DTYPE_INT, TRUE);
		$this->quickInitVar("review_uid", XOBJ_DTYPE_INT);
		$this->quickInitVar("review_name", XOBJ_DTYPE_TXTBOX, TRUE);
		$this->quickInitVar("review_email", XOBJ_DTYPE_TXTBOX);
		$this->quickInitVar("review_message", XOBJ_DTYPE_TXTAREA, TRUE);
		$this->quickInitVar("review_ip", XOBJ_DTYPE_TXTBOX);
		$this->quickInitVar("review_date",XOBJ_DTYPE_LTIME);
		
		$this->setVar("review_message", array("name" => "textarea", "form_editor" => "htmlarea"));
		
		$this->hideFieldFromForm(array("review_item_id", "review_uid", "review_ip", "review_date" ));
		
	}
	
	public function getReviewMessage(){
		$message = icms_core_DataFilter::checkVar($this->getVar("review_message", "s"), "str", "encodelow");
		return $message;
	}
	
	
	
}