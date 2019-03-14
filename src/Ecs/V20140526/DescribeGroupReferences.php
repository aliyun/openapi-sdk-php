<?php

namespace AlibabaCloud\Ecs\V20140526;

use AlibabaCloud\Rpc;

/**
 * Api DescribeGroupReferences
 *
 * @method array getGroupNo()
 */
class DescribeGroupReferences extends Rpc
{
    public $product = 'Ecs';

    public $version = '2014-05-26';

    public $method = 'POST';

    public $serviceCode = 'ecs';

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
