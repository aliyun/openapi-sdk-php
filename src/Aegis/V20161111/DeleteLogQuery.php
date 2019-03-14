<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DeleteLogQuery
 *
 * @method string getSourceIp()
 * @method string getQueryName()
 */
class DeleteLogQuery extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

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
