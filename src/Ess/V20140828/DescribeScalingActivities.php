<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getScalingActivityId9()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingActivityId5()
 * @method string getScalingActivityId6()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getScalingActivityId7()
 * @method string getScalingActivityId8()
 * @method string getScalingActivityId1()
 * @method string getScalingActivityId2()
 * @method string getScalingActivityId3()
 * @method string getScalingActivityId4()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getStatusCode()
 * @method $this withStatusCode($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
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
 * @method $this withResourceOwnerAccount($value)
 * @method string getScalingActivityId18()
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingActivityId20()
 */
class DescribeScalingActivities extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

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
