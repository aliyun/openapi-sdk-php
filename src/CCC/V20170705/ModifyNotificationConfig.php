<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Rpc;

/**
 * Api ModifyNotificationConfig
 *
 * @method array getSubscriptions()
 * @method string getInstanceId()
 * @method string getAccessPoint()
 * @method string getTopic()
 * @method string getProducerId()
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
     * @param string $accessPoint
     *
     * @return $this
     */
    public function withAccessPoint($accessPoint)
    {
        $this->data['AccessPoint'] = $accessPoint;
        $this->options['query']['AccessPoint'] = $accessPoint;

        return $this;
    }

    /**
     * @param string $topic
     *
     * @return $this
     */
    public function withTopic($topic)
    {
        $this->data['Topic'] = $topic;
        $this->options['query']['Topic'] = $topic;

        return $this;
    }

    /**
     * @param string $producerId
     *
     * @return $this
     */
    public function withProducerId($producerId)
    {
        $this->data['ProducerId'] = $producerId;
        $this->options['query']['ProducerId'] = $producerId;

        return $this;
    }
}
