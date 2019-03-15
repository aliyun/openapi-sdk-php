<?php

namespace AlibabaCloud\BssOpenApi\V20171214;

use AlibabaCloud\Rpc;

/**
 * @method string getBucketOwnerId()
 * @method $this withBucketOwnerId($value)
 * @method array getSubscribeType()
 * @method string getSubscribeBucket()
 * @method $this withSubscribeBucket($value)
 */
class SubscribeExportToOSS extends Rpc
{
    public $product = 'BssOpenApi';

    public $version = '2017-12-14';

    public $method = 'POST';

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
}
