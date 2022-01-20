<?php

namespace Greenter\Model\Sale;

use DateTimeInterface;

class Cuota
{
    /**
     * @var string|null
     */
    private $moneda;

    /**
     * @var float|null
     */
    private $monto;

    /**
     * @var DateTimeInterface|null
     */
    private $fechaPago;

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

    /**
     * @return DateTimeInterface|null
     */
    public function getFechaPago()
    {
        return $this->fechaPago;
    }

    /**
     * @param DateTimeInterface|null $fechaPago
     * @return $this
     */
    public function setFechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;
        return $this;
    }
}