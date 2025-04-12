<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing DocumentReferenceType
 *
 * ABIE
 *  Document Reference. Details
 *  A class to define a reference to a document.
 *  Document Reference
 * XSD Type: DocumentReferenceType
 */
class DocumentReferenceType
{
    /**
     * BBIE
     *  Document Reference. Identifier
     *  An identifier for the referenced document.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
     *
     * @var \UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Document Reference. Copy_ Indicator. Indicator
     *  An indicator that the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
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
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for this document reference.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the document was issued.
     *  0..1
     *  Document Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Document Reference. Issue Time. Time
     *  The time, assigned by the sender of the referenced document, at which the document was issued.
     *  0..1
     *  Document Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The type of document being referenced, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * BBIE
     *  Document Reference. Document Type. Text
     *  The type of document being referenced, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\DocumentType $documentType
     */
    private $documentType = null;

    /**
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\XPath[] $xPath
     */
    private $xPath = [
        
    ];

    /**
     * BBIE
     *  Document Reference. Language. Identifier
     *  An identifier for the language used in the referenced document.
     *  0..1
     *  Document Reference
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @var \UBL\Common\CBC\LanguageID $languageID
     */
    private $languageID = null;

    /**
     * BBIE
     *  Document Reference. Locale Code. Code
     *  A code signifying the locale in which the language in the referenced document is used.
     *  0..1
     *  Document Reference
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\LocaleCode $localeCode
     */
    private $localeCode = null;

    /**
     * BBIE
     *  Document Reference. Version. Identifier
     *  An identifier for the current version of the referenced document.
     *  0..1
     *  Document Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @var \UBL\Common\CBC\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Document Reference. Document Status Code. Code
     *  A code signifying the status of the reference document with respect to its original state.
     *  0..1
     *  Document Reference
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @var \UBL\Common\CBC\DocumentStatusCode $documentStatusCode
     */
    private $documentStatusCode = null;

    /**
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @var \UBL\Common\CBC\DocumentDescription[] $documentDescription
     */
    private $documentDescription = [
        
    ];

    /**
     * ASBIE
     *  Document Reference. Attachment
     *  The referenced document as an attachment to the document from which it is referenced.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \UBL\Common\CAC\Attachment $attachment
     */
    private $attachment = null;

    /**
     * ASBIE
     *  Document Reference. Validity_ Period. Period
     *  The period for which this document reference is valid.
     *  0..1
     *  Document Reference
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \UBL\Common\CAC\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Document Reference. Issuer_ Party. Party
     *  The party who issued the referenced document.
     *  0..1
     *  Document Reference
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
     *  Document Reference. Result Of Verification
     *  The result of an attempt to verify a signature associated with the referenced document.
     *  0..1
     *  Document Reference
     *  Result Of Verification
     *  Result Of Verification
     *  Result Of Verification
     *
     * @var \UBL\Common\CAC\ResultOfVerification $resultOfVerification
     */
    private $resultOfVerification = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Document Reference. Identifier
     *  An identifier for the referenced document.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
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
     *  Document Reference. Identifier
     *  An identifier for the referenced document.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Document Reference. Copy_ Indicator. Indicator
     *  An indicator that the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
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
     *  Document Reference. Copy_ Indicator. Indicator
     *  An indicator that the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
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
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for this document reference.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for this document reference.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\UUID $uUID
     * @return self
     */
    public function setUUID(?\UBL\Common\CBC\UUID $uUID = null)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the document was issued.
     *  0..1
     *  Document Reference
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
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the document was issued.
     *  0..1
     *  Document Reference
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
     *  Document Reference. Issue Time. Time
     *  The time, assigned by the sender of the referenced document, at which the document was issued.
     *  0..1
     *  Document Reference
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
     *  Document Reference. Issue Time. Time
     *  The time, assigned by the sender of the referenced document, at which the document was issued.
     *  0..1
     *  Document Reference
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
     * Gets as documentTypeCode
     *
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The type of document being referenced, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\DocumentTypeCode
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The type of document being referenced, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\DocumentTypeCode $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode(?\UBL\Common\CBC\DocumentTypeCode $documentTypeCode = null)
    {
        $this->documentTypeCode = $documentTypeCode;
        return $this;
    }

    /**
     * Gets as documentType
     *
     * BBIE
     *  Document Reference. Document Type. Text
     *  The type of document being referenced, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\DocumentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets a new documentType
     *
     * BBIE
     *  Document Reference. Document Type. Text
     *  The type of document being referenced, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\DocumentType $documentType
     * @return self
     */
    public function setDocumentType(?\UBL\Common\CBC\DocumentType $documentType = null)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Adds as xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\XPath $xPath
     */
    public function addToXPath(\UBL\Common\CBC\XPath $xPath)
    {
        $this->xPath[] = $xPath;
        return $this;
    }

    /**
     * isset xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetXPath($index)
    {
        return isset($this->xPath[$index]);
    }

    /**
     * unset xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetXPath($index)
    {
        unset($this->xPath[$index]);
    }

    /**
     * Gets as xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\XPath[]
     */
    public function getXPath()
    {
        return $this->xPath;
    }

    /**
     * Sets a new xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\XPath[] $xPath
     * @return self
     */
    public function setXPath(?array $xPath = null)
    {
        $this->xPath = $xPath;
        return $this;
    }

    /**
     * Gets as languageID
     *
     * BBIE
     *  Document Reference. Language. Identifier
     *  An identifier for the language used in the referenced document.
     *  0..1
     *  Document Reference
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @return \UBL\Common\CBC\LanguageID
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * BBIE
     *  Document Reference. Language. Identifier
     *  An identifier for the language used in the referenced document.
     *  0..1
     *  Document Reference
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @param \UBL\Common\CBC\LanguageID $languageID
     * @return self
     */
    public function setLanguageID(?\UBL\Common\CBC\LanguageID $languageID = null)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * Gets as localeCode
     *
     * BBIE
     *  Document Reference. Locale Code. Code
     *  A code signifying the locale in which the language in the referenced document is used.
     *  0..1
     *  Document Reference
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\LocaleCode
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Sets a new localeCode
     *
     * BBIE
     *  Document Reference. Locale Code. Code
     *  A code signifying the locale in which the language in the referenced document is used.
     *  0..1
     *  Document Reference
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\LocaleCode $localeCode
     * @return self
     */
    public function setLocaleCode(?\UBL\Common\CBC\LocaleCode $localeCode = null)
    {
        $this->localeCode = $localeCode;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Document Reference. Version. Identifier
     *  An identifier for the current version of the referenced document.
     *  0..1
     *  Document Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @return \UBL\Common\CBC\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Document Reference. Version. Identifier
     *  An identifier for the current version of the referenced document.
     *  0..1
     *  Document Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @param \UBL\Common\CBC\VersionID $versionID
     * @return self
     */
    public function setVersionID(?\UBL\Common\CBC\VersionID $versionID = null)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as documentStatusCode
     *
     * BBIE
     *  Document Reference. Document Status Code. Code
     *  A code signifying the status of the reference document with respect to its original state.
     *  0..1
     *  Document Reference
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @return \UBL\Common\CBC\DocumentStatusCode
     */
    public function getDocumentStatusCode()
    {
        return $this->documentStatusCode;
    }

    /**
     * Sets a new documentStatusCode
     *
     * BBIE
     *  Document Reference. Document Status Code. Code
     *  A code signifying the status of the reference document with respect to its original state.
     *  0..1
     *  Document Reference
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @param \UBL\Common\CBC\DocumentStatusCode $documentStatusCode
     * @return self
     */
    public function setDocumentStatusCode(?\UBL\Common\CBC\DocumentStatusCode $documentStatusCode = null)
    {
        $this->documentStatusCode = $documentStatusCode;
        return $this;
    }

    /**
     * Adds as documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @return self
     * @param \UBL\Common\CBC\DocumentDescription $documentDescription
     */
    public function addToDocumentDescription(\UBL\Common\CBC\DocumentDescription $documentDescription)
    {
        $this->documentDescription[] = $documentDescription;
        return $this;
    }

    /**
     * isset documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentDescription($index)
    {
        return isset($this->documentDescription[$index]);
    }

    /**
     * unset documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentDescription($index)
    {
        unset($this->documentDescription[$index]);
    }

    /**
     * Gets as documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @return \UBL\Common\CBC\DocumentDescription[]
     */
    public function getDocumentDescription()
    {
        return $this->documentDescription;
    }

    /**
     * Sets a new documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @param \UBL\Common\CBC\DocumentDescription[] $documentDescription
     * @return self
     */
    public function setDocumentDescription(?array $documentDescription = null)
    {
        $this->documentDescription = $documentDescription;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * ASBIE
     *  Document Reference. Attachment
     *  The referenced document as an attachment to the document from which it is referenced.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \UBL\Common\CAC\Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * ASBIE
     *  Document Reference. Attachment
     *  The referenced document as an attachment to the document from which it is referenced.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \UBL\Common\CAC\Attachment $attachment
     * @return self
     */
    public function setAttachment(?\UBL\Common\CAC\Attachment $attachment = null)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Document Reference. Validity_ Period. Period
     *  The period for which this document reference is valid.
     *  0..1
     *  Document Reference
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \UBL\Common\CAC\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Document Reference. Validity_ Period. Period
     *  The period for which this document reference is valid.
     *  0..1
     *  Document Reference
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \UBL\Common\CAC\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(?\UBL\Common\CAC\ValidityPeriod $validityPeriod = null)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Document Reference. Issuer_ Party. Party
     *  The party who issued the referenced document.
     *  0..1
     *  Document Reference
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
     *  Document Reference. Issuer_ Party. Party
     *  The party who issued the referenced document.
     *  0..1
     *  Document Reference
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \UBL\Common\CAC\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(?\UBL\Common\CAC\IssuerParty $issuerParty = null)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Gets as resultOfVerification
     *
     * ASBIE
     *  Document Reference. Result Of Verification
     *  The result of an attempt to verify a signature associated with the referenced document.
     *  0..1
     *  Document Reference
     *  Result Of Verification
     *  Result Of Verification
     *  Result Of Verification
     *
     * @return \UBL\Common\CAC\ResultOfVerification
     */
    public function getResultOfVerification()
    {
        return $this->resultOfVerification;
    }

    /**
     * Sets a new resultOfVerification
     *
     * ASBIE
     *  Document Reference. Result Of Verification
     *  The result of an attempt to verify a signature associated with the referenced document.
     *  0..1
     *  Document Reference
     *  Result Of Verification
     *  Result Of Verification
     *  Result Of Verification
     *
     * @param \UBL\Common\CAC\ResultOfVerification $resultOfVerification
     * @return self
     */
    public function setResultOfVerification(?\UBL\Common\CAC\ResultOfVerification $resultOfVerification = null)
    {
        $this->resultOfVerification = $resultOfVerification;
        return $this;
    }
}


