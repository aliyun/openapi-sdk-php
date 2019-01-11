<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLogConfig
 *
 * @method string getSlsLogStore()
 * @method string getLogType()
 * @method string getSecurityToken()
 * @method string getSlsProject()
 */
class CreateLogConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CloudAPI';

    /**
     * @var string
     */
    public $version = '2016-07-14';

    /**
     * @var string
     */
    public $action = 'CreateLogConfig';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'apigateway';

    /**
     * @param string $slsLogStore
     *
     * @return $this
     */
    public function withSlsLogStore($slsLogStore)
    {
        $this->data['SlsLogStore'] = $slsLogStore;
        $this->options['query']['SlsLogStore'] = $slsLogStore;

        return $this;
    }

    /**
     * @param string $logType
     *
     * @return $this
     */
    public function withLogType($logType)
    {
        $this->data['LogType'] = $logType;
        $this->options['query']['LogType'] = $logType;

        return $this;
    }

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

        return $this;
    }

    /**
     * @param string $slsProject
     *
     * @return $this
     */
    public function withSlsProject($slsProject)
    {
        $this->data['SlsProject'] = $slsProject;
        $this->options['query']['SlsProject'] = $slsProject;

        return $this;
    }
}
