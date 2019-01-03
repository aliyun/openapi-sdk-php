<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteAccessWhiteListGroup
 *
 * @method string getGroupIdList()
 * @method string getSourceIp()
 * @method string getLang()
 * @method string getSourceCode()
 */
class DeleteAccessWhiteListGroup extends RpcRequest
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
    public $action = 'DeleteAccessWhiteListGroup';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withGroupIdList() instead.
     *
     * @param string $groupIdList
     *
     * @return $this
     */
    public function setGroupIdList($groupIdList)
    {
        return $this->withGroupIdList($groupIdList);
    }

    /**
     * @param string $groupIdList
     *
     * @return $this
     */
    public function withGroupIdList($groupIdList)
    {
        $this->data['GroupIdList'] = $groupIdList;
        $this->options['query']['GroupIdList'] = $groupIdList;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSourceIp() instead.
     *
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        return $this->withSourceIp($sourceIp);
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
     * @deprecated deprecated since version 2.0, Use withSourceCode() instead.
     *
     * @param string $sourceCode
     *
     * @return $this
     */
    public function setSourceCode($sourceCode)
    {
        return $this->withSourceCode($sourceCode);
    }

    /**
     * @param string $sourceCode
     *
     * @return $this
     */
    public function withSourceCode($sourceCode)
    {
        $this->data['SourceCode'] = $sourceCode;
        $this->options['query']['SourceCode'] = $sourceCode;

        return $this;
    }
}
