<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of QueryFailingReasonListForQualification
 *
 * @method string getInstanceId()
 * @method string getUserClientIp()
 * @method string getLimit()
 * @method string getLang()
 * @method string getQualificationType()
 */
class QueryFailingReasonListForQualification extends RpcRequest
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
    public $action = 'QueryFailingReasonListForQualification';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withInstanceId() instead.
     *
     * @param string $instanceId
     *
     * @return $this
     */
    public function setInstanceId($instanceId)
    {
        return $this->withInstanceId($instanceId);
    }

    /**
     * @param string $instanceId
     *
     * @return $this
     */
    public function withInstanceId($instanceId)
    {
        $this->data['InstanceId'] = $instanceId;
        $this->options['query']['InstanceId'] = $instanceId;

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
     * @deprecated deprecated since version 2.0, Use withLimit() instead.
     *
     * @param string $limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        return $this->withLimit($limit);
    }

    /**
     * @param string $limit
     *
     * @return $this
     */
    public function withLimit($limit)
    {
        $this->data['Limit'] = $limit;
        $this->options['query']['Limit'] = $limit;

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
     * @deprecated deprecated since version 2.0, Use withQualificationType() instead.
     *
     * @param string $qualificationType
     *
     * @return $this
     */
    public function setQualificationType($qualificationType)
    {
        return $this->withQualificationType($qualificationType);
    }

    /**
     * @param string $qualificationType
     *
     * @return $this
     */
    public function withQualificationType($qualificationType)
    {
        $this->data['QualificationType'] = $qualificationType;
        $this->options['query']['QualificationType'] = $qualificationType;

        return $this;
    }
}
