<?php

namespace AlibabaCloud\Cdn\V20180510;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeCdnDomainByCertificate
 *
 * @method string getOwnerId()
 * @method string getSSLPub()
 */
class DescribeCdnDomainByCertificate extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2018-05-10';

    /**
     * @var string
     */
    public $action = 'DescribeCdnDomainByCertificate';

    /**
     * @var string
     */
    public $method = 'POST';

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
     * @param string $sSLPub
     *
     * @return $this
     */
    public function withSSLPub($sSLPub)
    {
        $this->data['SSLPub'] = $sSLPub;
        $this->options['query']['SSLPub'] = $sSLPub;

        return $this;
    }
}
