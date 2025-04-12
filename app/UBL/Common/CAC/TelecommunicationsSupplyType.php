<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TelecommunicationsSupplyType
 *
 * ABIE
 *  Telecommunications Supply. Details
 *  A class describing the supply of a telecommunication service, e.g., providing telephone calls.
 *  Telecommunications Supply
 * XSD Type: TelecommunicationsSupplyType
 */
class TelecommunicationsSupplyType
{
    /**
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @var \App\UBL\Common\CBC\TelecommunicationsSupplyType $telecommunicationsSupplyType
     */
    private $telecommunicationsSupplyType = null;

    /**
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @var \App\UBL\Common\CBC\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode
     */
    private $telecommunicationsSupplyTypeCode = null;

    /**
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @var \App\UBL\Common\CBC\PrivacyCode $privacyCode
     */
    private $privacyCode = null;

    /**
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \App\UBL\Common\CBC\TotalAmount $totalAmount
     */
    private $totalAmount = null;

    /**
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @var \App\UBL\Common\CAC\TelecommunicationsSupplyLine[] $telecommunicationsSupplyLine
     */
    private $telecommunicationsSupplyLine = [
        
    ];

    /**
     * Gets as telecommunicationsSupplyType
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @return \App\UBL\Common\CBC\TelecommunicationsSupplyType
     */
    public function getTelecommunicationsSupplyType()
    {
        return $this->telecommunicationsSupplyType;
    }

    /**
     * Sets a new telecommunicationsSupplyType
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type. Text
     *  The type of telecommunications supply, expressed as text.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type
     *  Text
     *  Text. Type
     *  Itemized tele Statement
     *
     * @param \App\UBL\Common\CBC\TelecommunicationsSupplyType $telecommunicationsSupplyType
     * @return self
     */
    public function setTelecommunicationsSupplyType(?\App\UBL\Common\CBC\TelecommunicationsSupplyType $telecommunicationsSupplyType = null)
    {
        $this->telecommunicationsSupplyType = $telecommunicationsSupplyType;
        return $this;
    }

    /**
     * Gets as telecommunicationsSupplyTypeCode
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @return \App\UBL\Common\CBC\TelecommunicationsSupplyTypeCode
     */
    public function getTelecommunicationsSupplyTypeCode()
    {
        return $this->telecommunicationsSupplyTypeCode;
    }

    /**
     * Sets a new telecommunicationsSupplyTypeCode
     *
     * BBIE
     *  Telecommunications Supply. Telecommunications Supply Type Code. Code
     *  The type of telecommunications supply, expressed as a code.
     *  0..1
     *  Telecommunications Supply
     *  Telecommunications Supply Type Code
     *  Code
     *  Code. Type
     *  TeleExtended
     *
     * @param \App\UBL\Common\CBC\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode
     * @return self
     */
    public function setTelecommunicationsSupplyTypeCode(?\App\UBL\Common\CBC\TelecommunicationsSupplyTypeCode $telecommunicationsSupplyTypeCode = null)
    {
        $this->telecommunicationsSupplyTypeCode = $telecommunicationsSupplyTypeCode;
        return $this;
    }

    /**
     * Gets as privacyCode
     *
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @return \App\UBL\Common\CBC\PrivacyCode
     */
    public function getPrivacyCode()
    {
        return $this->privacyCode;
    }

    /**
     * Sets a new privacyCode
     *
     * BBIE
     *  Telecommunications Supply. Privacy Code. Code
     *  A code signifying the level of confidentiality of this information for this telecommunication supply.
     *  1
     *  Telecommunications Supply
     *  Privacy Code
     *  Code
     *  Code. Type
     *  CompanyLevel
     *
     * @param \App\UBL\Common\CBC\PrivacyCode $privacyCode
     * @return self
     */
    public function setPrivacyCode(\App\UBL\Common\CBC\PrivacyCode $privacyCode)
    {
        $this->privacyCode = $privacyCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @return self
     * @param \App\UBL\Common\CBC\Description $description
     */
    public function addToDescription(\App\UBL\Common\CBC\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @return \App\UBL\Common\CBC\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Telecommunications Supply. Description. Text
     *  Text describing the telecommunications supply.
     *  0..n
     *  Telecommunications Supply
     *  Description
     *  Text
     *  Text. Type
     *  Extended conversation Statement January quarter 2008.
     *
     * @param \App\UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as totalAmount
     *
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \App\UBL\Common\CBC\TotalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * BBIE
     *  Telecommunications Supply. Total_ Amount. Amount
     *  The total amount associated with this telecommunications supply.
     *  0..1
     *  Telecommunications Supply
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \App\UBL\Common\CBC\TotalAmount $totalAmount
     * @return self
     */
    public function setTotalAmount(?\App\UBL\Common\CBC\TotalAmount $totalAmount = null)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Adds as telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @return self
     * @param \App\UBL\Common\CAC\TelecommunicationsSupplyLine $telecommunicationsSupplyLine
     */
    public function addToTelecommunicationsSupplyLine(\App\UBL\Common\CAC\TelecommunicationsSupplyLine $telecommunicationsSupplyLine)
    {
        $this->telecommunicationsSupplyLine[] = $telecommunicationsSupplyLine;
        return $this;
    }

    /**
     * isset telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelecommunicationsSupplyLine($index)
    {
        return isset($this->telecommunicationsSupplyLine[$index]);
    }

    /**
     * unset telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelecommunicationsSupplyLine($index)
    {
        unset($this->telecommunicationsSupplyLine[$index]);
    }

    /**
     * Gets as telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @return \App\UBL\Common\CAC\TelecommunicationsSupplyLine[]
     */
    public function getTelecommunicationsSupplyLine()
    {
        return $this->telecommunicationsSupplyLine;
    }

    /**
     * Sets a new telecommunicationsSupplyLine
     *
     * ASBIE
     *  Telecommunications Supply. Telecommunications Supply Line
     *  Outlines the provided telecommunication supply
     *  1..n
     *  Telecommunications Supply
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *  Telecommunications Supply Line
     *
     * @param \App\UBL\Common\CAC\TelecommunicationsSupplyLine[] $telecommunicationsSupplyLine
     * @return self
     */
    public function setTelecommunicationsSupplyLine(array $telecommunicationsSupplyLine)
    {
        $this->telecommunicationsSupplyLine = $telecommunicationsSupplyLine;
        return $this;
    }
}

