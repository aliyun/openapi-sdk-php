<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of UntagResources
 *
 * @method string getResourceId47()
 * @method string getResourceId48()
 * @method string getResourceOwnerId()
 * @method string getResourceId49()
 * @method string getResourceId40()
 * @method string getResourceId41()
 * @method string getResourceId42()
 * @method string getTagKey9()
 * @method string getResourceId1()
 * @method string getResourceId43()
 * @method string getResourceId2()
 * @method string getResourceId44()
 * @method string getResourceId3()
 * @method string getResourceId45()
 * @method string getResourceId4()
 * @method string getResourceId46()
 * @method string getResourceId5()
 * @method string getTagKey4()
 * @method string getResourceId6()
 * @method string getTagKey3()
 * @method string getResourceId7()
 * @method string getTagKey2()
 * @method string getResourceId8()
 * @method string getTagKey1()
 * @method string getResourceId9()
 * @method string getTagKey8()
 * @method string getTagKey20()
 * @method string getTagKey7()
 * @method string getTagKey6()
 * @method string getTagKey5()
 * @method string getTagOwnerBid()
 * @method string getResourceId36()
 * @method string getResourceId37()
 * @method string getResourceId38()
 * @method string getResourceId39()
 * @method string getResourceId30()
 * @method string getResourceId31()
 * @method string getOwnerId()
 * @method string getResourceId32()
 * @method string getResourceId33()
 * @method string getResourceId34()
 * @method string getResourceId35()
 * @method string getResourceId25()
 * @method string getResourceId26()
 * @method string getResourceId27()
 * @method string getResourceId28()
 * @method string getResourceId29()
 * @method string getTagOwnerUid()
 * @method string getResourceId20()
 * @method string getResourceId21()
 * @method string getResourceId22()
 * @method string getResourceId23()
 * @method string getResourceId24()
 * @method string getScope()
 * @method string getResourceId14()
 * @method string getResourceId15()
 * @method string getResourceId16()
 * @method string getTagKey19()
 * @method string getResourceId17()
 * @method string getTagKey18()
 * @method string getResourceId18()
 * @method string getResourceOwnerAccount()
 * @method string getResourceId19()
 * @method string getResourceId50()
 * @method string getResourceId10()
 * @method string getResourceType()
 * @method string getResourceId11()
 * @method string getResourceId12()
 * @method string getResourceId13()
 * @method string getTagKey13()
 * @method string getTagKey12()
 * @method string getTagKey11()
 * @method string getTagKey10()
 * @method string getTagKey17()
 * @method string getTagKey16()
 * @method string getTagKey15()
 * @method string getTagKey14()
 */
class UntagResources extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Rds';

    /**
     * @var string
     */
    public $version = '2014-08-15';

    /**
     * @var string
     */
    public $action = 'UntagResources';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'rds';

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId47() instead.
     *
     * @param string $resourceId47
     *
     * @return $this
     */
    public function setResourceId47($resourceId47)
    {
        return $this->withResourceId47($resourceId47);
    }

    /**
     * @param string $resourceId47
     *
     * @return $this
     */
    public function withResourceId47($resourceId47)
    {
        $this->data['ResourceId47'] = $resourceId47;
        $this->options['query']['ResourceId.47'] = $resourceId47;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId48() instead.
     *
     * @param string $resourceId48
     *
     * @return $this
     */
    public function setResourceId48($resourceId48)
    {
        return $this->withResourceId48($resourceId48);
    }

    /**
     * @param string $resourceId48
     *
     * @return $this
     */
    public function withResourceId48($resourceId48)
    {
        $this->data['ResourceId48'] = $resourceId48;
        $this->options['query']['ResourceId.48'] = $resourceId48;

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
     * @deprecated deprecated since version 2.0, Use withResourceId49() instead.
     *
     * @param string $resourceId49
     *
     * @return $this
     */
    public function setResourceId49($resourceId49)
    {
        return $this->withResourceId49($resourceId49);
    }

    /**
     * @param string $resourceId49
     *
     * @return $this
     */
    public function withResourceId49($resourceId49)
    {
        $this->data['ResourceId49'] = $resourceId49;
        $this->options['query']['ResourceId.49'] = $resourceId49;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId40() instead.
     *
     * @param string $resourceId40
     *
     * @return $this
     */
    public function setResourceId40($resourceId40)
    {
        return $this->withResourceId40($resourceId40);
    }

    /**
     * @param string $resourceId40
     *
     * @return $this
     */
    public function withResourceId40($resourceId40)
    {
        $this->data['ResourceId40'] = $resourceId40;
        $this->options['query']['ResourceId.40'] = $resourceId40;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId41() instead.
     *
     * @param string $resourceId41
     *
     * @return $this
     */
    public function setResourceId41($resourceId41)
    {
        return $this->withResourceId41($resourceId41);
    }

    /**
     * @param string $resourceId41
     *
     * @return $this
     */
    public function withResourceId41($resourceId41)
    {
        $this->data['ResourceId41'] = $resourceId41;
        $this->options['query']['ResourceId.41'] = $resourceId41;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId42() instead.
     *
     * @param string $resourceId42
     *
     * @return $this
     */
    public function setResourceId42($resourceId42)
    {
        return $this->withResourceId42($resourceId42);
    }

    /**
     * @param string $resourceId42
     *
     * @return $this
     */
    public function withResourceId42($resourceId42)
    {
        $this->data['ResourceId42'] = $resourceId42;
        $this->options['query']['ResourceId.42'] = $resourceId42;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey9() instead.
     *
     * @param string $tagKey9
     *
     * @return $this
     */
    public function setTagKey9($tagKey9)
    {
        return $this->withTagKey9($tagKey9);
    }

    /**
     * @param string $tagKey9
     *
     * @return $this
     */
    public function withTagKey9($tagKey9)
    {
        $this->data['TagKey9'] = $tagKey9;
        $this->options['query']['TagKey.9'] = $tagKey9;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId1() instead.
     *
     * @param string $resourceId1
     *
     * @return $this
     */
    public function setResourceId1($resourceId1)
    {
        return $this->withResourceId1($resourceId1);
    }

    /**
     * @param string $resourceId1
     *
     * @return $this
     */
    public function withResourceId1($resourceId1)
    {
        $this->data['ResourceId1'] = $resourceId1;
        $this->options['query']['ResourceId.1'] = $resourceId1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId43() instead.
     *
     * @param string $resourceId43
     *
     * @return $this
     */
    public function setResourceId43($resourceId43)
    {
        return $this->withResourceId43($resourceId43);
    }

    /**
     * @param string $resourceId43
     *
     * @return $this
     */
    public function withResourceId43($resourceId43)
    {
        $this->data['ResourceId43'] = $resourceId43;
        $this->options['query']['ResourceId.43'] = $resourceId43;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId2() instead.
     *
     * @param string $resourceId2
     *
     * @return $this
     */
    public function setResourceId2($resourceId2)
    {
        return $this->withResourceId2($resourceId2);
    }

    /**
     * @param string $resourceId2
     *
     * @return $this
     */
    public function withResourceId2($resourceId2)
    {
        $this->data['ResourceId2'] = $resourceId2;
        $this->options['query']['ResourceId.2'] = $resourceId2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId44() instead.
     *
     * @param string $resourceId44
     *
     * @return $this
     */
    public function setResourceId44($resourceId44)
    {
        return $this->withResourceId44($resourceId44);
    }

    /**
     * @param string $resourceId44
     *
     * @return $this
     */
    public function withResourceId44($resourceId44)
    {
        $this->data['ResourceId44'] = $resourceId44;
        $this->options['query']['ResourceId.44'] = $resourceId44;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId3() instead.
     *
     * @param string $resourceId3
     *
     * @return $this
     */
    public function setResourceId3($resourceId3)
    {
        return $this->withResourceId3($resourceId3);
    }

    /**
     * @param string $resourceId3
     *
     * @return $this
     */
    public function withResourceId3($resourceId3)
    {
        $this->data['ResourceId3'] = $resourceId3;
        $this->options['query']['ResourceId.3'] = $resourceId3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId45() instead.
     *
     * @param string $resourceId45
     *
     * @return $this
     */
    public function setResourceId45($resourceId45)
    {
        return $this->withResourceId45($resourceId45);
    }

    /**
     * @param string $resourceId45
     *
     * @return $this
     */
    public function withResourceId45($resourceId45)
    {
        $this->data['ResourceId45'] = $resourceId45;
        $this->options['query']['ResourceId.45'] = $resourceId45;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId4() instead.
     *
     * @param string $resourceId4
     *
     * @return $this
     */
    public function setResourceId4($resourceId4)
    {
        return $this->withResourceId4($resourceId4);
    }

    /**
     * @param string $resourceId4
     *
     * @return $this
     */
    public function withResourceId4($resourceId4)
    {
        $this->data['ResourceId4'] = $resourceId4;
        $this->options['query']['ResourceId.4'] = $resourceId4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId46() instead.
     *
     * @param string $resourceId46
     *
     * @return $this
     */
    public function setResourceId46($resourceId46)
    {
        return $this->withResourceId46($resourceId46);
    }

    /**
     * @param string $resourceId46
     *
     * @return $this
     */
    public function withResourceId46($resourceId46)
    {
        $this->data['ResourceId46'] = $resourceId46;
        $this->options['query']['ResourceId.46'] = $resourceId46;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId5() instead.
     *
     * @param string $resourceId5
     *
     * @return $this
     */
    public function setResourceId5($resourceId5)
    {
        return $this->withResourceId5($resourceId5);
    }

    /**
     * @param string $resourceId5
     *
     * @return $this
     */
    public function withResourceId5($resourceId5)
    {
        $this->data['ResourceId5'] = $resourceId5;
        $this->options['query']['ResourceId.5'] = $resourceId5;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey4() instead.
     *
     * @param string $tagKey4
     *
     * @return $this
     */
    public function setTagKey4($tagKey4)
    {
        return $this->withTagKey4($tagKey4);
    }

    /**
     * @param string $tagKey4
     *
     * @return $this
     */
    public function withTagKey4($tagKey4)
    {
        $this->data['TagKey4'] = $tagKey4;
        $this->options['query']['TagKey.4'] = $tagKey4;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId6() instead.
     *
     * @param string $resourceId6
     *
     * @return $this
     */
    public function setResourceId6($resourceId6)
    {
        return $this->withResourceId6($resourceId6);
    }

    /**
     * @param string $resourceId6
     *
     * @return $this
     */
    public function withResourceId6($resourceId6)
    {
        $this->data['ResourceId6'] = $resourceId6;
        $this->options['query']['ResourceId.6'] = $resourceId6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey3() instead.
     *
     * @param string $tagKey3
     *
     * @return $this
     */
    public function setTagKey3($tagKey3)
    {
        return $this->withTagKey3($tagKey3);
    }

    /**
     * @param string $tagKey3
     *
     * @return $this
     */
    public function withTagKey3($tagKey3)
    {
        $this->data['TagKey3'] = $tagKey3;
        $this->options['query']['TagKey.3'] = $tagKey3;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId7() instead.
     *
     * @param string $resourceId7
     *
     * @return $this
     */
    public function setResourceId7($resourceId7)
    {
        return $this->withResourceId7($resourceId7);
    }

    /**
     * @param string $resourceId7
     *
     * @return $this
     */
    public function withResourceId7($resourceId7)
    {
        $this->data['ResourceId7'] = $resourceId7;
        $this->options['query']['ResourceId.7'] = $resourceId7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey2() instead.
     *
     * @param string $tagKey2
     *
     * @return $this
     */
    public function setTagKey2($tagKey2)
    {
        return $this->withTagKey2($tagKey2);
    }

    /**
     * @param string $tagKey2
     *
     * @return $this
     */
    public function withTagKey2($tagKey2)
    {
        $this->data['TagKey2'] = $tagKey2;
        $this->options['query']['TagKey.2'] = $tagKey2;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId8() instead.
     *
     * @param string $resourceId8
     *
     * @return $this
     */
    public function setResourceId8($resourceId8)
    {
        return $this->withResourceId8($resourceId8);
    }

    /**
     * @param string $resourceId8
     *
     * @return $this
     */
    public function withResourceId8($resourceId8)
    {
        $this->data['ResourceId8'] = $resourceId8;
        $this->options['query']['ResourceId.8'] = $resourceId8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey1() instead.
     *
     * @param string $tagKey1
     *
     * @return $this
     */
    public function setTagKey1($tagKey1)
    {
        return $this->withTagKey1($tagKey1);
    }

    /**
     * @param string $tagKey1
     *
     * @return $this
     */
    public function withTagKey1($tagKey1)
    {
        $this->data['TagKey1'] = $tagKey1;
        $this->options['query']['TagKey.1'] = $tagKey1;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId9() instead.
     *
     * @param string $resourceId9
     *
     * @return $this
     */
    public function setResourceId9($resourceId9)
    {
        return $this->withResourceId9($resourceId9);
    }

    /**
     * @param string $resourceId9
     *
     * @return $this
     */
    public function withResourceId9($resourceId9)
    {
        $this->data['ResourceId9'] = $resourceId9;
        $this->options['query']['ResourceId.9'] = $resourceId9;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey8() instead.
     *
     * @param string $tagKey8
     *
     * @return $this
     */
    public function setTagKey8($tagKey8)
    {
        return $this->withTagKey8($tagKey8);
    }

    /**
     * @param string $tagKey8
     *
     * @return $this
     */
    public function withTagKey8($tagKey8)
    {
        $this->data['TagKey8'] = $tagKey8;
        $this->options['query']['TagKey.8'] = $tagKey8;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey20() instead.
     *
     * @param string $tagKey20
     *
     * @return $this
     */
    public function setTagKey20($tagKey20)
    {
        return $this->withTagKey20($tagKey20);
    }

    /**
     * @param string $tagKey20
     *
     * @return $this
     */
    public function withTagKey20($tagKey20)
    {
        $this->data['TagKey20'] = $tagKey20;
        $this->options['query']['TagKey.20'] = $tagKey20;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey7() instead.
     *
     * @param string $tagKey7
     *
     * @return $this
     */
    public function setTagKey7($tagKey7)
    {
        return $this->withTagKey7($tagKey7);
    }

    /**
     * @param string $tagKey7
     *
     * @return $this
     */
    public function withTagKey7($tagKey7)
    {
        $this->data['TagKey7'] = $tagKey7;
        $this->options['query']['TagKey.7'] = $tagKey7;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey6() instead.
     *
     * @param string $tagKey6
     *
     * @return $this
     */
    public function setTagKey6($tagKey6)
    {
        return $this->withTagKey6($tagKey6);
    }

    /**
     * @param string $tagKey6
     *
     * @return $this
     */
    public function withTagKey6($tagKey6)
    {
        $this->data['TagKey6'] = $tagKey6;
        $this->options['query']['TagKey.6'] = $tagKey6;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey5() instead.
     *
     * @param string $tagKey5
     *
     * @return $this
     */
    public function setTagKey5($tagKey5)
    {
        return $this->withTagKey5($tagKey5);
    }

    /**
     * @param string $tagKey5
     *
     * @return $this
     */
    public function withTagKey5($tagKey5)
    {
        $this->data['TagKey5'] = $tagKey5;
        $this->options['query']['TagKey.5'] = $tagKey5;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagOwnerBid() instead.
     *
     * @param string $tagOwnerBid
     *
     * @return $this
     */
    public function setTagOwnerBid($tagOwnerBid)
    {
        return $this->withTagOwnerBid($tagOwnerBid);
    }

    /**
     * @param string $tagOwnerBid
     *
     * @return $this
     */
    public function withTagOwnerBid($tagOwnerBid)
    {
        $this->data['TagOwnerBid'] = $tagOwnerBid;
        $this->options['query']['TagOwnerBid'] = $tagOwnerBid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId36() instead.
     *
     * @param string $resourceId36
     *
     * @return $this
     */
    public function setResourceId36($resourceId36)
    {
        return $this->withResourceId36($resourceId36);
    }

    /**
     * @param string $resourceId36
     *
     * @return $this
     */
    public function withResourceId36($resourceId36)
    {
        $this->data['ResourceId36'] = $resourceId36;
        $this->options['query']['ResourceId.36'] = $resourceId36;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId37() instead.
     *
     * @param string $resourceId37
     *
     * @return $this
     */
    public function setResourceId37($resourceId37)
    {
        return $this->withResourceId37($resourceId37);
    }

    /**
     * @param string $resourceId37
     *
     * @return $this
     */
    public function withResourceId37($resourceId37)
    {
        $this->data['ResourceId37'] = $resourceId37;
        $this->options['query']['ResourceId.37'] = $resourceId37;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId38() instead.
     *
     * @param string $resourceId38
     *
     * @return $this
     */
    public function setResourceId38($resourceId38)
    {
        return $this->withResourceId38($resourceId38);
    }

    /**
     * @param string $resourceId38
     *
     * @return $this
     */
    public function withResourceId38($resourceId38)
    {
        $this->data['ResourceId38'] = $resourceId38;
        $this->options['query']['ResourceId.38'] = $resourceId38;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId39() instead.
     *
     * @param string $resourceId39
     *
     * @return $this
     */
    public function setResourceId39($resourceId39)
    {
        return $this->withResourceId39($resourceId39);
    }

    /**
     * @param string $resourceId39
     *
     * @return $this
     */
    public function withResourceId39($resourceId39)
    {
        $this->data['ResourceId39'] = $resourceId39;
        $this->options['query']['ResourceId.39'] = $resourceId39;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId30() instead.
     *
     * @param string $resourceId30
     *
     * @return $this
     */
    public function setResourceId30($resourceId30)
    {
        return $this->withResourceId30($resourceId30);
    }

    /**
     * @param string $resourceId30
     *
     * @return $this
     */
    public function withResourceId30($resourceId30)
    {
        $this->data['ResourceId30'] = $resourceId30;
        $this->options['query']['ResourceId.30'] = $resourceId30;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId31() instead.
     *
     * @param string $resourceId31
     *
     * @return $this
     */
    public function setResourceId31($resourceId31)
    {
        return $this->withResourceId31($resourceId31);
    }

    /**
     * @param string $resourceId31
     *
     * @return $this
     */
    public function withResourceId31($resourceId31)
    {
        $this->data['ResourceId31'] = $resourceId31;
        $this->options['query']['ResourceId.31'] = $resourceId31;

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
     * @deprecated deprecated since version 2.0, Use withResourceId32() instead.
     *
     * @param string $resourceId32
     *
     * @return $this
     */
    public function setResourceId32($resourceId32)
    {
        return $this->withResourceId32($resourceId32);
    }

    /**
     * @param string $resourceId32
     *
     * @return $this
     */
    public function withResourceId32($resourceId32)
    {
        $this->data['ResourceId32'] = $resourceId32;
        $this->options['query']['ResourceId.32'] = $resourceId32;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId33() instead.
     *
     * @param string $resourceId33
     *
     * @return $this
     */
    public function setResourceId33($resourceId33)
    {
        return $this->withResourceId33($resourceId33);
    }

    /**
     * @param string $resourceId33
     *
     * @return $this
     */
    public function withResourceId33($resourceId33)
    {
        $this->data['ResourceId33'] = $resourceId33;
        $this->options['query']['ResourceId.33'] = $resourceId33;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId34() instead.
     *
     * @param string $resourceId34
     *
     * @return $this
     */
    public function setResourceId34($resourceId34)
    {
        return $this->withResourceId34($resourceId34);
    }

    /**
     * @param string $resourceId34
     *
     * @return $this
     */
    public function withResourceId34($resourceId34)
    {
        $this->data['ResourceId34'] = $resourceId34;
        $this->options['query']['ResourceId.34'] = $resourceId34;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId35() instead.
     *
     * @param string $resourceId35
     *
     * @return $this
     */
    public function setResourceId35($resourceId35)
    {
        return $this->withResourceId35($resourceId35);
    }

    /**
     * @param string $resourceId35
     *
     * @return $this
     */
    public function withResourceId35($resourceId35)
    {
        $this->data['ResourceId35'] = $resourceId35;
        $this->options['query']['ResourceId.35'] = $resourceId35;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId25() instead.
     *
     * @param string $resourceId25
     *
     * @return $this
     */
    public function setResourceId25($resourceId25)
    {
        return $this->withResourceId25($resourceId25);
    }

    /**
     * @param string $resourceId25
     *
     * @return $this
     */
    public function withResourceId25($resourceId25)
    {
        $this->data['ResourceId25'] = $resourceId25;
        $this->options['query']['ResourceId.25'] = $resourceId25;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId26() instead.
     *
     * @param string $resourceId26
     *
     * @return $this
     */
    public function setResourceId26($resourceId26)
    {
        return $this->withResourceId26($resourceId26);
    }

    /**
     * @param string $resourceId26
     *
     * @return $this
     */
    public function withResourceId26($resourceId26)
    {
        $this->data['ResourceId26'] = $resourceId26;
        $this->options['query']['ResourceId.26'] = $resourceId26;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId27() instead.
     *
     * @param string $resourceId27
     *
     * @return $this
     */
    public function setResourceId27($resourceId27)
    {
        return $this->withResourceId27($resourceId27);
    }

    /**
     * @param string $resourceId27
     *
     * @return $this
     */
    public function withResourceId27($resourceId27)
    {
        $this->data['ResourceId27'] = $resourceId27;
        $this->options['query']['ResourceId.27'] = $resourceId27;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId28() instead.
     *
     * @param string $resourceId28
     *
     * @return $this
     */
    public function setResourceId28($resourceId28)
    {
        return $this->withResourceId28($resourceId28);
    }

    /**
     * @param string $resourceId28
     *
     * @return $this
     */
    public function withResourceId28($resourceId28)
    {
        $this->data['ResourceId28'] = $resourceId28;
        $this->options['query']['ResourceId.28'] = $resourceId28;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId29() instead.
     *
     * @param string $resourceId29
     *
     * @return $this
     */
    public function setResourceId29($resourceId29)
    {
        return $this->withResourceId29($resourceId29);
    }

    /**
     * @param string $resourceId29
     *
     * @return $this
     */
    public function withResourceId29($resourceId29)
    {
        $this->data['ResourceId29'] = $resourceId29;
        $this->options['query']['ResourceId.29'] = $resourceId29;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagOwnerUid() instead.
     *
     * @param string $tagOwnerUid
     *
     * @return $this
     */
    public function setTagOwnerUid($tagOwnerUid)
    {
        return $this->withTagOwnerUid($tagOwnerUid);
    }

    /**
     * @param string $tagOwnerUid
     *
     * @return $this
     */
    public function withTagOwnerUid($tagOwnerUid)
    {
        $this->data['TagOwnerUid'] = $tagOwnerUid;
        $this->options['query']['TagOwnerUid'] = $tagOwnerUid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId20() instead.
     *
     * @param string $resourceId20
     *
     * @return $this
     */
    public function setResourceId20($resourceId20)
    {
        return $this->withResourceId20($resourceId20);
    }

    /**
     * @param string $resourceId20
     *
     * @return $this
     */
    public function withResourceId20($resourceId20)
    {
        $this->data['ResourceId20'] = $resourceId20;
        $this->options['query']['ResourceId.20'] = $resourceId20;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId21() instead.
     *
     * @param string $resourceId21
     *
     * @return $this
     */
    public function setResourceId21($resourceId21)
    {
        return $this->withResourceId21($resourceId21);
    }

    /**
     * @param string $resourceId21
     *
     * @return $this
     */
    public function withResourceId21($resourceId21)
    {
        $this->data['ResourceId21'] = $resourceId21;
        $this->options['query']['ResourceId.21'] = $resourceId21;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId22() instead.
     *
     * @param string $resourceId22
     *
     * @return $this
     */
    public function setResourceId22($resourceId22)
    {
        return $this->withResourceId22($resourceId22);
    }

    /**
     * @param string $resourceId22
     *
     * @return $this
     */
    public function withResourceId22($resourceId22)
    {
        $this->data['ResourceId22'] = $resourceId22;
        $this->options['query']['ResourceId.22'] = $resourceId22;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId23() instead.
     *
     * @param string $resourceId23
     *
     * @return $this
     */
    public function setResourceId23($resourceId23)
    {
        return $this->withResourceId23($resourceId23);
    }

    /**
     * @param string $resourceId23
     *
     * @return $this
     */
    public function withResourceId23($resourceId23)
    {
        $this->data['ResourceId23'] = $resourceId23;
        $this->options['query']['ResourceId.23'] = $resourceId23;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId24() instead.
     *
     * @param string $resourceId24
     *
     * @return $this
     */
    public function setResourceId24($resourceId24)
    {
        return $this->withResourceId24($resourceId24);
    }

    /**
     * @param string $resourceId24
     *
     * @return $this
     */
    public function withResourceId24($resourceId24)
    {
        $this->data['ResourceId24'] = $resourceId24;
        $this->options['query']['ResourceId.24'] = $resourceId24;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withScope() instead.
     *
     * @param string $scope
     *
     * @return $this
     */
    public function setScope($scope)
    {
        return $this->withScope($scope);
    }

    /**
     * @param string $scope
     *
     * @return $this
     */
    public function withScope($scope)
    {
        $this->data['Scope'] = $scope;
        $this->options['query']['Scope'] = $scope;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId14() instead.
     *
     * @param string $resourceId14
     *
     * @return $this
     */
    public function setResourceId14($resourceId14)
    {
        return $this->withResourceId14($resourceId14);
    }

    /**
     * @param string $resourceId14
     *
     * @return $this
     */
    public function withResourceId14($resourceId14)
    {
        $this->data['ResourceId14'] = $resourceId14;
        $this->options['query']['ResourceId.14'] = $resourceId14;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId15() instead.
     *
     * @param string $resourceId15
     *
     * @return $this
     */
    public function setResourceId15($resourceId15)
    {
        return $this->withResourceId15($resourceId15);
    }

    /**
     * @param string $resourceId15
     *
     * @return $this
     */
    public function withResourceId15($resourceId15)
    {
        $this->data['ResourceId15'] = $resourceId15;
        $this->options['query']['ResourceId.15'] = $resourceId15;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId16() instead.
     *
     * @param string $resourceId16
     *
     * @return $this
     */
    public function setResourceId16($resourceId16)
    {
        return $this->withResourceId16($resourceId16);
    }

    /**
     * @param string $resourceId16
     *
     * @return $this
     */
    public function withResourceId16($resourceId16)
    {
        $this->data['ResourceId16'] = $resourceId16;
        $this->options['query']['ResourceId.16'] = $resourceId16;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey19() instead.
     *
     * @param string $tagKey19
     *
     * @return $this
     */
    public function setTagKey19($tagKey19)
    {
        return $this->withTagKey19($tagKey19);
    }

    /**
     * @param string $tagKey19
     *
     * @return $this
     */
    public function withTagKey19($tagKey19)
    {
        $this->data['TagKey19'] = $tagKey19;
        $this->options['query']['TagKey.19'] = $tagKey19;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId17() instead.
     *
     * @param string $resourceId17
     *
     * @return $this
     */
    public function setResourceId17($resourceId17)
    {
        return $this->withResourceId17($resourceId17);
    }

    /**
     * @param string $resourceId17
     *
     * @return $this
     */
    public function withResourceId17($resourceId17)
    {
        $this->data['ResourceId17'] = $resourceId17;
        $this->options['query']['ResourceId.17'] = $resourceId17;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey18() instead.
     *
     * @param string $tagKey18
     *
     * @return $this
     */
    public function setTagKey18($tagKey18)
    {
        return $this->withTagKey18($tagKey18);
    }

    /**
     * @param string $tagKey18
     *
     * @return $this
     */
    public function withTagKey18($tagKey18)
    {
        $this->data['TagKey18'] = $tagKey18;
        $this->options['query']['TagKey.18'] = $tagKey18;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId18() instead.
     *
     * @param string $resourceId18
     *
     * @return $this
     */
    public function setResourceId18($resourceId18)
    {
        return $this->withResourceId18($resourceId18);
    }

    /**
     * @param string $resourceId18
     *
     * @return $this
     */
    public function withResourceId18($resourceId18)
    {
        $this->data['ResourceId18'] = $resourceId18;
        $this->options['query']['ResourceId.18'] = $resourceId18;

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
     * @deprecated deprecated since version 2.0, Use withResourceId19() instead.
     *
     * @param string $resourceId19
     *
     * @return $this
     */
    public function setResourceId19($resourceId19)
    {
        return $this->withResourceId19($resourceId19);
    }

    /**
     * @param string $resourceId19
     *
     * @return $this
     */
    public function withResourceId19($resourceId19)
    {
        $this->data['ResourceId19'] = $resourceId19;
        $this->options['query']['ResourceId.19'] = $resourceId19;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId50() instead.
     *
     * @param string $resourceId50
     *
     * @return $this
     */
    public function setResourceId50($resourceId50)
    {
        return $this->withResourceId50($resourceId50);
    }

    /**
     * @param string $resourceId50
     *
     * @return $this
     */
    public function withResourceId50($resourceId50)
    {
        $this->data['ResourceId50'] = $resourceId50;
        $this->options['query']['ResourceId.50'] = $resourceId50;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId10() instead.
     *
     * @param string $resourceId10
     *
     * @return $this
     */
    public function setResourceId10($resourceId10)
    {
        return $this->withResourceId10($resourceId10);
    }

    /**
     * @param string $resourceId10
     *
     * @return $this
     */
    public function withResourceId10($resourceId10)
    {
        $this->data['ResourceId10'] = $resourceId10;
        $this->options['query']['ResourceId.10'] = $resourceId10;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceType() instead.
     *
     * @param string $resourceType
     *
     * @return $this
     */
    public function setResourceType($resourceType)
    {
        return $this->withResourceType($resourceType);
    }

    /**
     * @param string $resourceType
     *
     * @return $this
     */
    public function withResourceType($resourceType)
    {
        $this->data['ResourceType'] = $resourceType;
        $this->options['query']['ResourceType'] = $resourceType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId11() instead.
     *
     * @param string $resourceId11
     *
     * @return $this
     */
    public function setResourceId11($resourceId11)
    {
        return $this->withResourceId11($resourceId11);
    }

    /**
     * @param string $resourceId11
     *
     * @return $this
     */
    public function withResourceId11($resourceId11)
    {
        $this->data['ResourceId11'] = $resourceId11;
        $this->options['query']['ResourceId.11'] = $resourceId11;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId12() instead.
     *
     * @param string $resourceId12
     *
     * @return $this
     */
    public function setResourceId12($resourceId12)
    {
        return $this->withResourceId12($resourceId12);
    }

    /**
     * @param string $resourceId12
     *
     * @return $this
     */
    public function withResourceId12($resourceId12)
    {
        $this->data['ResourceId12'] = $resourceId12;
        $this->options['query']['ResourceId.12'] = $resourceId12;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withResourceId13() instead.
     *
     * @param string $resourceId13
     *
     * @return $this
     */
    public function setResourceId13($resourceId13)
    {
        return $this->withResourceId13($resourceId13);
    }

    /**
     * @param string $resourceId13
     *
     * @return $this
     */
    public function withResourceId13($resourceId13)
    {
        $this->data['ResourceId13'] = $resourceId13;
        $this->options['query']['ResourceId.13'] = $resourceId13;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey13() instead.
     *
     * @param string $tagKey13
     *
     * @return $this
     */
    public function setTagKey13($tagKey13)
    {
        return $this->withTagKey13($tagKey13);
    }

    /**
     * @param string $tagKey13
     *
     * @return $this
     */
    public function withTagKey13($tagKey13)
    {
        $this->data['TagKey13'] = $tagKey13;
        $this->options['query']['TagKey.13'] = $tagKey13;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey12() instead.
     *
     * @param string $tagKey12
     *
     * @return $this
     */
    public function setTagKey12($tagKey12)
    {
        return $this->withTagKey12($tagKey12);
    }

    /**
     * @param string $tagKey12
     *
     * @return $this
     */
    public function withTagKey12($tagKey12)
    {
        $this->data['TagKey12'] = $tagKey12;
        $this->options['query']['TagKey.12'] = $tagKey12;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey11() instead.
     *
     * @param string $tagKey11
     *
     * @return $this
     */
    public function setTagKey11($tagKey11)
    {
        return $this->withTagKey11($tagKey11);
    }

    /**
     * @param string $tagKey11
     *
     * @return $this
     */
    public function withTagKey11($tagKey11)
    {
        $this->data['TagKey11'] = $tagKey11;
        $this->options['query']['TagKey.11'] = $tagKey11;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey10() instead.
     *
     * @param string $tagKey10
     *
     * @return $this
     */
    public function setTagKey10($tagKey10)
    {
        return $this->withTagKey10($tagKey10);
    }

    /**
     * @param string $tagKey10
     *
     * @return $this
     */
    public function withTagKey10($tagKey10)
    {
        $this->data['TagKey10'] = $tagKey10;
        $this->options['query']['TagKey.10'] = $tagKey10;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey17() instead.
     *
     * @param string $tagKey17
     *
     * @return $this
     */
    public function setTagKey17($tagKey17)
    {
        return $this->withTagKey17($tagKey17);
    }

    /**
     * @param string $tagKey17
     *
     * @return $this
     */
    public function withTagKey17($tagKey17)
    {
        $this->data['TagKey17'] = $tagKey17;
        $this->options['query']['TagKey.17'] = $tagKey17;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey16() instead.
     *
     * @param string $tagKey16
     *
     * @return $this
     */
    public function setTagKey16($tagKey16)
    {
        return $this->withTagKey16($tagKey16);
    }

    /**
     * @param string $tagKey16
     *
     * @return $this
     */
    public function withTagKey16($tagKey16)
    {
        $this->data['TagKey16'] = $tagKey16;
        $this->options['query']['TagKey.16'] = $tagKey16;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey15() instead.
     *
     * @param string $tagKey15
     *
     * @return $this
     */
    public function setTagKey15($tagKey15)
    {
        return $this->withTagKey15($tagKey15);
    }

    /**
     * @param string $tagKey15
     *
     * @return $this
     */
    public function withTagKey15($tagKey15)
    {
        $this->data['TagKey15'] = $tagKey15;
        $this->options['query']['TagKey.15'] = $tagKey15;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTagKey14() instead.
     *
     * @param string $tagKey14
     *
     * @return $this
     */
    public function setTagKey14($tagKey14)
    {
        return $this->withTagKey14($tagKey14);
    }

    /**
     * @param string $tagKey14
     *
     * @return $this
     */
    public function withTagKey14($tagKey14)
    {
        $this->data['TagKey14'] = $tagKey14;
        $this->options['query']['TagKey.14'] = $tagKey14;

        return $this;
    }
}
