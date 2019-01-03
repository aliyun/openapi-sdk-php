<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListAuditSecurityIp
 *
 * @method string getSecurityGroupName()
 */
class ListAuditSecurityIp extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'ListAuditSecurityIp';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @deprecated deprecated since version 2.0, Use withSecurityGroupName() instead.
     *
     * @param string $securityGroupName
     *
     * @return $this
     */
    public function setSecurityGroupName($securityGroupName)
    {
        return $this->withSecurityGroupName($securityGroupName);
    }

    /**
     * @param string $securityGroupName
     *
     * @return $this
     */
    public function withSecurityGroupName($securityGroupName)
    {
        $this->data['SecurityGroupName'] = $securityGroupName;
        $this->options['query']['SecurityGroupName'] = $securityGroupName;

        return $this;
    }
}
