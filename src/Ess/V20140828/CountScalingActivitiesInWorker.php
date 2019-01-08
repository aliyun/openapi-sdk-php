<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CountScalingActivitiesInWorker
 *
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerId()
 * @method string getWorkerIp()
 */
class CountScalingActivitiesInWorker extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'CountScalingActivitiesInWorker';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @param string $workerIp
     *
     * @return $this
     */
    public function withWorkerIp($workerIp)
    {
        $this->data['WorkerIp'] = $workerIp;
        $this->options['query']['WorkerIp'] = $workerIp;

        return $this;
    }
}
