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
