<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing RailTransportType
 *
 * ABIE
 *  Rail Transport. Details
 *  A class defining details about a train wagon used as a means of transport.
 *  Rail Transport
 * XSD Type: RailTransportType
 */
class RailTransportType
{
    /**
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  An identifier for the train used as the means of transport.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @var \UBL\Common\CBC\TrainID $trainID
     */
    private $trainID = null;

    /**
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  An identifier for the rail car on the train used as the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\RailCarID $railCarID
     */
    private $railCarID = null;

    /**
     * Gets as trainID
     *
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  An identifier for the train used as the means of transport.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @return \UBL\Common\CBC\TrainID
     */
    public function getTrainID()
    {
        return $this->trainID;
    }

    /**
     * Sets a new trainID
     *
     * BBIE
     *  Rail Transport. Train Identifier. Identifier
     *  An identifier for the train used as the means of transport.
     *  1
     *  Rail Transport
     *  Train Identifier
     *  Identifier
     *  Identifier. Type
     *  Train Number (WCO ID 167)
     *
     * @param \UBL\Common\CBC\TrainID $trainID
     * @return self
     */
    public function setTrainID(\UBL\Common\CBC\TrainID $trainID)
    {
        $this->trainID = $trainID;
        return $this;
    }

    /**
     * Gets as railCarID
     *
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  An identifier for the rail car on the train used as the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\RailCarID
     */
    public function getRailCarID()
    {
        return $this->railCarID;
    }

    /**
     * Sets a new railCarID
     *
     * BBIE
     *  Rail Transport. Rail Car Identifier. Identifier
     *  An identifier for the rail car on the train used as the means of transport.
     *  0..1
     *  Rail Transport
     *  Rail Car Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\RailCarID $railCarID
     * @return self
     */
    public function setRailCarID(?\UBL\Common\CBC\RailCarID $railCarID = null)
    {
        $this->railCarID = $railCarID;
        return $this;
    }
}


