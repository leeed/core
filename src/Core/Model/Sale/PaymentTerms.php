<?php

namespace Greenter\Model\Sale;

class PaymentTerms
{
    /**
     * @var string|null
     */
    protected $moneda;

    /**
     * @var string|null
     */
    protected $tipo;

    /**
     * @var float|null
     */
    protected $monto;

    /**
     * @return string|null
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * @param string|null $moneda
     * @return $this
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param string|null $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * @param float|null $monto
     * @return $this
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
        return $this;
    }
}