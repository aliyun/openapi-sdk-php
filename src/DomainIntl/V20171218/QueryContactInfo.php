<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryContactInfo
 *
 * @method string getContactType()
 * @method string getUserClientIp()
 * @method string getDomainName()
 * @method string getLang()
 */
class QueryContactInfo extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Domain-intl';

    /**
     * @var string
     */
    public $version = '2017-12-18';

    /**
     * @var string
     */
    public $action = 'QueryContactInfo';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

    /**
     * @param string $contactType
     *
     * @return $this
     */
    public function withContactType($contactType)
    {
        $this->data['ContactType'] = $contactType;
        $this->options['query']['ContactType'] = $contactType;

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
