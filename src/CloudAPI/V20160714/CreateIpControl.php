<?php

namespace AlibabaCloud\CloudAPI\V20160714;

use AlibabaCloud\Rpc;

/**
 * @method string getSecurityToken()
 * @method $this withSecurityToken($value)
 * @method string getIpControlName()
 * @method $this withIpControlName($value)
 * @method string getIpControlType()
 * @method $this withIpControlType($value)
 * @method array getIpControlPolicys()
 * @method string getDescription()
 * @method $this withDescription($value)
 */
class CreateIpControl extends Rpc
{
    public $product = 'CloudAPI';

    public $version = '2016-07-14';

    public $method = 'POST';

    public $serviceCode = 'apigateway';

    /**
     * @param array $ipControlPolicys
     *
     * @return $this
     */
    public function withIpControlPolicys(array $ipControlPolicys)
    {
        $this->data['IpControlPolicys'] = $ipControlPolicys;
        foreach ($ipControlPolicys as $i => $iValue) {
            $this->options['query']['IpControlPolicys.' . ($i + 1) . '.AppId'] = $ipControlPolicys[$i]['AppId'];
            $this->options['query']['IpControlPolicys.' . ($i + 1) . '.CidrIp'] = $ipControlPolicys[$i]['CidrIp'];
        }

        return $this;
    }
}
