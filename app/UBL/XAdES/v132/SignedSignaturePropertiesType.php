<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing SignedSignaturePropertiesType
 *
 *
 * XSD Type: SignedSignaturePropertiesType
 */
class SignedSignaturePropertiesType
{
    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $signingTime
     */
    private $signingTime = null;

    /**
     * @var \App\UBL\XAdES\v132\CertIDType[] $signingCertificate
     */
    private $signingCertificate = null;

    /**
     * @var \App\UBL\XAdES\v132\SignaturePolicyIdentifierType $signaturePolicyIdentifier
     */
    private $signaturePolicyIdentifier = null;

    /**
     * @var \App\UBL\XAdES\v132\SignatureProductionPlaceType $signatureProductionPlace
     */
    private $signatureProductionPlace = null;

    /**
     * @var \App\UBL\XAdES\v132\SignerRoleType $signerRole
     */
    private $signerRole = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as signingTime
     *
     * @return \DateTime
     */
    public function getSigningTime()
    {
        return $this->signingTime;
    }

    /**
     * Sets a new signingTime
     *
     * @param \DateTime $signingTime
     * @return self
     */
    public function setSigningTime(?\DateTime $signingTime = null)
    {
        $this->signingTime = $signingTime;
        return $this;
    }

    /**
     * Adds as cert
     *
     * @return self
     * @param \App\UBL\XAdES\v132\CertIDType $cert
     */
    public function addToSigningCertificate(\App\UBL\XAdES\v132\CertIDType $cert)
    {
        $this->signingCertificate[] = $cert;
        return $this;
    }

    /**
     * isset signingCertificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigningCertificate($index)
    {
        return isset($this->signingCertificate[$index]);
    }

    /**
     * unset signingCertificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigningCertificate($index)
    {
        unset($this->signingCertificate[$index]);
    }

    /**
     * Gets as signingCertificate
     *
     * @return \App\UBL\XAdES\v132\CertIDType[]
     */
    public function getSigningCertificate()
    {
        return $this->signingCertificate;
    }

    /**
     * Sets a new signingCertificate
     *
     * @param \App\UBL\XAdES\v132\CertIDType[] $signingCertificate
     * @return self
     */
    public function setSigningCertificate(?array $signingCertificate = null)
    {
        $this->signingCertificate = $signingCertificate;
        return $this;
    }

    /**
     * Gets as signaturePolicyIdentifier
     *
     * @return \App\UBL\XAdES\v132\SignaturePolicyIdentifierType
     */
    public function getSignaturePolicyIdentifier()
    {
        return $this->signaturePolicyIdentifier;
    }

    /**
     * Sets a new signaturePolicyIdentifier
     *
     * @param \App\UBL\XAdES\v132\SignaturePolicyIdentifierType $signaturePolicyIdentifier
     * @return self
     */
    public function setSignaturePolicyIdentifier(?\App\UBL\XAdES\v132\SignaturePolicyIdentifierType $signaturePolicyIdentifier = null)
    {
        $this->signaturePolicyIdentifier = $signaturePolicyIdentifier;
        return $this;
    }

    /**
     * Gets as signatureProductionPlace
     *
     * @return \App\UBL\XAdES\v132\SignatureProductionPlaceType
     */
    public function getSignatureProductionPlace()
    {
        return $this->signatureProductionPlace;
    }

    /**
     * Sets a new signatureProductionPlace
     *
     * @param \App\UBL\XAdES\v132\SignatureProductionPlaceType $signatureProductionPlace
     * @return self
     */
    public function setSignatureProductionPlace(?\App\UBL\XAdES\v132\SignatureProductionPlaceType $signatureProductionPlace = null)
    {
        $this->signatureProductionPlace = $signatureProductionPlace;
        return $this;
    }

    /**
     * Gets as signerRole
     *
     * @return \App\UBL\XAdES\v132\SignerRoleType
     */
    public function getSignerRole()
    {
        return $this->signerRole;
    }

    /**
     * Sets a new signerRole
     *
     * @param \App\UBL\XAdES\v132\SignerRoleType $signerRole
     * @return self
     */
    public function setSignerRole(?\App\UBL\XAdES\v132\SignerRoleType $signerRole = null)
    {
        $this->signerRole = $signerRole;
        return $this;
    }
}

