<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Rpc;

/**
 * Api SetAuditSecurityIp
 *
 * @method string getOperateMode()
 * @method string getSecurityGroupName()
 * @method string getIps()
 */
class SetAuditSecurityIp extends Rpc
{
    public $product = 'vod';

    public $version = '2017-03-21';

    public $method = 'POST';

    public $serviceCode = 'vod';

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
