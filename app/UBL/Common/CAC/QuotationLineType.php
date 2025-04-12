<?php

namespace UBL\Common\CAC;

/**
 * Class representing QuotationLineType
 *
 * ABIE
 *  Quotation Line. Details
 *  A class to define a line in a Quotation.
 *  Quotation Line
 * XSD Type: QuotationLineType
 */
class QuotationLineType
{
    /**
     * BBIE
     *  Quotation Line. Identifier
     *  An identifier for this quotation line.
     *  0..1
     *  Quotation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \UBL\Common\CBC\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for this quotation line, including allowance charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for this quotation line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * BBIE
     *  Quotation Line. Request For Quotation Line Identifier. Identifier
     *  An identifier for the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request For Quotation Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\RequestForQuotationLineID $requestForQuotationLineID
     */
    private $requestForQuotationLineID = null;

    /**
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL\Common\CAC\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Quotation Line. Line Item
     *  The item that is the subject of this quotation line.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \UBL\Common\CAC\LineItem $lineItem
     */
    private $lineItem = null;

    /**
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \UBL\Common\CAC\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     */
    private $sellerProposedSubstituteLineItem = [
        
    ];

    /**
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \UBL\Common\CAC\AlternativeLineItem[] $alternativeLineItem
     */
    private $alternativeLineItem = [
        
    ];

    /**
     * ASBIE
     *  Quotation Line. Request_ Line Reference. Line Reference
     *  A reference to the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \UBL\Common\CAC\RequestLineReference $requestLineReference
     */
    private $requestLineReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Quotation Line. Identifier
     *  An identifier for this quotation line.
     *  0..1
     *  Quotation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Quotation Line. Identifier
     *  An identifier for this quotation line.
     *  0..1
     *  Quotation Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(?\UBL\Common\CBC\ID $iD = null)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Note $note
     */
    public function addToNote(\UBL\Common\CBC\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Quotation Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Quotation Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \UBL\Common\CBC\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Quotation Line. Quantity
     *  The quantity of the item quoted.
     *  0..1
     *  Quotation Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \UBL\Common\CBC\Quantity $quantity
     * @return self
     */
    public function setQuantity(?\UBL\Common\CBC\Quantity $quantity = null)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for this quotation line, including allowance charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Quotation Line. Line Extension Amount. Amount
     *  The total amount for this quotation line, including allowance charges but net of taxes.
     *  0..1
     *  Quotation Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(?\UBL\Common\CBC\LineExtensionAmount $lineExtensionAmount = null)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for this quotation line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\TotalTaxAmount
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * BBIE
     *  Quotation Line. Total_ Tax Amount. Amount
     *  The total tax amount for this quotation line.
     *  0..1
     *  Quotation Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(?\UBL\Common\CBC\TotalTaxAmount $totalTaxAmount = null)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Gets as requestForQuotationLineID
     *
     * BBIE
     *  Quotation Line. Request For Quotation Line Identifier. Identifier
     *  An identifier for the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request For Quotation Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\RequestForQuotationLineID
     */
    public function getRequestForQuotationLineID()
    {
        return $this->requestForQuotationLineID;
    }

    /**
     * Sets a new requestForQuotationLineID
     *
     * BBIE
     *  Quotation Line. Request For Quotation Line Identifier. Identifier
     *  An identifier for the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request For Quotation Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\RequestForQuotationLineID $requestForQuotationLineID
     * @return self
     */
    public function setRequestForQuotationLineID(?\UBL\Common\CBC\RequestForQuotationLineID $requestForQuotationLineID = null)
    {
        $this->requestForQuotationLineID = $requestForQuotationLineID;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \UBL\Common\CAC\DocumentReference $documentReference
     */
    public function addToDocumentReference(\UBL\Common\CAC\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
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
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL\Common\CAC\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Quotation Line. Document Reference
     *  A reference to a document associated with this quotation line.
     *  0..n
     *  Quotation Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL\Common\CAC\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(?array $documentReference = null)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as lineItem
     *
     * ASBIE
     *  Quotation Line. Line Item
     *  The item that is the subject of this quotation line.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \UBL\Common\CAC\LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Sets a new lineItem
     *
     * ASBIE
     *  Quotation Line. Line Item
     *  The item that is the subject of this quotation line.
     *  1
     *  Quotation Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \UBL\Common\CAC\LineItem $lineItem
     * @return self
     */
    public function setLineItem(\UBL\Common\CAC\LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }

    /**
     * Adds as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \UBL\Common\CAC\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem
     */
    public function addToSellerProposedSubstituteLineItem(\UBL\Common\CAC\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem)
    {
        $this->sellerProposedSubstituteLineItem[] = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * isset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerProposedSubstituteLineItem($index)
    {
        return isset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * unset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerProposedSubstituteLineItem($index)
    {
        unset($this->sellerProposedSubstituteLineItem[$index]);
    }

    /**
     * Gets as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \UBL\Common\CAC\SellerProposedSubstituteLineItem[]
     */
    public function getSellerProposedSubstituteLineItem()
    {
        return $this->sellerProposedSubstituteLineItem;
    }

    /**
     * Sets a new sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Quotation Line. Seller Proposed Substitute_ Line Item. Line Item
     *  An item proposed by the seller as a substitute for the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \UBL\Common\CAC\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     * @return self
     */
    public function setSellerProposedSubstituteLineItem(?array $sellerProposedSubstituteLineItem = null)
    {
        $this->sellerProposedSubstituteLineItem = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * Adds as alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \UBL\Common\CAC\AlternativeLineItem $alternativeLineItem
     */
    public function addToAlternativeLineItem(\UBL\Common\CAC\AlternativeLineItem $alternativeLineItem)
    {
        $this->alternativeLineItem[] = $alternativeLineItem;
        return $this;
    }

    /**
     * isset alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAlternativeLineItem($index)
    {
        return isset($this->alternativeLineItem[$index]);
    }

    /**
     * unset alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAlternativeLineItem($index)
    {
        unset($this->alternativeLineItem[$index]);
    }

    /**
     * Gets as alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \UBL\Common\CAC\AlternativeLineItem[]
     */
    public function getAlternativeLineItem()
    {
        return $this->alternativeLineItem;
    }

    /**
     * Sets a new alternativeLineItem
     *
     * ASBIE
     *  Quotation Line. Alternative_ Line Item. Line Item
     *  An item proposed by the seller as an alternative to the item that is the subject of this quotation line.
     *  0..n
     *  Quotation Line
     *  Alternative
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \UBL\Common\CAC\AlternativeLineItem[] $alternativeLineItem
     * @return self
     */
    public function setAlternativeLineItem(?array $alternativeLineItem = null)
    {
        $this->alternativeLineItem = $alternativeLineItem;
        return $this;
    }

    /**
     * Gets as requestLineReference
     *
     * ASBIE
     *  Quotation Line. Request_ Line Reference. Line Reference
     *  A reference to the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \UBL\Common\CAC\RequestLineReference
     */
    public function getRequestLineReference()
    {
        return $this->requestLineReference;
    }

    /**
     * Sets a new requestLineReference
     *
     * ASBIE
     *  Quotation Line. Request_ Line Reference. Line Reference
     *  A reference to the line in the Request for Quotation to which this line is a response.
     *  0..1
     *  Quotation Line
     *  Request
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \UBL\Common\CAC\RequestLineReference $requestLineReference
     * @return self
     */
    public function setRequestLineReference(?\UBL\Common\CAC\RequestLineReference $requestLineReference = null)
    {
        $this->requestLineReference = $requestLineReference;
        return $this;
    }
}

