<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing EconomicOperatorRoleType
 *
 * ABIE
 *  Economic Operator Role. Details
 *  A class to describe the tenderer contracting role.
 *  Economic Operator Role
 * XSD Type: EconomicOperatorRoleType
 */
class EconomicOperatorRoleType
{
    /**
     * BBIE
     *  Economic Operator Role. Role Code. Code
     *  A code specifying the role of the party.
     *  0..1
     *  Economic Operator Role
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\RoleCode $roleCode
     */
    private $roleCode = null;

    /**
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\RoleDescription[] $roleDescription
     */
    private $roleDescription = [
        
    ];

    /**
     * Gets as roleCode
     *
     * BBIE
     *  Economic Operator Role. Role Code. Code
     *  A code specifying the role of the party.
     *  0..1
     *  Economic Operator Role
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\RoleCode
     */
    public function getRoleCode()
    {
        return $this->roleCode;
    }

    /**
     * Sets a new roleCode
     *
     * BBIE
     *  Economic Operator Role. Role Code. Code
     *  A code specifying the role of the party.
     *  0..1
     *  Economic Operator Role
     *  Role Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\RoleCode $roleCode
     * @return self
     */
    public function setRoleCode(?\UBL\Common\CBC\RoleCode $roleCode = null)
    {
        $this->roleCode = $roleCode;
        return $this;
    }

    /**
     * Adds as roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \UBL\Common\CBC\RoleDescription $roleDescription
     */
    public function addToRoleDescription(\UBL\Common\CBC\RoleDescription $roleDescription)
    {
        $this->roleDescription[] = $roleDescription;
        return $this;
    }

    /**
     * isset roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoleDescription($index)
    {
        return isset($this->roleDescription[$index]);
    }

    /**
     * unset roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoleDescription($index)
    {
        unset($this->roleDescription[$index]);
    }

    /**
     * Gets as roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\RoleDescription[]
     */
    public function getRoleDescription()
    {
        return $this->roleDescription;
    }

    /**
     * Sets a new roleDescription
     *
     * BBIE
     *  Economic Operator Role. Role Description. Text
     *  A textual description of the party role.
     *  0..n
     *  Economic Operator Role
     *  Role Description
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\RoleDescription[] $roleDescription
     * @return self
     */
    public function setRoleDescription(?array $roleDescription = null)
    {
        $this->roleDescription = $roleDescription;
        return $this;
    }
}


