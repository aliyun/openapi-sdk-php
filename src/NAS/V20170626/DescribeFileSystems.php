<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeFileSystems
 *
 * @method string getPageSize()
 * @method string getPageNumber()
 * @method string getFileSystemId()
 */
class DescribeFileSystems extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'NAS';

    /**
     * @var string
     */
    public $version = '2017-06-26';

    /**
     * @var string
     */
    public $action = 'DescribeFileSystems';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

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
     * @param string $pageNumber
     *
     * @return $this
     */
    public function withPageNumber($pageNumber)
    {
        $this->data['PageNumber'] = $pageNumber;
        $this->options['query']['PageNumber'] = $pageNumber;

        return $this;
    }

    /**
     * @param string $fileSystemId
     *
     * @return $this
     */
    public function withFileSystemId($fileSystemId)
    {
        $this->data['FileSystemId'] = $fileSystemId;
        $this->options['query']['FileSystemId'] = $fileSystemId;

        return $this;
    }
}
