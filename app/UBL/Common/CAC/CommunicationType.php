<?php

namespace UBL\Common\CAC;

/**
 * Class representing CommunicationType
 *
 * ABIE
 *  Communication. Details
 *  A class to describe a means of communication.
 *  Communication
 * XSD Type: CommunicationType
 */
class CommunicationType
{
    /**
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @var \UBL\Common\CBC\ChannelCode $channelCode
     */
    private $channelCode = null;

    /**
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @var \UBL\Common\CBC\Channel $channel
     */
    private $channel = null;

    /**
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @var \UBL\Common\CBC\Value $value
     */
    private $value = null;

    /**
     * Gets as channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @return \UBL\Common\CBC\ChannelCode
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets a new channelCode
     *
     * BBIE
     *  Communication. Channel Code. Code
     *  The method of communication, expressed as a code.
     *  0..1
     *  Communication
     *  Channel Code
     *  Code
     *  Channel
     *  Channel_ Code. Type
     *  Phone Fax Email
     *
     * @param \UBL\Common\CBC\ChannelCode $channelCode
     * @return self
     */
    public function setChannelCode(?\UBL\Common\CBC\ChannelCode $channelCode = null)
    {
        $this->channelCode = $channelCode;
        return $this;
    }

    /**
     * Gets as channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @return \UBL\Common\CBC\Channel
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Sets a new channel
     *
     * BBIE
     *  Communication. Channel. Text
     *  The method of communication, expressed as text.
     *  0..1
     *  Communication
     *  Channel
     *  Text
     *  Text. Type
     *  Skype
     *
     * @param \UBL\Common\CBC\Channel $channel
     * @return self
     */
    public function setChannel(?\UBL\Common\CBC\Channel $channel = null)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * Gets as value
     *
     * BBIE
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
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
     *  Communication. Value. Text
     *  An identifying value (phone number, email address, etc.) for this channel of communication
     *  0..1
     *  Communication
     *  Value
     *  Text
     *  Text. Type
     *  +44 1 2345 6789 president@whitehouse.com
     *
     * @param \UBL\Common\CBC\Value $value
     * @return self
     */
    public function setValue(?\UBL\Common\CBC\Value $value = null)
    {
        $this->value = $value;
        return $this;
    }
}

