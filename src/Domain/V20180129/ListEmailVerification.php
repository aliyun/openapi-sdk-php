<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Rpc;

/**
 * Api ListEmailVerification
 *
 * @method string getBeginCreateTime()
 * @method string getEndCreateTime()
 * @method string getPageSize()
 * @method string getUserClientIp()
 * @method string getLang()
 * @method string getPageNum()
 * @method string getEmail()
 * @method string getVerificationStatus()
 */
class ListEmailVerification extends Rpc
{
    public $product = 'Domain';

    public $version = '2018-01-29';

    public $method = 'POST';

    /**
     * @param string $beginCreateTime
     *
     * @return $this
     */
    public function withBeginCreateTime($beginCreateTime)
    {
        $this->data['BeginCreateTime'] = $beginCreateTime;
        $this->options['query']['BeginCreateTime'] = $beginCreateTime;

        return $this;
    }

    /**
     * @param string $endCreateTime
     *
     * @return $this
     */
    public function withEndCreateTime($endCreateTime)
    {
        $this->data['EndCreateTime'] = $endCreateTime;
        $this->options['query']['EndCreateTime'] = $endCreateTime;

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
     * @param string $verificationStatus
     *
     * @return $this
     */
    public function withVerificationStatus($verificationStatus)
    {
        $this->data['VerificationStatus'] = $verificationStatus;
        $this->options['query']['VerificationStatus'] = $verificationStatus;

        return $this;
    }
}
