<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CPFSDeleteFileSystem
 *
 * @method string getFsId()
 */
class CPFSDeleteFileSystem extends RpcRequest
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
    public $action = 'CPFSDeleteFileSystem';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'nas';

    /**
     * @deprecated deprecated since version 2.0, Use withFsId() instead.
     *
     * @param string $fsId
     *
     * @return $this
     */
    public function setFsId($fsId)
    {
        return $this->withFsId($fsId);
    }

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
}
