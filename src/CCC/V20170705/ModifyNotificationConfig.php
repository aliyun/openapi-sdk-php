<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * @method array getSubscriptions()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAccessPoint()
 * @method $this withAccessPoint($value)
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getProducerId()
 * @method $this withProducerId($value)
 */
class ModifyNotificationConfig extends Rpc
{
    public $product = 'CCC';

    public $version = '2017-07-05';

    public $method = 'POST';

    public $serviceCode = 'ccc';

    /**
     * @param array $subscriptions
     *
     * @return $this
     */
    public function withSubscriptions(array $subscriptions)
    {
        $this->data['Subscriptions'] = $subscriptions;
        foreach ($subscriptions as $i => $iValue) {
            $this->options['query']['Subscriptions.' . ($i + 1) . '.DisplayName'] = $subscriptions[$i]['DisplayName'];
            $this->options['query']['Subscriptions.' . ($i + 1) . '.Name'] = $subscriptions[$i]['Name'];
            $this->options['query']['Subscriptions.' . ($i + 1) . '.Selected'] = $subscriptions[$i]['Selected'];
        }

        return $this;
    }
}
