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
