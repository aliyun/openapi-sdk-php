<?php

namespace AlibabaCloud\Facebody\V20200910;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DetectIPCPedestrianOptimized detectIPCPedestrianOptimized(array $options = [])
 * @method ExecuteServerSideVerification executeServerSideVerification(array $options = [])
 */
class FacebodyApiResolver extends ApiResolver
{
}

class Roa extends \AlibabaCloud\Client\Resolver\Roa
{
    /** @var string */
    public $product = 'facebody';

    /** @var string */
    public $version = '2020-09-10';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'facebody';
}

/**
 * @method string getImageData()
 * @method string getWidth()
 * @method string getHeight()
 */
class DetectIPCPedestrianOptimized extends Roa
{
    /** @var string */
    public $pathPattern = '/viapi/k8s/facebody/detect-ipc-pedestrian-optimized';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageData($value)
    {
        $this->data['ImageData'] = $value;
        $this->options['form_params']['imageData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withWidth($value)
    {
        $this->data['Width'] = $value;
        $this->options['form_params']['width'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withHeight($value)
    {
        $this->data['Height'] = $value;
        $this->options['form_params']['height'] = $value;

        return $this;
    }
}

/**
 * @method string getFacialPictureData()
 * @method string getSceneType()
 * @method string getCertificateNumber()
 * @method string getCertificateName()
 * @method string getFacialPictureUrl()
 */
class ExecuteServerSideVerification extends Roa
{
    /** @var string */
    public $pathPattern = '/viapi/thirdparty/realperson/execServerSideVerification';

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFacialPictureData($value)
    {
        $this->data['FacialPictureData'] = $value;
        $this->options['form_params']['facialPictureData'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSceneType($value)
    {
        $this->data['SceneType'] = $value;
        $this->options['form_params']['sceneType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertificateNumber($value)
    {
        $this->data['CertificateNumber'] = $value;
        $this->options['form_params']['certificateNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCertificateName($value)
    {
        $this->data['CertificateName'] = $value;
        $this->options['form_params']['certificateName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFacialPictureUrl($value)
    {
        $this->data['FacialPictureUrl'] = $value;
        $this->options['form_params']['facialPictureUrl'] = $value;

        return $this;
    }
}
