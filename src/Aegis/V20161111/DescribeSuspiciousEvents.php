<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeSuspiciousEvents
 *
 * @method string getSourceIp()
 * @method string getLevel()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getDealed()
 * @method string getRemark()
 * @method string getEventType()
 * @method string getUuid()
 */
class DescribeSuspiciousEvents extends RpcRequest
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
    public $action = 'DescribeSuspiciousEvents';

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
     * @deprecated deprecated since version 2.0, Use withLevel() instead.
     *
     * @param string $level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        return $this->withLevel($level);
    }

    /**
     * @param string $level
     *
     * @return $this
     */
    public function withLevel($level)
    {
        $this->data['Level'] = $level;
        $this->options['query']['Level'] = $level;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPageSize() instead.
     *
     * @param string $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        return $this->withPageSize($pageSize);
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCurrentPage() instead.
     *
     * @param string $currentPage
     *
     * @return $this
     */
    public function setCurrentPage($currentPage)
    {
        return $this->withCurrentPage($currentPage);
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['CurrentPage'] = $currentPage;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDealed() instead.
     *
     * @param string $dealed
     *
     * @return $this
     */
    public function setDealed($dealed)
    {
        return $this->withDealed($dealed);
    }

    /**
     * @param string $dealed
     *
     * @return $this
     */
    public function withDealed($dealed)
    {
        $this->data['Dealed'] = $dealed;
        $this->options['query']['Dealed'] = $dealed;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withRemark() instead.
     *
     * @param string $remark
     *
     * @return $this
     */
    public function setRemark($remark)
    {
        return $this->withRemark($remark);
    }

    /**
     * @param string $remark
     *
     * @return $this
     */
    public function withRemark($remark)
    {
        $this->data['Remark'] = $remark;
        $this->options['query']['Remark'] = $remark;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withEventType() instead.
     *
     * @param string $eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        return $this->withEventType($eventType);
    }

    /**
     * @param string $eventType
     *
     * @return $this
     */
    public function withEventType($eventType)
    {
        $this->data['EventType'] = $eventType;
        $this->options['query']['EventType'] = $eventType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUuid() instead.
     *
     * @param string $uuid
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        return $this->withUuid($uuid);
    }

    /**
     * @param string $uuid
     *
     * @return $this
     */
    public function withUuid($uuid)
    {
        $this->data['Uuid'] = $uuid;
        $this->options['query']['Uuid'] = $uuid;

        return $this;
    }
}
