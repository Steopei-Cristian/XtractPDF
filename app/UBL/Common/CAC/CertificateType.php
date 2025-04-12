<?php

namespace UBL\Common\CAC;

/**
 * Class representing CertificateType
 *
 * ABIE
 *  Certificate. Details
 *  A class to define a certificate applied to the item. Certificated can be a requirement to sell goods or services in a jurisdiction.
 *  Certificate
 * XSD Type: CertificateType
 */
class CertificateType
{
    /**
     * BBIE
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\CertificateTypeCode $certificateTypeCode
     */
    private $certificateTypeCode = null;

    /**
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\CertificateType $certificateType
     */
    private $certificateType = null;

    /**
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  1
     *  Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \UBL\Common\CAC\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
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
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \UBL\Common\CAC\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
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
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\ID $iD
     * @return self
     */
    public function setID(\UBL\Common\CBC\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as certificateTypeCode
     *
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\CertificateTypeCode
     */
    public function getCertificateTypeCode()
    {
        return $this->certificateTypeCode;
    }

    /**
     * Sets a new certificateTypeCode
     *
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\CertificateTypeCode $certificateTypeCode
     * @return self
     */
    public function setCertificateTypeCode(\UBL\Common\CBC\CertificateTypeCode $certificateTypeCode)
    {
        $this->certificateTypeCode = $certificateTypeCode;
        return $this;
    }

    /**
     * Gets as certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\CertificateType
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets a new certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\CertificateType $certificateType
     * @return self
     */
    public function setCertificateType(\UBL\Common\CBC\CertificateType $certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Remarks $remarks
     */
    public function addToRemarks(\UBL\Common\CBC\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(?array $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  1
     *  Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \UBL\Common\CAC\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  1
     *  Certificate
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(\UBL\Common\CAC\IssuerParty $issuerParty)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
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
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
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
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
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
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
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
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
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
     * Adds as signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \UBL\Common\CAC\Signature $signature
     */
    public function addToSignature(\UBL\Common\CAC\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \UBL\Common\CAC\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \UBL\Common\CAC\Signature[] $signature
     * @return self
     */
    public function setSignature(?array $signature = null)
    {
        $this->signature = $signature;
        return $this;
    }
}

