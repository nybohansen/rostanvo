<?php
/**
 *   @copyright Copyright (c) 2007 Quality Unit s.r.o.
 *   @author Matej Kendera
 *   @package PostAffiliatePro
 *   @since Version 1.0.0
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
class Pap_Stats_SalesHigherTiers extends Pap_Stats_Transactions {
      
    public function __construct(Pap_Stats_Params $params) {
        parent::__construct($params);
        $this->setTransactionType(Pap_Common_Constants::TYPE_SALE);
        $this->setTier(Pap_Stats_Computer_Transactions::HIGHER_TIERS);
    }
    
    /**
     * @return Pap_Stats_Computer_TransactionsHigherTiers
     */
    protected function createComputer() {
        return new Pap_Stats_Computer_TransactionsHigherTiers($this->params);
    }
}
?>
