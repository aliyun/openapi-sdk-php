<?php

namespace AlibabaCloud\Cams\V20200606;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CheckContacts checkContacts(array $options = [])
 * @method SendMessage sendMessage(array $options = [])
 */
class CamsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cams';

    /** @var string */
    public $version = '2020-06-06';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cams';
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getChannelType()
 * @method string getFrom()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getContacts()
 */
class CheckContacts extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelType($value)
    {
        $this->data['ChannelType'] = $value;
        $this->options['form_params']['ChannelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withContacts($value)
    {
        $this->data['Contacts'] = $value;
        $this->options['form_params']['Contacts'] = $value;

        return $this;
    }
}

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getMessageType()
 * @method string getTemplateBodyParams()
 * @method string getLink()
 * @method string getCaption()
 * @method string getType()
 * @method string getChannelType()
 * @method string getFrom()
 * @method string getText()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTo()
 * @method string getTemplateCode()
 */
class SendMessage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMessageType($value)
    {
        $this->data['MessageType'] = $value;
        $this->options['form_params']['MessageType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateBodyParams($value)
    {
        $this->data['TemplateBodyParams'] = $value;
        $this->options['form_params']['TemplateBodyParams'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLink($value)
    {
        $this->data['Link'] = $value;
        $this->options['form_params']['Link'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCaption($value)
    {
        $this->data['Caption'] = $value;
        $this->options['form_params']['Caption'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withChannelType($value)
    {
        $this->data['ChannelType'] = $value;
        $this->options['form_params']['ChannelType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFrom($value)
    {
        $this->data['From'] = $value;
        $this->options['form_params']['From'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withText($value)
    {
        $this->data['Text'] = $value;
        $this->options['form_params']['Text'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTo($value)
    {
        $this->data['To'] = $value;
        $this->options['form_params']['To'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTemplateCode($value)
    {
        $this->data['TemplateCode'] = $value;
        $this->options['form_params']['TemplateCode'] = $value;

        return $this;
    }
}
