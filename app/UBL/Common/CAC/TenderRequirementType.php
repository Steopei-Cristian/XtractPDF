<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing TenderRequirementType
 *
 * ABIE
 *  Tender Requirement. Details
 *  A template for a required document in a tendering process.
 *  Tender Requirement
 * XSD Type: TenderRequirementType
 */
class TenderRequirementType
{
    /**
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \UBL\Common\CAC\TemplateDocumentReference $templateDocumentReference
     */
    private $templateDocumentReference = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \UBL\Common\CBC\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(\UBL\Common\CBC\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\Description $description
     */
    public function addToDescription(\UBL\Common\CBC\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
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
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
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
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as templateDocumentReference
     *
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \UBL\Common\CAC\TemplateDocumentReference
     */
    public function getTemplateDocumentReference()
    {
        return $this->templateDocumentReference;
    }

    /**
     * Sets a new templateDocumentReference
     *
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \UBL\Common\CAC\TemplateDocumentReference $templateDocumentReference
     * @return self
     */
    public function setTemplateDocumentReference(?\UBL\Common\CAC\TemplateDocumentReference $templateDocumentReference = null)
    {
        $this->templateDocumentReference = $templateDocumentReference;
        return $this;
    }
}


