<?php

namespace AlibabaCloud\NAS\V20170626;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CPFSModifyFileSystem
 *
 * @method string getFsId()
 * @method string getFsDesc()
 */
class CPFSModifyFileSystem extends RpcRequest
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
    public $action = 'CPFSModifyFileSystem';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
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
     * @param string $fsDesc
     *
     * @return $this
     */
    public function withFsDesc($fsDesc)
    {
        $this->data['FsDesc'] = $fsDesc;
        $this->options['query']['FsDesc'] = $fsDesc;

        return $this;
    }
}
