<?php

namespace AlibabaCloud\Cdn\V20141111;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SetDomainGreenManagerConfig
 *
 * @method string getDomainName()
 * @method string getOwnerId()
 * @method string getEnable()
 */
class SetDomainGreenManagerConfig extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Cdn';

    /**
     * @var string
     */
    public $version = '2014-11-11';

    /**
     * @var string
     */
    public $action = 'SetDomainGreenManagerConfig';

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

    /**
     * @param string $enable
     *
     * @return $this
     */
    public function withEnable($enable)
    {
        $this->data['Enable'] = $enable;
        $this->options['query']['Enable'] = $enable;

        return $this;
    }
}
