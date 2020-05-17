<?php

namespace AlibabaCloud\Vcs\V20200515;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDevice addDevice(array $options = [])
 * @method CreateCorp createCorp(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method GetDeviceLiveUrl getDeviceLiveUrl(array $options = [])
 * @method GetInventory getInventory(array $options = [])
 * @method ListCorps listCorps(array $options = [])
 * @method ListDevices listDevices(array $options = [])
 * @method RecognizeImage recognizeImage(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method UpdateCorp updateCorp(array $options = [])
 * @method UpdateDevice updateDevice(array $options = [])
 */
class VcsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Vcs';

    /** @var string */
    public $version = '2020-05-15';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'vcs';
}

/**
 * @method string getDeviceSite()
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getDeviceDirection()
 * @method string getDeviceRate()
 * @method string getDeviceAddress()
 * @method string getDeviceType()
 * @method string getDeviceResolution()
 * @method string getVendor()
 * @method string getDeviceName()
 */
class AddDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSite($value)
    {
        $this->data['DeviceSite'] = $value;
        $this->options['form_params']['DeviceSite'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceDirection($value)
    {
        $this->data['DeviceDirection'] = $value;
        $this->options['form_params']['DeviceDirection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceRate($value)
    {
        $this->data['DeviceRate'] = $value;
        $this->options['form_params']['DeviceRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAddress($value)
    {
        $this->data['DeviceAddress'] = $value;
        $this->options['form_params']['DeviceAddress'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceResolution($value)
    {
        $this->data['DeviceResolution'] = $value;
        $this->options['form_params']['DeviceResolution'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVendor($value)
    {
        $this->data['Vendor'] = $value;
        $this->options['form_params']['Vendor'] = $value;

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
 * @method string getParentCorpId()
 * @method string getDescription()
 * @method string getAppName()
 * @method string getCorpName()
 */
class CreateCorp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentCorpId($value)
    {
        $this->data['ParentCorpId'] = $value;
        $this->options['form_params']['ParentCorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpName($value)
    {
        $this->data['CorpName'] = $value;
        $this->options['form_params']['CorpName'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 */
class DeleteDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getDeviceId()
 */
class GetDeviceLiveUrl extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceId($value)
    {
        $this->data['DeviceId'] = $value;
        $this->options['form_params']['DeviceId'] = $value;

        return $this;
    }
}

/**
 * @method string getCommodityCode()
 */
class GetInventory extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCommodityCode($value)
    {
        $this->data['CommodityCode'] = $value;
        $this->options['form_params']['CommodityCode'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class ListCorps extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getDeviceName()
 */
class ListDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNumber($value)
    {
        $this->data['PageNumber'] = $value;
        $this->options['form_params']['PageNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

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
 * @method string getCorpId()
 * @method string getPicContent()
 * @method string getPicFormat()
 */
class RecognizeImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicContent($value)
    {
        $this->data['PicContent'] = $value;
        $this->options['form_params']['PicContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicFormat($value)
    {
        $this->data['PicFormat'] = $value;
        $this->options['form_params']['PicFormat'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getStartTimeStamp()
 * @method string getEndTimeStamp()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getOptionList()
 */
class SearchFace extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTimeStamp($value)
    {
        $this->data['StartTimeStamp'] = $value;
        $this->options['form_params']['StartTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTimeStamp($value)
    {
        $this->data['EndTimeStamp'] = $value;
        $this->options['form_params']['EndTimeStamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNo($value)
    {
        $this->data['PageNo'] = $value;
        $this->options['form_params']['PageNo'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOptionList($value)
    {
        $this->data['OptionList'] = $value;
        $this->options['form_params']['OptionList'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getParentCorpId()
 * @method string getDescription()
 * @method string getAppName()
 * @method string getCorpName()
 */
class UpdateCorp extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentCorpId($value)
    {
        $this->data['ParentCorpId'] = $value;
        $this->options['form_params']['ParentCorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDescription($value)
    {
        $this->data['Description'] = $value;
        $this->options['form_params']['Description'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppName($value)
    {
        $this->data['AppName'] = $value;
        $this->options['form_params']['AppName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpName($value)
    {
        $this->data['CorpName'] = $value;
        $this->options['form_params']['CorpName'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceSite()
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getDeviceDirection()
 * @method string getDeviceRate()
 * @method string getDeviceAddress()
 * @method string getDeviceType()
 * @method string getDeviceResolution()
 * @method string getVendor()
 * @method string getDeviceName()
 */
class UpdateDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceSite($value)
    {
        $this->data['DeviceSite'] = $value;
        $this->options['form_params']['DeviceSite'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCorpId($value)
    {
        $this->data['CorpId'] = $value;
        $this->options['form_params']['CorpId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGbId($value)
    {
        $this->data['GbId'] = $value;
        $this->options['form_params']['GbId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceDirection($value)
    {
        $this->data['DeviceDirection'] = $value;
        $this->options['form_params']['DeviceDirection'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceRate($value)
    {
        $this->data['DeviceRate'] = $value;
        $this->options['form_params']['DeviceRate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceAddress($value)
    {
        $this->data['DeviceAddress'] = $value;
        $this->options['form_params']['DeviceAddress'] = $value;

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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceResolution($value)
    {
        $this->data['DeviceResolution'] = $value;
        $this->options['form_params']['DeviceResolution'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVendor($value)
    {
        $this->data['Vendor'] = $value;
        $this->options['form_params']['Vendor'] = $value;

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
