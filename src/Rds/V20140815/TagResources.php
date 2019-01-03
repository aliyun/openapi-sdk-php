<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of TagResources
 *
 * @method string getResourceId47()
 * @method string getResourceId48()
 * @method string getResourceId49()
 * @method string getTag2Key()
 * @method string getTag12Value()
 * @method string getResourceId40()
 * @method string getResourceId41()
 * @method string getResourceId42()
 * @method string getResourceId1()
 * @method string getResourceId43()
 * @method string getResourceId2()
 * @method string getResourceId44()
 * @method string getResourceId3()
 * @method string getResourceId45()
 * @method string getResourceId4()
 * @method string getResourceId46()
 * @method string getResourceId5()
 * @method string getResourceId6()
 * @method string getResourceId7()
 * @method string getResourceId8()
 * @method string getResourceId9()
 * @method string getTag15Value()
 * @method string getTag18Key()
 * @method string getTagOwnerBid()
 * @method string getTag8Value()
 * @method string getTag18Value()
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
 * @method string getTag16Key()
 * @method string getTag4Key()
 * @method string getResourceId25()
 * @method string getResourceId26()
 * @method string getResourceId27()
 * @method string getResourceId28()
 * @method string getResourceId29()
 * @method string getTag7Key()
 * @method string getTag12Key()
 * @method string getTagOwnerUid()
 * @method string getTag6Value()
 * @method string getResourceId20()
 * @method string getResourceId21()
 * @method string getResourceId22()
 * @method string getResourceId23()
 * @method string getResourceId24()
 * @method string getTag14Key()
 * @method string getTag13Value()
 * @method string getResourceId14()
 * @method string getResourceId15()
 * @method string getTag10Key()
 * @method string getResourceId16()
 * @method string getResourceId17()
 * @method string getResourceId18()
 * @method string getResourceOwnerAccount()
 * @method string getResourceId19()
 * @method string getTag19Key()
 * @method string getResourceId10()
 * @method string getResourceType()
 * @method string getResourceId11()
 * @method string getTag5Value()
 * @method string getResourceId12()
 * @method string getResourceId13()
 * @method string getTag9Key()
 * @method string getTag19Value()
 * @method string getTag4Value()
 * @method string getResourceOwnerId()
 * @method string getTag17Key()
 * @method string getTag3Key()
 * @method string getTag1Value()
 * @method string getTag15Key()
 * @method string getTag11Value()
 * @method string getTag5Key()
 * @method string getTag14Value()
 * @method string getTag7Value()
 * @method string getTag20Key()
 * @method string getTag20Value()
 * @method string getTag17Value()
 * @method string getTag13Key()
 * @method string getTag9Value()
 * @method string getTag6Key()
 * @method string getScope()
 * @method string getTag10Value()
 * @method string getTag3Value()
 * @method string getResourceId50()
 * @method string getTag16Value()
 * @method string getTag1Key()
 * @method string getTag8Key()
 * @method string getTag11Key()
 * @method string getTag2Value()
 */
class TagResources extends RpcRequest
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
    public $action = 'TagResources';

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
     * @deprecated deprecated since version 2.0, Use withTag2Key() instead.
     *
     * @param string $tag2Key
     *
     * @return $this
     */
    public function setTag2Key($tag2Key)
    {
        return $this->withTag2Key($tag2Key);
    }

    /**
     * @param string $tag2Key
     *
     * @return $this
     */
    public function withTag2Key($tag2Key)
    {
        $this->data['Tag2Key'] = $tag2Key;
        $this->options['query']['Tag.2.Key'] = $tag2Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag12Value() instead.
     *
     * @param string $tag12Value
     *
     * @return $this
     */
    public function setTag12Value($tag12Value)
    {
        return $this->withTag12Value($tag12Value);
    }

    /**
     * @param string $tag12Value
     *
     * @return $this
     */
    public function withTag12Value($tag12Value)
    {
        $this->data['Tag12Value'] = $tag12Value;
        $this->options['query']['Tag.12.Value'] = $tag12Value;

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
     * @deprecated deprecated since version 2.0, Use withTag15Value() instead.
     *
     * @param string $tag15Value
     *
     * @return $this
     */
    public function setTag15Value($tag15Value)
    {
        return $this->withTag15Value($tag15Value);
    }

    /**
     * @param string $tag15Value
     *
     * @return $this
     */
    public function withTag15Value($tag15Value)
    {
        $this->data['Tag15Value'] = $tag15Value;
        $this->options['query']['Tag.15.Value'] = $tag15Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag18Key() instead.
     *
     * @param string $tag18Key
     *
     * @return $this
     */
    public function setTag18Key($tag18Key)
    {
        return $this->withTag18Key($tag18Key);
    }

    /**
     * @param string $tag18Key
     *
     * @return $this
     */
    public function withTag18Key($tag18Key)
    {
        $this->data['Tag18Key'] = $tag18Key;
        $this->options['query']['Tag.18.Key'] = $tag18Key;

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
     * @deprecated deprecated since version 2.0, Use withTag8Value() instead.
     *
     * @param string $tag8Value
     *
     * @return $this
     */
    public function setTag8Value($tag8Value)
    {
        return $this->withTag8Value($tag8Value);
    }

    /**
     * @param string $tag8Value
     *
     * @return $this
     */
    public function withTag8Value($tag8Value)
    {
        $this->data['Tag8Value'] = $tag8Value;
        $this->options['query']['Tag.8.Value'] = $tag8Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag18Value() instead.
     *
     * @param string $tag18Value
     *
     * @return $this
     */
    public function setTag18Value($tag18Value)
    {
        return $this->withTag18Value($tag18Value);
    }

    /**
     * @param string $tag18Value
     *
     * @return $this
     */
    public function withTag18Value($tag18Value)
    {
        $this->data['Tag18Value'] = $tag18Value;
        $this->options['query']['Tag.18.Value'] = $tag18Value;

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
     * @deprecated deprecated since version 2.0, Use withTag16Key() instead.
     *
     * @param string $tag16Key
     *
     * @return $this
     */
    public function setTag16Key($tag16Key)
    {
        return $this->withTag16Key($tag16Key);
    }

    /**
     * @param string $tag16Key
     *
     * @return $this
     */
    public function withTag16Key($tag16Key)
    {
        $this->data['Tag16Key'] = $tag16Key;
        $this->options['query']['Tag.16.Key'] = $tag16Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag4Key() instead.
     *
     * @param string $tag4Key
     *
     * @return $this
     */
    public function setTag4Key($tag4Key)
    {
        return $this->withTag4Key($tag4Key);
    }

    /**
     * @param string $tag4Key
     *
     * @return $this
     */
    public function withTag4Key($tag4Key)
    {
        $this->data['Tag4Key'] = $tag4Key;
        $this->options['query']['Tag.4.Key'] = $tag4Key;

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
     * @deprecated deprecated since version 2.0, Use withTag7Key() instead.
     *
     * @param string $tag7Key
     *
     * @return $this
     */
    public function setTag7Key($tag7Key)
    {
        return $this->withTag7Key($tag7Key);
    }

    /**
     * @param string $tag7Key
     *
     * @return $this
     */
    public function withTag7Key($tag7Key)
    {
        $this->data['Tag7Key'] = $tag7Key;
        $this->options['query']['Tag.7.Key'] = $tag7Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag12Key() instead.
     *
     * @param string $tag12Key
     *
     * @return $this
     */
    public function setTag12Key($tag12Key)
    {
        return $this->withTag12Key($tag12Key);
    }

    /**
     * @param string $tag12Key
     *
     * @return $this
     */
    public function withTag12Key($tag12Key)
    {
        $this->data['Tag12Key'] = $tag12Key;
        $this->options['query']['Tag.12.Key'] = $tag12Key;

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
     * @deprecated deprecated since version 2.0, Use withTag6Value() instead.
     *
     * @param string $tag6Value
     *
     * @return $this
     */
    public function setTag6Value($tag6Value)
    {
        return $this->withTag6Value($tag6Value);
    }

    /**
     * @param string $tag6Value
     *
     * @return $this
     */
    public function withTag6Value($tag6Value)
    {
        $this->data['Tag6Value'] = $tag6Value;
        $this->options['query']['Tag.6.Value'] = $tag6Value;

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
     * @deprecated deprecated since version 2.0, Use withTag14Key() instead.
     *
     * @param string $tag14Key
     *
     * @return $this
     */
    public function setTag14Key($tag14Key)
    {
        return $this->withTag14Key($tag14Key);
    }

    /**
     * @param string $tag14Key
     *
     * @return $this
     */
    public function withTag14Key($tag14Key)
    {
        $this->data['Tag14Key'] = $tag14Key;
        $this->options['query']['Tag.14.Key'] = $tag14Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag13Value() instead.
     *
     * @param string $tag13Value
     *
     * @return $this
     */
    public function setTag13Value($tag13Value)
    {
        return $this->withTag13Value($tag13Value);
    }

    /**
     * @param string $tag13Value
     *
     * @return $this
     */
    public function withTag13Value($tag13Value)
    {
        $this->data['Tag13Value'] = $tag13Value;
        $this->options['query']['Tag.13.Value'] = $tag13Value;

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
     * @deprecated deprecated since version 2.0, Use withTag10Key() instead.
     *
     * @param string $tag10Key
     *
     * @return $this
     */
    public function setTag10Key($tag10Key)
    {
        return $this->withTag10Key($tag10Key);
    }

    /**
     * @param string $tag10Key
     *
     * @return $this
     */
    public function withTag10Key($tag10Key)
    {
        $this->data['Tag10Key'] = $tag10Key;
        $this->options['query']['Tag.10.Key'] = $tag10Key;

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
     * @deprecated deprecated since version 2.0, Use withTag19Key() instead.
     *
     * @param string $tag19Key
     *
     * @return $this
     */
    public function setTag19Key($tag19Key)
    {
        return $this->withTag19Key($tag19Key);
    }

    /**
     * @param string $tag19Key
     *
     * @return $this
     */
    public function withTag19Key($tag19Key)
    {
        $this->data['Tag19Key'] = $tag19Key;
        $this->options['query']['Tag.19.Key'] = $tag19Key;

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
     * @deprecated deprecated since version 2.0, Use withTag5Value() instead.
     *
     * @param string $tag5Value
     *
     * @return $this
     */
    public function setTag5Value($tag5Value)
    {
        return $this->withTag5Value($tag5Value);
    }

    /**
     * @param string $tag5Value
     *
     * @return $this
     */
    public function withTag5Value($tag5Value)
    {
        $this->data['Tag5Value'] = $tag5Value;
        $this->options['query']['Tag.5.Value'] = $tag5Value;

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
     * @deprecated deprecated since version 2.0, Use withTag9Key() instead.
     *
     * @param string $tag9Key
     *
     * @return $this
     */
    public function setTag9Key($tag9Key)
    {
        return $this->withTag9Key($tag9Key);
    }

    /**
     * @param string $tag9Key
     *
     * @return $this
     */
    public function withTag9Key($tag9Key)
    {
        $this->data['Tag9Key'] = $tag9Key;
        $this->options['query']['Tag.9.Key'] = $tag9Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag19Value() instead.
     *
     * @param string $tag19Value
     *
     * @return $this
     */
    public function setTag19Value($tag19Value)
    {
        return $this->withTag19Value($tag19Value);
    }

    /**
     * @param string $tag19Value
     *
     * @return $this
     */
    public function withTag19Value($tag19Value)
    {
        $this->data['Tag19Value'] = $tag19Value;
        $this->options['query']['Tag.19.Value'] = $tag19Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag4Value() instead.
     *
     * @param string $tag4Value
     *
     * @return $this
     */
    public function setTag4Value($tag4Value)
    {
        return $this->withTag4Value($tag4Value);
    }

    /**
     * @param string $tag4Value
     *
     * @return $this
     */
    public function withTag4Value($tag4Value)
    {
        $this->data['Tag4Value'] = $tag4Value;
        $this->options['query']['Tag.4.Value'] = $tag4Value;

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
     * @deprecated deprecated since version 2.0, Use withTag17Key() instead.
     *
     * @param string $tag17Key
     *
     * @return $this
     */
    public function setTag17Key($tag17Key)
    {
        return $this->withTag17Key($tag17Key);
    }

    /**
     * @param string $tag17Key
     *
     * @return $this
     */
    public function withTag17Key($tag17Key)
    {
        $this->data['Tag17Key'] = $tag17Key;
        $this->options['query']['Tag.17.Key'] = $tag17Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag3Key() instead.
     *
     * @param string $tag3Key
     *
     * @return $this
     */
    public function setTag3Key($tag3Key)
    {
        return $this->withTag3Key($tag3Key);
    }

    /**
     * @param string $tag3Key
     *
     * @return $this
     */
    public function withTag3Key($tag3Key)
    {
        $this->data['Tag3Key'] = $tag3Key;
        $this->options['query']['Tag.3.Key'] = $tag3Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag1Value() instead.
     *
     * @param string $tag1Value
     *
     * @return $this
     */
    public function setTag1Value($tag1Value)
    {
        return $this->withTag1Value($tag1Value);
    }

    /**
     * @param string $tag1Value
     *
     * @return $this
     */
    public function withTag1Value($tag1Value)
    {
        $this->data['Tag1Value'] = $tag1Value;
        $this->options['query']['Tag.1.Value'] = $tag1Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag15Key() instead.
     *
     * @param string $tag15Key
     *
     * @return $this
     */
    public function setTag15Key($tag15Key)
    {
        return $this->withTag15Key($tag15Key);
    }

    /**
     * @param string $tag15Key
     *
     * @return $this
     */
    public function withTag15Key($tag15Key)
    {
        $this->data['Tag15Key'] = $tag15Key;
        $this->options['query']['Tag.15.Key'] = $tag15Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag11Value() instead.
     *
     * @param string $tag11Value
     *
     * @return $this
     */
    public function setTag11Value($tag11Value)
    {
        return $this->withTag11Value($tag11Value);
    }

    /**
     * @param string $tag11Value
     *
     * @return $this
     */
    public function withTag11Value($tag11Value)
    {
        $this->data['Tag11Value'] = $tag11Value;
        $this->options['query']['Tag.11.Value'] = $tag11Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag5Key() instead.
     *
     * @param string $tag5Key
     *
     * @return $this
     */
    public function setTag5Key($tag5Key)
    {
        return $this->withTag5Key($tag5Key);
    }

    /**
     * @param string $tag5Key
     *
     * @return $this
     */
    public function withTag5Key($tag5Key)
    {
        $this->data['Tag5Key'] = $tag5Key;
        $this->options['query']['Tag.5.Key'] = $tag5Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag14Value() instead.
     *
     * @param string $tag14Value
     *
     * @return $this
     */
    public function setTag14Value($tag14Value)
    {
        return $this->withTag14Value($tag14Value);
    }

    /**
     * @param string $tag14Value
     *
     * @return $this
     */
    public function withTag14Value($tag14Value)
    {
        $this->data['Tag14Value'] = $tag14Value;
        $this->options['query']['Tag.14.Value'] = $tag14Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag7Value() instead.
     *
     * @param string $tag7Value
     *
     * @return $this
     */
    public function setTag7Value($tag7Value)
    {
        return $this->withTag7Value($tag7Value);
    }

    /**
     * @param string $tag7Value
     *
     * @return $this
     */
    public function withTag7Value($tag7Value)
    {
        $this->data['Tag7Value'] = $tag7Value;
        $this->options['query']['Tag.7.Value'] = $tag7Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag20Key() instead.
     *
     * @param string $tag20Key
     *
     * @return $this
     */
    public function setTag20Key($tag20Key)
    {
        return $this->withTag20Key($tag20Key);
    }

    /**
     * @param string $tag20Key
     *
     * @return $this
     */
    public function withTag20Key($tag20Key)
    {
        $this->data['Tag20Key'] = $tag20Key;
        $this->options['query']['Tag.20.Key'] = $tag20Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag20Value() instead.
     *
     * @param string $tag20Value
     *
     * @return $this
     */
    public function setTag20Value($tag20Value)
    {
        return $this->withTag20Value($tag20Value);
    }

    /**
     * @param string $tag20Value
     *
     * @return $this
     */
    public function withTag20Value($tag20Value)
    {
        $this->data['Tag20Value'] = $tag20Value;
        $this->options['query']['Tag.20.Value'] = $tag20Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag17Value() instead.
     *
     * @param string $tag17Value
     *
     * @return $this
     */
    public function setTag17Value($tag17Value)
    {
        return $this->withTag17Value($tag17Value);
    }

    /**
     * @param string $tag17Value
     *
     * @return $this
     */
    public function withTag17Value($tag17Value)
    {
        $this->data['Tag17Value'] = $tag17Value;
        $this->options['query']['Tag.17.Value'] = $tag17Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag13Key() instead.
     *
     * @param string $tag13Key
     *
     * @return $this
     */
    public function setTag13Key($tag13Key)
    {
        return $this->withTag13Key($tag13Key);
    }

    /**
     * @param string $tag13Key
     *
     * @return $this
     */
    public function withTag13Key($tag13Key)
    {
        $this->data['Tag13Key'] = $tag13Key;
        $this->options['query']['Tag.13.Key'] = $tag13Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag9Value() instead.
     *
     * @param string $tag9Value
     *
     * @return $this
     */
    public function setTag9Value($tag9Value)
    {
        return $this->withTag9Value($tag9Value);
    }

    /**
     * @param string $tag9Value
     *
     * @return $this
     */
    public function withTag9Value($tag9Value)
    {
        $this->data['Tag9Value'] = $tag9Value;
        $this->options['query']['Tag.9.Value'] = $tag9Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag6Key() instead.
     *
     * @param string $tag6Key
     *
     * @return $this
     */
    public function setTag6Key($tag6Key)
    {
        return $this->withTag6Key($tag6Key);
    }

    /**
     * @param string $tag6Key
     *
     * @return $this
     */
    public function withTag6Key($tag6Key)
    {
        $this->data['Tag6Key'] = $tag6Key;
        $this->options['query']['Tag.6.Key'] = $tag6Key;

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
     * @deprecated deprecated since version 2.0, Use withTag10Value() instead.
     *
     * @param string $tag10Value
     *
     * @return $this
     */
    public function setTag10Value($tag10Value)
    {
        return $this->withTag10Value($tag10Value);
    }

    /**
     * @param string $tag10Value
     *
     * @return $this
     */
    public function withTag10Value($tag10Value)
    {
        $this->data['Tag10Value'] = $tag10Value;
        $this->options['query']['Tag.10.Value'] = $tag10Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag3Value() instead.
     *
     * @param string $tag3Value
     *
     * @return $this
     */
    public function setTag3Value($tag3Value)
    {
        return $this->withTag3Value($tag3Value);
    }

    /**
     * @param string $tag3Value
     *
     * @return $this
     */
    public function withTag3Value($tag3Value)
    {
        $this->data['Tag3Value'] = $tag3Value;
        $this->options['query']['Tag.3.Value'] = $tag3Value;

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
     * @deprecated deprecated since version 2.0, Use withTag16Value() instead.
     *
     * @param string $tag16Value
     *
     * @return $this
     */
    public function setTag16Value($tag16Value)
    {
        return $this->withTag16Value($tag16Value);
    }

    /**
     * @param string $tag16Value
     *
     * @return $this
     */
    public function withTag16Value($tag16Value)
    {
        $this->data['Tag16Value'] = $tag16Value;
        $this->options['query']['Tag.16.Value'] = $tag16Value;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag1Key() instead.
     *
     * @param string $tag1Key
     *
     * @return $this
     */
    public function setTag1Key($tag1Key)
    {
        return $this->withTag1Key($tag1Key);
    }

    /**
     * @param string $tag1Key
     *
     * @return $this
     */
    public function withTag1Key($tag1Key)
    {
        $this->data['Tag1Key'] = $tag1Key;
        $this->options['query']['Tag.1.Key'] = $tag1Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag8Key() instead.
     *
     * @param string $tag8Key
     *
     * @return $this
     */
    public function setTag8Key($tag8Key)
    {
        return $this->withTag8Key($tag8Key);
    }

    /**
     * @param string $tag8Key
     *
     * @return $this
     */
    public function withTag8Key($tag8Key)
    {
        $this->data['Tag8Key'] = $tag8Key;
        $this->options['query']['Tag.8.Key'] = $tag8Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag11Key() instead.
     *
     * @param string $tag11Key
     *
     * @return $this
     */
    public function setTag11Key($tag11Key)
    {
        return $this->withTag11Key($tag11Key);
    }

    /**
     * @param string $tag11Key
     *
     * @return $this
     */
    public function withTag11Key($tag11Key)
    {
        $this->data['Tag11Key'] = $tag11Key;
        $this->options['query']['Tag.11.Key'] = $tag11Key;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withTag2Value() instead.
     *
     * @param string $tag2Value
     *
     * @return $this
     */
    public function setTag2Value($tag2Value)
    {
        return $this->withTag2Value($tag2Value);
    }

    /**
     * @param string $tag2Value
     *
     * @return $this
     */
    public function withTag2Value($tag2Value)
    {
        $this->data['Tag2Value'] = $tag2Value;
        $this->options['query']['Tag.2.Value'] = $tag2Value;

        return $this;
    }
}
