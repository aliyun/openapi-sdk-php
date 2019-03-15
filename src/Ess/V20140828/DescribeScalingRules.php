<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getScalingRuleName1()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingRuleName2()
 * @method string getScalingRuleName3()
 * @method string getScalingRuleName4()
 * @method string getScalingRuleName5()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getScalingRuleName6()
 * @method string getScalingRuleName7()
 * @method string getScalingRuleName8()
 * @method string getScalingRuleAri9()
 * @method string getScalingRuleName9()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingRuleType()
 * @method $this withScalingRuleType($value)
 * @method string getScalingRuleId10()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
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
 * @method string getShowAlarmRules()
 * @method $this withShowAlarmRules($value)
 * @method string getScalingRuleId5()
 * @method string getScalingRuleId6()
 * @method string getScalingRuleId7()
 * @method string getScalingRuleId1()
 * @method string getScalingRuleId2()
 * @method string getScalingRuleId3()
 */
class DescribeScalingRules extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

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
