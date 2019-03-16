<?php

namespace AlibabaCloud\MoPen\V20180211;

use AlibabaCloud\Rpc;

class V20180211Rpc extends Rpc
{
    /** @var string */
    public $product = 'MoPen';

    /** @var string */
    public $version = '2018-02-11';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $scheme = 'https';

    /** @var string */
    public $serviceCode = 'mopen';
}

/**
 * @method string getPayload()
 * @method $this withPayload($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class MoPenSendMqttMessage extends V20180211Rpc
{
}

/**
 * @method string getCanvasId()
 * @method $this withCanvasId($value)
 * @method string getEndY()
 * @method $this withEndY($value)
 * @method string getEndX()
 * @method $this withEndX($value)
 * @method string getJsonConf()
 * @method $this withJsonConf($value)
 * @method string getExportType()
 * @method $this withExportType($value)
 * @method string getStartY()
 * @method $this withStartY($value)
 * @method string getStartX()
 * @method $this withStartX($value)
 */
class MoPenDoRecognize extends V20180211Rpc
{
}

/**
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getSessionId()
 * @method $this withSessionId($value)
 * @method string getPageId()
 * @method $this withPageId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class MoPenQueryCanvas extends V20180211Rpc
{
}

/**
 * @method string getCreator()
 * @method $this withCreator($value)
 */
class MoPenFindGroup extends V20180211Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class MoPenDeleteGroupMember extends V20180211Rpc
{
}

/**
 * @method string getOrderKey()
 * @method $this withOrderKey($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class MoPenBindIsv extends V20180211Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 */
class MoPenDeleteGroup extends V20180211Rpc
{
}

/**
 * @method string getGroupId()
 * @method $this withGroupId($value)
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 */
class MoPenAddGroupMember extends V20180211Rpc
{
}

/**
 * @method string getCreator()
 * @method $this withCreator($value)
 */
class MopenCreateGroup extends V20180211Rpc
{
}

/**
 * @method string getDeviceName()
 * @method $this withDeviceName($value)
 * @method string getDeviceType()
 * @method $this withDeviceType($value)
 */
class MoPenCreateDevice extends V20180211Rpc
{
}
