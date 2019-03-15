<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * @method string getApp()
 * @method $this withApp($value)
 * @method string getTemplate()
 * @method $this withTemplate($value)
 * @method string getProfile()
 * @method $this withProfile($value)
 * @method string getFPS()
 * @method $this withFPS($value)
 * @method string getGop()
 * @method $this withGop($value)
 * @method string getOwnerId()
 * @method $this withOwnerId($value)
 * @method string getTemplateType()
 * @method $this withTemplateType($value)
 * @method string getAudioBitrate()
 * @method $this withAudioBitrate($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 * @method string getWidth()
 * @method $this withWidth($value)
 * @method string getVideoBitrate()
 * @method $this withVideoBitrate($value)
 * @method string getHeight()
 * @method $this withHeight($value)
 */
class AddCustomLiveStreamTranscode extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';
}
