<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SaveSingleTaskForAddingDSRecord
 *
 * @method string getKeyTag()
 * @method string getDomainName()
 * @method string getUserClientIp()
 * @method string getDigestType()
 * @method string getDigest()
 * @method string getLang()
 * @method string getAlgorithm()
 */
class SaveSingleTaskForAddingDSRecord extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain';

    /**
     * @var string
     */
    public $version = '2018-01-29';

    /**
     * @var string
     */
    public $action = 'SaveSingleTaskForAddingDSRecord';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withKeyTag() instead.
     *
     * @param string $keyTag
     *
     * @return $this
     */
    public function setKeyTag($keyTag)
    {
        return $this->withKeyTag($keyTag);
    }

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
     * @deprecated deprecated since version 2.0, Use withDomainName() instead.
     *
     * @param string $domainName
     *
     * @return $this
     */
    public function setDomainName($domainName)
    {
        return $this->withDomainName($domainName);
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
     * @deprecated deprecated since version 2.0, Use withUserClientIp() instead.
     *
     * @param string $userClientIp
     *
     * @return $this
     */
    public function setUserClientIp($userClientIp)
    {
        return $this->withUserClientIp($userClientIp);
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
     * @deprecated deprecated since version 2.0, Use withDigestType() instead.
     *
     * @param string $digestType
     *
     * @return $this
     */
    public function setDigestType($digestType)
    {
        return $this->withDigestType($digestType);
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
     * @deprecated deprecated since version 2.0, Use withDigest() instead.
     *
     * @param string $digest
     *
     * @return $this
     */
    public function setDigest($digest)
    {
        return $this->withDigest($digest);
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
     * @deprecated deprecated since version 2.0, Use withLang() instead.
     *
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        return $this->withLang($lang);
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
     * @deprecated deprecated since version 2.0, Use withAlgorithm() instead.
     *
     * @param string $algorithm
     *
     * @return $this
     */
    public function setAlgorithm($algorithm)
    {
        return $this->withAlgorithm($algorithm);
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
