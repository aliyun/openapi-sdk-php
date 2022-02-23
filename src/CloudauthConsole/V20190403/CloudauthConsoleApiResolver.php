<?php

namespace AlibabaCloud\CloudauthConsole\V20190403;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method RetrieveFace retrieveFace(array $options = [])
 * @method UploadIdentifyRecord uploadIdentifyRecord(array $options = [])
 */
class CloudauthConsoleApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Cloudauth-console';

    /** @var string */
    public $version = '2019-04-03';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cloudauth-console';
}

/**
 * @method string getFace64String()
 * @method string getFaceUrl()
 * @method $this withFaceUrl($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 */
class RetrieveFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFace64String($value)
    {
        $this->data['Face64String'] = $value;
        $this->options['form_params']['Face64String'] = $value;

        return $this;
    }
}

/**
 * @method string getExt()
 * @method $this withExt($value)
 * @method string getIdentifyingImageUrl()
 * @method $this withIdentifyingImageUrl($value)
 * @method string getIdentifyingImageBase64()
 * @method string getDeviceSecret()
 * @method $this withDeviceSecret($value)
 * @method string getProductKey()
 * @method $this withProductKey($value)
 * @method string getUserId()
 * @method $this withUserId($value)
 * @method string getIotId()
 * @method $this withIotId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getIdentifyingTime()
 * @method $this withIdentifyingTime($value)
 * @method string getProjectId()
 * @method $this withProjectId($value)
 * @method string getUserName()
 * @method $this withUserName($value)
 */
class UploadIdentifyRecord extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentifyingImageBase64($value)
    {
        $this->data['IdentifyingImageBase64'] = $value;
        $this->options['form_params']['IdentifyingImageBase64'] = $value;

        return $this;
    }
}
