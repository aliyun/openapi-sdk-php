<?php

namespace AlibabaCloud\Cams\V20200606;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
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
 * @method string getTemplateBodyParams()
 * @method string getLink()
 * @method string getCaption()
 * @method string getType()
 * @method string getBody()
 * @method string getChannelType()
 * @method string getFrom()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTo()
 * @method string getTemplateCode()
 * @method string getMediaType()
 */
class SendMessage extends Rpc
{

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
    public function withBody($value)
    {
        $this->data['Body'] = $value;
        $this->options['form_params']['Body'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaType($value)
    {
        $this->data['MediaType'] = $value;
        $this->options['form_params']['MediaType'] = $value;

        return $this;
    }
}
