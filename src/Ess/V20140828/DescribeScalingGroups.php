<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingGroupId10()
 * @method string getScalingGroupId12()
 * @method string getScalingGroupId13()
 * @method string getScalingGroupId14()
 * @method string getScalingGroupId15()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingGroupName20()
 * @method string getScalingGroupName19()
 * @method string getScalingGroupId20()
 * @method string getScalingGroupName18()
 * @method string getScalingGroupName17()
 * @method string getScalingGroupName16()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingGroupName()
 * @method $this withScalingGroupName($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
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
class DescribeScalingGroups extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

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
