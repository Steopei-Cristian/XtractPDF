<?php

namespace UBL\Common\CAC;

/**
 * Class representing MiscellaneousEventType
 *
 * ABIE
 *  Miscellaneous Event. Details
 *  A class to describe a miscellaneous event associated with a retail event.
 *  Miscellaneous Event
 * XSD Type: MiscellaneousEventType
 */
class MiscellaneousEventType
{
    /**
     * BBIE
     *  Miscellaneous Event. Miscellaneous Event Type Code. Code
     *  A code signifying the type of this miscellaneous event. Examples are: ASSORTMENT_CHARGE DISASTER FORECAST_DECREASE FORECAST_INCREASE FREIGHT_FLOW_ALLOCATION INVENTORY_POLICY_CHANGE LOCATION_CLOSING LOCATION_OPENING OTHER OUT_OF_STOCK PACKAGING_LABELING_CHANGE PRICE_DECREASE PRICE_INCREASE STORE_FORMAT_OR_PLANOGRAM_CHANGE TEST_MARKET WEATHER
     *  1
     *  Miscellaneous Event
     *  Miscellaneous Event Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\MiscellaneousEventTypeCode $miscellaneousEventTypeCode
     */
    private $miscellaneousEventTypeCode = null;

    /**
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @var \UBL\Common\CAC\EventLineItem[] $eventLineItem
     */
    private $eventLineItem = [
        
    ];

    /**
     * Gets as miscellaneousEventTypeCode
     *
     * BBIE
     *  Miscellaneous Event. Miscellaneous Event Type Code. Code
     *  A code signifying the type of this miscellaneous event. Examples are: ASSORTMENT_CHARGE DISASTER FORECAST_DECREASE FORECAST_INCREASE FREIGHT_FLOW_ALLOCATION INVENTORY_POLICY_CHANGE LOCATION_CLOSING LOCATION_OPENING OTHER OUT_OF_STOCK PACKAGING_LABELING_CHANGE PRICE_DECREASE PRICE_INCREASE STORE_FORMAT_OR_PLANOGRAM_CHANGE TEST_MARKET WEATHER
     *  1
     *  Miscellaneous Event
     *  Miscellaneous Event Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\MiscellaneousEventTypeCode
     */
    public function getMiscellaneousEventTypeCode()
    {
        return $this->miscellaneousEventTypeCode;
    }

    /**
     * Sets a new miscellaneousEventTypeCode
     *
     * BBIE
     *  Miscellaneous Event. Miscellaneous Event Type Code. Code
     *  A code signifying the type of this miscellaneous event. Examples are: ASSORTMENT_CHARGE DISASTER FORECAST_DECREASE FORECAST_INCREASE FREIGHT_FLOW_ALLOCATION INVENTORY_POLICY_CHANGE LOCATION_CLOSING LOCATION_OPENING OTHER OUT_OF_STOCK PACKAGING_LABELING_CHANGE PRICE_DECREASE PRICE_INCREASE STORE_FORMAT_OR_PLANOGRAM_CHANGE TEST_MARKET WEATHER
     *  1
     *  Miscellaneous Event
     *  Miscellaneous Event Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\MiscellaneousEventTypeCode $miscellaneousEventTypeCode
     * @return self
     */
    public function setMiscellaneousEventTypeCode(\UBL\Common\CBC\MiscellaneousEventTypeCode $miscellaneousEventTypeCode)
    {
        $this->miscellaneousEventTypeCode = $miscellaneousEventTypeCode;
        return $this;
    }

    /**
     * Adds as eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @return self
     * @param \UBL\Common\CAC\EventLineItem $eventLineItem
     */
    public function addToEventLineItem(\UBL\Common\CAC\EventLineItem $eventLineItem)
    {
        $this->eventLineItem[] = $eventLineItem;
        return $this;
    }

    /**
     * isset eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventLineItem($index)
    {
        return isset($this->eventLineItem[$index]);
    }

    /**
     * unset eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventLineItem($index)
    {
        unset($this->eventLineItem[$index]);
    }

    /**
     * Gets as eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @return \UBL\Common\CAC\EventLineItem[]
     */
    public function getEventLineItem()
    {
        return $this->eventLineItem;
    }

    /**
     * Sets a new eventLineItem
     *
     * ASBIE
     *  Miscellaneous Event. Event Line Item
     *  An event line item for this miscellaneous retail event.
     *  1..n
     *  Miscellaneous Event
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param \UBL\Common\CAC\EventLineItem[] $eventLineItem
     * @return self
     */
    public function setEventLineItem(array $eventLineItem)
    {
        $this->eventLineItem = $eventLineItem;
        return $this;
    }
}

