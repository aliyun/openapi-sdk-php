<?php

namespace AlibabaCloud\EcsInc\V20160314;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of InnerCreateNcExpression
 *
 * @method string getGrayBid()
 * @method string getGrayAliUid()
 * @method array getEcsInstanceId()
 * @method string getExpression()
 * @method array getVSwitchId()
 */
class InnerCreateNcExpression extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EcsInc';

    /**
     * @var string
     */
    public $version = '2016-03-14';

    /**
     * @var string
     */
    public $action = 'InnerCreateNcExpression';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'ecs';

    /**
     * @deprecated deprecated since version 2.0, Use withGrayBid() instead.
     *
     * @param string $grayBid
     *
     * @return $this
     */
    public function setGrayBid($grayBid)
    {
        return $this->withGrayBid($grayBid);
    }

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
     * @deprecated deprecated since version 2.0, Use withGrayAliUid() instead.
     *
     * @param string $grayAliUid
     *
     * @return $this
     */
    public function setGrayAliUid($grayAliUid)
    {
        return $this->withGrayAliUid($grayAliUid);
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
     * @deprecated deprecated since version 2.0, Use getEcsInstanceId() instead.
     *
     * @return array
     */
    public function getEcsInstanceIds()
    {
        return $this->getEcsInstanceId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEcsInstanceId() instead.
     *
     * @param array $ecsInstanceIds
     *
     * @return $this
     */
    public function setEcsInstanceIds(array $ecsInstanceIds)
    {
        return $this->withEcsInstanceId($ecsInstanceIds);
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
     * @deprecated deprecated since version 2.0, Use withExpression() instead.
     *
     * @param string $expression
     *
     * @return $this
     */
    public function setExpression($expression)
    {
        return $this->withExpression($expression);
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
     * @deprecated deprecated since version 2.0, Use getVSwitchId() instead.
     *
     * @return array
     */
    public function getVSwitchIds()
    {
        return $this->getVSwitchId();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withVSwitchId() instead.
     *
     * @param array $vSwitchIds
     *
     * @return $this
     */
    public function setVSwitchIds(array $vSwitchIds)
    {
        return $this->withVSwitchId($vSwitchIds);
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
