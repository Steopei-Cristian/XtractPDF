<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing OrderReferenceType
 *
 * ABIE
 *  Order Reference. Details
 *  A class to define a reference to an Order.
 *  Order Reference
 * XSD Type: OrderReferenceType
 */
class OrderReferenceType
{
    /**
     * BBIE
     *  Order Reference. Identifier
     *  An identifier for this order reference, assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Order Reference. Sales_ Order Identifier. Identifier
     *  An identifier for this order reference, assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\SalesOrderID $salesOrderID
     */
    private $salesOrderID = null;

    /**
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for this order reference.
     *  0..1
     *  Order Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  Text used for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\CustomerReference $customerReference
     */
    private $customerReference = null;

    /**
     * BBIE
     *  Order Reference. Order Type Code. Code
     *  A code signifying the type of the referenced Order.
     *  0..1
     *  Order Reference
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\OrderTypeCode $orderTypeCode
     */
    private $orderTypeCode = null;

    /**
     * ASBIE
     *  Order Reference. Document Reference
     *  A document associated with this reference to an Order.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \App\UBL\Common\CAC\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Order Reference. Identifier
     *  An identifier for this order reference, assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
     *
     * @return \App\UBL\Common\CBC\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Order Reference. Identifier
     *  An identifier for this order reference, assigned by the buyer.
     *  1
     *  Order Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
     *
     * @param \App\UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(\App\UBL\Common\CBC\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as salesOrderID
     *
     * BBIE
     *  Order Reference. Sales_ Order Identifier. Identifier
     *  An identifier for this order reference, assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\SalesOrderID
     */
    public function getSalesOrderID()
    {
        return $this->salesOrderID;
    }

    /**
     * Sets a new salesOrderID
     *
     * BBIE
     *  Order Reference. Sales_ Order Identifier. Identifier
     *  An identifier for this order reference, assigned by the seller.
     *  0..1
     *  Order Reference
     *  Sales
     *  Order Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\SalesOrderID $salesOrderID
     * @return self
     */
    public function setSalesOrderID(?\App\UBL\Common\CBC\SalesOrderID $salesOrderID = null)
    {
        $this->salesOrderID = $salesOrderID;
        return $this;
    }

    /**
     * Gets as copyIndicator
     *
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Order Reference. Copy_ Indicator. Indicator
     *  Indicates whether the referenced Order is a copy (true) or the original (false).
     *  0..1
     *  Order Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for this order reference.
     *  0..1
     *  Order Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \App\UBL\Common\CBC\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Order Reference. UUID. Identifier
     *  A universally unique identifier for this order reference.
     *  0..1
     *  Order Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\UUID $uUID
     * @return self
     */
    public function setUUID(?\App\UBL\Common\CBC\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Order Reference. Issue Date. Date
     *  The date on which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(?\DateTime $issueDate = null)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Order Reference. Issue Time. Time
     *  The time at which the referenced Order was issued.
     *  0..1
     *  Order Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(?\DateTime $issueTime = null)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as customerReference
     *
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  Text used for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\CustomerReference
     */
    public function getCustomerReference()
    {
        return $this->customerReference;
    }

    /**
     * Sets a new customerReference
     *
     * BBIE
     *  Order Reference. Customer_ Reference. Text
     *  Text used for tagging purchasing card transactions.
     *  0..1
     *  Order Reference
     *  Customer
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\CustomerReference $customerReference
     * @return self
     */
    public function setCustomerReference(?\App\UBL\Common\CBC\CustomerReference $customerReference = null)
    {
        $this->customerReference = $customerReference;
        return $this;
    }

    /**
     * Gets as orderTypeCode
     *
     * BBIE
     *  Order Reference. Order Type Code. Code
     *  A code signifying the type of the referenced Order.
     *  0..1
     *  Order Reference
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\OrderTypeCode
     */
    public function getOrderTypeCode()
    {
        return $this->orderTypeCode;
    }

    /**
     * Sets a new orderTypeCode
     *
     * BBIE
     *  Order Reference. Order Type Code. Code
     *  A code signifying the type of the referenced Order.
     *  0..1
     *  Order Reference
     *  Order Type Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\OrderTypeCode $orderTypeCode
     * @return self
     */
    public function setOrderTypeCode(?\App\UBL\Common\CBC\OrderTypeCode $orderTypeCode = null)
    {
        $this->orderTypeCode = $orderTypeCode;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Order Reference. Document Reference
     *  A document associated with this reference to an Order.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \App\UBL\Common\CAC\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Order Reference. Document Reference
     *  A document associated with this reference to an Order.
     *  0..1
     *  Order Reference
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \App\UBL\Common\CAC\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(?\App\UBL\Common\CAC\DocumentReference $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }
}

