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
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
    }

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
     * @deprecated deprecated since version 2.0, Use withWarnType() instead.
     *
     * @param string $warnType
     *
     * @return $this
     */
    public function setWarnType($warnType)
    {
        return $this->withWarnType($warnType);
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
     * @deprecated deprecated since version 2.0, Use withSuspiciousEventIds() instead.
     *
     * @param string $suspiciousEventIds
     *
     * @return $this
     */
    public function setSuspiciousEventIds($suspiciousEventIds)
    {
        return $this->withSuspiciousEventIds($suspiciousEventIds);
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
     * @deprecated deprecated since version 2.0, Use withFrom() instead.
     *
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        return $this->withFrom($from);
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
     * @deprecated deprecated since version 2.0, Use withSubOperation() instead.
     *
     * @param string $subOperation
     *
     * @return $this
     */
    public function setSubOperation($subOperation)
    {
        return $this->withSubOperation($subOperation);
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
     * @deprecated deprecated since version 2.0, Use withOperation() instead.
     *
     * @param string $operation
     *
     * @return $this
     */
    public function setOperation($operation)
    {
        return $this->withOperation($operation);
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
