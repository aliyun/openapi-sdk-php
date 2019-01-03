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
     * @deprecated deprecated since version 2.0, Use withSourceImageType() instead.
     *
     * @param string $sourceImageType
     *
     * @return $this
     */
    public function setSourceImageType($sourceImageType)
    {
        return $this->withSourceImageType($sourceImageType);
    }

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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withTargetImageType() instead.
     *
     * @param string $targetImageType
     *
     * @return $this
     */
    public function setTargetImageType($targetImageType)
    {
        return $this->withTargetImageType($targetImageType);
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
     * @deprecated deprecated since version 2.0, Use withSourceImageValue() instead.
     *
     * @param string $sourceImageValue
     *
     * @return $this
     */
    public function setSourceImageValue($sourceImageValue)
    {
        return $this->withSourceImageValue($sourceImageValue);
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
     * @deprecated deprecated since version 2.0, Use withTargetImageValue() instead.
     *
     * @param string $targetImageValue
     *
     * @return $this
     */
    public function setTargetImageValue($targetImageValue)
    {
        return $this->withTargetImageValue($targetImageValue);
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
