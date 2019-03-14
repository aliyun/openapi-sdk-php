<?php

namespace AlibabaCloud\Ots\V20160620;

use AlibabaCloud\Rpc;

/**
 * Api ListClusterType
 *
 * @method string getAccessKeyId()
 * @method string getResourceOwnerId()
 */
class ListClusterType extends Rpc
{
    public $product = 'Ots';

    public $version = '2016-06-20';

    public $serviceCode = 'ots';

    /**
     * @param string $accessKeyId
     *
     * @return $this
     */
    public function withAccessKeyId($accessKeyId)
    {
        $this->data['AccessKeyId'] = $accessKeyId;
        $this->options['query']['access_key_id'] = $accessKeyId;

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
}
