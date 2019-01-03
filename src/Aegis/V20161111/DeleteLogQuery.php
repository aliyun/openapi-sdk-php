<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteLogQuery
 *
 * @method string getSourceIp()
 * @method string getQueryName()
 */
class DeleteLogQuery extends RpcRequest
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
    public $action = 'DeleteLogQuery';

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
     * @deprecated deprecated since version 2.0, Use withQueryName() instead.
     *
     * @param string $queryName
     *
     * @return $this
     */
    public function setQueryName($queryName)
    {
        return $this->withQueryName($queryName);
    }

    /**
     * @param string $queryName
     *
     * @return $this
     */
    public function withQueryName($queryName)
    {
        $this->data['QueryName'] = $queryName;
        $this->options['query']['QueryName'] = $queryName;

        return $this;
    }
}
