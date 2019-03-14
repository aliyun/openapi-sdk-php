<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * Api DeleteLogConfig
 *
 * @method string getLogType()
 * @method string getSecurityToken()
 */
class DeleteLogConfig extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

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
}
