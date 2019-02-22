<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateConsoleAccessWhiteList
 *
 * @method string getNote()
 * @method string getResourceOwnerId()
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getDstPort()
 * @method string getInstanceIdList()
 * @method string getLiveTime()
 * @method string getProductName()
 * @method string getWhiteListType()
 * @method string getInstanceInfoList()
 * @method string getLang()
 * @method string getSourceCode()
 */
class CreateConsoleAccessWhiteList extends RpcRequest
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
    public $action = 'CreateConsoleAccessWhiteList';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @param string $note
     *
     * @return $this
     */
    public function withNote($note)
    {
        $this->data['Note'] = $note;
        $this->options['query']['Note'] = $note;

        return $this;
    }

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId'] = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

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
     * @param string $dstPort
     *
     * @return $this
     */
    public function withDstPort($dstPort)
    {
        $this->data['DstPort'] = $dstPort;
        $this->options['query']['DstPort'] = $dstPort;

        return $this;
    }

    /**
     * @param string $instanceIdList
     *
     * @return $this
     */
    public function withInstanceIdList($instanceIdList)
    {
        $this->data['InstanceIdList'] = $instanceIdList;
        $this->options['query']['InstanceIdList'] = $instanceIdList;

        return $this;
    }

    /**
     * @param string $liveTime
     *
     * @return $this
     */
    public function withLiveTime($liveTime)
    {
        $this->data['LiveTime'] = $liveTime;
        $this->options['query']['LiveTime'] = $liveTime;

        return $this;
    }

    /**
     * @param string $productName
     *
     * @return $this
     */
    public function withProductName($productName)
    {
        $this->data['ProductName'] = $productName;
        $this->options['query']['ProductName'] = $productName;

        return $this;
    }

    /**
     * @param string $whiteListType
     *
     * @return $this
     */
    public function withWhiteListType($whiteListType)
    {
        $this->data['WhiteListType'] = $whiteListType;
        $this->options['query']['WhiteListType'] = $whiteListType;

        return $this;
    }

    /**
     * @param string $instanceInfoList
     *
     * @return $this
     */
    public function withInstanceInfoList($instanceInfoList)
    {
        $this->data['InstanceInfoList'] = $instanceInfoList;
        $this->options['query']['InstanceInfoList'] = $instanceInfoList;

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
