<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeScalingGroups
 *
 * @method string getResourceOwnerId()
 * @method string getScalingGroupId10()
 * @method string getScalingGroupId12()
 * @method string getScalingGroupId13()
 * @method string getScalingGroupId14()
 * @method string getScalingGroupId15()
 * @method string getOwnerId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getScalingGroupName20()
 * @method string getScalingGroupName19()
 * @method string getScalingGroupId20()
 * @method string getScalingGroupName18()
 * @method string getScalingGroupName17()
 * @method string getScalingGroupName16()
 * @method string getResourceOwnerAccount()
 * @method string getScalingGroupName()
 * @method string getOwnerAccount()
 * @method string getScalingGroupName1()
 * @method string getScalingGroupName2()
 * @method string getScalingGroupId2()
 * @method string getScalingGroupId1()
 * @method string getScalingGroupId6()
 * @method string getScalingGroupId16()
 * @method string getScalingGroupName7()
 * @method string getScalingGroupName11()
 * @method string getScalingGroupId5()
 * @method string getScalingGroupId17()
 * @method string getScalingGroupName8()
 * @method string getScalingGroupName10()
 * @method string getScalingGroupId4()
 * @method string getScalingGroupId18()
 * @method string getScalingGroupName9()
 * @method string getScalingGroupId3()
 * @method string getScalingGroupId19()
 * @method string getScalingGroupName3()
 * @method string getScalingGroupName15()
 * @method string getScalingGroupId9()
 * @method string getScalingGroupName4()
 * @method string getScalingGroupName14()
 * @method string getScalingGroupId8()
 * @method string getScalingGroupName5()
 * @method string getScalingGroupName13()
 * @method string getScalingGroupId7()
 * @method string getScalingGroupName6()
 * @method string getScalingGroupName12()
 */
class DescribeScalingGroups extends RpcRequest
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
    public $action = 'DescribeScalingGroups';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ess';

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
     * @deprecated deprecated since version 2.0, Use withScalingGroupId10() instead.
     *
     * @param string $scalingGroupId10
     *
     * @return $this
     */
    public function setScalingGroupId10($scalingGroupId10)
    {
        return $this->withScalingGroupId10($scalingGroupId10);
    }

    /**
     * @param string $scalingGroupId10
     *
     * @return $this
     */
    public function withScalingGroupId10($scalingGroupId10)
    {
        $this->data['ScalingGroupId10'] = $scalingGroupId10;
        $this->options['query']['ScalingGroupId.10'] = $scalingGroupId10;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId12() instead.
     *
     * @param string $scalingGroupId12
     *
     * @return $this
     */
    public function setScalingGroupId12($scalingGroupId12)
    {
        return $this->withScalingGroupId12($scalingGroupId12);
    }

    /**
     * @param string $scalingGroupId12
     *
     * @return $this
     */
    public function withScalingGroupId12($scalingGroupId12)
    {
        $this->data['ScalingGroupId12'] = $scalingGroupId12;
        $this->options['query']['ScalingGroupId.12'] = $scalingGroupId12;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId13() instead.
     *
     * @param string $scalingGroupId13
     *
     * @return $this
     */
    public function setScalingGroupId13($scalingGroupId13)
    {
        return $this->withScalingGroupId13($scalingGroupId13);
    }

    /**
     * @param string $scalingGroupId13
     *
     * @return $this
     */
    public function withScalingGroupId13($scalingGroupId13)
    {
        $this->data['ScalingGroupId13'] = $scalingGroupId13;
        $this->options['query']['ScalingGroupId.13'] = $scalingGroupId13;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId14() instead.
     *
     * @param string $scalingGroupId14
     *
     * @return $this
     */
    public function setScalingGroupId14($scalingGroupId14)
    {
        return $this->withScalingGroupId14($scalingGroupId14);
    }

    /**
     * @param string $scalingGroupId14
     *
     * @return $this
     */
    public function withScalingGroupId14($scalingGroupId14)
    {
        $this->data['ScalingGroupId14'] = $scalingGroupId14;
        $this->options['query']['ScalingGroupId.14'] = $scalingGroupId14;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId15() instead.
     *
     * @param string $scalingGroupId15
     *
     * @return $this
     */
    public function setScalingGroupId15($scalingGroupId15)
    {
        return $this->withScalingGroupId15($scalingGroupId15);
    }

    /**
     * @param string $scalingGroupId15
     *
     * @return $this
     */
    public function withScalingGroupId15($scalingGroupId15)
    {
        $this->data['ScalingGroupId15'] = $scalingGroupId15;
        $this->options['query']['ScalingGroupId.15'] = $scalingGroupId15;

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
     * @deprecated deprecated since version 2.0, Use withScalingGroupName20() instead.
     *
     * @param string $scalingGroupName20
     *
     * @return $this
     */
    public function setScalingGroupName20($scalingGroupName20)
    {
        return $this->withScalingGroupName20($scalingGroupName20);
    }

    /**
     * @param string $scalingGroupName20
     *
     * @return $this
     */
    public function withScalingGroupName20($scalingGroupName20)
    {
        $this->data['ScalingGroupName20'] = $scalingGroupName20;
        $this->options['query']['ScalingGroupName.20'] = $scalingGroupName20;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName19() instead.
     *
     * @param string $scalingGroupName19
     *
     * @return $this
     */
    public function setScalingGroupName19($scalingGroupName19)
    {
        return $this->withScalingGroupName19($scalingGroupName19);
    }

    /**
     * @param string $scalingGroupName19
     *
     * @return $this
     */
    public function withScalingGroupName19($scalingGroupName19)
    {
        $this->data['ScalingGroupName19'] = $scalingGroupName19;
        $this->options['query']['ScalingGroupName.19'] = $scalingGroupName19;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId20() instead.
     *
     * @param string $scalingGroupId20
     *
     * @return $this
     */
    public function setScalingGroupId20($scalingGroupId20)
    {
        return $this->withScalingGroupId20($scalingGroupId20);
    }

    /**
     * @param string $scalingGroupId20
     *
     * @return $this
     */
    public function withScalingGroupId20($scalingGroupId20)
    {
        $this->data['ScalingGroupId20'] = $scalingGroupId20;
        $this->options['query']['ScalingGroupId.20'] = $scalingGroupId20;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName18() instead.
     *
     * @param string $scalingGroupName18
     *
     * @return $this
     */
    public function setScalingGroupName18($scalingGroupName18)
    {
        return $this->withScalingGroupName18($scalingGroupName18);
    }

    /**
     * @param string $scalingGroupName18
     *
     * @return $this
     */
    public function withScalingGroupName18($scalingGroupName18)
    {
        $this->data['ScalingGroupName18'] = $scalingGroupName18;
        $this->options['query']['ScalingGroupName.18'] = $scalingGroupName18;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName17() instead.
     *
     * @param string $scalingGroupName17
     *
     * @return $this
     */
    public function setScalingGroupName17($scalingGroupName17)
    {
        return $this->withScalingGroupName17($scalingGroupName17);
    }

    /**
     * @param string $scalingGroupName17
     *
     * @return $this
     */
    public function withScalingGroupName17($scalingGroupName17)
    {
        $this->data['ScalingGroupName17'] = $scalingGroupName17;
        $this->options['query']['ScalingGroupName.17'] = $scalingGroupName17;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName16() instead.
     *
     * @param string $scalingGroupName16
     *
     * @return $this
     */
    public function setScalingGroupName16($scalingGroupName16)
    {
        return $this->withScalingGroupName16($scalingGroupName16);
    }

    /**
     * @param string $scalingGroupName16
     *
     * @return $this
     */
    public function withScalingGroupName16($scalingGroupName16)
    {
        $this->data['ScalingGroupName16'] = $scalingGroupName16;
        $this->options['query']['ScalingGroupName.16'] = $scalingGroupName16;

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
     * @deprecated deprecated since version 2.0, Use withScalingGroupName() instead.
     *
     * @param string $scalingGroupName
     *
     * @return $this
     */
    public function setScalingGroupName($scalingGroupName)
    {
        return $this->withScalingGroupName($scalingGroupName);
    }

    /**
     * @param string $scalingGroupName
     *
     * @return $this
     */
    public function withScalingGroupName($scalingGroupName)
    {
        $this->data['ScalingGroupName'] = $scalingGroupName;
        $this->options['query']['ScalingGroupName'] = $scalingGroupName;

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
     * @deprecated deprecated since version 2.0, Use withScalingGroupName1() instead.
     *
     * @param string $scalingGroupName1
     *
     * @return $this
     */
    public function setScalingGroupName1($scalingGroupName1)
    {
        return $this->withScalingGroupName1($scalingGroupName1);
    }

    /**
     * @param string $scalingGroupName1
     *
     * @return $this
     */
    public function withScalingGroupName1($scalingGroupName1)
    {
        $this->data['ScalingGroupName1'] = $scalingGroupName1;
        $this->options['query']['ScalingGroupName.1'] = $scalingGroupName1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName2() instead.
     *
     * @param string $scalingGroupName2
     *
     * @return $this
     */
    public function setScalingGroupName2($scalingGroupName2)
    {
        return $this->withScalingGroupName2($scalingGroupName2);
    }

    /**
     * @param string $scalingGroupName2
     *
     * @return $this
     */
    public function withScalingGroupName2($scalingGroupName2)
    {
        $this->data['ScalingGroupName2'] = $scalingGroupName2;
        $this->options['query']['ScalingGroupName.2'] = $scalingGroupName2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId2() instead.
     *
     * @param string $scalingGroupId2
     *
     * @return $this
     */
    public function setScalingGroupId2($scalingGroupId2)
    {
        return $this->withScalingGroupId2($scalingGroupId2);
    }

    /**
     * @param string $scalingGroupId2
     *
     * @return $this
     */
    public function withScalingGroupId2($scalingGroupId2)
    {
        $this->data['ScalingGroupId2'] = $scalingGroupId2;
        $this->options['query']['ScalingGroupId.2'] = $scalingGroupId2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId1() instead.
     *
     * @param string $scalingGroupId1
     *
     * @return $this
     */
    public function setScalingGroupId1($scalingGroupId1)
    {
        return $this->withScalingGroupId1($scalingGroupId1);
    }

    /**
     * @param string $scalingGroupId1
     *
     * @return $this
     */
    public function withScalingGroupId1($scalingGroupId1)
    {
        $this->data['ScalingGroupId1'] = $scalingGroupId1;
        $this->options['query']['ScalingGroupId.1'] = $scalingGroupId1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId6() instead.
     *
     * @param string $scalingGroupId6
     *
     * @return $this
     */
    public function setScalingGroupId6($scalingGroupId6)
    {
        return $this->withScalingGroupId6($scalingGroupId6);
    }

    /**
     * @param string $scalingGroupId6
     *
     * @return $this
     */
    public function withScalingGroupId6($scalingGroupId6)
    {
        $this->data['ScalingGroupId6'] = $scalingGroupId6;
        $this->options['query']['ScalingGroupId.6'] = $scalingGroupId6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId16() instead.
     *
     * @param string $scalingGroupId16
     *
     * @return $this
     */
    public function setScalingGroupId16($scalingGroupId16)
    {
        return $this->withScalingGroupId16($scalingGroupId16);
    }

    /**
     * @param string $scalingGroupId16
     *
     * @return $this
     */
    public function withScalingGroupId16($scalingGroupId16)
    {
        $this->data['ScalingGroupId16'] = $scalingGroupId16;
        $this->options['query']['ScalingGroupId.16'] = $scalingGroupId16;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName7() instead.
     *
     * @param string $scalingGroupName7
     *
     * @return $this
     */
    public function setScalingGroupName7($scalingGroupName7)
    {
        return $this->withScalingGroupName7($scalingGroupName7);
    }

    /**
     * @param string $scalingGroupName7
     *
     * @return $this
     */
    public function withScalingGroupName7($scalingGroupName7)
    {
        $this->data['ScalingGroupName7'] = $scalingGroupName7;
        $this->options['query']['ScalingGroupName.7'] = $scalingGroupName7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName11() instead.
     *
     * @param string $scalingGroupName11
     *
     * @return $this
     */
    public function setScalingGroupName11($scalingGroupName11)
    {
        return $this->withScalingGroupName11($scalingGroupName11);
    }

    /**
     * @param string $scalingGroupName11
     *
     * @return $this
     */
    public function withScalingGroupName11($scalingGroupName11)
    {
        $this->data['ScalingGroupName11'] = $scalingGroupName11;
        $this->options['query']['ScalingGroupName.11'] = $scalingGroupName11;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId5() instead.
     *
     * @param string $scalingGroupId5
     *
     * @return $this
     */
    public function setScalingGroupId5($scalingGroupId5)
    {
        return $this->withScalingGroupId5($scalingGroupId5);
    }

    /**
     * @param string $scalingGroupId5
     *
     * @return $this
     */
    public function withScalingGroupId5($scalingGroupId5)
    {
        $this->data['ScalingGroupId5'] = $scalingGroupId5;
        $this->options['query']['ScalingGroupId.5'] = $scalingGroupId5;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId17() instead.
     *
     * @param string $scalingGroupId17
     *
     * @return $this
     */
    public function setScalingGroupId17($scalingGroupId17)
    {
        return $this->withScalingGroupId17($scalingGroupId17);
    }

    /**
     * @param string $scalingGroupId17
     *
     * @return $this
     */
    public function withScalingGroupId17($scalingGroupId17)
    {
        $this->data['ScalingGroupId17'] = $scalingGroupId17;
        $this->options['query']['ScalingGroupId.17'] = $scalingGroupId17;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName8() instead.
     *
     * @param string $scalingGroupName8
     *
     * @return $this
     */
    public function setScalingGroupName8($scalingGroupName8)
    {
        return $this->withScalingGroupName8($scalingGroupName8);
    }

    /**
     * @param string $scalingGroupName8
     *
     * @return $this
     */
    public function withScalingGroupName8($scalingGroupName8)
    {
        $this->data['ScalingGroupName8'] = $scalingGroupName8;
        $this->options['query']['ScalingGroupName.8'] = $scalingGroupName8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName10() instead.
     *
     * @param string $scalingGroupName10
     *
     * @return $this
     */
    public function setScalingGroupName10($scalingGroupName10)
    {
        return $this->withScalingGroupName10($scalingGroupName10);
    }

    /**
     * @param string $scalingGroupName10
     *
     * @return $this
     */
    public function withScalingGroupName10($scalingGroupName10)
    {
        $this->data['ScalingGroupName10'] = $scalingGroupName10;
        $this->options['query']['ScalingGroupName.10'] = $scalingGroupName10;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId4() instead.
     *
     * @param string $scalingGroupId4
     *
     * @return $this
     */
    public function setScalingGroupId4($scalingGroupId4)
    {
        return $this->withScalingGroupId4($scalingGroupId4);
    }

    /**
     * @param string $scalingGroupId4
     *
     * @return $this
     */
    public function withScalingGroupId4($scalingGroupId4)
    {
        $this->data['ScalingGroupId4'] = $scalingGroupId4;
        $this->options['query']['ScalingGroupId.4'] = $scalingGroupId4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId18() instead.
     *
     * @param string $scalingGroupId18
     *
     * @return $this
     */
    public function setScalingGroupId18($scalingGroupId18)
    {
        return $this->withScalingGroupId18($scalingGroupId18);
    }

    /**
     * @param string $scalingGroupId18
     *
     * @return $this
     */
    public function withScalingGroupId18($scalingGroupId18)
    {
        $this->data['ScalingGroupId18'] = $scalingGroupId18;
        $this->options['query']['ScalingGroupId.18'] = $scalingGroupId18;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName9() instead.
     *
     * @param string $scalingGroupName9
     *
     * @return $this
     */
    public function setScalingGroupName9($scalingGroupName9)
    {
        return $this->withScalingGroupName9($scalingGroupName9);
    }

    /**
     * @param string $scalingGroupName9
     *
     * @return $this
     */
    public function withScalingGroupName9($scalingGroupName9)
    {
        $this->data['ScalingGroupName9'] = $scalingGroupName9;
        $this->options['query']['ScalingGroupName.9'] = $scalingGroupName9;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId3() instead.
     *
     * @param string $scalingGroupId3
     *
     * @return $this
     */
    public function setScalingGroupId3($scalingGroupId3)
    {
        return $this->withScalingGroupId3($scalingGroupId3);
    }

    /**
     * @param string $scalingGroupId3
     *
     * @return $this
     */
    public function withScalingGroupId3($scalingGroupId3)
    {
        $this->data['ScalingGroupId3'] = $scalingGroupId3;
        $this->options['query']['ScalingGroupId.3'] = $scalingGroupId3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId19() instead.
     *
     * @param string $scalingGroupId19
     *
     * @return $this
     */
    public function setScalingGroupId19($scalingGroupId19)
    {
        return $this->withScalingGroupId19($scalingGroupId19);
    }

    /**
     * @param string $scalingGroupId19
     *
     * @return $this
     */
    public function withScalingGroupId19($scalingGroupId19)
    {
        $this->data['ScalingGroupId19'] = $scalingGroupId19;
        $this->options['query']['ScalingGroupId.19'] = $scalingGroupId19;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName3() instead.
     *
     * @param string $scalingGroupName3
     *
     * @return $this
     */
    public function setScalingGroupName3($scalingGroupName3)
    {
        return $this->withScalingGroupName3($scalingGroupName3);
    }

    /**
     * @param string $scalingGroupName3
     *
     * @return $this
     */
    public function withScalingGroupName3($scalingGroupName3)
    {
        $this->data['ScalingGroupName3'] = $scalingGroupName3;
        $this->options['query']['ScalingGroupName.3'] = $scalingGroupName3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName15() instead.
     *
     * @param string $scalingGroupName15
     *
     * @return $this
     */
    public function setScalingGroupName15($scalingGroupName15)
    {
        return $this->withScalingGroupName15($scalingGroupName15);
    }

    /**
     * @param string $scalingGroupName15
     *
     * @return $this
     */
    public function withScalingGroupName15($scalingGroupName15)
    {
        $this->data['ScalingGroupName15'] = $scalingGroupName15;
        $this->options['query']['ScalingGroupName.15'] = $scalingGroupName15;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId9() instead.
     *
     * @param string $scalingGroupId9
     *
     * @return $this
     */
    public function setScalingGroupId9($scalingGroupId9)
    {
        return $this->withScalingGroupId9($scalingGroupId9);
    }

    /**
     * @param string $scalingGroupId9
     *
     * @return $this
     */
    public function withScalingGroupId9($scalingGroupId9)
    {
        $this->data['ScalingGroupId9'] = $scalingGroupId9;
        $this->options['query']['ScalingGroupId.9'] = $scalingGroupId9;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName4() instead.
     *
     * @param string $scalingGroupName4
     *
     * @return $this
     */
    public function setScalingGroupName4($scalingGroupName4)
    {
        return $this->withScalingGroupName4($scalingGroupName4);
    }

    /**
     * @param string $scalingGroupName4
     *
     * @return $this
     */
    public function withScalingGroupName4($scalingGroupName4)
    {
        $this->data['ScalingGroupName4'] = $scalingGroupName4;
        $this->options['query']['ScalingGroupName.4'] = $scalingGroupName4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName14() instead.
     *
     * @param string $scalingGroupName14
     *
     * @return $this
     */
    public function setScalingGroupName14($scalingGroupName14)
    {
        return $this->withScalingGroupName14($scalingGroupName14);
    }

    /**
     * @param string $scalingGroupName14
     *
     * @return $this
     */
    public function withScalingGroupName14($scalingGroupName14)
    {
        $this->data['ScalingGroupName14'] = $scalingGroupName14;
        $this->options['query']['ScalingGroupName.14'] = $scalingGroupName14;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId8() instead.
     *
     * @param string $scalingGroupId8
     *
     * @return $this
     */
    public function setScalingGroupId8($scalingGroupId8)
    {
        return $this->withScalingGroupId8($scalingGroupId8);
    }

    /**
     * @param string $scalingGroupId8
     *
     * @return $this
     */
    public function withScalingGroupId8($scalingGroupId8)
    {
        $this->data['ScalingGroupId8'] = $scalingGroupId8;
        $this->options['query']['ScalingGroupId.8'] = $scalingGroupId8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName5() instead.
     *
     * @param string $scalingGroupName5
     *
     * @return $this
     */
    public function setScalingGroupName5($scalingGroupName5)
    {
        return $this->withScalingGroupName5($scalingGroupName5);
    }

    /**
     * @param string $scalingGroupName5
     *
     * @return $this
     */
    public function withScalingGroupName5($scalingGroupName5)
    {
        $this->data['ScalingGroupName5'] = $scalingGroupName5;
        $this->options['query']['ScalingGroupName.5'] = $scalingGroupName5;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName13() instead.
     *
     * @param string $scalingGroupName13
     *
     * @return $this
     */
    public function setScalingGroupName13($scalingGroupName13)
    {
        return $this->withScalingGroupName13($scalingGroupName13);
    }

    /**
     * @param string $scalingGroupName13
     *
     * @return $this
     */
    public function withScalingGroupName13($scalingGroupName13)
    {
        $this->data['ScalingGroupName13'] = $scalingGroupName13;
        $this->options['query']['ScalingGroupName.13'] = $scalingGroupName13;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupId7() instead.
     *
     * @param string $scalingGroupId7
     *
     * @return $this
     */
    public function setScalingGroupId7($scalingGroupId7)
    {
        return $this->withScalingGroupId7($scalingGroupId7);
    }

    /**
     * @param string $scalingGroupId7
     *
     * @return $this
     */
    public function withScalingGroupId7($scalingGroupId7)
    {
        $this->data['ScalingGroupId7'] = $scalingGroupId7;
        $this->options['query']['ScalingGroupId.7'] = $scalingGroupId7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName6() instead.
     *
     * @param string $scalingGroupName6
     *
     * @return $this
     */
    public function setScalingGroupName6($scalingGroupName6)
    {
        return $this->withScalingGroupName6($scalingGroupName6);
    }

    /**
     * @param string $scalingGroupName6
     *
     * @return $this
     */
    public function withScalingGroupName6($scalingGroupName6)
    {
        $this->data['ScalingGroupName6'] = $scalingGroupName6;
        $this->options['query']['ScalingGroupName.6'] = $scalingGroupName6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScalingGroupName12() instead.
     *
     * @param string $scalingGroupName12
     *
     * @return $this
     */
    public function setScalingGroupName12($scalingGroupName12)
    {
        return $this->withScalingGroupName12($scalingGroupName12);
    }

    /**
     * @param string $scalingGroupName12
     *
     * @return $this
     */
    public function withScalingGroupName12($scalingGroupName12)
    {
        $this->data['ScalingGroupName12'] = $scalingGroupName12;
        $this->options['query']['ScalingGroupName.12'] = $scalingGroupName12;

        return $this;
    }
}
