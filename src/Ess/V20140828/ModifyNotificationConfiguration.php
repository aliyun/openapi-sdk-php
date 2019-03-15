<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getNotificationArn()
 * @method $this withNotificationArn($value)
 * @method array getNotificationType()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 */
class ModifyNotificationConfiguration extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

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
}
