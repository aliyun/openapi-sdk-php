<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of RemoveInstances
 *
 * @method string getInstanceId10()
 * @method string getResourceOwnerId()
 * @method string getInstanceId12()
 * @method string getInstanceId11()
 * @method string getScalingGroupId()
 * @method string getInstanceId20()
 * @method string getInstanceId1()
 * @method string getRemovePolicy()
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
 * @method string getInstanceId17()
 * @method string getInstanceId19()
 * @method string getInstanceId14()
 * @method string getInstanceId13()
 * @method string getInstanceId16()
 * @method string getInstanceId15()
 */
class RemoveInstances extends RpcRequest
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
    public $action = 'RemoveInstances';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $removePolicy
     *
     * @return $this
     */
    public function withRemovePolicy($removePolicy)
    {
        $this->data['RemovePolicy'] = $removePolicy;
        $this->options['query']['RemovePolicy'] = $removePolicy;

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
