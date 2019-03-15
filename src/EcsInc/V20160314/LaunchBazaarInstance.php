<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getImageId()
 * @method $this withImageId($value)
 * @method string getLaunchData()
 * @method $this withLaunchData($value)
 * @method string getLinkedSecurityGroupId()
 * @method $this withLinkedSecurityGroupId($value)
 * @method string getAssumeRoleAccessKeySecret()
 * @method $this withAssumeRoleAccessKeySecret($value)
 * @method string getAssumeRoleSecurityToken()
 * @method $this withAssumeRoleSecurityToken($value)
 * @method string getHostName()
 * @method $this withHostName($value)
 * @method string getPassword()
 * @method $this withPassword($value)
 * @method string getMem()
 * @method $this withMem($value)
 * @method array getTag()
 * @method string getAssumeRoleAccessKeyId()
 * @method $this withAssumeRoleAccessKeyId($value)
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getCpu()
 * @method $this withCpu($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getInstanceName()
 * @method $this withInstanceName($value)
 * @method string getZoneId()
 * @method $this withZoneId($value)
 * @method string getLinkedVSwitchId()
 * @method $this withLinkedVSwitchId($value)
 */
class LaunchBazaarInstance extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.Key'] = $tag[$i]['Key'];
            $this->options['query']['Tag.' . ($i + 1) . '.Value'] = $tag[$i]['Value'];
        }

        return $this;
    }
}
