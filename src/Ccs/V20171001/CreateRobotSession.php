<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateRobotSession
 *
 * @method string getVisitorIp()
 * @method string getSceneId()
 * @method string getRobotId()
 * @method string getCcsInstanceId()
 * @method string getVisitorId()
 */
class CreateRobotSession extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ccs';

    /**
     * @var string
     */
    public $version = '2017-10-01';

    /**
     * @var string
     */
    public $action = 'CreateRobotSession';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ccs';

    /**
     * @deprecated deprecated since version 2.0, Use withVisitorIp() instead.
     *
     * @param string $visitorIp
     *
     * @return $this
     */
    public function setVisitorIp($visitorIp)
    {
        return $this->withVisitorIp($visitorIp);
    }

    /**
     * @param string $visitorIp
     *
     * @return $this
     */
    public function withVisitorIp($visitorIp)
    {
        $this->data['VisitorIp'] = $visitorIp;
        $this->options['query']['VisitorIp'] = $visitorIp;

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
     * @deprecated deprecated since version 2.0, Use withRobotId() instead.
     *
     * @param string $robotId
     *
     * @return $this
     */
    public function setRobotId($robotId)
    {
        return $this->withRobotId($robotId);
    }

    /**
     * @param string $robotId
     *
     * @return $this
     */
    public function withRobotId($robotId)
    {
        $this->data['RobotId'] = $robotId;
        $this->options['query']['RobotId'] = $robotId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCcsInstanceId() instead.
     *
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        return $this->withCcsInstanceId($ccsInstanceId);
    }

    /**
     * @param string $ccsInstanceId
     *
     * @return $this
     */
    public function withCcsInstanceId($ccsInstanceId)
    {
        $this->data['CcsInstanceId'] = $ccsInstanceId;
        $this->options['query']['CcsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVisitorId() instead.
     *
     * @param string $visitorId
     *
     * @return $this
     */
    public function setVisitorId($visitorId)
    {
        return $this->withVisitorId($visitorId);
    }

    /**
     * @param string $visitorId
     *
     * @return $this
     */
    public function withVisitorId($visitorId)
    {
        $this->data['VisitorId'] = $visitorId;
        $this->options['query']['VisitorId'] = $visitorId;

        return $this;
    }
}
