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
