<?php

namespace AlibabaCloud\CCC\V20170705;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifyNotificationConfig
 *
 * @method array getSubscriptions()
 * @method string getInstanceId()
 * @method string getAccessPoint()
 * @method string getTopic()
 * @method string getProducerId()
 */
class ModifyNotificationConfig extends RpcRequest
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
    public $action = 'ModifyNotificationConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccc';

    /**
     * @deprecated deprecated since version 2.0, Use getSubscriptions() instead.
     *
     * @return array
     */
    public function getSubscriptionss()
    {
        return $this->getSubscriptions();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSubscriptions() instead.
     *
     * @param array $subscriptionss
     *
     * @return $this
     */
    public function setSubscriptionss(array $subscriptionss)
    {
        return $this->withSubscriptions($subscriptionss);
    }

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
     * @deprecated deprecated since version 2.0, Use withAccessPoint() instead.
     *
     * @param string $accessPoint
     *
     * @return $this
     */
    public function setAccessPoint($accessPoint)
    {
        return $this->withAccessPoint($accessPoint);
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
     * @deprecated deprecated since version 2.0, Use withTopic() instead.
     *
     * @param string $topic
     *
     * @return $this
     */
    public function setTopic($topic)
    {
        return $this->withTopic($topic);
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
     * @deprecated deprecated since version 2.0, Use withProducerId() instead.
     *
     * @param string $producerId
     *
     * @return $this
     */
    public function setProducerId($producerId)
    {
        return $this->withProducerId($producerId);
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
