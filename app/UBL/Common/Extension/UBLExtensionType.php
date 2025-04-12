<?php

namespace App\UBL\Common\Extension;

/**
 * Class representing UBLExtensionType
 *
 * A single extension for private use.
 * XSD Type: UBLExtensionType
 */
class UBLExtensionType
{
    /**
     * An identifier for the Extension assigned by the creator of the extension.
     *
     * @var \App\UBL\Common\CBC\ID $iD
     */
    private $iD = null;

    /**
     * A name for the Extension assigned by the creator of the extension.
     *
     * @var \App\UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * An agency that maintains one or more Extensions.
     *
     * @var \App\UBL\Common\Extension\ExtensionAgencyID $extensionAgencyID
     */
    private $extensionAgencyID = null;

    /**
     * The name of the agency that maintains the Extension.
     *
     * @var \App\UBL\Common\Extension\ExtensionAgencyName $extensionAgencyName
     */
    private $extensionAgencyName = null;

    /**
     * The version of the Extension.
     *
     * @var \App\UBL\Common\Extension\ExtensionVersionID $extensionVersionID
     */
    private $extensionVersionID = null;

    /**
     * A URI for the Agency that maintains the Extension.
     *
     * @var \App\UBL\Common\Extension\ExtensionAgencyURI $extensionAgencyURI
     */
    private $extensionAgencyURI = null;

    /**
     * A URI for the Extension.
     *
     * @var \App\UBL\Common\Extension\ExtensionURI $extensionURI
     */
    private $extensionURI = null;

    /**
     * A code for reason the Extension is being included.
     *
     * @var \App\UBL\Common\Extension\ExtensionReasonCode $extensionReasonCode
     */
    private $extensionReasonCode = null;

    /**
     * A description of the reason for the Extension.
     *
     * @var \App\UBL\Common\Extension\ExtensionReason $extensionReason
     */
    private $extensionReason = null;

    /**
     * The definition of the extension content.
     *
     * @var \App\UBL\Common\Extension\ExtensionContent $extensionContent
     */
    private $extensionContent = null;

    /**
     * Gets as iD
     *
     * An identifier for the Extension assigned by the creator of the extension.
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
     * An identifier for the Extension assigned by the creator of the extension.
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
     * Gets as name
     *
     * A name for the Extension assigned by the creator of the extension.
     *
     * @return \App\UBL\Common\CBC\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A name for the Extension assigned by the creator of the extension.
     *
     * @param \App\UBL\Common\CBC\Name $name
     * @return self
     */
    public function setName(?\App\UBL\Common\CBC\Name $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @return \App\UBL\Common\Extension\ExtensionAgencyID
     */
    public function getExtensionAgencyID()
    {
        return $this->extensionAgencyID;
    }

    /**
     * Sets a new extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @param \App\UBL\Common\Extension\ExtensionAgencyID $extensionAgencyID
     * @return self
     */
    public function setExtensionAgencyID(?\App\UBL\Common\Extension\ExtensionAgencyID $extensionAgencyID = null)
    {
        $this->extensionAgencyID = $extensionAgencyID;
        return $this;
    }

    /**
     * Gets as extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @return \App\UBL\Common\Extension\ExtensionAgencyName
     */
    public function getExtensionAgencyName()
    {
        return $this->extensionAgencyName;
    }

    /**
     * Sets a new extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @param \App\UBL\Common\Extension\ExtensionAgencyName $extensionAgencyName
     * @return self
     */
    public function setExtensionAgencyName(?\App\UBL\Common\Extension\ExtensionAgencyName $extensionAgencyName = null)
    {
        $this->extensionAgencyName = $extensionAgencyName;
        return $this;
    }

    /**
     * Gets as extensionVersionID
     *
     * The version of the Extension.
     *
     * @return \App\UBL\Common\Extension\ExtensionVersionID
     */
    public function getExtensionVersionID()
    {
        return $this->extensionVersionID;
    }

    /**
     * Sets a new extensionVersionID
     *
     * The version of the Extension.
     *
     * @param \App\UBL\Common\Extension\ExtensionVersionID $extensionVersionID
     * @return self
     */
    public function setExtensionVersionID(?\App\UBL\Common\Extension\ExtensionVersionID $extensionVersionID = null)
    {
        $this->extensionVersionID = $extensionVersionID;
        return $this;
    }

    /**
     * Gets as extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @return \App\UBL\Common\Extension\ExtensionAgencyURI
     */
    public function getExtensionAgencyURI()
    {
        return $this->extensionAgencyURI;
    }

    /**
     * Sets a new extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @param \App\UBL\Common\Extension\ExtensionAgencyURI $extensionAgencyURI
     * @return self
     */
    public function setExtensionAgencyURI(?\App\UBL\Common\Extension\ExtensionAgencyURI $extensionAgencyURI = null)
    {
        $this->extensionAgencyURI = $extensionAgencyURI;
        return $this;
    }

    /**
     * Gets as extensionURI
     *
     * A URI for the Extension.
     *
     * @return \App\UBL\Common\Extension\ExtensionURI
     */
    public function getExtensionURI()
    {
        return $this->extensionURI;
    }

    /**
     * Sets a new extensionURI
     *
     * A URI for the Extension.
     *
     * @param \App\UBL\Common\Extension\ExtensionURI $extensionURI
     * @return self
     */
    public function setExtensionURI(?\App\UBL\Common\Extension\ExtensionURI $extensionURI = null)
    {
        $this->extensionURI = $extensionURI;
        return $this;
    }

    /**
     * Gets as extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @return \App\UBL\Common\Extension\ExtensionReasonCode
     */
    public function getExtensionReasonCode()
    {
        return $this->extensionReasonCode;
    }

    /**
     * Sets a new extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @param \App\UBL\Common\Extension\ExtensionReasonCode $extensionReasonCode
     * @return self
     */
    public function setExtensionReasonCode(?\App\UBL\Common\Extension\ExtensionReasonCode $extensionReasonCode = null)
    {
        $this->extensionReasonCode = $extensionReasonCode;
        return $this;
    }

    /**
     * Gets as extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @return \App\UBL\Common\Extension\ExtensionReason
     */
    public function getExtensionReason()
    {
        return $this->extensionReason;
    }

    /**
     * Sets a new extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @param \App\UBL\Common\Extension\ExtensionReason $extensionReason
     * @return self
     */
    public function setExtensionReason(?\App\UBL\Common\Extension\ExtensionReason $extensionReason = null)
    {
        $this->extensionReason = $extensionReason;
        return $this;
    }

    /**
     * Gets as extensionContent
     *
     * The definition of the extension content.
     *
     * @return \App\UBL\Common\Extension\ExtensionContent
     */
    public function getExtensionContent()
    {
        return $this->extensionContent;
    }

    /**
     * Sets a new extensionContent
     *
     * The definition of the extension content.
     *
     * @param \App\UBL\Common\Extension\ExtensionContent $extensionContent
     * @return self
     */
    public function setExtensionContent(\App\UBL\Common\Extension\ExtensionContent $extensionContent)
    {
        $this->extensionContent = $extensionContent;
        return $this;
    }
}

