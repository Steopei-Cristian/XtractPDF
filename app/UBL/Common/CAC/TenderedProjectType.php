<?php

namespace UBL\Common\CAC;

/**
 * Class representing TenderedProjectType
 *
 * ABIE
 *  Tendered Project. Details
 *  A class to describe a tendered project or project lot.
 *  Tendered Project
 * XSD Type: TenderedProjectType
 */
class TenderedProjectType
{
    /**
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\VariantID $variantID
     */
    private $variantID = null;

    /**
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @var \UBL\Common\CBC\FeeAmount $feeAmount
     */
    private $feeAmount = null;

    /**
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\FeeDescription[] $feeDescription
     */
    private $feeDescription = [
        
    ];

    /**
     * BBIE
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\TenderEnvelopeID $tenderEnvelopeID
     */
    private $tenderEnvelopeID = null;

    /**
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     */
    private $tenderEnvelopeTypeCode = null;

    /**
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..1
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \UBL\Common\CAC\ProcurementProjectLot $procurementProjectLot
     */
    private $procurementProjectLot = null;

    /**
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL\Common\CAC\EvidenceDocumentReference[] $evidenceDocumentReference
     */
    private $evidenceDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \UBL\Common\CAC\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \UBL\Common\CAC\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @var \UBL\Common\CAC\TenderLine[] $tenderLine
     */
    private $tenderLine = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @var \UBL\Common\CAC\AwardingCriterionResponse[] $awardingCriterionResponse
     */
    private $awardingCriterionResponse = [
        
    ];

    /**
     * Gets as variantID
     *
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\VariantID
     */
    public function getVariantID()
    {
        return $this->variantID;
    }

    /**
     * Sets a new variantID
     *
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\VariantID $variantID
     * @return self
     */
    public function setVariantID(?\UBL\Common\CBC\VariantID $variantID = null)
    {
        $this->variantID = $variantID;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @return \UBL\Common\CBC\FeeAmount
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @param \UBL\Common\CBC\FeeAmount $feeAmount
     * @return self
     */
    public function setFeeAmount(?\UBL\Common\CBC\FeeAmount $feeAmount = null)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\FeeDescription $feeDescription
     */
    public function addToFeeDescription(\UBL\Common\CBC\FeeDescription $feeDescription)
    {
        $this->feeDescription[] = $feeDescription;
        return $this;
    }

    /**
     * isset feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeDescription($index)
    {
        return isset($this->feeDescription[$index]);
    }

    /**
     * unset feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeDescription($index)
    {
        unset($this->feeDescription[$index]);
    }

    /**
     * Gets as feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\FeeDescription[]
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\FeeDescription[] $feeDescription
     * @return self
     */
    public function setFeeDescription(?array $feeDescription = null)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeID
     *
     * BBIE
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\TenderEnvelopeID
     */
    public function getTenderEnvelopeID()
    {
        return $this->tenderEnvelopeID;
    }

    /**
     * Sets a new tenderEnvelopeID
     *
     * BBIE
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\TenderEnvelopeID $tenderEnvelopeID
     * @return self
     */
    public function setTenderEnvelopeID(?\UBL\Common\CBC\TenderEnvelopeID $tenderEnvelopeID = null)
    {
        $this->tenderEnvelopeID = $tenderEnvelopeID;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\TenderEnvelopeTypeCode
     */
    public function getTenderEnvelopeTypeCode()
    {
        return $this->tenderEnvelopeTypeCode;
    }

    /**
     * Sets a new tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     * @return self
     */
    public function setTenderEnvelopeTypeCode(?\UBL\Common\CBC\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode = null)
    {
        $this->tenderEnvelopeTypeCode = $tenderEnvelopeTypeCode;
        return $this;
    }

    /**
     * Gets as procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..1
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \UBL\Common\CAC\ProcurementProjectLot
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..1
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \UBL\Common\CAC\ProcurementProjectLot $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(?\UBL\Common\CAC\ProcurementProjectLot $procurementProjectLot = null)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \UBL\Common\CAC\EvidenceDocumentReference $evidenceDocumentReference
     */
    public function addToEvidenceDocumentReference(\UBL\Common\CAC\EvidenceDocumentReference $evidenceDocumentReference)
    {
        $this->evidenceDocumentReference[] = $evidenceDocumentReference;
        return $this;
    }

    /**
     * isset evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceDocumentReference($index)
    {
        return isset($this->evidenceDocumentReference[$index]);
    }

    /**
     * unset evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceDocumentReference($index)
    {
        unset($this->evidenceDocumentReference[$index]);
    }

    /**
     * Gets as evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL\Common\CAC\EvidenceDocumentReference[]
     */
    public function getEvidenceDocumentReference()
    {
        return $this->evidenceDocumentReference;
    }

    /**
     * Sets a new evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL\Common\CAC\EvidenceDocumentReference[] $evidenceDocumentReference
     * @return self
     */
    public function setEvidenceDocumentReference(?array $evidenceDocumentReference = null)
    {
        $this->evidenceDocumentReference = $evidenceDocumentReference;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \UBL\Common\CAC\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\UBL\Common\CAC\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
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
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
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
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \UBL\Common\CAC\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \UBL\Common\CAC\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(?array $taxTotal = null)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \UBL\Common\CAC\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \UBL\Common\CAC\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(?\UBL\Common\CAC\LegalMonetaryTotal $legalMonetaryTotal = null)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return self
     * @param \UBL\Common\CAC\TenderLine $tenderLine
     */
    public function addToTenderLine(\UBL\Common\CAC\TenderLine $tenderLine)
    {
        $this->tenderLine[] = $tenderLine;
        return $this;
    }

    /**
     * isset tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderLine($index)
    {
        return isset($this->tenderLine[$index]);
    }

    /**
     * unset tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderLine($index)
    {
        unset($this->tenderLine[$index]);
    }

    /**
     * Gets as tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return \UBL\Common\CAC\TenderLine[]
     */
    public function getTenderLine()
    {
        return $this->tenderLine;
    }

    /**
     * Sets a new tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param \UBL\Common\CAC\TenderLine[] $tenderLine
     * @return self
     */
    public function setTenderLine(?array $tenderLine = null)
    {
        $this->tenderLine = $tenderLine;
        return $this;
    }

    /**
     * Adds as awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @return self
     * @param \UBL\Common\CAC\AwardingCriterionResponse $awardingCriterionResponse
     */
    public function addToAwardingCriterionResponse(\UBL\Common\CAC\AwardingCriterionResponse $awardingCriterionResponse)
    {
        $this->awardingCriterionResponse[] = $awardingCriterionResponse;
        return $this;
    }

    /**
     * isset awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAwardingCriterionResponse($index)
    {
        return isset($this->awardingCriterionResponse[$index]);
    }

    /**
     * unset awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAwardingCriterionResponse($index)
    {
        unset($this->awardingCriterionResponse[$index]);
    }

    /**
     * Gets as awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @return \UBL\Common\CAC\AwardingCriterionResponse[]
     */
    public function getAwardingCriterionResponse()
    {
        return $this->awardingCriterionResponse;
    }

    /**
     * Sets a new awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param \UBL\Common\CAC\AwardingCriterionResponse[] $awardingCriterionResponse
     * @return self
     */
    public function setAwardingCriterionResponse(?array $awardingCriterionResponse = null)
    {
        $this->awardingCriterionResponse = $awardingCriterionResponse;
        return $this;
    }
}

