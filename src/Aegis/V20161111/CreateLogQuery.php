<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateLogQuery
 *
 * @method string getSourceIp()
 * @method string getQueryName()
 * @method string getConditions()
 * @method string getQueryDetail()
 */
class CreateLogQuery extends RpcRequest
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
    public $action = 'CreateLogQuery';

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

    /**
     * @param string $conditions
     *
     * @return $this
     */
    public function withConditions($conditions)
    {
        $this->data['Conditions'] = $conditions;
        $this->options['query']['Conditions'] = $conditions;

        return $this;
    }

    /**
     * @param string $queryDetail
     *
     * @return $this
     */
    public function withQueryDetail($queryDetail)
    {
        $this->data['QueryDetail'] = $queryDetail;
        $this->options['query']['QueryDetail'] = $queryDetail;

        return $this;
    }
}
