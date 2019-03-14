<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * Api ListTagResources
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
 * @method string getTag6Value()
 * @method string getResourceId20()
 * @method string getResourceId21()
 * @method string getTag21Key()
 * @method string getResourceId22()
 * @method string getResourceId23()
 * @method string getResourceId24()
 * @method string getTag14Key()
 * @method string getNextToken()
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
 * @method string getTag10Value()
 * @method string getTag3Value()
 * @method string getTag21Value()
 * @method string getResourceId50()
 * @method string getTag16Value()
 * @method string getResourceId51()
 * @method string getTag1Key()
 * @method string getTag8Key()
 * @method string getTag11Key()
 * @method string getTag2Value()
 */
class ListTagResources extends Rpc
{
    public $product = 'Rds';

    public $version = '2014-08-15';

    public $method = 'POST';

    public $serviceCode = 'rds';

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
     * @param string $tag21Key
     *
     * @return $this
     */
    public function withTag21Key($tag21Key)
    {
        $this->data['Tag21Key'] = $tag21Key;
        $this->options['query']['Tag.21.Key'] = $tag21Key;

        return $this;
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
     * @param string $nextToken
     *
     * @return $this
     */
    public function withNextToken($nextToken)
    {
        $this->data['NextToken'] = $nextToken;
        $this->options['query']['NextToken'] = $nextToken;

        return $this;
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
     * @param string $tag21Value
     *
     * @return $this
     */
    public function withTag21Value($tag21Value)
    {
        $this->data['Tag21Value'] = $tag21Value;
        $this->options['query']['Tag.21.Value'] = $tag21Value;

        return $this;
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
     * @param string $resourceId51
     *
     * @return $this
     */
    public function withResourceId51($resourceId51)
    {
        $this->data['ResourceId51'] = $resourceId51;
        $this->options['query']['ResourceId.51'] = $resourceId51;

        return $this;
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
