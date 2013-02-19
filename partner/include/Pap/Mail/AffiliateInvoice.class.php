<?php
/**
 *   @copyright Copyright (c) 2007 Quality Unit s.r.o.
 *   @author Milos Jancovic
 *   @package ShopMachine
 *   @since Version 1.0.0
 *   $Id: ActionParser.class.php 16620 2008-03-21 09:21:07Z aharsani $
 *
 *   Licensed under the Quality Unit, s.r.o. Standard End User License Agreement,
 *   Version 1.0 (the "License"); you may not use this file except in compliance
 *   with the License. You may obtain a copy of the License at
 *   http://www.qualityunit.com/licenses/license
 *
 */

/**
 * @package PostAffiliatePro
 */
class Pap_Mail_AffiliateInvoice extends Pap_Mail_MerchantInvoice {
	    
    protected function init() {
    	$this->mailTemplateFile = 'affiliate_invoice.stpl';
    	$this->templateName = Gpf_Lang::_runtime('Affiliate - Invoice');
    	$this->bccRecipient = Gpf_Settings::get(Pap_Settings::INVOICE_BCC_RECIPIENT); 
    }    
}
