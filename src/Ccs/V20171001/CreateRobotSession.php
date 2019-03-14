<?php

namespace AlibabaCloud\Ccs\V20171001;

use AlibabaCloud\Rpc;

/**
 * Api CreateRobotSession
 *
 * @method string getVisitorIp()
 * @method string getSceneId()
 * @method string getRobotId()
 * @method string getCcsInstanceId()
 * @method string getVisitorId()
 */
class CreateRobotSession extends Rpc
{
    public $product = 'Ccs';

    public $version = '2017-10-01';

    public $method = 'POST';

    public $serviceCode = 'ccs';

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
