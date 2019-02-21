<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of GetTranscodeSummary
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getVideoIds()
 */
class GetTranscodeSummary extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'GetTranscodeSummary';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

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
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $videoIds
     *
     * @return $this
     */
    public function withVideoIds($videoIds)
    {
        $this->data['VideoIds'] = $videoIds;
        $this->options['query']['VideoIds'] = $videoIds;

        return $this;
    }
}
