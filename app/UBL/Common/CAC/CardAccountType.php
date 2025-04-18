<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing CardAccountType
 *
 * ABIE
 *  Card Account. Details
 *  A class to define a credit card, debit card, or charge card account.
 *  Card Account
 * XSD Type: CardAccountType
 */
class CardAccountType
{
    /**
     * BBIE
     *  Card Account. Primary_ Account Number. Identifier
     *  An identifier of the card (e.g., the Primary Account Number (PAN)).
     *  1
     *  Card Account
     *  Primary
     *  Account Number
     *  Identifier
     *  Identifier. Type
     *  4558 XXXX XXXX XXXX (a real card number)
     *
     * @var \App\UBL\Common\CBC\PrimaryAccountNumberID $primaryAccountNumberID
     */
    private $primaryAccountNumberID = null;

    /**
     * BBIE
     *  Card Account. Network. Identifier
     *  An identifier for the financial service network provider of the card.
     *  1
     *  Card Account
     *  Network
     *  Identifier
     *  Identifier. Type
     *  VISA, MasterCard, American Express
     *
     * @var \App\UBL\Common\CBC\NetworkID $networkID
     */
    private $networkID = null;

    /**
     * BBIE
     *  Card Account. Card Type Code. Code
     *  A mutually agreed code signifying the type of card. Examples of types are "debit", "credit" and "purchasing"
     *  0..1
     *  Card Account
     *  Card Type Code
     *  Code
     *  Code. Type
     *  Debit Card, Credit Card, Procurement Card
     *
     * @var \App\UBL\Common\CBC\CardTypeCode $cardTypeCode
     */
    private $cardTypeCode = null;

    /**
     * BBIE
     *  Card Account. Validity Start Date. Date
     *  The date from which the card is valid.
     *  0..1
     *  Card Account
     *  Validity Start Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validityStartDate
     */
    private $validityStartDate = null;

    /**
     * BBIE
     *  Card Account. Expiry Date. Date
     *  The date on which the card expires.
     *  0..1
     *  Card Account
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * BBIE
     *  Card Account. Issuer. Identifier
     *  An identifier for the institution issuing the card.
     *  0..1
     *  Card Account
     *  Issuer
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\IssuerID $issuerID
     */
    private $issuerID = null;

    /**
     * BBIE
     *  Card Account. Issue Number. Identifier
     *  An identifier for the card, specified by the issuer.
     *  0..1
     *  Card Account
     *  Issue Number
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\IssueNumberID $issueNumberID
     */
    private $issueNumberID = null;

    /**
     * BBIE
     *  Card Account. CV2. Identifier
     *  An identifier for the Card Verification Value (often found on the reverse of the card itself).
     *  0..1
     *  Card Account
     *  CV2
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\CV2ID $cV2ID
     */
    private $cV2ID = null;

    /**
     * BBIE
     *  Card Account. Card Chip Code. Code
     *  A mutually agreed code to distinguish between CHIP and MAG STRIPE cards.
     *  0..1
     *  Card Account
     *  Card Chip Code
     *  Code
     *  Chip
     *  Chip_ Code. Type
     *
     * @var \App\UBL\Common\CBC\CardChipCode $cardChipCode
     */
    private $cardChipCode = null;

    /**
     * BBIE
     *  Card Account. Chip_ Application. Identifier
     *  An identifier on the chip card for the application that provides the quoted information; an AID (application ID).
     *  0..1
     *  Card Account
     *  Chip
     *  Application
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ChipApplicationID $chipApplicationID
     */
    private $chipApplicationID = null;

    /**
     * BBIE
     *  Card Account. Holder. Name
     *  The name of the cardholder.
     *  0..1
     *  Card Account
     *  Holder
     *  Name
     *  Name. Type
     *
     * @var \App\UBL\Common\CBC\HolderName $holderName
     */
    private $holderName = null;

    /**
     * Gets as primaryAccountNumberID
     *
     * BBIE
     *  Card Account. Primary_ Account Number. Identifier
     *  An identifier of the card (e.g., the Primary Account Number (PAN)).
     *  1
     *  Card Account
     *  Primary
     *  Account Number
     *  Identifier
     *  Identifier. Type
     *  4558 XXXX XXXX XXXX (a real card number)
     *
     * @return \App\UBL\Common\CBC\PrimaryAccountNumberID
     */
    public function getPrimaryAccountNumberID()
    {
        return $this->primaryAccountNumberID;
    }

    /**
     * Sets a new primaryAccountNumberID
     *
     * BBIE
     *  Card Account. Primary_ Account Number. Identifier
     *  An identifier of the card (e.g., the Primary Account Number (PAN)).
     *  1
     *  Card Account
     *  Primary
     *  Account Number
     *  Identifier
     *  Identifier. Type
     *  4558 XXXX XXXX XXXX (a real card number)
     *
     * @param \App\UBL\Common\CBC\PrimaryAccountNumberID $primaryAccountNumberID
     * @return self
     */
    public function setPrimaryAccountNumberID(\App\UBL\Common\CBC\PrimaryAccountNumberID $primaryAccountNumberID)
    {
        $this->primaryAccountNumberID = $primaryAccountNumberID;
        return $this;
    }

    /**
     * Gets as networkID
     *
     * BBIE
     *  Card Account. Network. Identifier
     *  An identifier for the financial service network provider of the card.
     *  1
     *  Card Account
     *  Network
     *  Identifier
     *  Identifier. Type
     *  VISA, MasterCard, American Express
     *
     * @return \App\UBL\Common\CBC\NetworkID
     */
    public function getNetworkID()
    {
        return $this->networkID;
    }

    /**
     * Sets a new networkID
     *
     * BBIE
     *  Card Account. Network. Identifier
     *  An identifier for the financial service network provider of the card.
     *  1
     *  Card Account
     *  Network
     *  Identifier
     *  Identifier. Type
     *  VISA, MasterCard, American Express
     *
     * @param \App\UBL\Common\CBC\NetworkID $networkID
     * @return self
     */
    public function setNetworkID(\App\UBL\Common\CBC\NetworkID $networkID)
    {
        $this->networkID = $networkID;
        return $this;
    }

    /**
     * Gets as cardTypeCode
     *
     * BBIE
     *  Card Account. Card Type Code. Code
     *  A mutually agreed code signifying the type of card. Examples of types are "debit", "credit" and "purchasing"
     *  0..1
     *  Card Account
     *  Card Type Code
     *  Code
     *  Code. Type
     *  Debit Card, Credit Card, Procurement Card
     *
     * @return \App\UBL\Common\CBC\CardTypeCode
     */
    public function getCardTypeCode()
    {
        return $this->cardTypeCode;
    }

    /**
     * Sets a new cardTypeCode
     *
     * BBIE
     *  Card Account. Card Type Code. Code
     *  A mutually agreed code signifying the type of card. Examples of types are "debit", "credit" and "purchasing"
     *  0..1
     *  Card Account
     *  Card Type Code
     *  Code
     *  Code. Type
     *  Debit Card, Credit Card, Procurement Card
     *
     * @param \App\UBL\Common\CBC\CardTypeCode $cardTypeCode
     * @return self
     */
    public function setCardTypeCode(?\App\UBL\Common\CBC\CardTypeCode $cardTypeCode = null)
    {
        $this->cardTypeCode = $cardTypeCode;
        return $this;
    }

    /**
     * Gets as validityStartDate
     *
     * BBIE
     *  Card Account. Validity Start Date. Date
     *  The date from which the card is valid.
     *  0..1
     *  Card Account
     *  Validity Start Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getValidityStartDate()
    {
        return $this->validityStartDate;
    }

    /**
     * Sets a new validityStartDate
     *
     * BBIE
     *  Card Account. Validity Start Date. Date
     *  The date from which the card is valid.
     *  0..1
     *  Card Account
     *  Validity Start Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $validityStartDate
     * @return self
     */
    public function setValidityStartDate(?\DateTime $validityStartDate = null)
    {
        $this->validityStartDate = $validityStartDate;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * BBIE
     *  Card Account. Expiry Date. Date
     *  The date on which the card expires.
     *  0..1
     *  Card Account
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * BBIE
     *  Card Account. Expiry Date. Date
     *  The date on which the card expires.
     *  0..1
     *  Card Account
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(?\DateTime $expiryDate = null)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Gets as issuerID
     *
     * BBIE
     *  Card Account. Issuer. Identifier
     *  An identifier for the institution issuing the card.
     *  0..1
     *  Card Account
     *  Issuer
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\IssuerID
     */
    public function getIssuerID()
    {
        return $this->issuerID;
    }

    /**
     * Sets a new issuerID
     *
     * BBIE
     *  Card Account. Issuer. Identifier
     *  An identifier for the institution issuing the card.
     *  0..1
     *  Card Account
     *  Issuer
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\IssuerID $issuerID
     * @return self
     */
    public function setIssuerID(?\App\UBL\Common\CBC\IssuerID $issuerID = null)
    {
        $this->issuerID = $issuerID;
        return $this;
    }

    /**
     * Gets as issueNumberID
     *
     * BBIE
     *  Card Account. Issue Number. Identifier
     *  An identifier for the card, specified by the issuer.
     *  0..1
     *  Card Account
     *  Issue Number
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\IssueNumberID
     */
    public function getIssueNumberID()
    {
        return $this->issueNumberID;
    }

    /**
     * Sets a new issueNumberID
     *
     * BBIE
     *  Card Account. Issue Number. Identifier
     *  An identifier for the card, specified by the issuer.
     *  0..1
     *  Card Account
     *  Issue Number
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\IssueNumberID $issueNumberID
     * @return self
     */
    public function setIssueNumberID(?\App\UBL\Common\CBC\IssueNumberID $issueNumberID = null)
    {
        $this->issueNumberID = $issueNumberID;
        return $this;
    }

    /**
     * Gets as cV2ID
     *
     * BBIE
     *  Card Account. CV2. Identifier
     *  An identifier for the Card Verification Value (often found on the reverse of the card itself).
     *  0..1
     *  Card Account
     *  CV2
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\CV2ID
     */
    public function getCV2ID()
    {
        return $this->cV2ID;
    }

    /**
     * Sets a new cV2ID
     *
     * BBIE
     *  Card Account. CV2. Identifier
     *  An identifier for the Card Verification Value (often found on the reverse of the card itself).
     *  0..1
     *  Card Account
     *  CV2
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\CV2ID $cV2ID
     * @return self
     */
    public function setCV2ID(?\App\UBL\Common\CBC\CV2ID $cV2ID = null)
    {
        $this->cV2ID = $cV2ID;
        return $this;
    }

    /**
     * Gets as cardChipCode
     *
     * BBIE
     *  Card Account. Card Chip Code. Code
     *  A mutually agreed code to distinguish between CHIP and MAG STRIPE cards.
     *  0..1
     *  Card Account
     *  Card Chip Code
     *  Code
     *  Chip
     *  Chip_ Code. Type
     *
     * @return \App\UBL\Common\CBC\CardChipCode
     */
    public function getCardChipCode()
    {
        return $this->cardChipCode;
    }

    /**
     * Sets a new cardChipCode
     *
     * BBIE
     *  Card Account. Card Chip Code. Code
     *  A mutually agreed code to distinguish between CHIP and MAG STRIPE cards.
     *  0..1
     *  Card Account
     *  Card Chip Code
     *  Code
     *  Chip
     *  Chip_ Code. Type
     *
     * @param \App\UBL\Common\CBC\CardChipCode $cardChipCode
     * @return self
     */
    public function setCardChipCode(?\App\UBL\Common\CBC\CardChipCode $cardChipCode = null)
    {
        $this->cardChipCode = $cardChipCode;
        return $this;
    }

    /**
     * Gets as chipApplicationID
     *
     * BBIE
     *  Card Account. Chip_ Application. Identifier
     *  An identifier on the chip card for the application that provides the quoted information; an AID (application ID).
     *  0..1
     *  Card Account
     *  Chip
     *  Application
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\ChipApplicationID
     */
    public function getChipApplicationID()
    {
        return $this->chipApplicationID;
    }

    /**
     * Sets a new chipApplicationID
     *
     * BBIE
     *  Card Account. Chip_ Application. Identifier
     *  An identifier on the chip card for the application that provides the quoted information; an AID (application ID).
     *  0..1
     *  Card Account
     *  Chip
     *  Application
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\ChipApplicationID $chipApplicationID
     * @return self
     */
    public function setChipApplicationID(?\App\UBL\Common\CBC\ChipApplicationID $chipApplicationID = null)
    {
        $this->chipApplicationID = $chipApplicationID;
        return $this;
    }

    /**
     * Gets as holderName
     *
     * BBIE
     *  Card Account. Holder. Name
     *  The name of the cardholder.
     *  0..1
     *  Card Account
     *  Holder
     *  Name
     *  Name. Type
     *
     * @return \App\UBL\Common\CBC\HolderName
     */
    public function getHolderName()
    {
        return $this->holderName;
    }

    /**
     * Sets a new holderName
     *
     * BBIE
     *  Card Account. Holder. Name
     *  The name of the cardholder.
     *  0..1
     *  Card Account
     *  Holder
     *  Name
     *  Name. Type
     *
     * @param \App\UBL\Common\CBC\HolderName $holderName
     * @return self
     */
    public function setHolderName(?\App\UBL\Common\CBC\HolderName $holderName = null)
    {
        $this->holderName = $holderName;
        return $this;
    }
}

