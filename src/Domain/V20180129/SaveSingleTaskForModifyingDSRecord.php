<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api SaveSingleTaskForModifyingDSRecord
 *
 * @method string getKeyTag()
 * @method string getDomainName()
 * @method string getUserClientIp()
 * @method string getDigestType()
 * @method string getDigest()
 * @method string getLang()
 * @method string getAlgorithm()
 */
class SaveSingleTaskForModifyingDSRecord extends Rpc
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
     * @param string $digestType
     *
     * @return $this
     */
    public function withDigestType($digestType)
    {
        $this->data['DigestType'] = $digestType;
        $this->options['query']['DigestType'] = $digestType;

        return $this;
    }

    /**
     * @param string $digest
     *
     * @return $this
     */
    public function withDigest($digest)
    {
        $this->data['Digest'] = $digest;
        $this->options['query']['Digest'] = $digest;

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

    /**
     * @param string $algorithm
     *
     * @return $this
     */
    public function withAlgorithm($algorithm)
    {
        $this->data['Algorithm'] = $algorithm;
        $this->options['query']['Algorithm'] = $algorithm;

        return $this;
    }
}
