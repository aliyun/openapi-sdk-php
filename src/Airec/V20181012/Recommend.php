<?php

namespace AlibabaCloud\Airec\V20181012;

use AlibabaCloud\Client\Request\RoaRequest;

/**
 * Request of Recommend
 *
 * @method string getReturnCount()
 * @method string getInstanceId()
 * @method string getIp()
 * @method string getSceneId()
 * @method string getImei()
 * @method string getUserId()
 */
class Recommend extends RoaRequest
{

    /**
     * @var string
     */
    public $product = 'Airec';

    /**
     * @var string
     */
    public $version = '2018-10-12';

    /**
     * @var string
     */
    public $action = 'Recommend';

    /**
     * @var string
     */
    public $pathPattern = '/openapi/instances/[InstanceId]/actions/recommend';

    /**
     * @var string
     */
    public $serviceCode = 'airec';

    /**
     * @deprecated deprecated since version 2.0, Use withReturnCount() instead.
     *
     * @param string $returnCount
     *
     * @return $this
     */
    public function setReturnCount($returnCount)
    {
        return $this->withReturnCount($returnCount);
    }

    /**
     * @param string $returnCount
     *
     * @return $this
     */
    public function withReturnCount($returnCount)
    {
        $this->data['ReturnCount'] = $returnCount;
        $this->options['query']['ReturnCount'] = $returnCount;

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
        $this->pathParameters['InstanceId'] = $instanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIp() instead.
     *
     * @param string $ip
     *
     * @return $this
     */
    public function setIp($ip)
    {
        return $this->withIp($ip);
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function withIp($ip)
    {
        $this->data['Ip'] = $ip;
        $this->options['query']['Ip'] = $ip;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSceneId() instead.
     *
     * @param string $sceneId
     *
     * @return $this
     */
    public function setSceneId($sceneId)
    {
        return $this->withSceneId($sceneId);
    }

    /**
     * @param string $sceneId
     *
     * @return $this
     */
    public function withSceneId($sceneId)
    {
        $this->data['SceneId'] = $sceneId;
        $this->options['query']['SceneId'] = $sceneId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImei() instead.
     *
     * @param string $imei
     *
     * @return $this
     */
    public function setImei($imei)
    {
        return $this->withImei($imei);
    }

    /**
     * @param string $imei
     *
     * @return $this
     */
    public function withImei($imei)
    {
        $this->data['Imei'] = $imei;
        $this->options['query']['Imei'] = $imei;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUserId() instead.
     *
     * @param string $userId
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        return $this->withUserId($userId);
    }

    /**
     * @param string $userId
     *
     * @return $this
     */
    public function withUserId($userId)
    {
        $this->data['UserId'] = $userId;
        $this->options['query']['UserId'] = $userId;

        return $this;
    }
}
