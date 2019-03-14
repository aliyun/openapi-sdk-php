<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * Api InnerCreateNcExpression
 *
 * @method string getGrayBid()
 * @method string getGrayAliUid()
 * @method array getEcsInstanceId()
 * @method string getExpression()
 * @method array getVSwitchId()
 */
class InnerCreateNcExpression extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

    /**
     * @param string $grayBid
     *
     * @return $this
     */
    public function withGrayBid($grayBid)
    {
        $this->data['GrayBid'] = $grayBid;
        $this->options['query']['GrayBid'] = $grayBid;

        return $this;
    }

    /**
     * @param string $grayAliUid
     *
     * @return $this
     */
    public function withGrayAliUid($grayAliUid)
    {
        $this->data['GrayAliUid'] = $grayAliUid;
        $this->options['query']['GrayAliUid'] = $grayAliUid;

        return $this;
    }

    /**
     * @param array $ecsInstanceId
     *
     * @return $this
     */
    public function withEcsInstanceId(array $ecsInstanceId)
    {
        $this->data['EcsInstanceId'] = $ecsInstanceId;
        foreach ($ecsInstanceId as $i => $iValue) {
            $this->options['query']['EcsInstanceId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $expression
     *
     * @return $this
     */
    public function withExpression($expression)
    {
        $this->data['Expression'] = $expression;
        $this->options['query']['Expression'] = $expression;

        return $this;
    }

    /**
     * @param array $vSwitchId
     *
     * @return $this
     */
    public function withVSwitchId(array $vSwitchId)
    {
        $this->data['VSwitchId'] = $vSwitchId;
        foreach ($vSwitchId as $i => $iValue) {
            $this->options['query']['VSwitchId.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
