<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveUsers
 *
 * @method string getInstanceId()
 * @method array getUserId()
 */
class RemoveUsers extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CCC';

    /**
     * @var string
     */
    public $version = '2017-07-05';

    /**
     * @var string
     */
    public $action = 'RemoveUsers';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use getUserId() instead.
     *
     * @return array
     */
    public function getUserIds()
    {
        return $this->getUserId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserId() instead.
     *
     * @param array $userIds
     *
     * @return $this
     */
    public function setUserIds(array $userIds)
    {
        return $this->withUserId($userIds);
    }

    /**
     * @param array $userId
     *
     * @return $this
     */
    public function withUserId(array $userId)
    {
        $this->data['UserId'] = $userId;
        foreach ($userId as $i => $iValue) {
            $this->options['query']['UserId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
