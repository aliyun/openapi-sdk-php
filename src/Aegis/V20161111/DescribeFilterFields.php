<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeFilterFields
 *
 * @method string getSourceIp()
 * @method string getQuery()
 */
class DescribeFilterFields extends RpcRequest
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
    public $action = 'DescribeFilterFields';

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
     * @deprecated deprecated since version 2.0, Use withQuery() instead.
     *
     * @param string $query
     *
     * @return $this
     */
    public function setQuery($query)
    {
        return $this->withQuery($query);
    }

    /**
     * @param string $query
     *
     * @return $this
     */
    public function withQuery($query)
    {
        $this->data['Query'] = $query;
        $this->options['query']['Query'] = $query;

        return $this;
    }
}
