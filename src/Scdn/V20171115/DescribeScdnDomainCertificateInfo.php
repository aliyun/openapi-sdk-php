<?php

namespace AlibabaCloud\Scdn\V20171115;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeScdnDomainCertificateInfo
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 */
class DescribeScdnDomainCertificateInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'scdn';

    /**
     * @var string
     */
    public $version = '2017-11-15';

    /**
     * @var string
     */
    public $action = 'DescribeScdnDomainCertificateInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'scdn';

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

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
