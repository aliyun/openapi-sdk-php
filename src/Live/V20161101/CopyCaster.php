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
     * @deprecated deprecated since version 2.0, Use withSrcCasterId() instead.
     *
     * @param string $srcCasterId
     *
     * @return $this
     */
    public function setSrcCasterId($srcCasterId)
    {
        return $this->withSrcCasterId($srcCasterId);
    }

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
     * @deprecated deprecated since version 2.0, Use withCasterName() instead.
     *
     * @param string $casterName
     *
     * @return $this
     */
    public function setCasterName($casterName)
    {
        return $this->withCasterName($casterName);
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
     * @deprecated deprecated since version 2.0, Use withClientToken() instead.
     *
     * @param string $clientToken
     *
     * @return $this
     */
    public function setClientToken($clientToken)
    {
        return $this->withClientToken($clientToken);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
