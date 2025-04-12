<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing CreditNoteLineType
 *
 * ABIE
 *  Credit Note Line. Details
 *  A class to define a line in a Credit Note or Self Billed Credit Note.
 *  Credit Note Line
 * XSD Type: CreditNoteLineType
 */
class CreditNoteLineType
{
    /**
     * BBIE
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \App\UBL\Common\CBC\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \App\UBL\Common\CBC\CreditedQuantity $creditedQuantity
     */
    private $creditedQuantity = null;

    /**
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \App\UBL\Common\CBC\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \App\UBL\Common\CBC\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \App\UBL\Common\CBC\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $freeOfChargeIndicator
     */
    private $freeOfChargeIndicator = null;

    /**
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \App\UBL\Common\CAC\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @var \App\UBL\Common\CAC\DiscrepancyResponse[] $discrepancyResponse
     */
    private $discrepancyResponse = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \App\UBL\Common\CAC\DespatchLineReference[] $despatchLineReference
     */
    private $despatchLineReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \App\UBL\Common\CAC\ReceiptLineReference[] $receiptLineReference
     */
    private $receiptLineReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \App\UBL\Common\CAC\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \App\UBL\Common\CAC\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \App\UBL\Common\CAC\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @var \App\UBL\Common\CAC\OriginatorParty $originatorParty
     */
    private $originatorParty = null;

    /**
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \App\UBL\Common\CAC\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \App\UBL\Common\CAC\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \App\UBL\Common\CAC\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \App\UBL\Common\CAC\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Item
     *  Item
     *
     * @var \App\UBL\Common\CAC\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @var \App\UBL\Common\CAC\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @var \App\UBL\Common\CAC\DeliveryTerms[] $deliveryTerms
     */
    private $deliveryTerms = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @var \App\UBL\Common\CAC\SubCreditNoteLine[] $subCreditNoteLine
     */
    private $subCreditNoteLine = [
        
    ];

    /**
     * ASBIE
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @var \App\UBL\Common\CAC\ItemPriceExtension $itemPriceExtension
     */
    private $itemPriceExtension = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
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
     *  Credit Note Line. Identifier
     *  An identifier for this credit note line.
     *  1
     *  Credit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Gets as uUID
     *
     * BBIE
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
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
     *  Credit Note Line. UUID. Identifier
     *  A universally unique identifier for this credit note line.
     *  0..1
     *  Credit Note Line
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
     * Adds as note
     *
     * BBIE
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Credit Note Line
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
     * Gets as creditedQuantity
     *
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \App\UBL\Common\CBC\CreditedQuantity
     */
    public function getCreditedQuantity()
    {
        return $this->creditedQuantity;
    }

    /**
     * Sets a new creditedQuantity
     *
     * BBIE
     *  Credit Note Line. Credited_ Quantity. Quantity
     *  The quantity of items credited in this credit note line.
     *  0..1
     *  Credit Note Line
     *  Credited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \App\UBL\Common\CBC\CreditedQuantity $creditedQuantity
     * @return self
     */
    public function setCreditedQuantity(?\App\UBL\Common\CBC\CreditedQuantity $creditedQuantity = null)
    {
        $this->creditedQuantity = $creditedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \App\UBL\Common\CBC\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Credit Note Line. Line Extension Amount. Amount
     *  The total amount for this credit note line, including allowance charges but exclusive of taxes.
     *  0..1
     *  Credit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \App\UBL\Common\CBC\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(?\App\UBL\Common\CBC\LineExtensionAmount $lineExtensionAmount = null)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as taxPointDate
     *
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTaxPointDate()
    {
        return $this->taxPointDate;
    }

    /**
     * Sets a new taxPointDate
     *
     * BBIE
     *  Credit Note Line. Tax Point Date. Date
     *  The date of this credit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Credit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(?\DateTime $taxPointDate = null)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Credit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this credit note line, expressed as a code.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(?\App\UBL\Common\CBC\AccountingCostCode $accountingCostCode = null)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \App\UBL\Common\CBC\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Credit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this credit note line, expressed as text.
     *  0..1
     *  Credit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \App\UBL\Common\CBC\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(?\App\UBL\Common\CBC\AccountingCost $accountingCost = null)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \App\UBL\Common\CBC\PaymentPurposeCode
     */
    public function getPaymentPurposeCode()
    {
        return $this->paymentPurposeCode;
    }

    /**
     * Sets a new paymentPurposeCode
     *
     * BBIE
     *  Credit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Credit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \App\UBL\Common\CBC\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(?\App\UBL\Common\CBC\PaymentPurposeCode $paymentPurposeCode = null)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Gets as freeOfChargeIndicator
     *
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getFreeOfChargeIndicator()
    {
        return $this->freeOfChargeIndicator;
    }

    /**
     * Sets a new freeOfChargeIndicator
     *
     * BBIE
     *  Credit Note Line. Free Of Charge_ Indicator. Indicator
     *  An indicator that this credit note line is free of charge (true) or not (false). The default is false.
     *  0..1
     *  Credit Note Line
     *  Free Of Charge
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $freeOfChargeIndicator
     * @return self
     */
    public function setFreeOfChargeIndicator($freeOfChargeIndicator)
    {
        $this->freeOfChargeIndicator = $freeOfChargeIndicator;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \App\UBL\Common\CAC\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\App\UBL\Common\CAC\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \App\UBL\Common\CAC\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Credit Note Line. Invoice_ Period. Period
     *  An invoice period to which this credit note line applies.
     *  0..n
     *  Credit Note Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \App\UBL\Common\CAC\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(?array $invoicePeriod = null)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as orderLineReference
     *
     * ASBIE
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Order Line Reference
     *  A reference to an order line associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     * Adds as discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return self
     * @param \App\UBL\Common\CAC\DiscrepancyResponse $discrepancyResponse
     */
    public function addToDiscrepancyResponse(\App\UBL\Common\CAC\DiscrepancyResponse $discrepancyResponse)
    {
        $this->discrepancyResponse[] = $discrepancyResponse;
        return $this;
    }

    /**
     * isset discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscrepancyResponse($index)
    {
        return isset($this->discrepancyResponse[$index]);
    }

    /**
     * unset discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscrepancyResponse($index)
    {
        unset($this->discrepancyResponse[$index]);
    }

    /**
     * Gets as discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return \App\UBL\Common\CAC\DiscrepancyResponse[]
     */
    public function getDiscrepancyResponse()
    {
        return $this->discrepancyResponse;
    }

    /**
     * Sets a new discrepancyResponse
     *
     * ASBIE
     *  Credit Note Line. Discrepancy_ Response. Response
     *  A reason for the credit.
     *  0..n
     *  Credit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param \App\UBL\Common\CAC\DiscrepancyResponse[] $discrepancyResponse
     * @return self
     */
    public function setDiscrepancyResponse(?array $discrepancyResponse = null)
    {
        $this->discrepancyResponse = $discrepancyResponse;
        return $this;
    }

    /**
     * Adds as despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \App\UBL\Common\CAC\DespatchLineReference $despatchLineReference
     */
    public function addToDespatchLineReference(\App\UBL\Common\CAC\DespatchLineReference $despatchLineReference)
    {
        $this->despatchLineReference[] = $despatchLineReference;
        return $this;
    }

    /**
     * isset despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchLineReference($index)
    {
        return isset($this->despatchLineReference[$index]);
    }

    /**
     * unset despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchLineReference($index)
    {
        unset($this->despatchLineReference[$index]);
    }

    /**
     * Gets as despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \App\UBL\Common\CAC\DespatchLineReference[]
     */
    public function getDespatchLineReference()
    {
        return $this->despatchLineReference;
    }

    /**
     * Sets a new despatchLineReference
     *
     * ASBIE
     *  Credit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \App\UBL\Common\CAC\DespatchLineReference[] $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(?array $despatchLineReference = null)
    {
        $this->despatchLineReference = $despatchLineReference;
        return $this;
    }

    /**
     * Adds as receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \App\UBL\Common\CAC\ReceiptLineReference $receiptLineReference
     */
    public function addToReceiptLineReference(\App\UBL\Common\CAC\ReceiptLineReference $receiptLineReference)
    {
        $this->receiptLineReference[] = $receiptLineReference;
        return $this;
    }

    /**
     * isset receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptLineReference($index)
    {
        return isset($this->receiptLineReference[$index]);
    }

    /**
     * unset receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptLineReference($index)
    {
        unset($this->receiptLineReference[$index]);
    }

    /**
     * Gets as receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \App\UBL\Common\CAC\ReceiptLineReference[]
     */
    public function getReceiptLineReference()
    {
        return $this->receiptLineReference;
    }

    /**
     * Sets a new receiptLineReference
     *
     * ASBIE
     *  Credit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \App\UBL\Common\CAC\ReceiptLineReference[] $receiptLineReference
     * @return self
     */
    public function setReceiptLineReference(?array $receiptLineReference = null)
    {
        $this->receiptLineReference = $receiptLineReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \App\UBL\Common\CAC\BillingReference $billingReference
     */
    public function addToBillingReference(\App\UBL\Common\CAC\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \App\UBL\Common\CAC\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Credit Note Line. Billing Reference
     *  A reference to a billing document associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \App\UBL\Common\CAC\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(?array $billingReference = null)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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
     *  Credit Note Line. Document Reference
     *  A reference to a document associated with this credit note line.
     *  0..n
     *  Credit Note Line
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

    /**
     * Gets as pricingReference
     *
     * ASBIE
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @return \App\UBL\Common\CAC\PricingReference
     */
    public function getPricingReference()
    {
        return $this->pricingReference;
    }

    /**
     * Sets a new pricingReference
     *
     * ASBIE
     *  Credit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @param \App\UBL\Common\CAC\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(?\App\UBL\Common\CAC\PricingReference $pricingReference = null)
    {
        $this->pricingReference = $pricingReference;
        return $this;
    }

    /**
     * Gets as originatorParty
     *
     * ASBIE
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @return \App\UBL\Common\CAC\OriginatorParty
     */
    public function getOriginatorParty()
    {
        return $this->originatorParty;
    }

    /**
     * Sets a new originatorParty
     *
     * ASBIE
     *  Credit Note Line. Originator_ Party. Party
     *  The party who originated the Order to which the Credit Note is related.
     *  0..1
     *  Credit Note Line
     *  Originator
     *  Party
     *  Party
     *  Party
     *
     * @param \App\UBL\Common\CAC\OriginatorParty $originatorParty
     * @return self
     */
    public function setOriginatorParty(?\App\UBL\Common\CAC\OriginatorParty $originatorParty = null)
    {
        $this->originatorParty = $originatorParty;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \App\UBL\Common\CAC\Delivery $delivery
     */
    public function addToDelivery(\App\UBL\Common\CAC\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \App\UBL\Common\CAC\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Credit Note Line. Delivery
     *  A delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \App\UBL\Common\CAC\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(?array $delivery = null)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \App\UBL\Common\CAC\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\App\UBL\Common\CAC\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \App\UBL\Common\CAC\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Credit Note Line. Payment Terms
     *  A specification of payment terms associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \App\UBL\Common\CAC\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(?array $paymentTerms = null)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \App\UBL\Common\CAC\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\App\UBL\Common\CAC\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \App\UBL\Common\CAC\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Credit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this credit note line.
     *  0..n
     *  Credit Note Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \App\UBL\Common\CAC\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \App\UBL\Common\CAC\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\App\UBL\Common\CAC\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \App\UBL\Common\CAC\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Credit Note Line. Allowance Charge
     *  An allowance or charge associated with this credit note.
     *  0..n
     *  Credit Note Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \App\UBL\Common\CAC\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(?array $allowanceCharge = null)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Item
     *  Item
     *
     * @return \App\UBL\Common\CAC\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Credit Note Line. Item
     *  The item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Item
     *  Item
     *
     * @param \App\UBL\Common\CAC\Item $item
     * @return self
     */
    public function setItem(?\App\UBL\Common\CAC\Item $item = null)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @return \App\UBL\Common\CAC\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Credit Note Line. Price
     *  The price of the item associated with this credit note line.
     *  0..1
     *  Credit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @param \App\UBL\Common\CAC\Price $price
     * @return self
     */
    public function setPrice(?\App\UBL\Common\CAC\Price $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Adds as deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return self
     * @param \App\UBL\Common\CAC\DeliveryTerms $deliveryTerms
     */
    public function addToDeliveryTerms(\App\UBL\Common\CAC\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms[] = $deliveryTerms;
        return $this;
    }

    /**
     * isset deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryTerms($index)
    {
        return isset($this->deliveryTerms[$index]);
    }

    /**
     * unset deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryTerms($index)
    {
        unset($this->deliveryTerms[$index]);
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @return \App\UBL\Common\CAC\DeliveryTerms[]
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Credit Note Line. Delivery Terms
     *  Terms and conditions of a delivery associated with this credit note line.
     *  0..n
     *  Credit Note Line
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *
     * @param \App\UBL\Common\CAC\DeliveryTerms[] $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(?array $deliveryTerms = null)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Adds as subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @return self
     * @param \App\UBL\Common\CAC\SubCreditNoteLine $subCreditNoteLine
     */
    public function addToSubCreditNoteLine(\App\UBL\Common\CAC\SubCreditNoteLine $subCreditNoteLine)
    {
        $this->subCreditNoteLine[] = $subCreditNoteLine;
        return $this;
    }

    /**
     * isset subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubCreditNoteLine($index)
    {
        return isset($this->subCreditNoteLine[$index]);
    }

    /**
     * unset subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubCreditNoteLine($index)
    {
        unset($this->subCreditNoteLine[$index]);
    }

    /**
     * Gets as subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @return \App\UBL\Common\CAC\SubCreditNoteLine[]
     */
    public function getSubCreditNoteLine()
    {
        return $this->subCreditNoteLine;
    }

    /**
     * Sets a new subCreditNoteLine
     *
     * ASBIE
     *  Credit Note Line. Sub_ Credit Note Line. Credit Note Line
     *  A class defining one or more Credit Note Lines detailing the credit note line.
     *  0..n
     *  Credit Note Line
     *  Sub
     *  Credit Note Line
     *  Credit Note Line
     *  Credit Note Line
     *
     * @param \App\UBL\Common\CAC\SubCreditNoteLine[] $subCreditNoteLine
     * @return self
     */
    public function setSubCreditNoteLine(?array $subCreditNoteLine = null)
    {
        $this->subCreditNoteLine = $subCreditNoteLine;
        return $this;
    }

    /**
     * Gets as itemPriceExtension
     *
     * ASBIE
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @return \App\UBL\Common\CAC\ItemPriceExtension
     */
    public function getItemPriceExtension()
    {
        return $this->itemPriceExtension;
    }

    /**
     * Sets a new itemPriceExtension
     *
     * ASBIE
     *  Credit Note Line. Item_ Price Extension. Price Extension
     *  The price extension, calculated by multiplying the price per unit by the quantity of items on this credit note line.
     *  0..1
     *  Credit Note Line
     *  Item
     *  Price Extension
     *  Price Extension
     *  Price Extension
     *
     * @param \App\UBL\Common\CAC\ItemPriceExtension $itemPriceExtension
     * @return self
     */
    public function setItemPriceExtension(?\App\UBL\Common\CAC\ItemPriceExtension $itemPriceExtension = null)
    {
        $this->itemPriceExtension = $itemPriceExtension;
        return $this;
    }
}

