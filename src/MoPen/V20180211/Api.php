<?php

namespace AlibabaCloud\MoPen\V20180211;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method MoPenSendMqttMessage moPenSendMqttMessage(array $options = [])
 * @method MoPenDoRecognize moPenDoRecognize(array $options = [])
 * @method MoPenQueryCanvas moPenQueryCanvas(array $options = [])
 * @method MoPenFindGroup moPenFindGroup(array $options = [])
 * @method MoPenDeleteGroupMember moPenDeleteGroupMember(array $options = [])
 * @method MoPenBindIsv moPenBindIsv(array $options = [])
 * @method MoPenDeleteGroup moPenDeleteGroup(array $options = [])
 * @method MoPenAddGroupMember moPenAddGroupMember(array $options = [])
 * @method MopenCreateGroup mopenCreateGroup(array $options = [])
 * @method MoPenCreateDevice moPenCreateDevice(array $options = [])
 */
class MoPenApiResolver
{
    use ApiResolverTrait;
}

class V20180211Rpc extends Rpc
{
    /** @var string */
    public $product = 'MoPen';

    /** @var string */
    public $version = '2018-02-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    protected $scheme = 'https';

    /** @var string */
    public $serviceCode = 'mopen';
}

/**
 * @method string getPayload()
 * @method string getDeviceName()
 */
class MoPenSendMqttMessage extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPayload($value)
    {
        $this->data['Payload'] = $value;
        $this->options['form_params']['Payload'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getCanvasId()
 * @method string getEndY()
 * @method string getEndX()
 * @method string getJsonConf()
 * @method string getExportType()
 * @method string getStartY()
 * @method string getStartX()
 */
class MoPenDoRecognize extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCanvasId($value)
    {
        $this->data['CanvasId'] = $value;
        $this->options['form_params']['CanvasId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndY($value)
    {
        $this->data['EndY'] = $value;
        $this->options['form_params']['EndY'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndX($value)
    {
        $this->data['EndX'] = $value;
        $this->options['form_params']['EndX'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withJsonConf($value)
    {
        $this->data['JsonConf'] = $value;
        $this->options['form_params']['JsonConf'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExportType($value)
    {
        $this->data['ExportType'] = $value;
        $this->options['form_params']['ExportType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartY($value)
    {
        $this->data['StartY'] = $value;
        $this->options['form_params']['StartY'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartX($value)
    {
        $this->data['StartX'] = $value;
        $this->options['form_params']['StartX'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceName()
 * @method string getSessionId()
 * @method string getPageId()
 * @method string getStatus()
 */
class MoPenQueryCanvas extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSessionId($value)
    {
        $this->data['SessionId'] = $value;
        $this->options['form_params']['SessionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageId($value)
    {
        $this->data['PageId'] = $value;
        $this->options['form_params']['PageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getCreator()
 */
class MoPenFindGroup extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreator($value)
    {
        $this->data['Creator'] = $value;
        $this->options['form_params']['Creator'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getDeviceName()
 */
class MoPenDeleteGroupMember extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getOrderKey()
 * @method string getDeviceName()
 */
class MoPenBindIsv extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOrderKey($value)
    {
        $this->data['OrderKey'] = $value;
        $this->options['form_params']['OrderKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 */
class MoPenDeleteGroup extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }
}

/**
 * @method string getGroupId()
 * @method string getDeviceName()
 */
class MoPenAddGroupMember extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupId($value)
    {
        $this->data['GroupId'] = $value;
        $this->options['form_params']['GroupId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }
}

/**
 * @method string getCreator()
 */
class MopenCreateGroup extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCreator($value)
    {
        $this->data['Creator'] = $value;
        $this->options['form_params']['Creator'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceName()
 * @method string getDeviceType()
 */
class MoPenCreateDevice extends V20180211Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceName($value)
    {
        $this->data['DeviceName'] = $value;
        $this->options['form_params']['DeviceName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceType($value)
    {
        $this->data['DeviceType'] = $value;
        $this->options['form_params']['DeviceType'] = $value;

        return $this;
    }
}
