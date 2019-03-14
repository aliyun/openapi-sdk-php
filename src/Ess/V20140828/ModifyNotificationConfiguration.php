<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api ModifyNotificationConfiguration
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getNotificationArn()
 * @method array getNotificationType()
 * @method string getOwnerId()
 */
class ModifyNotificationConfiguration extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

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
     * @param array $notificationType
     *
     * @return $this
     */
    public function withNotificationType(array $notificationType)
    {
        $this->data['NotificationType'] = $notificationType;
        foreach ($notificationType as $i => $iValue) {
            $this->options['query']['NotificationType.' . ($i + 1)] = $iValue;
        }

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
