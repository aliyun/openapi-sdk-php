<?php

namespace AlibabaCloud\LinkFace\V20180720;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryGroupUsers
 *
 * @method string getGroupId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class QueryGroupUsers extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'LinkFace';

    /**
     * @var string
     */
    public $version = '2018-07-20';

    /**
     * @var string
     */
    public $action = 'QueryGroupUsers';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $groupId
     *
     * @return $this
     */
    public function withGroupId($groupId)
    {
        $this->data['GroupId'] = $groupId;
        $this->options['query']['GroupId'] = $groupId;

        return $this;
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
}
