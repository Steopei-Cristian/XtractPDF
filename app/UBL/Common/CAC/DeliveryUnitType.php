<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing DeliveryUnitType
 *
 * ABIE
 *  Delivery Unit. Details
 *  A class to describe a delivery unit.
 *  Delivery Unit
 * XSD Type: DeliveryUnitType
 */
class DeliveryUnitType
{
    /**
     * BBIE
     *  Delivery Unit. Batch Quantity. Quantity
     *  The quantity of ordered Items that constitutes a batch for delivery purposes.
     *  1
     *  Delivery Unit
     *  Batch Quantity
     *  Quantity
     *  Quantity. Type
     *  100 units , by the dozen
     *
     * @var \App\UBL\Common\CBC\BatchQuantity $batchQuantity
     */
    private $batchQuantity = null;

    /**
     * BBIE
     *  Delivery Unit. Consumer_ Unit. Quantity
     *  The quantity of units in the Delivery Unit expressed in the units used by the consumer.
     *  0..1
     *  Delivery Unit
     *  Consumer
     *  Unit
     *  Quantity
     *  Quantity. Type
     *  packs of 10
     *
     * @var \App\UBL\Common\CBC\ConsumerUnitQuantity $consumerUnitQuantity
     */
    private $consumerUnitQuantity = null;

    /**
     * BBIE
     *  Delivery Unit. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Delivery Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * Gets as batchQuantity
     *
     * BBIE
     *  Delivery Unit. Batch Quantity. Quantity
     *  The quantity of ordered Items that constitutes a batch for delivery purposes.
     *  1
     *  Delivery Unit
     *  Batch Quantity
     *  Quantity
     *  Quantity. Type
     *  100 units , by the dozen
     *
     * @return \App\UBL\Common\CBC\BatchQuantity
     */
    public function getBatchQuantity()
    {
        return $this->batchQuantity;
    }

    /**
     * Sets a new batchQuantity
     *
     * BBIE
     *  Delivery Unit. Batch Quantity. Quantity
     *  The quantity of ordered Items that constitutes a batch for delivery purposes.
     *  1
     *  Delivery Unit
     *  Batch Quantity
     *  Quantity
     *  Quantity. Type
     *  100 units , by the dozen
     *
     * @param \App\UBL\Common\CBC\BatchQuantity $batchQuantity
     * @return self
     */
    public function setBatchQuantity(\App\UBL\Common\CBC\BatchQuantity $batchQuantity)
    {
        $this->batchQuantity = $batchQuantity;
        return $this;
    }

    /**
     * Gets as consumerUnitQuantity
     *
     * BBIE
     *  Delivery Unit. Consumer_ Unit. Quantity
     *  The quantity of units in the Delivery Unit expressed in the units used by the consumer.
     *  0..1
     *  Delivery Unit
     *  Consumer
     *  Unit
     *  Quantity
     *  Quantity. Type
     *  packs of 10
     *
     * @return \App\UBL\Common\CBC\ConsumerUnitQuantity
     */
    public function getConsumerUnitQuantity()
    {
        return $this->consumerUnitQuantity;
    }

    /**
     * Sets a new consumerUnitQuantity
     *
     * BBIE
     *  Delivery Unit. Consumer_ Unit. Quantity
     *  The quantity of units in the Delivery Unit expressed in the units used by the consumer.
     *  0..1
     *  Delivery Unit
     *  Consumer
     *  Unit
     *  Quantity
     *  Quantity. Type
     *  packs of 10
     *
     * @param \App\UBL\Common\CBC\ConsumerUnitQuantity $consumerUnitQuantity
     * @return self
     */
    public function setConsumerUnitQuantity(?\App\UBL\Common\CBC\ConsumerUnitQuantity $consumerUnitQuantity = null)
    {
        $this->consumerUnitQuantity = $consumerUnitQuantity;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Delivery Unit. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Delivery Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Delivery Unit. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Delivery Unit
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }
}

