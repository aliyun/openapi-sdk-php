<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api AddCustomLiveStreamTranscode
 *
 * @method string getApp()
 * @method string getTemplate()
 * @method string getProfile()
 * @method string getFPS()
 * @method string getGop()
 * @method string getOwnerId()
 * @method string getTemplateType()
 * @method string getAudioBitrate()
 * @method string getDomain()
 * @method string getWidth()
 * @method string getVideoBitrate()
 * @method string getHeight()
 */
class AddCustomLiveStreamTranscode extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

    /**
     * @param string $app
     *
     * @return $this
     */
    public function withApp($app)
    {
        $this->data['App'] = $app;
        $this->options['query']['App'] = $app;

        return $this;
    }

    /**
     * @param string $template
     *
     * @return $this
     */
    public function withTemplate($template)
    {
        $this->data['Template'] = $template;
        $this->options['query']['Template'] = $template;

        return $this;
    }

    /**
     * @param string $profile
     *
     * @return $this
     */
    public function withProfile($profile)
    {
        $this->data['Profile'] = $profile;
        $this->options['query']['Profile'] = $profile;

        return $this;
    }

    /**
     * @param string $fPS
     *
     * @return $this
     */
    public function withFPS($fPS)
    {
        $this->data['FPS'] = $fPS;
        $this->options['query']['FPS'] = $fPS;

        return $this;
    }

    /**
     * @param string $gop
     *
     * @return $this
     */
    public function withGop($gop)
    {
        $this->data['Gop'] = $gop;
        $this->options['query']['Gop'] = $gop;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $templateType
     *
     * @return $this
     */
    public function withTemplateType($templateType)
    {
        $this->data['TemplateType'] = $templateType;
        $this->options['query']['TemplateType'] = $templateType;

        return $this;
    }

    /**
     * @param string $audioBitrate
     *
     * @return $this
     */
    public function withAudioBitrate($audioBitrate)
    {
        $this->data['AudioBitrate'] = $audioBitrate;
        $this->options['query']['AudioBitrate'] = $audioBitrate;

        return $this;
    }

    /**
     * @param string $domain
     *
     * @return $this
     */
    public function withDomain($domain)
    {
        $this->data['Domain'] = $domain;
        $this->options['query']['Domain'] = $domain;

        return $this;
    }

    /**
     * @param string $width
     *
     * @return $this
     */
    public function withWidth($width)
    {
        $this->data['Width'] = $width;
        $this->options['query']['Width'] = $width;

        return $this;
    }

    /**
     * @param string $videoBitrate
     *
     * @return $this
     */
    public function withVideoBitrate($videoBitrate)
    {
        $this->data['VideoBitrate'] = $videoBitrate;
        $this->options['query']['VideoBitrate'] = $videoBitrate;

        return $this;
    }

    /**
     * @param string $height
     *
     * @return $this
     */
    public function withHeight($height)
    {
        $this->data['Height'] = $height;
        $this->options['query']['Height'] = $height;

        return $this;
    }
}
