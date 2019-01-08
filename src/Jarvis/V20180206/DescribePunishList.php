<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DescribePunishList
 *
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getPunishStatus()
 * @method string getLang()
 * @method string getSrcUid()
 * @method string getSourceCode()
 */
class DescribePunishList extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'jarvis';

    /**
     * @var string
     */
    public $version = '2018-02-06';

    /**
     * @var string
     */
    public $action = 'DescribePunishList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $srcIP
     *
     * @return $this
     */
    public function withSrcIP($srcIP)
    {
        $this->data['SrcIP'] = $srcIP;
        $this->options['query']['SrcIP'] = $srcIP;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

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
        $this->options['query']['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * @param string $currentPage
     *
     * @return $this
     */
    public function withCurrentPage($currentPage)
    {
        $this->data['CurrentPage'] = $currentPage;
        $this->options['query']['currentPage'] = $currentPage;

        return $this;
    }

    /**
     * @param string $punishStatus
     *
     * @return $this
     */
    public function withPunishStatus($punishStatus)
    {
        $this->data['PunishStatus'] = $punishStatus;
        $this->options['query']['PunishStatus'] = $punishStatus;

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
     * @param string $srcUid
     *
     * @return $this
     */
    public function withSrcUid($srcUid)
    {
        $this->data['SrcUid'] = $srcUid;
        $this->options['query']['srcUid'] = $srcUid;

        return $this;
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function withSourceCode($sourceCode)
    {
        $this->data['SourceCode'] = $sourceCode;
        $this->options['query']['sourceCode'] = $sourceCode;

        return $this;
    }
}
