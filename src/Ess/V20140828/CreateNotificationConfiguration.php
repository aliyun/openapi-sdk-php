<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateNotificationConfiguration
 *
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupId()
 * @method string getNotificationArn()
 * @method array getNotificationType()
 * @method string getOwnerId()
 */
class CreateNotificationConfiguration extends RpcRequest
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
    public $action = 'CreateNotificationConfiguration';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withScalingGroupId() instead.
     *
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        return $this->withScalingGroupId($scalingGroupId);
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
     * @deprecated deprecated since version 2.0, Use withNotificationArn() instead.
     *
     * @param string $notificationArn
     *
     * @return $this
     */
    public function setNotificationArn($notificationArn)
    {
        return $this->withNotificationArn($notificationArn);
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
     * @deprecated deprecated since version 2.0, Use getNotificationType() instead.
     *
     * @return array
     */
    public function getNotificationTypes()
    {
        return $this->getNotificationType();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withNotificationType() instead.
     *
     * @param array $notificationTypes
     *
     * @return $this
     */
    public function setNotificationTypes(array $notificationTypes)
    {
        return $this->withNotificationType($notificationTypes);
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
