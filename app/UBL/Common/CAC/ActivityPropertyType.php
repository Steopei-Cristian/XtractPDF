<?php

namespace App\UBL\Common\CAC;

/**
 * Class representing ActivityPropertyType
 *
 * ABIE
 *  Activity Property. Details
 *  A class to define a name/value pair for a property of an inventory planning activity.
 *  Activity Property
 * XSD Type: ActivityPropertyType
 */
class ActivityPropertyType
{
    /**
     * BBIE
     *  Activity Property. Name
     *  The name of this activity property.
     *  1
     *  Activity Property
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \UBL\Common\CBC\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Activity Property. Value. Text
     *  The value of this activity property.
     *  1
     *  Activity Property
     *  Value
     *  Text
     *  Text. Type
     *
     * @var \UBL\Common\CBC\Value $value
     */
    private $value = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Activity Property. Name
     *  The name of this activity property.
     *  1
     *  Activity Property
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
     *  Activity Property. Name
     *  The name of this activity property.
     *  1
     *  Activity Property
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
     * Gets as value
     *
     * BBIE
     *  Activity Property. Value. Text
     *  The value of this activity property.
     *  1
     *  Activity Property
     *  Value
     *  Text
     *  Text. Type
     *
     * @return \UBL\Common\CBC\Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * BBIE
     *  Activity Property. Value. Text
     *  The value of this activity property.
     *  1
     *  Activity Property
     *  Value
     *  Text
     *  Text. Type
     *
     * @param \UBL\Common\CBC\Value $value
     * @return self
     */
    public function setValue(\UBL\Common\CBC\Value $value)
    {
        $this->value = $value;
        return $this;
    }
}


