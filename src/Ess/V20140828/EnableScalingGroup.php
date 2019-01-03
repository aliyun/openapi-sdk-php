<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of EnableScalingGroup
 *
 * @method string getLoadBalancerWeight6()
 * @method string getLoadBalancerWeight11()
 * @method string getLoadBalancerWeight7()
 * @method string getLoadBalancerWeight12()
 * @method string getResourceOwnerId()
 * @method string getLoadBalancerWeight8()
 * @method string getLoadBalancerWeight9()
 * @method string getLoadBalancerWeight10()
 * @method string getLoadBalancerWeight2()
 * @method string getLoadBalancerWeight15()
 * @method string getLoadBalancerWeight3()
 * @method string getLoadBalancerWeight16()
 * @method string getLoadBalancerWeight4()
 * @method string getLoadBalancerWeight13()
 * @method string getLoadBalancerWeight5()
 * @method string getLoadBalancerWeight14()
 * @method string getActiveScalingConfigurationId()
 * @method string getLoadBalancerWeight1()
 * @method string getInstanceId1()
 * @method string getLoadBalancerWeight20()
 * @method string getInstanceId3()
 * @method string getLaunchTemplateId()
 * @method string getInstanceId2()
 * @method string getInstanceId5()
 * @method string getInstanceId4()
 * @method string getInstanceId7()
 * @method string getInstanceId6()
 * @method string getInstanceId9()
 * @method string getInstanceId8()
 * @method string getOwnerId()
 * @method string getLoadBalancerWeight19()
 * @method string getLoadBalancerWeight17()
 * @method string getLoadBalancerWeight18()
 * @method string getInstanceId10()
 * @method string getInstanceId12()
 * @method string getInstanceId11()
 * @method string getScalingGroupId()
 * @method string getInstanceId20()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getLaunchTemplateVersion()
 * @method string getInstanceId18()
 * @method string getInstanceId17()
 * @method string getInstanceId19()
 * @method string getInstanceId14()
 * @method string getInstanceId13()
 * @method string getInstanceId16()
 * @method string getInstanceId15()
 */
class EnableScalingGroup extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ess';

    /**
     * @var string
     */
    public $version = '2014-08-28';

    /**
     * @var string
     */
    public $action = 'EnableScalingGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight6() instead.
     *
     * @param string $loadBalancerWeight6
     *
     * @return $this
     */
    public function setLoadBalancerWeight6($loadBalancerWeight6)
    {
        return $this->withLoadBalancerWeight6($loadBalancerWeight6);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight11() instead.
     *
     * @param string $loadBalancerWeight11
     *
     * @return $this
     */
    public function setLoadBalancerWeight11($loadBalancerWeight11)
    {
        return $this->withLoadBalancerWeight11($loadBalancerWeight11);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight7() instead.
     *
     * @param string $loadBalancerWeight7
     *
     * @return $this
     */
    public function setLoadBalancerWeight7($loadBalancerWeight7)
    {
        return $this->withLoadBalancerWeight7($loadBalancerWeight7);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight12() instead.
     *
     * @param string $loadBalancerWeight12
     *
     * @return $this
     */
    public function setLoadBalancerWeight12($loadBalancerWeight12)
    {
        return $this->withLoadBalancerWeight12($loadBalancerWeight12);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerId() instead.
     *
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function setResourceOwnerId($resourceOwnerId)
    {
        return $this->withResourceOwnerId($resourceOwnerId);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight8() instead.
     *
     * @param string $loadBalancerWeight8
     *
     * @return $this
     */
    public function setLoadBalancerWeight8($loadBalancerWeight8)
    {
        return $this->withLoadBalancerWeight8($loadBalancerWeight8);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight9() instead.
     *
     * @param string $loadBalancerWeight9
     *
     * @return $this
     */
    public function setLoadBalancerWeight9($loadBalancerWeight9)
    {
        return $this->withLoadBalancerWeight9($loadBalancerWeight9);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight10() instead.
     *
     * @param string $loadBalancerWeight10
     *
     * @return $this
     */
    public function setLoadBalancerWeight10($loadBalancerWeight10)
    {
        return $this->withLoadBalancerWeight10($loadBalancerWeight10);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight2() instead.
     *
     * @param string $loadBalancerWeight2
     *
     * @return $this
     */
    public function setLoadBalancerWeight2($loadBalancerWeight2)
    {
        return $this->withLoadBalancerWeight2($loadBalancerWeight2);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight15() instead.
     *
     * @param string $loadBalancerWeight15
     *
     * @return $this
     */
    public function setLoadBalancerWeight15($loadBalancerWeight15)
    {
        return $this->withLoadBalancerWeight15($loadBalancerWeight15);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight3() instead.
     *
     * @param string $loadBalancerWeight3
     *
     * @return $this
     */
    public function setLoadBalancerWeight3($loadBalancerWeight3)
    {
        return $this->withLoadBalancerWeight3($loadBalancerWeight3);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight16() instead.
     *
     * @param string $loadBalancerWeight16
     *
     * @return $this
     */
    public function setLoadBalancerWeight16($loadBalancerWeight16)
    {
        return $this->withLoadBalancerWeight16($loadBalancerWeight16);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight4() instead.
     *
     * @param string $loadBalancerWeight4
     *
     * @return $this
     */
    public function setLoadBalancerWeight4($loadBalancerWeight4)
    {
        return $this->withLoadBalancerWeight4($loadBalancerWeight4);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight13() instead.
     *
     * @param string $loadBalancerWeight13
     *
     * @return $this
     */
    public function setLoadBalancerWeight13($loadBalancerWeight13)
    {
        return $this->withLoadBalancerWeight13($loadBalancerWeight13);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight5() instead.
     *
     * @param string $loadBalancerWeight5
     *
     * @return $this
     */
    public function setLoadBalancerWeight5($loadBalancerWeight5)
    {
        return $this->withLoadBalancerWeight5($loadBalancerWeight5);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight14() instead.
     *
     * @param string $loadBalancerWeight14
     *
     * @return $this
     */
    public function setLoadBalancerWeight14($loadBalancerWeight14)
    {
        return $this->withLoadBalancerWeight14($loadBalancerWeight14);
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
     * @deprecated deprecated since version 2.0, Use withActiveScalingConfigurationId() instead.
     *
     * @param string $activeScalingConfigurationId
     *
     * @return $this
     */
    public function setActiveScalingConfigurationId($activeScalingConfigurationId)
    {
        return $this->withActiveScalingConfigurationId($activeScalingConfigurationId);
    }

    /**
     * @param string $activeScalingConfigurationId
     *
     * @return $this
     */
    public function withActiveScalingConfigurationId($activeScalingConfigurationId)
    {
        $this->data['ActiveScalingConfigurationId'] = $activeScalingConfigurationId;
        $this->options['query']['ActiveScalingConfigurationId'] = $activeScalingConfigurationId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight1() instead.
     *
     * @param string $loadBalancerWeight1
     *
     * @return $this
     */
    public function setLoadBalancerWeight1($loadBalancerWeight1)
    {
        return $this->withLoadBalancerWeight1($loadBalancerWeight1);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId1() instead.
     *
     * @param string $instanceId1
     *
     * @return $this
     */
    public function setInstanceId1($instanceId1)
    {
        return $this->withInstanceId1($instanceId1);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight20() instead.
     *
     * @param string $loadBalancerWeight20
     *
     * @return $this
     */
    public function setLoadBalancerWeight20($loadBalancerWeight20)
    {
        return $this->withLoadBalancerWeight20($loadBalancerWeight20);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId3() instead.
     *
     * @param string $instanceId3
     *
     * @return $this
     */
    public function setInstanceId3($instanceId3)
    {
        return $this->withInstanceId3($instanceId3);
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
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateId() instead.
     *
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function setLaunchTemplateId($launchTemplateId)
    {
        return $this->withLaunchTemplateId($launchTemplateId);
    }

    /**
     * @param string $launchTemplateId
     *
     * @return $this
     */
    public function withLaunchTemplateId($launchTemplateId)
    {
        $this->data['LaunchTemplateId'] = $launchTemplateId;
        $this->options['query']['LaunchTemplateId'] = $launchTemplateId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId2() instead.
     *
     * @param string $instanceId2
     *
     * @return $this
     */
    public function setInstanceId2($instanceId2)
    {
        return $this->withInstanceId2($instanceId2);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId5() instead.
     *
     * @param string $instanceId5
     *
     * @return $this
     */
    public function setInstanceId5($instanceId5)
    {
        return $this->withInstanceId5($instanceId5);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId4() instead.
     *
     * @param string $instanceId4
     *
     * @return $this
     */
    public function setInstanceId4($instanceId4)
    {
        return $this->withInstanceId4($instanceId4);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId7() instead.
     *
     * @param string $instanceId7
     *
     * @return $this
     */
    public function setInstanceId7($instanceId7)
    {
        return $this->withInstanceId7($instanceId7);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId6() instead.
     *
     * @param string $instanceId6
     *
     * @return $this
     */
    public function setInstanceId6($instanceId6)
    {
        return $this->withInstanceId6($instanceId6);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId9() instead.
     *
     * @param string $instanceId9
     *
     * @return $this
     */
    public function setInstanceId9($instanceId9)
    {
        return $this->withInstanceId9($instanceId9);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId8() instead.
     *
     * @param string $instanceId8
     *
     * @return $this
     */
    public function setInstanceId8($instanceId8)
    {
        return $this->withInstanceId8($instanceId8);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight19() instead.
     *
     * @param string $loadBalancerWeight19
     *
     * @return $this
     */
    public function setLoadBalancerWeight19($loadBalancerWeight19)
    {
        return $this->withLoadBalancerWeight19($loadBalancerWeight19);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight17() instead.
     *
     * @param string $loadBalancerWeight17
     *
     * @return $this
     */
    public function setLoadBalancerWeight17($loadBalancerWeight17)
    {
        return $this->withLoadBalancerWeight17($loadBalancerWeight17);
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
     * @deprecated deprecated since version 2.0, Use withLoadBalancerWeight18() instead.
     *
     * @param string $loadBalancerWeight18
     *
     * @return $this
     */
    public function setLoadBalancerWeight18($loadBalancerWeight18)
    {
        return $this->withLoadBalancerWeight18($loadBalancerWeight18);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId10() instead.
     *
     * @param string $instanceId10
     *
     * @return $this
     */
    public function setInstanceId10($instanceId10)
    {
        return $this->withInstanceId10($instanceId10);
    }

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
     * @deprecated deprecated since version 2.0, Use withInstanceId12() instead.
     *
     * @param string $instanceId12
     *
     * @return $this
     */
    public function setInstanceId12($instanceId12)
    {
        return $this->withInstanceId12($instanceId12);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId11() instead.
     *
     * @param string $instanceId11
     *
     * @return $this
     */
    public function setInstanceId11($instanceId11)
    {
        return $this->withInstanceId11($instanceId11);
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
     * @deprecated deprecated since version 2.0, Use withScalingGroupId() instead.
     *
     * @param string $scalingGroupId
     *
     * @return $this
     */
    public function setScalingGroupId($scalingGroupId)
    {
        return $this->withScalingGroupId($scalingGroupId);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId20() instead.
     *
     * @param string $instanceId20
     *
     * @return $this
     */
    public function setInstanceId20($instanceId20)
    {
        return $this->withInstanceId20($instanceId20);
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
     * @deprecated deprecated since version 2.0, Use withResourceOwnerAccount() instead.
     *
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function setResourceOwnerAccount($resourceOwnerAccount)
    {
        return $this->withResourceOwnerAccount($resourceOwnerAccount);
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
     * @deprecated deprecated since version 2.0, Use withOwnerAccount() instead.
     *
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function setOwnerAccount($ownerAccount)
    {
        return $this->withOwnerAccount($ownerAccount);
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
     * @deprecated deprecated since version 2.0, Use withLaunchTemplateVersion() instead.
     *
     * @param string $launchTemplateVersion
     *
     * @return $this
     */
    public function setLaunchTemplateVersion($launchTemplateVersion)
    {
        return $this->withLaunchTemplateVersion($launchTemplateVersion);
    }

    /**
     * @param string $launchTemplateVersion
     *
     * @return $this
     */
    public function withLaunchTemplateVersion($launchTemplateVersion)
    {
        $this->data['LaunchTemplateVersion'] = $launchTemplateVersion;
        $this->options['query']['LaunchTemplateVersion'] = $launchTemplateVersion;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId18() instead.
     *
     * @param string $instanceId18
     *
     * @return $this
     */
    public function setInstanceId18($instanceId18)
    {
        return $this->withInstanceId18($instanceId18);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId17() instead.
     *
     * @param string $instanceId17
     *
     * @return $this
     */
    public function setInstanceId17($instanceId17)
    {
        return $this->withInstanceId17($instanceId17);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId19() instead.
     *
     * @param string $instanceId19
     *
     * @return $this
     */
    public function setInstanceId19($instanceId19)
    {
        return $this->withInstanceId19($instanceId19);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId14() instead.
     *
     * @param string $instanceId14
     *
     * @return $this
     */
    public function setInstanceId14($instanceId14)
    {
        return $this->withInstanceId14($instanceId14);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId13() instead.
     *
     * @param string $instanceId13
     *
     * @return $this
     */
    public function setInstanceId13($instanceId13)
    {
        return $this->withInstanceId13($instanceId13);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId16() instead.
     *
     * @param string $instanceId16
     *
     * @return $this
     */
    public function setInstanceId16($instanceId16)
    {
        return $this->withInstanceId16($instanceId16);
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
     * @deprecated deprecated since version 2.0, Use withInstanceId15() instead.
     *
     * @param string $instanceId15
     *
     * @return $this
     */
    public function setInstanceId15($instanceId15)
    {
        return $this->withInstanceId15($instanceId15);
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
