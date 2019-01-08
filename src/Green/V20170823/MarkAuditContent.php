<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of MarkAuditContent
 *
 * @method string getAuditIllegalReasons()
 * @method string getSourceIp()
 * @method string getAuditResult()
 * @method string getIds()
 */
class MarkAuditContent extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'MarkAuditContent';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @param string $auditIllegalReasons
     *
     * @return $this
     */
    public function withAuditIllegalReasons($auditIllegalReasons)
    {
        $this->data['AuditIllegalReasons'] = $auditIllegalReasons;
        $this->options['query']['AuditIllegalReasons'] = $auditIllegalReasons;

        return $this;
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
     * @param string $auditResult
     *
     * @return $this
     */
    public function withAuditResult($auditResult)
    {
        $this->data['AuditResult'] = $auditResult;
        $this->options['query']['AuditResult'] = $auditResult;

        return $this;
    }

    /**
     * @param string $ids
     *
     * @return $this
     */
    public function withIds($ids)
    {
        $this->data['Ids'] = $ids;
        $this->options['query']['Ids'] = $ids;

        return $this;
    }
}
