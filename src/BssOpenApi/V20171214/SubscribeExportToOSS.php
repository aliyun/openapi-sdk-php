<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SubscribeExportToOSS
 *
 * @method string getBucketOwnerId()
 * @method array getSubscribeType()
 * @method string getSubscribeBucket()
 */
class SubscribeExportToOSS extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'BssOpenApi';

    /**
     * @var string
     */
    public $version = '2017-12-14';

    /**
     * @var string
     */
    public $action = 'SubscribeExportToOSS';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withBucketOwnerId() instead.
     *
     * @param string $bucketOwnerId
     *
     * @return $this
     */
    public function setBucketOwnerId($bucketOwnerId)
    {
        return $this->withBucketOwnerId($bucketOwnerId);
    }

    /**
     * @param string $bucketOwnerId
     *
     * @return $this
     */
    public function withBucketOwnerId($bucketOwnerId)
    {
        $this->data['BucketOwnerId'] = $bucketOwnerId;
        $this->options['query']['BucketOwnerId'] = $bucketOwnerId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getSubscribeType() instead.
     *
     * @return array
     */
    public function getSubscribeTypes()
    {
        return $this->getSubscribeType();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSubscribeType() instead.
     *
     * @param array $subscribeTypes
     *
     * @return $this
     */
    public function setSubscribeTypes(array $subscribeTypes)
    {
        return $this->withSubscribeType($subscribeTypes);
    }

    /**
     * @param array $subscribeType
     *
     * @return $this
     */
    public function withSubscribeType(array $subscribeType)
    {
        $this->data['SubscribeType'] = $subscribeType;
        foreach ($subscribeType as $i => $iValue) {
            $this->options['query']['SubscribeType.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSubscribeBucket() instead.
     *
     * @param string $subscribeBucket
     *
     * @return $this
     */
    public function setSubscribeBucket($subscribeBucket)
    {
        return $this->withSubscribeBucket($subscribeBucket);
    }

    /**
     * @param string $subscribeBucket
     *
     * @return $this
     */
    public function withSubscribeBucket($subscribeBucket)
    {
        $this->data['SubscribeBucket'] = $subscribeBucket;
        $this->options['query']['SubscribeBucket'] = $subscribeBucket;

        return $this;
    }
}
