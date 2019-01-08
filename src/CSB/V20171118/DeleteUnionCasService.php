<?php

namespace AlibabaCloud\CSB\V20171118;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteUnionCasService
 *
 * @method string getLeafOnly()
 * @method string getCasCsbName()
 * @method string getSrcUserId()
 * @method string getCasServiceId()
 */
class DeleteUnionCasService extends RpcRequest
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
    public $action = 'DeleteUnionCasService';

    /**
     * @var string
     */
    public $scheme = 'https';

    /**
     * @var string
     */
    public $method = 'POST';

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
