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
