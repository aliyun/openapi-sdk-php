<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteNotificationConfiguration
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getNotificationArn()
 * @method string getOwnerId()
 */
class DeleteNotificationConfiguration extends RpcRequest
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
    public $action = 'DeleteNotificationConfiguration';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function withScalingGroupId($scalingGroupId)
    {
        $this->data['ScalingGroupId'] = $scalingGroupId;
        $this->options['query']['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param string $notificationArn
     *
     * @return $this
     */
    public function withNotificationArn($notificationArn)
    {
        $this->data['NotificationArn'] = $notificationArn;
        $this->options['query']['NotificationArn'] = $notificationArn;

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
