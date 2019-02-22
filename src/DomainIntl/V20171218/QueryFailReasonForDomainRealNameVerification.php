<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryFailReasonForDomainRealNameVerification
 *
 * @method string getRealNameVerificationAction()
 * @method string getUserClientIp()
 * @method string getDomainName()
 * @method string getLang()
 */
class QueryFailReasonForDomainRealNameVerification extends RpcRequest
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
    public $action = 'QueryFailReasonForDomainRealNameVerification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

    /**
     * @param string $realNameVerificationAction
     *
     * @return $this
     */
    public function withRealNameVerificationAction($realNameVerificationAction)
    {
        $this->data['RealNameVerificationAction'] = $realNameVerificationAction;
        $this->options['query']['RealNameVerificationAction'] = $realNameVerificationAction;

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
