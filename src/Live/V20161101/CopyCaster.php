<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CopyCaster
 *
 * @method string getSrcCasterId()
 * @method string getCasterName()
 * @method string getClientToken()
 * @method string getOwnerId()
 */
class CopyCaster extends RpcRequest
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
    public $action = 'CopyCaster';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $srcCasterId
     *
     * @return $this
     */
    public function withSrcCasterId($srcCasterId)
    {
        $this->data['SrcCasterId'] = $srcCasterId;
        $this->options['query']['SrcCasterId'] = $srcCasterId;

        return $this;
    }

    /**
     * @param string $casterName
     *
     * @return $this
     */
    public function withCasterName($casterName)
    {
        $this->data['CasterName'] = $casterName;
        $this->options['query']['CasterName'] = $casterName;

        return $this;
    }

    /**
     * @param string $clientToken
     *
     * @return $this
     */
    public function withClientToken($clientToken)
    {
        $this->data['ClientToken'] = $clientToken;
        $this->options['query']['ClientToken'] = $clientToken;

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
}
