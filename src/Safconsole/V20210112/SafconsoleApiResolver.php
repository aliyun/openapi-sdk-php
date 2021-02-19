<?php

namespace AlibabaCloud\Safconsole\V20210112;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method RevokeFeedback revokeFeedback(array $options = [])
 * @method SendFeedback sendFeedback(array $options = [])
 */
class SafconsoleApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'safconsole';

    /** @var string */
    public $version = '2021-01-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'safconsole';
}

/**
 * @method string getSampleType()
 * @method string getValue()
 */
class RevokeFeedback extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSampleType($value)
    {
        $this->data['SampleType'] = $value;
        $this->options['form_params']['SampleType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withValue($value)
    {
        $this->data['Value'] = $value;
        $this->options['form_params']['Value'] = $value;

        return $this;
    }
}

/**
 * @method string getRiskLabel()
 * @method $this withRiskLabel($value)
 * @method string getSampleType()
 * @method $this withSampleType($value)
 * @method string getValue()
 * @method $this withValue($value)
 */
class SendFeedback extends Rpc
{
}
