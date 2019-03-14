<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Rpc;

/**
 * Api CPFSDescribeFileSystems
 *
 * @method string getFsId()
 * @method string getPageSize()
 * @method string getPageNumber()
 */
class CPFSDescribeFileSystems extends Rpc
{
    public $product = 'NAS';

    public $version = '2017-06-26';

    public $method = 'POST';

    public $serviceCode = 'nas';

    /**
     * @param string $fsId
     *
     * @return $this
     */
    public function withFsId($fsId)
    {
        $this->data['FsId'] = $fsId;
        $this->options['query']['FsId'] = $fsId;

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
}
