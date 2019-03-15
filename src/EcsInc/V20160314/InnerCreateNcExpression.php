<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Rpc;

/**
 * @method string getGrayBid()
 * @method $this withGrayBid($value)
 * @method string getGrayAliUid()
 * @method $this withGrayAliUid($value)
 * @method array getEcsInstanceId()
 * @method string getExpression()
 * @method $this withExpression($value)
 * @method array getVSwitchId()
 */
class InnerCreateNcExpression extends Rpc
{
    public $product = 'EcsInc';

    public $version = '2016-03-14';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
