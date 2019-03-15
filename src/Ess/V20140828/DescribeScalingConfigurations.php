<?php

namespace AlibabaCloud\Ess\V20140828;

use AlibabaCloud\Rpc;

/**
 * @method string getScalingConfigurationId6()
 * @method string getScalingConfigurationId7()
 * @method string getResourceOwnerId()
 * @method $this withResourceOwnerId($value)
 * @method string getScalingConfigurationId4()
 * @method string getScalingConfigurationId5()
 * @method string getScalingGroupId()
 * @method $this withScalingGroupId($value)
 * @method string getScalingConfigurationId8()
 * @method string getScalingConfigurationId9()
 * @method string getScalingConfigurationId10()
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getScalingConfigurationName2()
 * @method string getScalingConfigurationName3()
 * @method string getScalingConfigurationName1()
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getScalingConfigurationId2()
 * @method string getScalingConfigurationId3()
 * @method string getScalingConfigurationId1()
 * @method string getResourceOwnerAccount()
 * @method $this withResourceOwnerAccount($value)
 * @method string getOwnerAccount()
 * @method $this withOwnerAccount($value)
 * @method string getScalingConfigurationName6()
 * @method string getScalingConfigurationName7()
 * @method string getScalingConfigurationName4()
 * @method string getScalingConfigurationName5()
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getScalingConfigurationName8()
 * @method string getScalingConfigurationName9()
 * @method string getScalingConfigurationName10()
 */
class DescribeScalingConfigurations extends Rpc
{
    public $product = 'Ess';

    public $version = '2014-08-28';

    public $method = 'POST';

    public $serviceCode = 'ess';

    /**
     * @param string $scalingConfigurationId6
     *
     * @return $this
     */
    public function withScalingConfigurationId6($scalingConfigurationId6)
    {
        $this->data['ScalingConfigurationId6'] = $scalingConfigurationId6;
        $this->options['query']['ScalingConfigurationId.6'] = $scalingConfigurationId6;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId7
     *
     * @return $this
     */
    public function withScalingConfigurationId7($scalingConfigurationId7)
    {
        $this->data['ScalingConfigurationId7'] = $scalingConfigurationId7;
        $this->options['query']['ScalingConfigurationId.7'] = $scalingConfigurationId7;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId4
     *
     * @return $this
     */
    public function withScalingConfigurationId4($scalingConfigurationId4)
    {
        $this->data['ScalingConfigurationId4'] = $scalingConfigurationId4;
        $this->options['query']['ScalingConfigurationId.4'] = $scalingConfigurationId4;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId5
     *
     * @return $this
     */
    public function withScalingConfigurationId5($scalingConfigurationId5)
    {
        $this->data['ScalingConfigurationId5'] = $scalingConfigurationId5;
        $this->options['query']['ScalingConfigurationId.5'] = $scalingConfigurationId5;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId8
     *
     * @return $this
     */
    public function withScalingConfigurationId8($scalingConfigurationId8)
    {
        $this->data['ScalingConfigurationId8'] = $scalingConfigurationId8;
        $this->options['query']['ScalingConfigurationId.8'] = $scalingConfigurationId8;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId9
     *
     * @return $this
     */
    public function withScalingConfigurationId9($scalingConfigurationId9)
    {
        $this->data['ScalingConfigurationId9'] = $scalingConfigurationId9;
        $this->options['query']['ScalingConfigurationId.9'] = $scalingConfigurationId9;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId10
     *
     * @return $this
     */
    public function withScalingConfigurationId10($scalingConfigurationId10)
    {
        $this->data['ScalingConfigurationId10'] = $scalingConfigurationId10;
        $this->options['query']['ScalingConfigurationId.10'] = $scalingConfigurationId10;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName2
     *
     * @return $this
     */
    public function withScalingConfigurationName2($scalingConfigurationName2)
    {
        $this->data['ScalingConfigurationName2'] = $scalingConfigurationName2;
        $this->options['query']['ScalingConfigurationName.2'] = $scalingConfigurationName2;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName3
     *
     * @return $this
     */
    public function withScalingConfigurationName3($scalingConfigurationName3)
    {
        $this->data['ScalingConfigurationName3'] = $scalingConfigurationName3;
        $this->options['query']['ScalingConfigurationName.3'] = $scalingConfigurationName3;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName1
     *
     * @return $this
     */
    public function withScalingConfigurationName1($scalingConfigurationName1)
    {
        $this->data['ScalingConfigurationName1'] = $scalingConfigurationName1;
        $this->options['query']['ScalingConfigurationName.1'] = $scalingConfigurationName1;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId2
     *
     * @return $this
     */
    public function withScalingConfigurationId2($scalingConfigurationId2)
    {
        $this->data['ScalingConfigurationId2'] = $scalingConfigurationId2;
        $this->options['query']['ScalingConfigurationId.2'] = $scalingConfigurationId2;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId3
     *
     * @return $this
     */
    public function withScalingConfigurationId3($scalingConfigurationId3)
    {
        $this->data['ScalingConfigurationId3'] = $scalingConfigurationId3;
        $this->options['query']['ScalingConfigurationId.3'] = $scalingConfigurationId3;

        return $this;
    }

    /**
     * @param string $scalingConfigurationId1
     *
     * @return $this
     */
    public function withScalingConfigurationId1($scalingConfigurationId1)
    {
        $this->data['ScalingConfigurationId1'] = $scalingConfigurationId1;
        $this->options['query']['ScalingConfigurationId.1'] = $scalingConfigurationId1;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName6
     *
     * @return $this
     */
    public function withScalingConfigurationName6($scalingConfigurationName6)
    {
        $this->data['ScalingConfigurationName6'] = $scalingConfigurationName6;
        $this->options['query']['ScalingConfigurationName.6'] = $scalingConfigurationName6;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName7
     *
     * @return $this
     */
    public function withScalingConfigurationName7($scalingConfigurationName7)
    {
        $this->data['ScalingConfigurationName7'] = $scalingConfigurationName7;
        $this->options['query']['ScalingConfigurationName.7'] = $scalingConfigurationName7;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName4
     *
     * @return $this
     */
    public function withScalingConfigurationName4($scalingConfigurationName4)
    {
        $this->data['ScalingConfigurationName4'] = $scalingConfigurationName4;
        $this->options['query']['ScalingConfigurationName.4'] = $scalingConfigurationName4;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName5
     *
     * @return $this
     */
    public function withScalingConfigurationName5($scalingConfigurationName5)
    {
        $this->data['ScalingConfigurationName5'] = $scalingConfigurationName5;
        $this->options['query']['ScalingConfigurationName.5'] = $scalingConfigurationName5;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName8
     *
     * @return $this
     */
    public function withScalingConfigurationName8($scalingConfigurationName8)
    {
        $this->data['ScalingConfigurationName8'] = $scalingConfigurationName8;
        $this->options['query']['ScalingConfigurationName.8'] = $scalingConfigurationName8;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName9
     *
     * @return $this
     */
    public function withScalingConfigurationName9($scalingConfigurationName9)
    {
        $this->data['ScalingConfigurationName9'] = $scalingConfigurationName9;
        $this->options['query']['ScalingConfigurationName.9'] = $scalingConfigurationName9;

        return $this;
    }

    /**
     * @param string $scalingConfigurationName10
     *
     * @return $this
     */
    public function withScalingConfigurationName10($scalingConfigurationName10)
    {
        $this->data['ScalingConfigurationName10'] = $scalingConfigurationName10;
        $this->options['query']['ScalingConfigurationName.10'] = $scalingConfigurationName10;

        return $this;
    }
}
