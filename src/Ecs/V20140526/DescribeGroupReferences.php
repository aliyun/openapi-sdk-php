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
