<?php

namespace AlibabaCloud\Rds\V20140815;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceId47()
 * @method string getResourceId48()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
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
 * @method string getTagKey21()
 * @method string getResourceId36()
 * @method string getAll()
 * @method $this withAll($value)
 * @method string getResourceId37()
 * @method string getResourceId38()
 * @method string getResourceId39()
 * @method string getResourceId30()
 * @method string getResourceId31()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getResourceId32()
 * @method string getResourceId33()
 * @method string getResourceId34()
 * @method string getResourceId35()
 * @method string getResourceId25()
 * @method string getResourceId26()
 * @method string getResourceId27()
 * @method string getResourceId28()
 * @method string getResourceId29()
 * @method string getResourceId20()
 * @method string getResourceId21()
 * @method string getResourceId22()
 * @method string getResourceId23()
 * @method string getResourceId24()
 * @method string getResourceId14()
 * @method string getResourceId15()
 * @method string getResourceId16()
 * @method string getTagKey19()
 * @method string getResourceId17()
 * @method string getTagKey18()
 * @method string getResourceId18()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getResourceId19()
 * @method string getResourceId50()
 * @method string getResourceId51()
 * @method string getResourceId10()
 * @method string getResourceType()
 * @method $this withResourceType($value)
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
class UntagResources extends Rpc
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
     * @param string $tagKey21
     *
     * @return $this
     */
    public function withTagKey21($tagKey21)
    {
        $this->data['TagKey21'] = $tagKey21;
        $this->options['query']['TagKey.21'] = $tagKey21;

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
