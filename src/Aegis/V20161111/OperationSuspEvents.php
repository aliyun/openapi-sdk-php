<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of OperationSuspEvents
 *
 * @method string getSourceIp()
 * @method string getWarnType()
 * @method string getSuspiciousEventIds()
 * @method string getFrom()
 * @method string getSubOperation()
 * @method string getOperation()
 */
class OperationSuspEvents extends RpcRequest
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
    public $action = 'OperationSuspEvents';

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
     * @param string $warnType
     *
     * @return $this
     */
    public function withWarnType($warnType)
    {
        $this->data['WarnType'] = $warnType;
        $this->options['query']['WarnType'] = $warnType;

        return $this;
    }

    /**
     * @param string $suspiciousEventIds
     *
     * @return $this
     */
    public function withSuspiciousEventIds($suspiciousEventIds)
    {
        $this->data['SuspiciousEventIds'] = $suspiciousEventIds;
        $this->options['query']['SuspiciousEventIds'] = $suspiciousEventIds;

        return $this;
    }

    /**
     * @param string $from
     *
     * @return $this
     */
    public function withFrom($from)
    {
        $this->data['From'] = $from;
        $this->options['query']['From'] = $from;

        return $this;
    }

    /**
     * @param string $subOperation
     *
     * @return $this
     */
    public function withSubOperation($subOperation)
    {
        $this->data['SubOperation'] = $subOperation;
        $this->options['query']['SubOperation'] = $subOperation;

        return $this;
    }

    /**
     * @param string $operation
     *
     * @return $this
     */
    public function withOperation($operation)
    {
        $this->data['Operation'] = $operation;
        $this->options['query']['Operation'] = $operation;

        return $this;
    }
}
