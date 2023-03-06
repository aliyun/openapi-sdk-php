<?php

namespace AlibabaCloud\CloudSiem\V20220616;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method BatchJobCheck batchJobCheck(array $options = [])
 * @method BatchJobSubmit batchJobSubmit(array $options = [])
 * @method SendMessage sendMessage(array $options = [])
 */
class CloudSiemApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cloud-siem';

    /** @var string */
    public $version = '2022-06-16';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloud-siem';
}

/**
 * @method string getSubmitId()
 */
class BatchJobCheck extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSubmitId($value)
    {
        $this->data['SubmitId'] = $value;
        $this->options['form_params']['SubmitId'] = $value;

        return $this;
    }
}

/**
 * @method string getJsonConfig()
 */
class BatchJobSubmit extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJsonConfig($value)
    {
        $this->data['JsonConfig'] = $value;
        $this->options['form_params']['JsonConfig'] = $value;

        return $this;
    }
}

/**
 * @method string getChannelType()
 * @method string getReceiveUid()
 */
class SendMessage extends Rpc
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
    public function withReceiveUid($value)
    {
        $this->data['ReceiveUid'] = $value;
        $this->options['form_params']['ReceiveUid'] = $value;

        return $this;
    }
}
