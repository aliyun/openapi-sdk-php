<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryFailReasonForRegistrantProfileRealNameVerification
 *
 * @method string getUserClientIp()
 * @method string getRegistrantProfileID()
 * @method string getLang()
 */
class QueryFailReasonForRegistrantProfileRealNameVerification extends RpcRequest
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
    public $action = 'QueryFailReasonForRegistrantProfileRealNameVerification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'domain';

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
     * @param string $registrantProfileID
     *
     * @return $this
     */
    public function withRegistrantProfileID($registrantProfileID)
    {
        $this->data['RegistrantProfileID'] = $registrantProfileID;
        $this->options['query']['RegistrantProfileID'] = $registrantProfileID;

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
