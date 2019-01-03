<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteCasService
 *
 * @method string getLeafOnly()
 * @method string getCasCsbName()
 * @method string getSrcUserId()
 * @method string getCasServiceId()
 */
class DeleteCasService extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'CSB';

    /**
     * @var string
     */
    public $version = '2017-11-18';

    /**
     * @var string
     */
    public $action = 'DeleteCasService';

    /**
     * @var string
     */
    public $scheme = 'https';


    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withLeafOnly() instead.
     *
     * @param string $leafOnly
     *
     * @return $this
     */
    public function setLeafOnly($leafOnly)
    {
        return $this->withLeafOnly($leafOnly);
    }

    /**
     * @param string $leafOnly
     *
     * @return $this
     */
    public function withLeafOnly($leafOnly)
    {
        $this->data['LeafOnly'] = $leafOnly;
        $this->options['query']['LeafOnly'] = $leafOnly;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCasCsbName() instead.
     *
     * @param string $casCsbName
     *
     * @return $this
     */
    public function setCasCsbName($casCsbName)
    {
        return $this->withCasCsbName($casCsbName);
    }

    /**
     * @param string $casCsbName
     *
     * @return $this
     */
    public function withCasCsbName($casCsbName)
    {
        $this->data['CasCsbName'] = $casCsbName;
        $this->options['query']['CasCsbName'] = $casCsbName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSrcUserId() instead.
     *
     * @param string $srcUserId
     *
     * @return $this
     */
    public function setSrcUserId($srcUserId)
    {
        return $this->withSrcUserId($srcUserId);
    }

    /**
     * @param string $srcUserId
     *
     * @return $this
     */
    public function withSrcUserId($srcUserId)
    {
        $this->data['SrcUserId'] = $srcUserId;
        $this->options['query']['SrcUserId'] = $srcUserId;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withCasServiceId() instead.
     *
     * @param string $casServiceId
     *
     * @return $this
     */
    public function setCasServiceId($casServiceId)
    {
        return $this->withCasServiceId($casServiceId);
    }

    /**
     * @param string $casServiceId
     *
     * @return $this
     */
    public function withCasServiceId($casServiceId)
    {
        $this->data['CasServiceId'] = $casServiceId;
        $this->options['query']['CasServiceId'] = $casServiceId;

        return $this;
    }
}
