<?php

namespace AlibabaCloud\Cloudauth\V20200618;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeSmartVerify describeSmartVerify(array $options = [])
 * @method InitSmartVerify initSmartVerify(array $options = [])
 */
class CloudauthApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cloudauth';

    /** @var string */
    public $version = '2020-06-18';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudauth';
}

/**
 * @method string getSceneId()
 * @method string getCertifyId()
 */
class DescribeSmartVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertifyId($value)
    {
        $this->data['CertifyId'] = $value;
        $this->options['form_params']['CertifyId'] = $value;

        return $this;
    }
}

/**
 * @method string getIp()
 * @method string getCertName()
 * @method string getMobile()
 * @method string getUserId()
 * @method string getMode()
 * @method string getCertNo()
 * @method string getOuterOrderNo()
 * @method string getCertType()
 * @method string getSceneId()
 * @method string getMetaInfo()
 * @method string getOcr()
 */
class InitSmartVerify extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIp($value)
    {
        $this->data['Ip'] = $value;
        $this->options['form_params']['Ip'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertName($value)
    {
        $this->data['CertName'] = $value;
        $this->options['form_params']['CertName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMobile($value)
    {
        $this->data['Mobile'] = $value;
        $this->options['form_params']['Mobile'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserId($value)
    {
        $this->data['UserId'] = $value;
        $this->options['form_params']['UserId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMode($value)
    {
        $this->data['Mode'] = $value;
        $this->options['form_params']['Mode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertNo($value)
    {
        $this->data['CertNo'] = $value;
        $this->options['form_params']['CertNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOuterOrderNo($value)
    {
        $this->data['OuterOrderNo'] = $value;
        $this->options['form_params']['OuterOrderNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertType($value)
    {
        $this->data['CertType'] = $value;
        $this->options['form_params']['CertType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneId($value)
    {
        $this->data['SceneId'] = $value;
        $this->options['form_params']['SceneId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetaInfo($value)
    {
        $this->data['MetaInfo'] = $value;
        $this->options['form_params']['MetaInfo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOcr($value)
    {
        $this->data['Ocr'] = $value;
        $this->options['form_params']['Ocr'] = $value;

        return $this;
    }
}
