<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing OrderLineType
 *
 * ABIE
 *  Order Line. Details
 *  A class to define a line in an order document (e.g., Order, Order Change, or Order Response) describing an item being ordered.
 *  Order Line
 * XSD Type: OrderLineType
 */
class OrderLineType
{
    /**
     * BBIE
     *  Order Line. Substitution Status Code. Code
     *  A code signifying the substitution status of the item on this order line. The order line may indicate that the substitute is proposed by the buyer (in Order) or by the seller (in Order Response) or that a substitution has been made by the seller (in Order Response).
     *  0..1
     *  Order Line
     *  Substitution Status Code
     *  Code
     *  Substitution Status
     *  Substitution Status_ Code. Type
     *
     * @var \App\UBL\Common\CBC\SubstitutionStatusCode $substitutionStatusCode
     */
    private $substitutionStatusCode = null;

    /**
     * BBIE
     *  Order Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Order Line. Line Item
     *  The line item itself.
     *  1
     *  Order Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \App\UBL\Common\CAC\LineItem $lineItem
     */
    private $lineItem = null;

    /**
     * ASBIE
     *  Order Line. Seller Proposed Substitute_ Line Item. Line Item
     *  In Order Response, a line item proposed by the seller describing a product that might substitute for the product described in this order line.
     *  0..n
     *  Order Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \App\UBL\Common\CAC\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     */
    private $sellerProposedSubstituteLineItem = [
        
    ];

    /**
     * ASBIE
     *  Order Line. Seller Substituted_ Line Item. Line Item
     *  In Order Response, a line item that has replaced the original order line item. The specified quantity and pricing may differ from those in the original line item, but when a line item is substituted by the seller, it is assumed that other information, such as shipment details, will remain the same.
     *  0..n
     *  Order Line
     *  Seller Substituted
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \App\UBL\Common\CAC\SellerSubstitutedLineItem[] $sellerSubstitutedLineItem
     */
    private $sellerSubstitutedLineItem = [
        
    ];

    /**
     * ASBIE
     *  Order Line. Buyer Proposed Substitute_ Line Item. Line Item
     *  A description of an item proposed by the buyer as a possible alternative to the item associated with this order line.
     *  0..n
     *  Order Line
     *  Buyer Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @var \App\UBL\Common\CAC\BuyerProposedSubstituteLineItem[] $buyerProposedSubstituteLineItem
     */
    private $buyerProposedSubstituteLineItem = [
        
    ];

    /**
     * ASBIE
     *  Order Line. Catalogue_ Line Reference. Line Reference
     *  A reference to a catalogue line associated with this order line.
     *  0..1
     *  Order Line
     *  Catalogue
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \App\UBL\Common\CAC\CatalogueLineReference $catalogueLineReference
     */
    private $catalogueLineReference = null;

    /**
     * ASBIE
     *  Order Line. Quotation_ Line Reference. Line Reference
     *  A reference to a quotation line associated with this order line.
     *  0..1
     *  Order Line
     *  Quotation
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \App\UBL\Common\CAC\QuotationLineReference $quotationLineReference
     */
    private $quotationLineReference = null;

    /**
     * ASBIE
     *  Order Line. Order Line Reference
     *  A reference to another order line, such as in a replacement order or another line on the same order that is related.
     *  0..n
     *  Order Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @var \App\UBL\Common\CAC\OrderLineReference[] $orderLineReference
     */
    private $orderLineReference = [
        
    ];

    /**
     * ASBIE
     *  Order Line. Document Reference
     *  A reference to a document associated with this order line.
     *  0..n
     *  Order Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \App\UBL\Common\CAC\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * Gets as substitutionStatusCode
     *
     * BBIE
     *  Order Line. Substitution Status Code. Code
     *  A code signifying the substitution status of the item on this order line. The order line may indicate that the substitute is proposed by the buyer (in Order) or by the seller (in Order Response) or that a substitution has been made by the seller (in Order Response).
     *  0..1
     *  Order Line
     *  Substitution Status Code
     *  Code
     *  Substitution Status
     *  Substitution Status_ Code. Type
     *
     * @return \App\UBL\Common\CBC\SubstitutionStatusCode
     */
    public function getSubstitutionStatusCode()
    {
        return $this->substitutionStatusCode;
    }

    /**
     * Sets a new substitutionStatusCode
     *
     * BBIE
     *  Order Line. Substitution Status Code. Code
     *  A code signifying the substitution status of the item on this order line. The order line may indicate that the substitute is proposed by the buyer (in Order) or by the seller (in Order Response) or that a substitution has been made by the seller (in Order Response).
     *  0..1
     *  Order Line
     *  Substitution Status Code
     *  Code
     *  Substitution Status
     *  Substitution Status_ Code. Type
     *
     * @param \App\UBL\Common\CBC\SubstitutionStatusCode $substitutionStatusCode
     * @return self
     */
    public function setSubstitutionStatusCode(?\App\UBL\Common\CBC\SubstitutionStatusCode $substitutionStatusCode = null)
    {
        $this->substitutionStatusCode = $substitutionStatusCode;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Order Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \App\UBL\Common\CBC\Note $note
     */
    public function addToNote(\App\UBL\Common\CBC\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Order Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Line
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
     *  Order Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Line
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
     *  Order Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Order Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Order Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\Note[] $note
     * @return self
     */
    public function setNote(?array $note = null)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as lineItem
     *
     * ASBIE
     *  Order Line. Line Item
     *  The line item itself.
     *  1
     *  Order Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \App\UBL\Common\CAC\LineItem
     */
    public function getLineItem()
    {
        return $this->lineItem;
    }

    /**
     * Sets a new lineItem
     *
     * ASBIE
     *  Order Line. Line Item
     *  The line item itself.
     *  1
     *  Order Line
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \App\UBL\Common\CAC\LineItem $lineItem
     * @return self
     */
    public function setLineItem(\App\UBL\Common\CAC\LineItem $lineItem)
    {
        $this->lineItem = $lineItem;
        return $this;
    }

    /**
     * Adds as sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Order Line. Seller Proposed Substitute_ Line Item. Line Item
     *  In Order Response, a line item proposed by the seller describing a product that might substitute for the product described in this order line.
     *  0..n
     *  Order Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem
     */
    public function addToSellerProposedSubstituteLineItem(\App\UBL\Common\CAC\SellerProposedSubstituteLineItem $sellerProposedSubstituteLineItem)
    {
        $this->sellerProposedSubstituteLineItem[] = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * isset sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Order Line. Seller Proposed Substitute_ Line Item. Line Item
     *  In Order Response, a line item proposed by the seller describing a product that might substitute for the product described in this order line.
     *  0..n
     *  Order Line
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
     *  Order Line. Seller Proposed Substitute_ Line Item. Line Item
     *  In Order Response, a line item proposed by the seller describing a product that might substitute for the product described in this order line.
     *  0..n
     *  Order Line
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
     *  Order Line. Seller Proposed Substitute_ Line Item. Line Item
     *  In Order Response, a line item proposed by the seller describing a product that might substitute for the product described in this order line.
     *  0..n
     *  Order Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \App\UBL\Common\CAC\SellerProposedSubstituteLineItem[]
     */
    public function getSellerProposedSubstituteLineItem()
    {
        return $this->sellerProposedSubstituteLineItem;
    }

    /**
     * Sets a new sellerProposedSubstituteLineItem
     *
     * ASBIE
     *  Order Line. Seller Proposed Substitute_ Line Item. Line Item
     *  In Order Response, a line item proposed by the seller describing a product that might substitute for the product described in this order line.
     *  0..n
     *  Order Line
     *  Seller Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \App\UBL\Common\CAC\SellerProposedSubstituteLineItem[] $sellerProposedSubstituteLineItem
     * @return self
     */
    public function setSellerProposedSubstituteLineItem(?array $sellerProposedSubstituteLineItem = null)
    {
        $this->sellerProposedSubstituteLineItem = $sellerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * Adds as sellerSubstitutedLineItem
     *
     * ASBIE
     *  Order Line. Seller Substituted_ Line Item. Line Item
     *  In Order Response, a line item that has replaced the original order line item. The specified quantity and pricing may differ from those in the original line item, but when a line item is substituted by the seller, it is assumed that other information, such as shipment details, will remain the same.
     *  0..n
     *  Order Line
     *  Seller Substituted
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\SellerSubstitutedLineItem $sellerSubstitutedLineItem
     */
    public function addToSellerSubstitutedLineItem(\App\UBL\Common\CAC\SellerSubstitutedLineItem $sellerSubstitutedLineItem)
    {
        $this->sellerSubstitutedLineItem[] = $sellerSubstitutedLineItem;
        return $this;
    }

    /**
     * isset sellerSubstitutedLineItem
     *
     * ASBIE
     *  Order Line. Seller Substituted_ Line Item. Line Item
     *  In Order Response, a line item that has replaced the original order line item. The specified quantity and pricing may differ from those in the original line item, but when a line item is substituted by the seller, it is assumed that other information, such as shipment details, will remain the same.
     *  0..n
     *  Order Line
     *  Seller Substituted
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSellerSubstitutedLineItem($index)
    {
        return isset($this->sellerSubstitutedLineItem[$index]);
    }

    /**
     * unset sellerSubstitutedLineItem
     *
     * ASBIE
     *  Order Line. Seller Substituted_ Line Item. Line Item
     *  In Order Response, a line item that has replaced the original order line item. The specified quantity and pricing may differ from those in the original line item, but when a line item is substituted by the seller, it is assumed that other information, such as shipment details, will remain the same.
     *  0..n
     *  Order Line
     *  Seller Substituted
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSellerSubstitutedLineItem($index)
    {
        unset($this->sellerSubstitutedLineItem[$index]);
    }

    /**
     * Gets as sellerSubstitutedLineItem
     *
     * ASBIE
     *  Order Line. Seller Substituted_ Line Item. Line Item
     *  In Order Response, a line item that has replaced the original order line item. The specified quantity and pricing may differ from those in the original line item, but when a line item is substituted by the seller, it is assumed that other information, such as shipment details, will remain the same.
     *  0..n
     *  Order Line
     *  Seller Substituted
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \App\UBL\Common\CAC\SellerSubstitutedLineItem[]
     */
    public function getSellerSubstitutedLineItem()
    {
        return $this->sellerSubstitutedLineItem;
    }

    /**
     * Sets a new sellerSubstitutedLineItem
     *
     * ASBIE
     *  Order Line. Seller Substituted_ Line Item. Line Item
     *  In Order Response, a line item that has replaced the original order line item. The specified quantity and pricing may differ from those in the original line item, but when a line item is substituted by the seller, it is assumed that other information, such as shipment details, will remain the same.
     *  0..n
     *  Order Line
     *  Seller Substituted
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \App\UBL\Common\CAC\SellerSubstitutedLineItem[] $sellerSubstitutedLineItem
     * @return self
     */
    public function setSellerSubstitutedLineItem(?array $sellerSubstitutedLineItem = null)
    {
        $this->sellerSubstitutedLineItem = $sellerSubstitutedLineItem;
        return $this;
    }

    /**
     * Adds as buyerProposedSubstituteLineItem
     *
     * ASBIE
     *  Order Line. Buyer Proposed Substitute_ Line Item. Line Item
     *  A description of an item proposed by the buyer as a possible alternative to the item associated with this order line.
     *  0..n
     *  Order Line
     *  Buyer Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return self
     * @param \App\UBL\Common\CAC\BuyerProposedSubstituteLineItem $buyerProposedSubstituteLineItem
     */
    public function addToBuyerProposedSubstituteLineItem(\App\UBL\Common\CAC\BuyerProposedSubstituteLineItem $buyerProposedSubstituteLineItem)
    {
        $this->buyerProposedSubstituteLineItem[] = $buyerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * isset buyerProposedSubstituteLineItem
     *
     * ASBIE
     *  Order Line. Buyer Proposed Substitute_ Line Item. Line Item
     *  A description of an item proposed by the buyer as a possible alternative to the item associated with this order line.
     *  0..n
     *  Order Line
     *  Buyer Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBuyerProposedSubstituteLineItem($index)
    {
        return isset($this->buyerProposedSubstituteLineItem[$index]);
    }

    /**
     * unset buyerProposedSubstituteLineItem
     *
     * ASBIE
     *  Order Line. Buyer Proposed Substitute_ Line Item. Line Item
     *  A description of an item proposed by the buyer as a possible alternative to the item associated with this order line.
     *  0..n
     *  Order Line
     *  Buyer Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBuyerProposedSubstituteLineItem($index)
    {
        unset($this->buyerProposedSubstituteLineItem[$index]);
    }

    /**
     * Gets as buyerProposedSubstituteLineItem
     *
     * ASBIE
     *  Order Line. Buyer Proposed Substitute_ Line Item. Line Item
     *  A description of an item proposed by the buyer as a possible alternative to the item associated with this order line.
     *  0..n
     *  Order Line
     *  Buyer Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @return \App\UBL\Common\CAC\BuyerProposedSubstituteLineItem[]
     */
    public function getBuyerProposedSubstituteLineItem()
    {
        return $this->buyerProposedSubstituteLineItem;
    }

    /**
     * Sets a new buyerProposedSubstituteLineItem
     *
     * ASBIE
     *  Order Line. Buyer Proposed Substitute_ Line Item. Line Item
     *  A description of an item proposed by the buyer as a possible alternative to the item associated with this order line.
     *  0..n
     *  Order Line
     *  Buyer Proposed Substitute
     *  Line Item
     *  Line Item
     *  Line Item
     *
     * @param \App\UBL\Common\CAC\BuyerProposedSubstituteLineItem[] $buyerProposedSubstituteLineItem
     * @return self
     */
    public function setBuyerProposedSubstituteLineItem(?array $buyerProposedSubstituteLineItem = null)
    {
        $this->buyerProposedSubstituteLineItem = $buyerProposedSubstituteLineItem;
        return $this;
    }

    /**
     * Gets as catalogueLineReference
     *
     * ASBIE
     *  Order Line. Catalogue_ Line Reference. Line Reference
     *  A reference to a catalogue line associated with this order line.
     *  0..1
     *  Order Line
     *  Catalogue
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \App\UBL\Common\CAC\CatalogueLineReference
     */
    public function getCatalogueLineReference()
    {
        return $this->catalogueLineReference;
    }

    /**
     * Sets a new catalogueLineReference
     *
     * ASBIE
     *  Order Line. Catalogue_ Line Reference. Line Reference
     *  A reference to a catalogue line associated with this order line.
     *  0..1
     *  Order Line
     *  Catalogue
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \App\UBL\Common\CAC\CatalogueLineReference $catalogueLineReference
     * @return self
     */
    public function setCatalogueLineReference(?\App\UBL\Common\CAC\CatalogueLineReference $catalogueLineReference = null)
    {
        $this->catalogueLineReference = $catalogueLineReference;
        return $this;
    }

    /**
     * Gets as quotationLineReference
     *
     * ASBIE
     *  Order Line. Quotation_ Line Reference. Line Reference
     *  A reference to a quotation line associated with this order line.
     *  0..1
     *  Order Line
     *  Quotation
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \App\UBL\Common\CAC\QuotationLineReference
     */
    public function getQuotationLineReference()
    {
        return $this->quotationLineReference;
    }

    /**
     * Sets a new quotationLineReference
     *
     * ASBIE
     *  Order Line. Quotation_ Line Reference. Line Reference
     *  A reference to a quotation line associated with this order line.
     *  0..1
     *  Order Line
     *  Quotation
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \App\UBL\Common\CAC\QuotationLineReference $quotationLineReference
     * @return self
     */
    public function setQuotationLineReference(?\App\UBL\Common\CAC\QuotationLineReference $quotationLineReference = null)
    {
        $this->quotationLineReference = $quotationLineReference;
        return $this;
    }

    /**
     * Adds as orderLineReference
     *
     * ASBIE
     *  Order Line. Order Line Reference
     *  A reference to another order line, such as in a replacement order or another line on the same order that is related.
     *  0..n
     *  Order Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return self
     * @param \App\UBL\Common\CAC\OrderLineReference $orderLineReference
     */
    public function addToOrderLineReference(\App\UBL\Common\CAC\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference[] = $orderLineReference;
        return $this;
    }

    /**
     * isset orderLineReference
     *
     * ASBIE
     *  Order Line. Order Line Reference
     *  A reference to another order line, such as in a replacement order or another line on the same order that is related.
     *  0..n
     *  Order Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderLineReference($index)
    {
        return isset($this->orderLineReference[$index]);
    }

    /**
     * unset orderLineReference
     *
     * ASBIE
     *  Order Line. Order Line Reference
     *  A reference to another order line, such as in a replacement order or another line on the same order that is related.
     *  0..n
     *  Order Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderLineReference($index)
    {
        unset($this->orderLineReference[$index]);
    }

    /**
     * Gets as orderLineReference
     *
     * ASBIE
     *  Order Line. Order Line Reference
     *  A reference to another order line, such as in a replacement order or another line on the same order that is related.
     *  0..n
     *  Order Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return \App\UBL\Common\CAC\OrderLineReference[]
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * ASBIE
     *  Order Line. Order Line Reference
     *  A reference to another order line, such as in a replacement order or another line on the same order that is related.
     *  0..n
     *  Order Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param \App\UBL\Common\CAC\OrderLineReference[] $orderLineReference
     * @return self
     */
    public function setOrderLineReference(?array $orderLineReference = null)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Order Line. Document Reference
     *  A reference to a document associated with this order line.
     *  0..n
     *  Order Line
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
     *  Order Line. Document Reference
     *  A reference to a document associated with this order line.
     *  0..n
     *  Order Line
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
     *  Order Line. Document Reference
     *  A reference to a document associated with this order line.
     *  0..n
     *  Order Line
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
     *  Order Line. Document Reference
     *  A reference to a document associated with this order line.
     *  0..n
     *  Order Line
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
     *  Order Line. Document Reference
     *  A reference to a document associated with this order line.
     *  0..n
     *  Order Line
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

