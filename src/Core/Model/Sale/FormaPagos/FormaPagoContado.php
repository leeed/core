<?php

namespace Greenter\Model\Sale\FormaPagos;

use Greenter\Model\Sale\PaymentTerms;

class FormaPagoContado extends PaymentTerms
{
    /**
     * FormaPagoContado constructor.
     */
    public function __construct()
    {
        $this->tipo = 'Contado';
        $this->moneda = null;
        $this->monto = null;
    }
}