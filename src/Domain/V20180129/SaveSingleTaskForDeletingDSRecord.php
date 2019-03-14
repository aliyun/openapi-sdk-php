<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api SaveSingleTaskForDeletingDSRecord
 *
 * @method string getKeyTag()
 * @method string getDomainName()
 * @method string getUserClientIp()
 * @method string getLang()
 */
class SaveSingleTaskForDeletingDSRecord extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

    /**
     * @param string $keyTag
     *
     * @return $this
     */
    public function withKeyTag($keyTag)
    {
        $this->data['KeyTag'] = $keyTag;
        $this->options['query']['KeyTag'] = $keyTag;

        return $this;
    }

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
