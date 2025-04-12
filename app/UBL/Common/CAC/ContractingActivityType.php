<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ContractingActivityType
 *
 * ABIE
 *  Contracting Activity. Details
 *  The nature of the type of business of the organization.
 *  Contracting Activity
 * XSD Type: ContractingActivityType
 */
class ContractingActivityType
{
    /**
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \UBL\Common\CBC\ActivityTypeCode $activityTypeCode
     */
    private $activityTypeCode = null;

    /**
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..1
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\ActivityType $activityType
     */
    private $activityType = null;

    /**
     * Gets as activityTypeCode
     *
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @return \UBL\Common\CBC\ActivityTypeCode
     */
    public function getActivityTypeCode()
    {
        return $this->activityTypeCode;
    }

    /**
     * Sets a new activityTypeCode
     *
     * BBIE
     *  Contracting Activity. Activity Type Code. Code
     *  A code specifying the nature of the type of business of the organization.
     *  0..1
     *  Contracting Activity
     *  Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param \UBL\Common\CBC\ActivityTypeCode $activityTypeCode
     * @return self
     */
    public function setActivityTypeCode(?\UBL\Common\CBC\ActivityTypeCode $activityTypeCode = null)
    {
        $this->activityTypeCode = $activityTypeCode;
        return $this;
    }

    /**
     * Gets as activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..1
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\ActivityType
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Sets a new activityType
     *
     * BBIE
     *  Contracting Activity. Activity Type. Text
     *  The nature of the type of business of the organization, expressed as text.
     *  0..1
     *  Contracting Activity
     *  Activity Type
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\ActivityType $activityType
     * @return self
     */
    public function setActivityType(?\UBL\Common\CBC\ActivityType $activityType = null)
    {
        $this->activityType = $activityType;
        return $this;
    }
}


