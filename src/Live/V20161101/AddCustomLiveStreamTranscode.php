<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AddCustomLiveStreamTranscode
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
class AddCustomLiveStreamTranscode extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'AddCustomLiveStreamTranscode';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withApp() instead.
     *
     * @param string $app
     *
     * @return $this
     */
    public function setApp($app)
    {
        return $this->withApp($app);
    }

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
     * @deprecated deprecated since version 2.0, Use withTemplate() instead.
     *
     * @param string $template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        return $this->withTemplate($template);
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
     * @deprecated deprecated since version 2.0, Use withProfile() instead.
     *
     * @param string $profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        return $this->withProfile($profile);
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
     * @deprecated deprecated since version 2.0, Use withFPS() instead.
     *
     * @param string $fPS
     *
     * @return $this
     */
    public function setFPS($fPS)
    {
        return $this->withFPS($fPS);
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
     * @deprecated deprecated since version 2.0, Use withGop() instead.
     *
     * @param string $gop
     *
     * @return $this
     */
    public function setGop($gop)
    {
        return $this->withGop($gop);
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
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
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
     * @deprecated deprecated since version 2.0, Use withTemplateType() instead.
     *
     * @param string $templateType
     *
     * @return $this
     */
    public function setTemplateType($templateType)
    {
        return $this->withTemplateType($templateType);
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
     * @deprecated deprecated since version 2.0, Use withAudioBitrate() instead.
     *
     * @param string $audioBitrate
     *
     * @return $this
     */
    public function setAudioBitrate($audioBitrate)
    {
        return $this->withAudioBitrate($audioBitrate);
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
     * @deprecated deprecated since version 2.0, Use withDomain() instead.
     *
     * @param string $domain
     *
     * @return $this
     */
    public function setDomain($domain)
    {
        return $this->withDomain($domain);
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
     * @deprecated deprecated since version 2.0, Use withWidth() instead.
     *
     * @param string $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        return $this->withWidth($width);
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
     * @deprecated deprecated since version 2.0, Use withVideoBitrate() instead.
     *
     * @param string $videoBitrate
     *
     * @return $this
     */
    public function setVideoBitrate($videoBitrate)
    {
        return $this->withVideoBitrate($videoBitrate);
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
     * @deprecated deprecated since version 2.0, Use withHeight() instead.
     *
     * @param string $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        return $this->withHeight($height);
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
