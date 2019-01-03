<?php

namespace AlibabaCloud\Jarvis\V20180206;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of CreateCpmcPunishFeedBack
 *
 * @method string getFeedBack()
 * @method string getSrcIP()
 * @method string getSourceIp()
 * @method string getDstPort()
 * @method string getProtocolName()
 * @method string getSrcPort()
 * @method string getPunishType()
 * @method string getGmtCreate()
 * @method string getDstIP()
 * @method string getLang()
 * @method string getSourceCode()
 */
class CreateCpmcPunishFeedBack extends RpcRequest
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
    public $action = 'CreateCpmcPunishFeedBack';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withFeedBack() instead.
     *
     * @param string $feedBack
     *
     * @return $this
     */
    public function setFeedBack($feedBack)
    {
        return $this->withFeedBack($feedBack);
    }

    /**
     * @param string $feedBack
     *
     * @return $this
     */
    public function withFeedBack($feedBack)
    {
        $this->data['FeedBack'] = $feedBack;
        $this->options['query']['FeedBack'] = $feedBack;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSrcIP() instead.
     *
     * @param string $srcIP
     *
     * @return $this
     */
    public function setSrcIP($srcIP)
    {
        return $this->withSrcIP($srcIP);
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
     * @deprecated deprecated since version 2.0, Use withDstPort() instead.
     *
     * @param string $dstPort
     *
     * @return $this
     */
    public function setDstPort($dstPort)
    {
        return $this->withDstPort($dstPort);
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
     * @deprecated deprecated since version 2.0, Use withProtocolName() instead.
     *
     * @param string $protocolName
     *
     * @return $this
     */
    public function setProtocolName($protocolName)
    {
        return $this->withProtocolName($protocolName);
    }

    /**
     * @param string $protocolName
     *
     * @return $this
     */
    public function withProtocolName($protocolName)
    {
        $this->data['ProtocolName'] = $protocolName;
        $this->options['query']['ProtocolName'] = $protocolName;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withSrcPort() instead.
     *
     * @param string $srcPort
     *
     * @return $this
     */
    public function setSrcPort($srcPort)
    {
        return $this->withSrcPort($srcPort);
    }

    /**
     * @param string $srcPort
     *
     * @return $this
     */
    public function withSrcPort($srcPort)
    {
        $this->data['SrcPort'] = $srcPort;
        $this->options['query']['SrcPort'] = $srcPort;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withPunishType() instead.
     *
     * @param string $punishType
     *
     * @return $this
     */
    public function setPunishType($punishType)
    {
        return $this->withPunishType($punishType);
    }

    /**
     * @param string $punishType
     *
     * @return $this
     */
    public function withPunishType($punishType)
    {
        $this->data['PunishType'] = $punishType;
        $this->options['query']['PunishType'] = $punishType;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withGmtCreate() instead.
     *
     * @param string $gmtCreate
     *
     * @return $this
     */
    public function setGmtCreate($gmtCreate)
    {
        return $this->withGmtCreate($gmtCreate);
    }

    /**
     * @param string $gmtCreate
     *
     * @return $this
     */
    public function withGmtCreate($gmtCreate)
    {
        $this->data['GmtCreate'] = $gmtCreate;
        $this->options['query']['GmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withDstIP() instead.
     *
     * @param string $dstIP
     *
     * @return $this
     */
    public function setDstIP($dstIP)
    {
        return $this->withDstIP($dstIP);
    }

    /**
     * @param string $dstIP
     *
     * @return $this
     */
    public function withDstIP($dstIP)
    {
        $this->data['DstIP'] = $dstIP;
        $this->options['query']['DstIP'] = $dstIP;

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
