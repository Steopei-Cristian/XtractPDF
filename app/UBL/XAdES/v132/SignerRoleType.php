<?php

namespace App\UBL\XAdES\v132;

/**
 * Class representing SignerRoleType
 *
 *
 * XSD Type: SignerRoleType
 */
class SignerRoleType
{
    /**
     * @var \App\UBL\XAdES\v132\AnyType[] $claimedRoles
     */
    private $claimedRoles = null;

    /**
     * @var \App\UBL\XAdES\v132\EncapsulatedPKIDataType[] $certifiedRoles
     */
    private $certifiedRoles = null;

    /**
     * Adds as claimedRole
     *
     * @return self
     * @param \App\UBL\XAdES\v132\AnyType $claimedRole
     */
    public function addToClaimedRoles(\App\UBL\XAdES\v132\AnyType $claimedRole)
    {
        $this->claimedRoles[] = $claimedRole;
        return $this;
    }

    /**
     * isset claimedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClaimedRoles($index)
    {
        return isset($this->claimedRoles[$index]);
    }

    /**
     * unset claimedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClaimedRoles($index)
    {
        unset($this->claimedRoles[$index]);
    }

    /**
     * Gets as claimedRoles
     *
     * @return \App\UBL\XAdES\v132\AnyType[]
     */
    public function getClaimedRoles()
    {
        return $this->claimedRoles;
    }

    /**
     * Sets a new claimedRoles
     *
     * @param \App\UBL\XAdES\v132\AnyType[] $claimedRoles
     * @return self
     */
    public function setClaimedRoles(?array $claimedRoles = null)
    {
        $this->claimedRoles = $claimedRoles;
        return $this;
    }

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param \App\UBL\XAdES\v132\EncapsulatedPKIDataType $certifiedRole
     */
    public function addToCertifiedRoles(\App\UBL\XAdES\v132\EncapsulatedPKIDataType $certifiedRole)
    {
        $this->certifiedRoles[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertifiedRoles($index)
    {
        return isset($this->certifiedRoles[$index]);
    }

    /**
     * unset certifiedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertifiedRoles($index)
    {
        unset($this->certifiedRoles[$index]);
    }

    /**
     * Gets as certifiedRoles
     *
     * @return \App\UBL\XAdES\v132\EncapsulatedPKIDataType[]
     */
    public function getCertifiedRoles()
    {
        return $this->certifiedRoles;
    }

    /**
     * Sets a new certifiedRoles
     *
     * @param \App\UBL\XAdES\v132\EncapsulatedPKIDataType[] $certifiedRoles
     * @return self
     */
    public function setCertifiedRoles(?array $certifiedRoles = null)
    {
        $this->certifiedRoles = $certifiedRoles;
        return $this;
    }
}

