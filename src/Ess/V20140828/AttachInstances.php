<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * Api AttachInstances
 *
 * @method string getInstanceId10()
 * @method string getLoadBalancerWeight6()
 * @method string getLoadBalancerWeight11()
 * @method string getLoadBalancerWeight7()
 * @method string getLoadBalancerWeight12()
 * @method string getResourceOwnerId()
 * @method string getInstanceId12()
 * @method string getLoadBalancerWeight8()
 * @method string getInstanceId11()
 * @method string getLoadBalancerWeight9()
 * @method string getLoadBalancerWeight10()
 * @method string getLoadBalancerWeight2()
 * @method string getLoadBalancerWeight15()
 * @method string getLoadBalancerWeight3()
 * @method string getLoadBalancerWeight16()
 * @method string getScalingGroupId()
 * @method string getLoadBalancerWeight4()
 * @method string getLoadBalancerWeight13()
 * @method string getLoadBalancerWeight5()
 * @method string getLoadBalancerWeight14()
 * @method string getLoadBalancerWeight1()
 * @method string getInstanceId20()
 * @method string getInstanceId1()
 * @method string getLoadBalancerWeight20()
 * @method string getInstanceId3()
 * @method string getResourceOwnerAccount()
 * @method string getInstanceId2()
 * @method string getInstanceId5()
 * @method string getInstanceId4()
 * @method string getOwnerAccount()
 * @method string getInstanceId7()
 * @method string getInstanceId6()
 * @method string getInstanceId9()
 * @method string getInstanceId8()
 * @method string getOwnerId()
 * @method string getInstanceId18()
 * @method string getLoadBalancerWeight19()
 * @method string getInstanceId17()
 * @method string getLoadBalancerWeight17()
 * @method string getInstanceId19()
 * @method string getLoadBalancerWeight18()
 * @method string getInstanceId14()
 * @method string getInstanceId13()
 * @method string getInstanceId16()
 * @method string getInstanceId15()
 */
class AttachInstances extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param string $instanceId10
     *
     * @return $this
     */
    public function withInstanceId10($instanceId10)
    {
        $this->data['InstanceId10'] = $instanceId10;
        $this->options['query']['InstanceId.10'] = $instanceId10;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight6
     *
     * @return $this
     */
    public function withLoadBalancerWeight6($loadBalancerWeight6)
    {
        $this->data['LoadBalancerWeight6'] = $loadBalancerWeight6;
        $this->options['query']['LoadBalancerWeight.6'] = $loadBalancerWeight6;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight11
     *
     * @return $this
     */
    public function withLoadBalancerWeight11($loadBalancerWeight11)
    {
        $this->data['LoadBalancerWeight11'] = $loadBalancerWeight11;
        $this->options['query']['LoadBalancerWeight.11'] = $loadBalancerWeight11;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight7
     *
     * @return $this
     */
    public function withLoadBalancerWeight7($loadBalancerWeight7)
    {
        $this->data['LoadBalancerWeight7'] = $loadBalancerWeight7;
        $this->options['query']['LoadBalancerWeight.7'] = $loadBalancerWeight7;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight12
     *
     * @return $this
     */
    public function withLoadBalancerWeight12($loadBalancerWeight12)
    {
        $this->data['LoadBalancerWeight12'] = $loadBalancerWeight12;
        $this->options['query']['LoadBalancerWeight.12'] = $loadBalancerWeight12;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $instanceId12
     *
     * @return $this
     */
    public function withInstanceId12($instanceId12)
    {
        $this->data['InstanceId12'] = $instanceId12;
        $this->options['query']['InstanceId.12'] = $instanceId12;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight8
     *
     * @return $this
     */
    public function withLoadBalancerWeight8($loadBalancerWeight8)
    {
        $this->data['LoadBalancerWeight8'] = $loadBalancerWeight8;
        $this->options['query']['LoadBalancerWeight.8'] = $loadBalancerWeight8;

        return $this;
    }

    /**
     * @param string $instanceId11
     *
     * @return $this
     */
    public function withInstanceId11($instanceId11)
    {
        $this->data['InstanceId11'] = $instanceId11;
        $this->options['query']['InstanceId.11'] = $instanceId11;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight9
     *
     * @return $this
     */
    public function withLoadBalancerWeight9($loadBalancerWeight9)
    {
        $this->data['LoadBalancerWeight9'] = $loadBalancerWeight9;
        $this->options['query']['LoadBalancerWeight.9'] = $loadBalancerWeight9;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight10
     *
     * @return $this
     */
    public function withLoadBalancerWeight10($loadBalancerWeight10)
    {
        $this->data['LoadBalancerWeight10'] = $loadBalancerWeight10;
        $this->options['query']['LoadBalancerWeight.10'] = $loadBalancerWeight10;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight2
     *
     * @return $this
     */
    public function withLoadBalancerWeight2($loadBalancerWeight2)
    {
        $this->data['LoadBalancerWeight2'] = $loadBalancerWeight2;
        $this->options['query']['LoadBalancerWeight.2'] = $loadBalancerWeight2;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight15
     *
     * @return $this
     */
    public function withLoadBalancerWeight15($loadBalancerWeight15)
    {
        $this->data['LoadBalancerWeight15'] = $loadBalancerWeight15;
        $this->options['query']['LoadBalancerWeight.15'] = $loadBalancerWeight15;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight3
     *
     * @return $this
     */
    public function withLoadBalancerWeight3($loadBalancerWeight3)
    {
        $this->data['LoadBalancerWeight3'] = $loadBalancerWeight3;
        $this->options['query']['LoadBalancerWeight.3'] = $loadBalancerWeight3;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight16
     *
     * @return $this
     */
    public function withLoadBalancerWeight16($loadBalancerWeight16)
    {
        $this->data['LoadBalancerWeight16'] = $loadBalancerWeight16;
        $this->options['query']['LoadBalancerWeight.16'] = $loadBalancerWeight16;

        return $this;
    }

    /**
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function withScalingGroupId($scalingGroupId)
    {
        $this->data['ScalingGroupId'] = $scalingGroupId;
        $this->options['query']['ScalingGroupId'] = $scalingGroupId;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight4
     *
     * @return $this
     */
    public function withLoadBalancerWeight4($loadBalancerWeight4)
    {
        $this->data['LoadBalancerWeight4'] = $loadBalancerWeight4;
        $this->options['query']['LoadBalancerWeight.4'] = $loadBalancerWeight4;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight13
     *
     * @return $this
     */
    public function withLoadBalancerWeight13($loadBalancerWeight13)
    {
        $this->data['LoadBalancerWeight13'] = $loadBalancerWeight13;
        $this->options['query']['LoadBalancerWeight.13'] = $loadBalancerWeight13;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight5
     *
     * @return $this
     */
    public function withLoadBalancerWeight5($loadBalancerWeight5)
    {
        $this->data['LoadBalancerWeight5'] = $loadBalancerWeight5;
        $this->options['query']['LoadBalancerWeight.5'] = $loadBalancerWeight5;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight14
     *
     * @return $this
     */
    public function withLoadBalancerWeight14($loadBalancerWeight14)
    {
        $this->data['LoadBalancerWeight14'] = $loadBalancerWeight14;
        $this->options['query']['LoadBalancerWeight.14'] = $loadBalancerWeight14;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight1
     *
     * @return $this
     */
    public function withLoadBalancerWeight1($loadBalancerWeight1)
    {
        $this->data['LoadBalancerWeight1'] = $loadBalancerWeight1;
        $this->options['query']['LoadBalancerWeight.1'] = $loadBalancerWeight1;

        return $this;
    }

    /**
     * @param string $instanceId20
     *
     * @return $this
     */
    public function withInstanceId20($instanceId20)
    {
        $this->data['InstanceId20'] = $instanceId20;
        $this->options['query']['InstanceId.20'] = $instanceId20;

        return $this;
    }

    /**
     * @param string $instanceId1
     *
     * @return $this
     */
    public function withInstanceId1($instanceId1)
    {
        $this->data['InstanceId1'] = $instanceId1;
        $this->options['query']['InstanceId.1'] = $instanceId1;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight20
     *
     * @return $this
     */
    public function withLoadBalancerWeight20($loadBalancerWeight20)
    {
        $this->data['LoadBalancerWeight20'] = $loadBalancerWeight20;
        $this->options['query']['LoadBalancerWeight.20'] = $loadBalancerWeight20;

        return $this;
    }

    /**
     * @param string $instanceId3
     *
     * @return $this
     */
    public function withInstanceId3($instanceId3)
    {
        $this->data['InstanceId3'] = $instanceId3;
        $this->options['query']['InstanceId.3'] = $instanceId3;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount'] = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $instanceId2
     *
     * @return $this
     */
    public function withInstanceId2($instanceId2)
    {
        $this->data['InstanceId2'] = $instanceId2;
        $this->options['query']['InstanceId.2'] = $instanceId2;

        return $this;
    }

    /**
     * @param string $instanceId5
     *
     * @return $this
     */
    public function withInstanceId5($instanceId5)
    {
        $this->data['InstanceId5'] = $instanceId5;
        $this->options['query']['InstanceId.5'] = $instanceId5;

        return $this;
    }

    /**
     * @param string $instanceId4
     *
     * @return $this
     */
    public function withInstanceId4($instanceId4)
    {
        $this->data['InstanceId4'] = $instanceId4;
        $this->options['query']['InstanceId.4'] = $instanceId4;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount'] = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $instanceId7
     *
     * @return $this
     */
    public function withInstanceId7($instanceId7)
    {
        $this->data['InstanceId7'] = $instanceId7;
        $this->options['query']['InstanceId.7'] = $instanceId7;

        return $this;
    }

    /**
     * @param string $instanceId6
     *
     * @return $this
     */
    public function withInstanceId6($instanceId6)
    {
        $this->data['InstanceId6'] = $instanceId6;
        $this->options['query']['InstanceId.6'] = $instanceId6;

        return $this;
    }

    /**
     * @param string $instanceId9
     *
     * @return $this
     */
    public function withInstanceId9($instanceId9)
    {
        $this->data['InstanceId9'] = $instanceId9;
        $this->options['query']['InstanceId.9'] = $instanceId9;

        return $this;
    }

    /**
     * @param string $instanceId8
     *
     * @return $this
     */
    public function withInstanceId8($instanceId8)
    {
        $this->data['InstanceId8'] = $instanceId8;
        $this->options['query']['InstanceId.8'] = $instanceId8;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $instanceId18
     *
     * @return $this
     */
    public function withInstanceId18($instanceId18)
    {
        $this->data['InstanceId18'] = $instanceId18;
        $this->options['query']['InstanceId.18'] = $instanceId18;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight19
     *
     * @return $this
     */
    public function withLoadBalancerWeight19($loadBalancerWeight19)
    {
        $this->data['LoadBalancerWeight19'] = $loadBalancerWeight19;
        $this->options['query']['LoadBalancerWeight.19'] = $loadBalancerWeight19;

        return $this;
    }

    /**
     * @param string $instanceId17
     *
     * @return $this
     */
    public function withInstanceId17($instanceId17)
    {
        $this->data['InstanceId17'] = $instanceId17;
        $this->options['query']['InstanceId.17'] = $instanceId17;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight17
     *
     * @return $this
     */
    public function withLoadBalancerWeight17($loadBalancerWeight17)
    {
        $this->data['LoadBalancerWeight17'] = $loadBalancerWeight17;
        $this->options['query']['LoadBalancerWeight.17'] = $loadBalancerWeight17;

        return $this;
    }

    /**
     * @param string $instanceId19
     *
     * @return $this
     */
    public function withInstanceId19($instanceId19)
    {
        $this->data['InstanceId19'] = $instanceId19;
        $this->options['query']['InstanceId.19'] = $instanceId19;

        return $this;
    }

    /**
     * @param string $loadBalancerWeight18
     *
     * @return $this
     */
    public function withLoadBalancerWeight18($loadBalancerWeight18)
    {
        $this->data['LoadBalancerWeight18'] = $loadBalancerWeight18;
        $this->options['query']['LoadBalancerWeight.18'] = $loadBalancerWeight18;

        return $this;
    }

    /**
     * @param string $instanceId14
     *
     * @return $this
     */
    public function withInstanceId14($instanceId14)
    {
        $this->data['InstanceId14'] = $instanceId14;
        $this->options['query']['InstanceId.14'] = $instanceId14;

        return $this;
    }

    /**
     * @param string $instanceId13
     *
     * @return $this
     */
    public function withInstanceId13($instanceId13)
    {
        $this->data['InstanceId13'] = $instanceId13;
        $this->options['query']['InstanceId.13'] = $instanceId13;

        return $this;
    }

    /**
     * @param string $instanceId16
     *
     * @return $this
     */
    public function withInstanceId16($instanceId16)
    {
        $this->data['InstanceId16'] = $instanceId16;
        $this->options['query']['InstanceId.16'] = $instanceId16;

        return $this;
    }

    /**
     * @param string $instanceId15
     *
     * @return $this
     */
    public function withInstanceId15($instanceId15)
    {
        $this->data['InstanceId15'] = $instanceId15;
        $this->options['query']['InstanceId.15'] = $instanceId15;

        return $this;
    }
}
