<?php

namespace AlibabaCloud\Cloudauth\V20180916;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CompareFaces
 *
 * @method string getSourceImageType()
 * @method string getResourceOwnerId()
 * @method string getSourceIp()
 * @method string getTargetImageType()
 * @method string getSourceImageValue()
 * @method string getTargetImageValue()
 */
class CompareFaces extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cloudauth';

    /**
     * @var string
     */
    public $version = '2018-09-16';

    /**
     * @var string
     */
    public $action = 'CompareFaces';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'cloudauth';

    /**
     * @param string $sourceImageType
     *
     * @return $this
     */
    public function withSourceImageType($sourceImageType)
    {
        $this->data['SourceImageType'] = $sourceImageType;
        $this->options['query']['SourceImageType'] = $sourceImageType;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $targetImageType
     *
     * @return $this
     */
    public function withTargetImageType($targetImageType)
    {
        $this->data['TargetImageType'] = $targetImageType;
        $this->options['query']['TargetImageType'] = $targetImageType;

        return $this;
    }

    /**
     * @param string $sourceImageValue
     *
     * @return $this
     */
    public function withSourceImageValue($sourceImageValue)
    {
        $this->data['SourceImageValue'] = $sourceImageValue;
        $this->options['query']['SourceImageValue'] = $sourceImageValue;

        return $this;
    }

    /**
     * @param string $targetImageValue
     *
     * @return $this
     */
    public function withTargetImageValue($targetImageValue)
    {
        $this->data['TargetImageValue'] = $targetImageValue;
        $this->options['query']['TargetImageValue'] = $targetImageValue;

        return $this;
    }
}
