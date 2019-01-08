<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ModifySearchCondition
 *
 * @method string getSourceIp()
 * @method string getName()
 * @method string getFilterConditions()
 */
class ModifySearchCondition extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'aegis';

    /**
     * @var string
     */
    public $version = '2016-11-11';

    /**
     * @var string
     */
    public $action = 'ModifySearchCondition';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vipaegis';

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function withName($name)
    {
        $this->data['Name'] = $name;
        $this->options['query']['Name'] = $name;

        return $this;
    }

    /**
     * @param string $filterConditions
     *
     * @return $this
     */
    public function withFilterConditions($filterConditions)
    {
        $this->data['FilterConditions'] = $filterConditions;
        $this->options['query']['FilterConditions'] = $filterConditions;

        return $this;
    }
}
