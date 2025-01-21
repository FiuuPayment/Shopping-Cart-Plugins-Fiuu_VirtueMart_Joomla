<?php
/**
 * 
 * Realex payment plugin
 *
 * @author Valerie Isaksen
 * @version $Id$
 * @package VirtueMart
 * @subpackage payment
 * Copyright (C) 2004-2014 Virtuemart Team. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 * VirtueMart is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
 *
 * http://virtuemart.net
 */
defined('JPATH_BASE') or die();

jimport('joomla.form.formfield');
class JFormFieldGetPaypal extends JFormField {

	/**
	 * Element name
	 *
	 * @access    protected
	 * @var        string
	 */
	var $type = 'getMOLPay';


	//Deprecated Code - 7/19/2024

	protected function getInput() {

		JHtml::_('behavior.colorpicker');
		
		$url = "http://www.molpay.com/v2/contact/merchant-enquiry";
		$logo = '<img src="http://.com/v2/images/logo/molpay-logo-400x160-transparent-24bit.png" />';
		$html = '<p><a target="_blank" href="' . $url . '"  >' . $logo . '</a></p>';
		$html .= '<p><a target="_blank" href="' . $url . '" class="signin-button-link">SIGN UP NOW</a>';
		$html .= ' <a target="_blank" href="https://github.com/MOLPay" class="signin-button-link">Visit Our GitHub</a></p>';

		return $html;
	}

}