<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeGroupReferences
 *
 * @method array getGroupNo()
 */
class DescribeGroupReferences extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Ecs';

    /**
     * @var string
     */
    public $version = '2014-05-26';

    /**
     * @var string
     */
    public $action = 'DescribeGroupReferences';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use getGroupNo() instead.
     *
     * @return array
     */
    public function getGroupNos()
    {
        return $this->getGroupNo();
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGroupNo() instead.
     *
     * @param array $groupNos
     *
     * @return $this
     */
    public function setGroupNos(array $groupNos)
    {
        return $this->withGroupNo($groupNos);
    }

    /**
     * @param array $groupNo
     *
     * @return $this
     */
    public function withGroupNo(array $groupNo)
    {
        $this->data['GroupNo'] = $groupNo;
        foreach ($groupNo as $i => $iValue) {
            $this->options['query']['GroupNo.' . ($i + 1)] = $iValue;
        }

        return $this;
    }
}
