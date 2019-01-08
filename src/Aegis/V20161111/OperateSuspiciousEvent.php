<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OperateSuspiciousEvent
 *
 * @method string getSourceIp()
 * @method string getData()
 * @method string getOperateType()
 */
class OperateSuspiciousEvent extends RpcRequest
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
    public $action = 'OperateSuspiciousEvent';

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
     * @param string $data
     *
     * @return $this
     */
    public function withData($data)
    {
        $this->data['Data'] = $data;
        $this->options['query']['Data'] = $data;

        return $this;
    }

    /**
     * @param string $operateType
     *
     * @return $this
     */
    public function withOperateType($operateType)
    {
        $this->data['OperateType'] = $operateType;
        $this->options['query']['OperateType'] = $operateType;

        return $this;
    }
}
