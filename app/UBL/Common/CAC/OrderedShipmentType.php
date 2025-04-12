<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing OrderedShipmentType
 *
 * ABIE
 *  Ordered Shipment. Details
 *  A class to describe an ordered shipment.
 *  Ordered Shipment
 * XSD Type: OrderedShipmentType
 */
class OrderedShipmentType
{
    /**
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \UBL\Common\CAC\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @var \UBL\Common\CAC\Package[] $package
     */
    private $package = [
        
    ];

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \UBL\Common\CAC\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \UBL\Common\CAC\Shipment $shipment
     * @return self
     */
    public function setShipment(\UBL\Common\CAC\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \UBL\Common\CAC\Package $package
     */
    public function addToPackage(\UBL\Common\CAC\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @return \UBL\Common\CAC\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param \UBL\Common\CAC\Package[] $package
     * @return self
     */
    public function setPackage(?array $package = null)
    {
        $this->package = $package;
        return $this;
    }
}


