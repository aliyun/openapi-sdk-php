<?php

namespace AlibabaCloud\CloudPhoto\V20170711;

use AlibabaCloud\Rpc;

/**
 * @method string getBannerPhotoId()
 * @method $this withBannerPhotoId($value)
 * @method string getWatermarkPhotoId()
 * @method $this withWatermarkPhotoId($value)
 * @method string getIdentity()
 * @method $this withIdentity($value)
 * @method string getSplashPhotoId()
 * @method $this withSplashPhotoId($value)
 * @method string getLibraryId()
 * @method $this withLibraryId($value)
 * @method string getWeixinTitle()
 * @method $this withWeixinTitle($value)
 * @method string getStoreName()
 * @method $this withStoreName($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getEndAt()
 * @method $this withEndAt($value)
 * @method string getStartAt()
 * @method $this withStartAt($value)
 */
class CreateEvent extends Rpc
{
    public $product = 'CloudPhoto';

    public $version = '2017-07-11';

    public $scheme = 'https';

    public $method = 'POST';

    public $serviceCode = 'cloudphoto';
}
