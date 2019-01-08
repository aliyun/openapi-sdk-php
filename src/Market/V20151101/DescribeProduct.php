<?php

namespace AlibabaCloud\Market\V20151101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeProduct
 *
 * @method string getCode()
 * @method string getQueryDraft()
 * @method string getAliUid()
 */
class DescribeProduct extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Market';

    /**
     * @var string
     */
    public $version = '2015-11-01';

    /**
     * @var string
     */
    public $action = 'DescribeProduct';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $code
     *
     * @return $this
     */
    public function withCode($code)
    {
        $this->data['Code'] = $code;
        $this->options['query']['Code'] = $code;

        return $this;
    }

    /**
     * @param string $queryDraft
     *
     * @return $this
     */
    public function withQueryDraft($queryDraft)
    {
        $this->data['QueryDraft'] = $queryDraft;
        $this->options['query']['QueryDraft'] = $queryDraft;

        return $this;
    }

    /**
     * @param string $aliUid
     *
     * @return $this
     */
    public function withAliUid($aliUid)
    {
        $this->data['AliUid'] = $aliUid;
        $this->options['query']['AliUid'] = $aliUid;

        return $this;
    }
}
