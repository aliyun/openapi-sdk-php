<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeScalingConfigurations
 *
 * @method string getScalingConfigurationId6()
 * @method string getScalingConfigurationId7()
 * @method string getResourceOwnerId()
 * @method string getScalingConfigurationId4()
 * @method string getScalingConfigurationId5()
 * @method string getScalingGroupId()
 * @method string getScalingConfigurationId8()
 * @method string getScalingConfigurationId9()
 * @method string getScalingConfigurationId10()
 * @method string getPageNumber()
 * @method string getScalingConfigurationName2()
 * @method string getScalingConfigurationName3()
 * @method string getScalingConfigurationName1()
 * @method string getPageSize()
 * @method string getScalingConfigurationId2()
 * @method string getScalingConfigurationId3()
 * @method string getScalingConfigurationId1()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getScalingConfigurationName6()
 * @method string getScalingConfigurationName7()
 * @method string getScalingConfigurationName4()
 * @method string getScalingConfigurationName5()
 * @method string getOwnerId()
 * @method string getScalingConfigurationName8()
 * @method string getScalingConfigurationName9()
 * @method string getScalingConfigurationName10()
 */
class DescribeScalingConfigurations extends RpcRequest
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
    public $action = 'DescribeScalingConfigurations';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId6() instead.
     *
     * @param string $scalingConfigurationId6
     *
     * @return $this
     */
    public function setScalingConfigurationId6($scalingConfigurationId6)
    {
        return $this->withScalingConfigurationId6($scalingConfigurationId6);
    }

    /**
     * @param string $scalingConfigurationId6
     *
     * @return $this
     */
    public function withScalingConfigurationId6($scalingConfigurationId6)
    {
        $this->data['ScalingConfigurationId6'] = $scalingConfigurationId6;
        $this->options['query']['ScalingConfigurationId.6'] = $scalingConfigurationId6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId7() instead.
     *
     * @param string $scalingConfigurationId7
     *
     * @return $this
     */
    public function setScalingConfigurationId7($scalingConfigurationId7)
    {
        return $this->withScalingConfigurationId7($scalingConfigurationId7);
    }

    /**
     * @param string $scalingConfigurationId7
     *
     * @return $this
     */
    public function withScalingConfigurationId7($scalingConfigurationId7)
    {
        $this->data['ScalingConfigurationId7'] = $scalingConfigurationId7;
        $this->options['query']['ScalingConfigurationId.7'] = $scalingConfigurationId7;

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
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId4() instead.
     *
     * @param string $scalingConfigurationId4
     *
     * @return $this
     */
    public function setScalingConfigurationId4($scalingConfigurationId4)
    {
        return $this->withScalingConfigurationId4($scalingConfigurationId4);
    }

    /**
     * @param string $scalingConfigurationId4
     *
     * @return $this
     */
    public function withScalingConfigurationId4($scalingConfigurationId4)
    {
        $this->data['ScalingConfigurationId4'] = $scalingConfigurationId4;
        $this->options['query']['ScalingConfigurationId.4'] = $scalingConfigurationId4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId5() instead.
     *
     * @param string $scalingConfigurationId5
     *
     * @return $this
     */
    public function setScalingConfigurationId5($scalingConfigurationId5)
    {
        return $this->withScalingConfigurationId5($scalingConfigurationId5);
    }

    /**
     * @param string $scalingConfigurationId5
     *
     * @return $this
     */
    public function withScalingConfigurationId5($scalingConfigurationId5)
    {
        $this->data['ScalingConfigurationId5'] = $scalingConfigurationId5;
        $this->options['query']['ScalingConfigurationId.5'] = $scalingConfigurationId5;

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
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId8() instead.
     *
     * @param string $scalingConfigurationId8
     *
     * @return $this
     */
    public function setScalingConfigurationId8($scalingConfigurationId8)
    {
        return $this->withScalingConfigurationId8($scalingConfigurationId8);
    }

    /**
     * @param string $scalingConfigurationId8
     *
     * @return $this
     */
    public function withScalingConfigurationId8($scalingConfigurationId8)
    {
        $this->data['ScalingConfigurationId8'] = $scalingConfigurationId8;
        $this->options['query']['ScalingConfigurationId.8'] = $scalingConfigurationId8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId9() instead.
     *
     * @param string $scalingConfigurationId9
     *
     * @return $this
     */
    public function setScalingConfigurationId9($scalingConfigurationId9)
    {
        return $this->withScalingConfigurationId9($scalingConfigurationId9);
    }

    /**
     * @param string $scalingConfigurationId9
     *
     * @return $this
     */
    public function withScalingConfigurationId9($scalingConfigurationId9)
    {
        $this->data['ScalingConfigurationId9'] = $scalingConfigurationId9;
        $this->options['query']['ScalingConfigurationId.9'] = $scalingConfigurationId9;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId10() instead.
     *
     * @param string $scalingConfigurationId10
     *
     * @return $this
     */
    public function setScalingConfigurationId10($scalingConfigurationId10)
    {
        return $this->withScalingConfigurationId10($scalingConfigurationId10);
    }

    /**
     * @param string $scalingConfigurationId10
     *
     * @return $this
     */
    public function withScalingConfigurationId10($scalingConfigurationId10)
    {
        $this->data['ScalingConfigurationId10'] = $scalingConfigurationId10;
        $this->options['query']['ScalingConfigurationId.10'] = $scalingConfigurationId10;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageNumber() instead.
     *
     * @param string $pageNumber
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        return $this->withPageNumber($pageNumber);
    }

    /**
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName2() instead.
     *
     * @param string $scalingConfigurationName2
     *
     * @return $this
     */
    public function setScalingConfigurationName2($scalingConfigurationName2)
    {
        return $this->withScalingConfigurationName2($scalingConfigurationName2);
    }

    /**
     * @param string $scalingConfigurationName2
     *
     * @return $this
     */
    public function withScalingConfigurationName2($scalingConfigurationName2)
    {
        $this->data['ScalingConfigurationName2'] = $scalingConfigurationName2;
        $this->options['query']['ScalingConfigurationName.2'] = $scalingConfigurationName2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName3() instead.
     *
     * @param string $scalingConfigurationName3
     *
     * @return $this
     */
    public function setScalingConfigurationName3($scalingConfigurationName3)
    {
        return $this->withScalingConfigurationName3($scalingConfigurationName3);
    }

    /**
     * @param string $scalingConfigurationName3
     *
     * @return $this
     */
    public function withScalingConfigurationName3($scalingConfigurationName3)
    {
        $this->data['ScalingConfigurationName3'] = $scalingConfigurationName3;
        $this->options['query']['ScalingConfigurationName.3'] = $scalingConfigurationName3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName1() instead.
     *
     * @param string $scalingConfigurationName1
     *
     * @return $this
     */
    public function setScalingConfigurationName1($scalingConfigurationName1)
    {
        return $this->withScalingConfigurationName1($scalingConfigurationName1);
    }

    /**
     * @param string $scalingConfigurationName1
     *
     * @return $this
     */
    public function withScalingConfigurationName1($scalingConfigurationName1)
    {
        $this->data['ScalingConfigurationName1'] = $scalingConfigurationName1;
        $this->options['query']['ScalingConfigurationName.1'] = $scalingConfigurationName1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId2() instead.
     *
     * @param string $scalingConfigurationId2
     *
     * @return $this
     */
    public function setScalingConfigurationId2($scalingConfigurationId2)
    {
        return $this->withScalingConfigurationId2($scalingConfigurationId2);
    }

    /**
     * @param string $scalingConfigurationId2
     *
     * @return $this
     */
    public function withScalingConfigurationId2($scalingConfigurationId2)
    {
        $this->data['ScalingConfigurationId2'] = $scalingConfigurationId2;
        $this->options['query']['ScalingConfigurationId.2'] = $scalingConfigurationId2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId3() instead.
     *
     * @param string $scalingConfigurationId3
     *
     * @return $this
     */
    public function setScalingConfigurationId3($scalingConfigurationId3)
    {
        return $this->withScalingConfigurationId3($scalingConfigurationId3);
    }

    /**
     * @param string $scalingConfigurationId3
     *
     * @return $this
     */
    public function withScalingConfigurationId3($scalingConfigurationId3)
    {
        $this->data['ScalingConfigurationId3'] = $scalingConfigurationId3;
        $this->options['query']['ScalingConfigurationId.3'] = $scalingConfigurationId3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationId1() instead.
     *
     * @param string $scalingConfigurationId1
     *
     * @return $this
     */
    public function setScalingConfigurationId1($scalingConfigurationId1)
    {
        return $this->withScalingConfigurationId1($scalingConfigurationId1);
    }

    /**
     * @param string $scalingConfigurationId1
     *
     * @return $this
     */
    public function withScalingConfigurationId1($scalingConfigurationId1)
    {
        $this->data['ScalingConfigurationId1'] = $scalingConfigurationId1;
        $this->options['query']['ScalingConfigurationId.1'] = $scalingConfigurationId1;

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
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName6() instead.
     *
     * @param string $scalingConfigurationName6
     *
     * @return $this
     */
    public function setScalingConfigurationName6($scalingConfigurationName6)
    {
        return $this->withScalingConfigurationName6($scalingConfigurationName6);
    }

    /**
     * @param string $scalingConfigurationName6
     *
     * @return $this
     */
    public function withScalingConfigurationName6($scalingConfigurationName6)
    {
        $this->data['ScalingConfigurationName6'] = $scalingConfigurationName6;
        $this->options['query']['ScalingConfigurationName.6'] = $scalingConfigurationName6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName7() instead.
     *
     * @param string $scalingConfigurationName7
     *
     * @return $this
     */
    public function setScalingConfigurationName7($scalingConfigurationName7)
    {
        return $this->withScalingConfigurationName7($scalingConfigurationName7);
    }

    /**
     * @param string $scalingConfigurationName7
     *
     * @return $this
     */
    public function withScalingConfigurationName7($scalingConfigurationName7)
    {
        $this->data['ScalingConfigurationName7'] = $scalingConfigurationName7;
        $this->options['query']['ScalingConfigurationName.7'] = $scalingConfigurationName7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName4() instead.
     *
     * @param string $scalingConfigurationName4
     *
     * @return $this
     */
    public function setScalingConfigurationName4($scalingConfigurationName4)
    {
        return $this->withScalingConfigurationName4($scalingConfigurationName4);
    }

    /**
     * @param string $scalingConfigurationName4
     *
     * @return $this
     */
    public function withScalingConfigurationName4($scalingConfigurationName4)
    {
        $this->data['ScalingConfigurationName4'] = $scalingConfigurationName4;
        $this->options['query']['ScalingConfigurationName.4'] = $scalingConfigurationName4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName5() instead.
     *
     * @param string $scalingConfigurationName5
     *
     * @return $this
     */
    public function setScalingConfigurationName5($scalingConfigurationName5)
    {
        return $this->withScalingConfigurationName5($scalingConfigurationName5);
    }

    /**
     * @param string $scalingConfigurationName5
     *
     * @return $this
     */
    public function withScalingConfigurationName5($scalingConfigurationName5)
    {
        $this->data['ScalingConfigurationName5'] = $scalingConfigurationName5;
        $this->options['query']['ScalingConfigurationName.5'] = $scalingConfigurationName5;

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
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName8() instead.
     *
     * @param string $scalingConfigurationName8
     *
     * @return $this
     */
    public function setScalingConfigurationName8($scalingConfigurationName8)
    {
        return $this->withScalingConfigurationName8($scalingConfigurationName8);
    }

    /**
     * @param string $scalingConfigurationName8
     *
     * @return $this
     */
    public function withScalingConfigurationName8($scalingConfigurationName8)
    {
        $this->data['ScalingConfigurationName8'] = $scalingConfigurationName8;
        $this->options['query']['ScalingConfigurationName.8'] = $scalingConfigurationName8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName9() instead.
     *
     * @param string $scalingConfigurationName9
     *
     * @return $this
     */
    public function setScalingConfigurationName9($scalingConfigurationName9)
    {
        return $this->withScalingConfigurationName9($scalingConfigurationName9);
    }

    /**
     * @param string $scalingConfigurationName9
     *
     * @return $this
     */
    public function withScalingConfigurationName9($scalingConfigurationName9)
    {
        $this->data['ScalingConfigurationName9'] = $scalingConfigurationName9;
        $this->options['query']['ScalingConfigurationName.9'] = $scalingConfigurationName9;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingConfigurationName10() instead.
     *
     * @param string $scalingConfigurationName10
     *
     * @return $this
     */
    public function setScalingConfigurationName10($scalingConfigurationName10)
    {
        return $this->withScalingConfigurationName10($scalingConfigurationName10);
    }

    /**
     * @param string $scalingConfigurationName10
     *
     * @return $this
     */
    public function withScalingConfigurationName10($scalingConfigurationName10)
    {
        $this->data['ScalingConfigurationName10'] = $scalingConfigurationName10;
        $this->options['query']['ScalingConfigurationName.10'] = $scalingConfigurationName10;

        return $this;
    }
}
