<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeScalingActivities
 *
 * @method string getScalingActivityId9()
 * @method string getResourceOwnerId()
 * @method string getScalingActivityId5()
 * @method string getScalingActivityId6()
 * @method string getScalingGroupId()
 * @method string getScalingActivityId7()
 * @method string getScalingActivityId8()
 * @method string getScalingActivityId1()
 * @method string getScalingActivityId2()
 * @method string getScalingActivityId3()
 * @method string getScalingActivityId4()
 * @method string getPageNumber()
 * @method string getStatusCode()
 * @method string getPageSize()
 * @method string getScalingActivityId11()
 * @method string getScalingActivityId10()
 * @method string getScalingActivityId13()
 * @method string getScalingActivityId12()
 * @method string getScalingActivityId15()
 * @method string getScalingActivityId14()
 * @method string getScalingActivityId17()
 * @method string getScalingActivityId16()
 * @method string getScalingActivityId19()
 * @method string getResourceOwnerAccount()
 * @method string getScalingActivityId18()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 * @method string getScalingActivityId20()
 */
class DescribeScalingActivities extends RpcRequest
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
    public $action = 'DescribeScalingActivities';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId9() instead.
     *
     * @param string $scalingActivityId9
     *
     * @return $this
     */
    public function setScalingActivityId9($scalingActivityId9)
    {
        return $this->withScalingActivityId9($scalingActivityId9);
    }

    /**
     * @param string $scalingActivityId9
     *
     * @return $this
     */
    public function withScalingActivityId9($scalingActivityId9)
    {
        $this->data['ScalingActivityId9'] = $scalingActivityId9;
        $this->options['query']['ScalingActivityId.9'] = $scalingActivityId9;

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
     * @deprecated deprecated since version 2.0, Use withScalingActivityId5() instead.
     *
     * @param string $scalingActivityId5
     *
     * @return $this
     */
    public function setScalingActivityId5($scalingActivityId5)
    {
        return $this->withScalingActivityId5($scalingActivityId5);
    }

    /**
     * @param string $scalingActivityId5
     *
     * @return $this
     */
    public function withScalingActivityId5($scalingActivityId5)
    {
        $this->data['ScalingActivityId5'] = $scalingActivityId5;
        $this->options['query']['ScalingActivityId.5'] = $scalingActivityId5;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId6() instead.
     *
     * @param string $scalingActivityId6
     *
     * @return $this
     */
    public function setScalingActivityId6($scalingActivityId6)
    {
        return $this->withScalingActivityId6($scalingActivityId6);
    }

    /**
     * @param string $scalingActivityId6
     *
     * @return $this
     */
    public function withScalingActivityId6($scalingActivityId6)
    {
        $this->data['ScalingActivityId6'] = $scalingActivityId6;
        $this->options['query']['ScalingActivityId.6'] = $scalingActivityId6;

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
     * @deprecated deprecated since version 2.0, Use withScalingActivityId7() instead.
     *
     * @param string $scalingActivityId7
     *
     * @return $this
     */
    public function setScalingActivityId7($scalingActivityId7)
    {
        return $this->withScalingActivityId7($scalingActivityId7);
    }

    /**
     * @param string $scalingActivityId7
     *
     * @return $this
     */
    public function withScalingActivityId7($scalingActivityId7)
    {
        $this->data['ScalingActivityId7'] = $scalingActivityId7;
        $this->options['query']['ScalingActivityId.7'] = $scalingActivityId7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId8() instead.
     *
     * @param string $scalingActivityId8
     *
     * @return $this
     */
    public function setScalingActivityId8($scalingActivityId8)
    {
        return $this->withScalingActivityId8($scalingActivityId8);
    }

    /**
     * @param string $scalingActivityId8
     *
     * @return $this
     */
    public function withScalingActivityId8($scalingActivityId8)
    {
        $this->data['ScalingActivityId8'] = $scalingActivityId8;
        $this->options['query']['ScalingActivityId.8'] = $scalingActivityId8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId1() instead.
     *
     * @param string $scalingActivityId1
     *
     * @return $this
     */
    public function setScalingActivityId1($scalingActivityId1)
    {
        return $this->withScalingActivityId1($scalingActivityId1);
    }

    /**
     * @param string $scalingActivityId1
     *
     * @return $this
     */
    public function withScalingActivityId1($scalingActivityId1)
    {
        $this->data['ScalingActivityId1'] = $scalingActivityId1;
        $this->options['query']['ScalingActivityId.1'] = $scalingActivityId1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId2() instead.
     *
     * @param string $scalingActivityId2
     *
     * @return $this
     */
    public function setScalingActivityId2($scalingActivityId2)
    {
        return $this->withScalingActivityId2($scalingActivityId2);
    }

    /**
     * @param string $scalingActivityId2
     *
     * @return $this
     */
    public function withScalingActivityId2($scalingActivityId2)
    {
        $this->data['ScalingActivityId2'] = $scalingActivityId2;
        $this->options['query']['ScalingActivityId.2'] = $scalingActivityId2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId3() instead.
     *
     * @param string $scalingActivityId3
     *
     * @return $this
     */
    public function setScalingActivityId3($scalingActivityId3)
    {
        return $this->withScalingActivityId3($scalingActivityId3);
    }

    /**
     * @param string $scalingActivityId3
     *
     * @return $this
     */
    public function withScalingActivityId3($scalingActivityId3)
    {
        $this->data['ScalingActivityId3'] = $scalingActivityId3;
        $this->options['query']['ScalingActivityId.3'] = $scalingActivityId3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId4() instead.
     *
     * @param string $scalingActivityId4
     *
     * @return $this
     */
    public function setScalingActivityId4($scalingActivityId4)
    {
        return $this->withScalingActivityId4($scalingActivityId4);
    }

    /**
     * @param string $scalingActivityId4
     *
     * @return $this
     */
    public function withScalingActivityId4($scalingActivityId4)
    {
        $this->data['ScalingActivityId4'] = $scalingActivityId4;
        $this->options['query']['ScalingActivityId.4'] = $scalingActivityId4;

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
     * @deprecated deprecated since version 2.0, Use withStatusCode() instead.
     *
     * @param string $statusCode
     *
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        return $this->withStatusCode($statusCode);
    }

    /**
     * @param string $statusCode
     *
     * @return $this
     */
    public function withStatusCode($statusCode)
    {
        $this->data['StatusCode'] = $statusCode;
        $this->options['query']['StatusCode'] = $statusCode;

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
     * @deprecated deprecated since version 2.0, Use withScalingActivityId11() instead.
     *
     * @param string $scalingActivityId11
     *
     * @return $this
     */
    public function setScalingActivityId11($scalingActivityId11)
    {
        return $this->withScalingActivityId11($scalingActivityId11);
    }

    /**
     * @param string $scalingActivityId11
     *
     * @return $this
     */
    public function withScalingActivityId11($scalingActivityId11)
    {
        $this->data['ScalingActivityId11'] = $scalingActivityId11;
        $this->options['query']['ScalingActivityId.11'] = $scalingActivityId11;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId10() instead.
     *
     * @param string $scalingActivityId10
     *
     * @return $this
     */
    public function setScalingActivityId10($scalingActivityId10)
    {
        return $this->withScalingActivityId10($scalingActivityId10);
    }

    /**
     * @param string $scalingActivityId10
     *
     * @return $this
     */
    public function withScalingActivityId10($scalingActivityId10)
    {
        $this->data['ScalingActivityId10'] = $scalingActivityId10;
        $this->options['query']['ScalingActivityId.10'] = $scalingActivityId10;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId13() instead.
     *
     * @param string $scalingActivityId13
     *
     * @return $this
     */
    public function setScalingActivityId13($scalingActivityId13)
    {
        return $this->withScalingActivityId13($scalingActivityId13);
    }

    /**
     * @param string $scalingActivityId13
     *
     * @return $this
     */
    public function withScalingActivityId13($scalingActivityId13)
    {
        $this->data['ScalingActivityId13'] = $scalingActivityId13;
        $this->options['query']['ScalingActivityId.13'] = $scalingActivityId13;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId12() instead.
     *
     * @param string $scalingActivityId12
     *
     * @return $this
     */
    public function setScalingActivityId12($scalingActivityId12)
    {
        return $this->withScalingActivityId12($scalingActivityId12);
    }

    /**
     * @param string $scalingActivityId12
     *
     * @return $this
     */
    public function withScalingActivityId12($scalingActivityId12)
    {
        $this->data['ScalingActivityId12'] = $scalingActivityId12;
        $this->options['query']['ScalingActivityId.12'] = $scalingActivityId12;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId15() instead.
     *
     * @param string $scalingActivityId15
     *
     * @return $this
     */
    public function setScalingActivityId15($scalingActivityId15)
    {
        return $this->withScalingActivityId15($scalingActivityId15);
    }

    /**
     * @param string $scalingActivityId15
     *
     * @return $this
     */
    public function withScalingActivityId15($scalingActivityId15)
    {
        $this->data['ScalingActivityId15'] = $scalingActivityId15;
        $this->options['query']['ScalingActivityId.15'] = $scalingActivityId15;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId14() instead.
     *
     * @param string $scalingActivityId14
     *
     * @return $this
     */
    public function setScalingActivityId14($scalingActivityId14)
    {
        return $this->withScalingActivityId14($scalingActivityId14);
    }

    /**
     * @param string $scalingActivityId14
     *
     * @return $this
     */
    public function withScalingActivityId14($scalingActivityId14)
    {
        $this->data['ScalingActivityId14'] = $scalingActivityId14;
        $this->options['query']['ScalingActivityId.14'] = $scalingActivityId14;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId17() instead.
     *
     * @param string $scalingActivityId17
     *
     * @return $this
     */
    public function setScalingActivityId17($scalingActivityId17)
    {
        return $this->withScalingActivityId17($scalingActivityId17);
    }

    /**
     * @param string $scalingActivityId17
     *
     * @return $this
     */
    public function withScalingActivityId17($scalingActivityId17)
    {
        $this->data['ScalingActivityId17'] = $scalingActivityId17;
        $this->options['query']['ScalingActivityId.17'] = $scalingActivityId17;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId16() instead.
     *
     * @param string $scalingActivityId16
     *
     * @return $this
     */
    public function setScalingActivityId16($scalingActivityId16)
    {
        return $this->withScalingActivityId16($scalingActivityId16);
    }

    /**
     * @param string $scalingActivityId16
     *
     * @return $this
     */
    public function withScalingActivityId16($scalingActivityId16)
    {
        $this->data['ScalingActivityId16'] = $scalingActivityId16;
        $this->options['query']['ScalingActivityId.16'] = $scalingActivityId16;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingActivityId19() instead.
     *
     * @param string $scalingActivityId19
     *
     * @return $this
     */
    public function setScalingActivityId19($scalingActivityId19)
    {
        return $this->withScalingActivityId19($scalingActivityId19);
    }

    /**
     * @param string $scalingActivityId19
     *
     * @return $this
     */
    public function withScalingActivityId19($scalingActivityId19)
    {
        $this->data['ScalingActivityId19'] = $scalingActivityId19;
        $this->options['query']['ScalingActivityId.19'] = $scalingActivityId19;

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
     * @deprecated deprecated since version 2.0, Use withScalingActivityId18() instead.
     *
     * @param string $scalingActivityId18
     *
     * @return $this
     */
    public function setScalingActivityId18($scalingActivityId18)
    {
        return $this->withScalingActivityId18($scalingActivityId18);
    }

    /**
     * @param string $scalingActivityId18
     *
     * @return $this
     */
    public function withScalingActivityId18($scalingActivityId18)
    {
        $this->data['ScalingActivityId18'] = $scalingActivityId18;
        $this->options['query']['ScalingActivityId.18'] = $scalingActivityId18;

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
     * @deprecated deprecated since version 2.0, Use withScalingActivityId20() instead.
     *
     * @param string $scalingActivityId20
     *
     * @return $this
     */
    public function setScalingActivityId20($scalingActivityId20)
    {
        return $this->withScalingActivityId20($scalingActivityId20);
    }

    /**
     * @param string $scalingActivityId20
     *
     * @return $this
     */
    public function withScalingActivityId20($scalingActivityId20)
    {
        $this->data['ScalingActivityId20'] = $scalingActivityId20;
        $this->options['query']['ScalingActivityId.20'] = $scalingActivityId20;

        return $this;
    }
}
