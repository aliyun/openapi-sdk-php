<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCasterLayout
 *
 * @method string getCasterId()
 * @method string getOwnerId()
 * @method string getLayoutId()
 */
class DeleteCasterLayout extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'DeleteCasterLayout';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $casterId
     *
     * @return $this
     */
    public function withCasterId($casterId)
    {
        $this->data['CasterId'] = $casterId;
        $this->options['query']['CasterId'] = $casterId;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $layoutId
     *
     * @return $this
     */
    public function withLayoutId($layoutId)
    {
        $this->data['LayoutId'] = $layoutId;
        $this->options['query']['LayoutId'] = $layoutId;

        return $this;
    }
}
