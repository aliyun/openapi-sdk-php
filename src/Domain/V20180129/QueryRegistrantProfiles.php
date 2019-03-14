<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api QueryRegistrantProfiles
 *
 * @method string getRegistrantOrganization()
 * @method string getUserClientIp()
 * @method string getRegistrantProfileId()
 * @method string getPageSize()
 * @method string getRegistrantType()
 * @method string getRegistrantProfileType()
 * @method string getRealNameStatus()
 * @method string getLang()
 * @method string getPageNum()
 * @method string getDefaultRegistrantProfile()
 * @method string getEmail()
 * @method string getZhRegistrantOrganization()
 */
class QueryRegistrantProfiles extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

    /**
     * @param string $registrantOrganization
     *
     * @return $this
     */
    public function withRegistrantOrganization($registrantOrganization)
    {
        $this->data['RegistrantOrganization'] = $registrantOrganization;
        $this->options['query']['RegistrantOrganization'] = $registrantOrganization;

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
     * @param string $registrantProfileId
     *
     * @return $this
     */
    public function withRegistrantProfileId($registrantProfileId)
    {
        $this->data['RegistrantProfileId'] = $registrantProfileId;
        $this->options['query']['RegistrantProfileId'] = $registrantProfileId;

        return $this;
    }

    /**
     * @param string $pageSize
     *
     * @return $this
     */
    public function withPageSize($pageSize)
    {
        $this->data['PageSize'] = $pageSize;
        $this->options['query']['PageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $registrantType
     *
     * @return $this
     */
    public function withRegistrantType($registrantType)
    {
        $this->data['RegistrantType'] = $registrantType;
        $this->options['query']['RegistrantType'] = $registrantType;

        return $this;
    }

    /**
     * @param string $registrantProfileType
     *
     * @return $this
     */
    public function withRegistrantProfileType($registrantProfileType)
    {
        $this->data['RegistrantProfileType'] = $registrantProfileType;
        $this->options['query']['RegistrantProfileType'] = $registrantProfileType;

        return $this;
    }

    /**
     * @param string $realNameStatus
     *
     * @return $this
     */
    public function withRealNameStatus($realNameStatus)
    {
        $this->data['RealNameStatus'] = $realNameStatus;
        $this->options['query']['RealNameStatus'] = $realNameStatus;

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
     * @param string $pageNum
     *
     * @return $this
     */
    public function withPageNum($pageNum)
    {
        $this->data['PageNum'] = $pageNum;
        $this->options['query']['PageNum'] = $pageNum;

        return $this;
    }

    /**
     * @param string $defaultRegistrantProfile
     *
     * @return $this
     */
    public function withDefaultRegistrantProfile($defaultRegistrantProfile)
    {
        $this->data['DefaultRegistrantProfile'] = $defaultRegistrantProfile;
        $this->options['query']['DefaultRegistrantProfile'] = $defaultRegistrantProfile;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function withEmail($email)
    {
        $this->data['Email'] = $email;
        $this->options['query']['Email'] = $email;

        return $this;
    }

    /**
     * @param string $zhRegistrantOrganization
     *
     * @return $this
     */
    public function withZhRegistrantOrganization($zhRegistrantOrganization)
    {
        $this->data['ZhRegistrantOrganization'] = $zhRegistrantOrganization;
        $this->options['query']['ZhRegistrantOrganization'] = $zhRegistrantOrganization;

        return $this;
    }
}
