<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribeLiveStreamTranscodeInfo
 *
 * @method string getSecurityToken()
 * @method string getOwnerId()
 * @method string getDomainTranscodeName()
 */
class DescribeLiveStreamTranscodeInfo extends RpcRequest
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
    public $action = 'DescribeLiveStreamTranscodeInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @param string $securityToken
     *
     * @return $this
     */
    public function withSecurityToken($securityToken)
    {
        $this->data['SecurityToken'] = $securityToken;
        $this->options['query']['SecurityToken'] = $securityToken;

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
     * @param string $domainTranscodeName
     *
     * @return $this
     */
    public function withDomainTranscodeName($domainTranscodeName)
    {
        $this->data['DomainTranscodeName'] = $domainTranscodeName;
        $this->options['query']['DomainTranscodeName'] = $domainTranscodeName;

        return $this;
    }
}
