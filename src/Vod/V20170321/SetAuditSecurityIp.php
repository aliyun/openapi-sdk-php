<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetAuditSecurityIp
 *
 * @method string getOperateMode()
 * @method string getSecurityGroupName()
 * @method string getIps()
 */
class SetAuditSecurityIp extends RpcRequest
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
    public $action = 'SetAuditSecurityIp';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @deprecated deprecated since version 2.0, Use withOperateMode() instead.
     *
     * @param string $operateMode
     *
     * @return $this
     */
    public function setOperateMode($operateMode)
    {
        return $this->withOperateMode($operateMode);
    }

    /**
     * @param string $operateMode
     *
     * @return $this
     */
    public function withOperateMode($operateMode)
    {
        $this->data['OperateMode'] = $operateMode;
        $this->options['query']['OperateMode'] = $operateMode;

        return $this;
    }

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

    /**
     * @deprecated deprecated since version 2.0, Use withIps() instead.
     *
     * @param string $ips
     *
     * @return $this
     */
    public function setIps($ips)
    {
        return $this->withIps($ips);
    }

    /**
     * @param string $ips
     *
     * @return $this
     */
    public function withIps($ips)
    {
        $this->data['Ips'] = $ips;
        $this->options['query']['Ips'] = $ips;

        return $this;
    }
}
