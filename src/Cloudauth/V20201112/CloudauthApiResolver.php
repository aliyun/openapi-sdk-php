<?php

namespace AlibabaCloud\Cloudauth\V20201112;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method LivenessDetect livenessDetect(array $options = [])
 */
class CloudauthApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2020-11-12';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudauth';
}

/**
 * @method string getMediaCategory()
 * @method string getMediaUrl()
 * @method string getBizType()
 * @method string getBizId()
 * @method string getMediaFile()
 */
class LivenessDetect extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaCategory($value)
    {
        $this->data['MediaCategory'] = $value;
        $this->options['form_params']['MediaCategory'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaUrl($value)
    {
        $this->data['MediaUrl'] = $value;
        $this->options['form_params']['MediaUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMediaFile($value)
    {
        $this->data['MediaFile'] = $value;
        $this->options['form_params']['MediaFile'] = $value;

        return $this;
    }
}
