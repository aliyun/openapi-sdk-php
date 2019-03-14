<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api DescribeLiveStreamTranscodeInfo
 *
 * @method string getSecurityToken()
 * @method string getOwnerId()
 * @method string getDomainTranscodeName()
 */
class DescribeLiveStreamTranscodeInfo extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

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
