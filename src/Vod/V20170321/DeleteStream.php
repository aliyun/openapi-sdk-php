<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteStream
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getJobIds()
 * @method string getVideoId()
 * @method string getOwnerId()
 */
class DeleteStream extends RpcRequest
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
    public $action = 'DeleteStream';

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
     * @param string $jobIds
     *
     * @return $this
     */
    public function withJobIds($jobIds)
    {
        $this->data['JobIds'] = $jobIds;
        $this->options['query']['JobIds'] = $jobIds;

        return $this;
    }

    /**
     * @param string $videoId
     *
     * @return $this
     */
    public function withVideoId($videoId)
    {
        $this->data['VideoId'] = $videoId;
        $this->options['query']['VideoId'] = $videoId;

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
}
