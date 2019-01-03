<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeScalingRules
 *
 * @method string getScalingRuleName1()
 * @method string getResourceOwnerId()
 * @method string getScalingRuleName2()
 * @method string getScalingRuleName3()
 * @method string getScalingRuleName4()
 * @method string getScalingRuleName5()
 * @method string getScalingGroupId()
 * @method string getScalingRuleName6()
 * @method string getScalingRuleName7()
 * @method string getScalingRuleName8()
 * @method string getScalingRuleAri9()
 * @method string getScalingRuleName9()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getScalingRuleType()
 * @method string getScalingRuleId10()
 * @method string getResourceOwnerAccount()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getScalingRuleAri1()
 * @method string getScalingRuleAri2()
 * @method string getScalingRuleName10()
 * @method string getScalingRuleAri3()
 * @method string getScalingRuleAri4()
 * @method string getScalingRuleId8()
 * @method string getScalingRuleAri5()
 * @method string getScalingRuleId9()
 * @method string getScalingRuleAri6()
 * @method string getScalingRuleAri7()
 * @method string getScalingRuleAri10()
 * @method string getScalingRuleAri8()
 * @method string getScalingRuleId4()
 * @method string getScalingRuleId5()
 * @method string getScalingRuleId6()
 * @method string getScalingRuleId7()
 * @method string getScalingRuleId1()
 * @method string getScalingRuleId2()
 * @method string getScalingRuleId3()
 */
class DescribeScalingRules extends RpcRequest
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
    public $action = 'DescribeScalingRules';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName1() instead.
     *
     * @param string $scalingRuleName1
     *
     * @return $this
     */
    public function setScalingRuleName1($scalingRuleName1)
    {
        return $this->withScalingRuleName1($scalingRuleName1);
    }

    /**
     * @param string $scalingRuleName1
     *
     * @return $this
     */
    public function withScalingRuleName1($scalingRuleName1)
    {
        $this->data['ScalingRuleName1'] = $scalingRuleName1;
        $this->options['query']['ScalingRuleName.1'] = $scalingRuleName1;

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
     * @deprecated deprecated since version 2.0, Use withScalingRuleName2() instead.
     *
     * @param string $scalingRuleName2
     *
     * @return $this
     */
    public function setScalingRuleName2($scalingRuleName2)
    {
        return $this->withScalingRuleName2($scalingRuleName2);
    }

    /**
     * @param string $scalingRuleName2
     *
     * @return $this
     */
    public function withScalingRuleName2($scalingRuleName2)
    {
        $this->data['ScalingRuleName2'] = $scalingRuleName2;
        $this->options['query']['ScalingRuleName.2'] = $scalingRuleName2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName3() instead.
     *
     * @param string $scalingRuleName3
     *
     * @return $this
     */
    public function setScalingRuleName3($scalingRuleName3)
    {
        return $this->withScalingRuleName3($scalingRuleName3);
    }

    /**
     * @param string $scalingRuleName3
     *
     * @return $this
     */
    public function withScalingRuleName3($scalingRuleName3)
    {
        $this->data['ScalingRuleName3'] = $scalingRuleName3;
        $this->options['query']['ScalingRuleName.3'] = $scalingRuleName3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName4() instead.
     *
     * @param string $scalingRuleName4
     *
     * @return $this
     */
    public function setScalingRuleName4($scalingRuleName4)
    {
        return $this->withScalingRuleName4($scalingRuleName4);
    }

    /**
     * @param string $scalingRuleName4
     *
     * @return $this
     */
    public function withScalingRuleName4($scalingRuleName4)
    {
        $this->data['ScalingRuleName4'] = $scalingRuleName4;
        $this->options['query']['ScalingRuleName.4'] = $scalingRuleName4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName5() instead.
     *
     * @param string $scalingRuleName5
     *
     * @return $this
     */
    public function setScalingRuleName5($scalingRuleName5)
    {
        return $this->withScalingRuleName5($scalingRuleName5);
    }

    /**
     * @param string $scalingRuleName5
     *
     * @return $this
     */
    public function withScalingRuleName5($scalingRuleName5)
    {
        $this->data['ScalingRuleName5'] = $scalingRuleName5;
        $this->options['query']['ScalingRuleName.5'] = $scalingRuleName5;

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
     * @deprecated deprecated since version 2.0, Use withScalingRuleName6() instead.
     *
     * @param string $scalingRuleName6
     *
     * @return $this
     */
    public function setScalingRuleName6($scalingRuleName6)
    {
        return $this->withScalingRuleName6($scalingRuleName6);
    }

    /**
     * @param string $scalingRuleName6
     *
     * @return $this
     */
    public function withScalingRuleName6($scalingRuleName6)
    {
        $this->data['ScalingRuleName6'] = $scalingRuleName6;
        $this->options['query']['ScalingRuleName.6'] = $scalingRuleName6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName7() instead.
     *
     * @param string $scalingRuleName7
     *
     * @return $this
     */
    public function setScalingRuleName7($scalingRuleName7)
    {
        return $this->withScalingRuleName7($scalingRuleName7);
    }

    /**
     * @param string $scalingRuleName7
     *
     * @return $this
     */
    public function withScalingRuleName7($scalingRuleName7)
    {
        $this->data['ScalingRuleName7'] = $scalingRuleName7;
        $this->options['query']['ScalingRuleName.7'] = $scalingRuleName7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName8() instead.
     *
     * @param string $scalingRuleName8
     *
     * @return $this
     */
    public function setScalingRuleName8($scalingRuleName8)
    {
        return $this->withScalingRuleName8($scalingRuleName8);
    }

    /**
     * @param string $scalingRuleName8
     *
     * @return $this
     */
    public function withScalingRuleName8($scalingRuleName8)
    {
        $this->data['ScalingRuleName8'] = $scalingRuleName8;
        $this->options['query']['ScalingRuleName.8'] = $scalingRuleName8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri9() instead.
     *
     * @param string $scalingRuleAri9
     *
     * @return $this
     */
    public function setScalingRuleAri9($scalingRuleAri9)
    {
        return $this->withScalingRuleAri9($scalingRuleAri9);
    }

    /**
     * @param string $scalingRuleAri9
     *
     * @return $this
     */
    public function withScalingRuleAri9($scalingRuleAri9)
    {
        $this->data['ScalingRuleAri9'] = $scalingRuleAri9;
        $this->options['query']['ScalingRuleAri.9'] = $scalingRuleAri9;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName9() instead.
     *
     * @param string $scalingRuleName9
     *
     * @return $this
     */
    public function setScalingRuleName9($scalingRuleName9)
    {
        return $this->withScalingRuleName9($scalingRuleName9);
    }

    /**
     * @param string $scalingRuleName9
     *
     * @return $this
     */
    public function withScalingRuleName9($scalingRuleName9)
    {
        $this->data['ScalingRuleName9'] = $scalingRuleName9;
        $this->options['query']['ScalingRuleName.9'] = $scalingRuleName9;

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
     * @deprecated deprecated since version 2.0, Use withScalingRuleType() instead.
     *
     * @param string $scalingRuleType
     *
     * @return $this
     */
    public function setScalingRuleType($scalingRuleType)
    {
        return $this->withScalingRuleType($scalingRuleType);
    }

    /**
     * @param string $scalingRuleType
     *
     * @return $this
     */
    public function withScalingRuleType($scalingRuleType)
    {
        $this->data['ScalingRuleType'] = $scalingRuleType;
        $this->options['query']['ScalingRuleType'] = $scalingRuleType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId10() instead.
     *
     * @param string $scalingRuleId10
     *
     * @return $this
     */
    public function setScalingRuleId10($scalingRuleId10)
    {
        return $this->withScalingRuleId10($scalingRuleId10);
    }

    /**
     * @param string $scalingRuleId10
     *
     * @return $this
     */
    public function withScalingRuleId10($scalingRuleId10)
    {
        $this->data['ScalingRuleId10'] = $scalingRuleId10;
        $this->options['query']['ScalingRuleId.10'] = $scalingRuleId10;

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
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri1() instead.
     *
     * @param string $scalingRuleAri1
     *
     * @return $this
     */
    public function setScalingRuleAri1($scalingRuleAri1)
    {
        return $this->withScalingRuleAri1($scalingRuleAri1);
    }

    /**
     * @param string $scalingRuleAri1
     *
     * @return $this
     */
    public function withScalingRuleAri1($scalingRuleAri1)
    {
        $this->data['ScalingRuleAri1'] = $scalingRuleAri1;
        $this->options['query']['ScalingRuleAri.1'] = $scalingRuleAri1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri2() instead.
     *
     * @param string $scalingRuleAri2
     *
     * @return $this
     */
    public function setScalingRuleAri2($scalingRuleAri2)
    {
        return $this->withScalingRuleAri2($scalingRuleAri2);
    }

    /**
     * @param string $scalingRuleAri2
     *
     * @return $this
     */
    public function withScalingRuleAri2($scalingRuleAri2)
    {
        $this->data['ScalingRuleAri2'] = $scalingRuleAri2;
        $this->options['query']['ScalingRuleAri.2'] = $scalingRuleAri2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleName10() instead.
     *
     * @param string $scalingRuleName10
     *
     * @return $this
     */
    public function setScalingRuleName10($scalingRuleName10)
    {
        return $this->withScalingRuleName10($scalingRuleName10);
    }

    /**
     * @param string $scalingRuleName10
     *
     * @return $this
     */
    public function withScalingRuleName10($scalingRuleName10)
    {
        $this->data['ScalingRuleName10'] = $scalingRuleName10;
        $this->options['query']['ScalingRuleName.10'] = $scalingRuleName10;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri3() instead.
     *
     * @param string $scalingRuleAri3
     *
     * @return $this
     */
    public function setScalingRuleAri3($scalingRuleAri3)
    {
        return $this->withScalingRuleAri3($scalingRuleAri3);
    }

    /**
     * @param string $scalingRuleAri3
     *
     * @return $this
     */
    public function withScalingRuleAri3($scalingRuleAri3)
    {
        $this->data['ScalingRuleAri3'] = $scalingRuleAri3;
        $this->options['query']['ScalingRuleAri.3'] = $scalingRuleAri3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri4() instead.
     *
     * @param string $scalingRuleAri4
     *
     * @return $this
     */
    public function setScalingRuleAri4($scalingRuleAri4)
    {
        return $this->withScalingRuleAri4($scalingRuleAri4);
    }

    /**
     * @param string $scalingRuleAri4
     *
     * @return $this
     */
    public function withScalingRuleAri4($scalingRuleAri4)
    {
        $this->data['ScalingRuleAri4'] = $scalingRuleAri4;
        $this->options['query']['ScalingRuleAri.4'] = $scalingRuleAri4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId8() instead.
     *
     * @param string $scalingRuleId8
     *
     * @return $this
     */
    public function setScalingRuleId8($scalingRuleId8)
    {
        return $this->withScalingRuleId8($scalingRuleId8);
    }

    /**
     * @param string $scalingRuleId8
     *
     * @return $this
     */
    public function withScalingRuleId8($scalingRuleId8)
    {
        $this->data['ScalingRuleId8'] = $scalingRuleId8;
        $this->options['query']['ScalingRuleId.8'] = $scalingRuleId8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri5() instead.
     *
     * @param string $scalingRuleAri5
     *
     * @return $this
     */
    public function setScalingRuleAri5($scalingRuleAri5)
    {
        return $this->withScalingRuleAri5($scalingRuleAri5);
    }

    /**
     * @param string $scalingRuleAri5
     *
     * @return $this
     */
    public function withScalingRuleAri5($scalingRuleAri5)
    {
        $this->data['ScalingRuleAri5'] = $scalingRuleAri5;
        $this->options['query']['ScalingRuleAri.5'] = $scalingRuleAri5;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId9() instead.
     *
     * @param string $scalingRuleId9
     *
     * @return $this
     */
    public function setScalingRuleId9($scalingRuleId9)
    {
        return $this->withScalingRuleId9($scalingRuleId9);
    }

    /**
     * @param string $scalingRuleId9
     *
     * @return $this
     */
    public function withScalingRuleId9($scalingRuleId9)
    {
        $this->data['ScalingRuleId9'] = $scalingRuleId9;
        $this->options['query']['ScalingRuleId.9'] = $scalingRuleId9;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri6() instead.
     *
     * @param string $scalingRuleAri6
     *
     * @return $this
     */
    public function setScalingRuleAri6($scalingRuleAri6)
    {
        return $this->withScalingRuleAri6($scalingRuleAri6);
    }

    /**
     * @param string $scalingRuleAri6
     *
     * @return $this
     */
    public function withScalingRuleAri6($scalingRuleAri6)
    {
        $this->data['ScalingRuleAri6'] = $scalingRuleAri6;
        $this->options['query']['ScalingRuleAri.6'] = $scalingRuleAri6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri7() instead.
     *
     * @param string $scalingRuleAri7
     *
     * @return $this
     */
    public function setScalingRuleAri7($scalingRuleAri7)
    {
        return $this->withScalingRuleAri7($scalingRuleAri7);
    }

    /**
     * @param string $scalingRuleAri7
     *
     * @return $this
     */
    public function withScalingRuleAri7($scalingRuleAri7)
    {
        $this->data['ScalingRuleAri7'] = $scalingRuleAri7;
        $this->options['query']['ScalingRuleAri.7'] = $scalingRuleAri7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri10() instead.
     *
     * @param string $scalingRuleAri10
     *
     * @return $this
     */
    public function setScalingRuleAri10($scalingRuleAri10)
    {
        return $this->withScalingRuleAri10($scalingRuleAri10);
    }

    /**
     * @param string $scalingRuleAri10
     *
     * @return $this
     */
    public function withScalingRuleAri10($scalingRuleAri10)
    {
        $this->data['ScalingRuleAri10'] = $scalingRuleAri10;
        $this->options['query']['ScalingRuleAri.10'] = $scalingRuleAri10;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleAri8() instead.
     *
     * @param string $scalingRuleAri8
     *
     * @return $this
     */
    public function setScalingRuleAri8($scalingRuleAri8)
    {
        return $this->withScalingRuleAri8($scalingRuleAri8);
    }

    /**
     * @param string $scalingRuleAri8
     *
     * @return $this
     */
    public function withScalingRuleAri8($scalingRuleAri8)
    {
        $this->data['ScalingRuleAri8'] = $scalingRuleAri8;
        $this->options['query']['ScalingRuleAri.8'] = $scalingRuleAri8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId4() instead.
     *
     * @param string $scalingRuleId4
     *
     * @return $this
     */
    public function setScalingRuleId4($scalingRuleId4)
    {
        return $this->withScalingRuleId4($scalingRuleId4);
    }

    /**
     * @param string $scalingRuleId4
     *
     * @return $this
     */
    public function withScalingRuleId4($scalingRuleId4)
    {
        $this->data['ScalingRuleId4'] = $scalingRuleId4;
        $this->options['query']['ScalingRuleId.4'] = $scalingRuleId4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId5() instead.
     *
     * @param string $scalingRuleId5
     *
     * @return $this
     */
    public function setScalingRuleId5($scalingRuleId5)
    {
        return $this->withScalingRuleId5($scalingRuleId5);
    }

    /**
     * @param string $scalingRuleId5
     *
     * @return $this
     */
    public function withScalingRuleId5($scalingRuleId5)
    {
        $this->data['ScalingRuleId5'] = $scalingRuleId5;
        $this->options['query']['ScalingRuleId.5'] = $scalingRuleId5;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId6() instead.
     *
     * @param string $scalingRuleId6
     *
     * @return $this
     */
    public function setScalingRuleId6($scalingRuleId6)
    {
        return $this->withScalingRuleId6($scalingRuleId6);
    }

    /**
     * @param string $scalingRuleId6
     *
     * @return $this
     */
    public function withScalingRuleId6($scalingRuleId6)
    {
        $this->data['ScalingRuleId6'] = $scalingRuleId6;
        $this->options['query']['ScalingRuleId.6'] = $scalingRuleId6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId7() instead.
     *
     * @param string $scalingRuleId7
     *
     * @return $this
     */
    public function setScalingRuleId7($scalingRuleId7)
    {
        return $this->withScalingRuleId7($scalingRuleId7);
    }

    /**
     * @param string $scalingRuleId7
     *
     * @return $this
     */
    public function withScalingRuleId7($scalingRuleId7)
    {
        $this->data['ScalingRuleId7'] = $scalingRuleId7;
        $this->options['query']['ScalingRuleId.7'] = $scalingRuleId7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId1() instead.
     *
     * @param string $scalingRuleId1
     *
     * @return $this
     */
    public function setScalingRuleId1($scalingRuleId1)
    {
        return $this->withScalingRuleId1($scalingRuleId1);
    }

    /**
     * @param string $scalingRuleId1
     *
     * @return $this
     */
    public function withScalingRuleId1($scalingRuleId1)
    {
        $this->data['ScalingRuleId1'] = $scalingRuleId1;
        $this->options['query']['ScalingRuleId.1'] = $scalingRuleId1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId2() instead.
     *
     * @param string $scalingRuleId2
     *
     * @return $this
     */
    public function setScalingRuleId2($scalingRuleId2)
    {
        return $this->withScalingRuleId2($scalingRuleId2);
    }

    /**
     * @param string $scalingRuleId2
     *
     * @return $this
     */
    public function withScalingRuleId2($scalingRuleId2)
    {
        $this->data['ScalingRuleId2'] = $scalingRuleId2;
        $this->options['query']['ScalingRuleId.2'] = $scalingRuleId2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingRuleId3() instead.
     *
     * @param string $scalingRuleId3
     *
     * @return $this
     */
    public function setScalingRuleId3($scalingRuleId3)
    {
        return $this->withScalingRuleId3($scalingRuleId3);
    }

    /**
     * @param string $scalingRuleId3
     *
     * @return $this
     */
    public function withScalingRuleId3($scalingRuleId3)
    {
        $this->data['ScalingRuleId3'] = $scalingRuleId3;
        $this->options['query']['ScalingRuleId.3'] = $scalingRuleId3;

        return $this;
    }
}
