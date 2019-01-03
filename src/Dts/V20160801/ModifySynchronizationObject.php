<?php

namespace AlibabaCloud\Dts\V20160801;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySynchronizationObject
 *
 * @method string getSynchronizationJobId()
 * @method string getSynchronizationObjects()
 * @method string getOwnerId()
 */
class ModifySynchronizationObject extends RpcRequest
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
    public $action = 'ModifySynchronizationObject';

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
     * @deprecated deprecated since version 2.0, Use withSynchronizationObjects() instead.
     *
     * @param string $synchronizationObjects
     *
     * @return $this
     */
    public function setSynchronizationObjects($synchronizationObjects)
    {
        return $this->withSynchronizationObjects($synchronizationObjects);
    }

    /**
     * @param string $synchronizationObjects
     *
     * @return $this
     */
    public function withSynchronizationObjects($synchronizationObjects)
    {
        $this->data['SynchronizationObjects'] = $synchronizationObjects;
        $this->options['query']['SynchronizationObjects'] = $synchronizationObjects;

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
