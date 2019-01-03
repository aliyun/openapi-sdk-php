<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSynchronizationJobStatus
 *
 * @method string getSynchronizationJobId()
 * @method string getClientToken()
 * @method string getOwnerId()
 */
class DescribeSynchronizationJobStatus extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Dts';

    /**
     * @var string
     */
    public $version = '2016-08-01';

    /**
     * @var string
     */
    public $action = 'DescribeSynchronizationJobStatus';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withSynchronizationJobId() instead.
     *
     * @param string $synchronizationJobId
     *
     * @return $this
     */
    public function setSynchronizationJobId($synchronizationJobId)
    {
        return $this->withSynchronizationJobId($synchronizationJobId);
    }

    /**
     * @param string $synchronizationJobId
     *
     * @return $this
     */
    public function withSynchronizationJobId($synchronizationJobId)
    {
        $this->data['SynchronizationJobId'] = $synchronizationJobId;
        $this->options['query']['SynchronizationJobId'] = $synchronizationJobId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
