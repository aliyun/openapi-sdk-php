<?php

namespace AlibabaCloud\Green\V20170823;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of SendWebsiteFeedback
 *
 * @method string getFeedback()
 * @method string getUrls()
 * @method string getSourceIp()
 * @method string getLang()
 */
class SendWebsiteFeedback extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Green';

    /**
     * @var string
     */
    public $version = '2017-08-23';

    /**
     * @var string
     */
    public $action = 'SendWebsiteFeedback';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'green';

    /**
     * @deprecated deprecated since version 2.0, Use withFeedback() instead.
     *
     * @param string $feedback
     *
     * @return $this
     */
    public function setFeedback($feedback)
    {
        return $this->withFeedback($feedback);
    }

    /**
     * @param string $feedback
     *
     * @return $this
     */
    public function withFeedback($feedback)
    {
        $this->data['Feedback'] = $feedback;
        $this->options['query']['Feedback'] = $feedback;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withUrls() instead.
     *
     * @param string $urls
     *
     * @return $this
     */
    public function setUrls($urls)
    {
        return $this->withUrls($urls);
    }

    /**
     * @param string $urls
     *
     * @return $this
     */
    public function withUrls($urls)
    {
        $this->data['Urls'] = $urls;
        $this->options['query']['Urls'] = $urls;

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
}
