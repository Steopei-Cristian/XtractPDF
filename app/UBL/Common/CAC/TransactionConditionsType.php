<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TransactionConditionsType
 *
 * ABIE
 *  Transaction Conditions. Details
 *  A class to describe purchasing, sales, or payment conditions.
 *  Transaction Conditions
 *  Payment Conditions, Sales Conditions
 * XSD Type: TransactionConditionsType
 */
class TransactionConditionsType
{
    /**
     * BBIE
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\ActionCode $actionCode
     */
    private $actionCode = null;

    /**
     * BBIE
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \App\UBL\Common\CAC\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \App\UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(?\App\UBL\Common\CBC\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as actionCode
     *
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\ActionCode
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Sets a new actionCode
     *
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\ActionCode $actionCode
     * @return self
     */
    public function setActionCode(?\App\UBL\Common\CBC\ActionCode $actionCode = null)
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
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
     * Adds as documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \App\UBL\Common\CAC\DocumentReference $documentReference
     */
    public function addToDocumentReference(\App\UBL\Common\CAC\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \App\UBL\Common\CAC\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \App\UBL\Common\CAC\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }
}

