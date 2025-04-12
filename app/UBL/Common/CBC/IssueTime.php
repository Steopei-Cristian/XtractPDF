<?php

namespace App\UBL\Common\CBC;

use JMS\Serializer\Annotation as JMS;

/**
 * Class representing IssueTime
 */
class IssueTime
{
    /**
     * @var \DateTime $__value
     * @JMS\Type("DateTime<'H:i:s'>")
     * @JMS\XmlValue
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param \DateTime $value
     */
    public function __construct(\DateTime $value = null)
    {
        if ($value !== null) {
            $this->value($value);
        }
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateTime $value
     * @return \DateTime
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return $this->__value ? $this->__value->format('H:i:s') : '';
    }
}

