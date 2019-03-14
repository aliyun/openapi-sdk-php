<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api LookupTmchNotice
 *
 * @method string getClaimKey()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class LookupTmchNotice extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

    /**
     * @param string $claimKey
     *
     * @return $this
     */
    public function withClaimKey($claimKey)
    {
        $this->data['ClaimKey'] = $claimKey;
        $this->options['query']['ClaimKey'] = $claimKey;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }
}
