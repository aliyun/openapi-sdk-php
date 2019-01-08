<?php

namespace AlibabaCloud\Iot\V20180120;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryDeviceByTags
 *
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method array getTag()
 */
class QueryDeviceByTags extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Iot';

    /**
     * @var string
     */
    public $version = '2018-01-20';

    /**
     * @var string
     */
    public $action = 'QueryDeviceByTags';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param array $tag
     *
     * @return $this
     */
    public function withTag(array $tag)
    {
        $this->data['Tag'] = $tag;
        foreach ($tag as $i => $iValue) {
            $this->options['query']['Tag.' . ($i + 1) . '.TagValue'] = $tag[$i]['TagValue'];
            $this->options['query']['Tag.' . ($i + 1) . '.TagKey'] = $tag[$i]['TagKey'];
        }

        return $this;
    }
}
