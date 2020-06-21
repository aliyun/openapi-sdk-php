<?php

namespace AlibabaCloud\Vcs\V20200515;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddDevice addDevice(array $options = [])
 * @method AddMonitor addMonitor(array $options = [])
 * @method CreateCorp createCorp(array $options = [])
 * @method DeleteDevice deleteDevice(array $options = [])
 * @method GetBodyOptions getBodyOptions(array $options = [])
 * @method GetDeviceLiveUrl getDeviceLiveUrl(array $options = [])
 * @method GetDeviceVideoUrl getDeviceVideoUrl(array $options = [])
 * @method GetFaceOptions getFaceOptions(array $options = [])
 * @method GetInventory getInventory(array $options = [])
 * @method GetMonitorResult getMonitorResult(array $options = [])
 * @method GetPersonDetail getPersonDetail(array $options = [])
 * @method ListCorps listCorps(array $options = [])
 * @method ListDevices listDevices(array $options = [])
 * @method ListPersons listPersons(array $options = [])
 * @method RecognizeImage recognizeImage(array $options = [])
 * @method SearchBody searchBody(array $options = [])
 * @method SearchFace searchFace(array $options = [])
 * @method StopMonitor stopMonitor(array $options = [])
 * @method UpdateCorp updateCorp(array $options = [])
 * @method UpdateDevice updateDevice(array $options = [])
 * @method UpdateMonitor updateMonitor(array $options = [])
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
 * @method string getBitRate()
 * @method string getDeviceDirection()
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
    public function withBitRate($value)
    {
        $this->data['BitRate'] = $value;
        $this->options['form_params']['BitRate'] = $value;

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
 * @method string getMonitorType()
 * @method string getCorpId()
 * @method string getDescription()
 * @method string getBatchIndicator()
 * @method string getAlgorithmVendor()
 */
class AddMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMonitorType($value)
    {
        $this->data['MonitorType'] = $value;
        $this->options['form_params']['MonitorType'] = $value;

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
    public function withBatchIndicator($value)
    {
        $this->data['BatchIndicator'] = $value;
        $this->options['form_params']['BatchIndicator'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmVendor($value)
    {
        $this->data['AlgorithmVendor'] = $value;
        $this->options['form_params']['AlgorithmVendor'] = $value;

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
 */
class GetBodyOptions extends Rpc
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
}

/**
 * @method string getCorpId()
 * @method string getGbId()
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
}

/**
 * @method string getCorpId()
 * @method string getGbId()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class GetDeviceVideoUrl extends Rpc
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
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 */
class GetFaceOptions extends Rpc
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
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getAlgorithmVendor()
 * @method string getMinRecordId()
 * @method string getTaskId()
 */
class GetMonitorResult extends Rpc
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
    public function withEndTime($value)
    {
        $this->data['EndTime'] = $value;
        $this->options['form_params']['EndTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTime($value)
    {
        $this->data['StartTime'] = $value;
        $this->options['form_params']['StartTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmVendor($value)
    {
        $this->data['AlgorithmVendor'] = $value;
        $this->options['form_params']['AlgorithmVendor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinRecordId($value)
    {
        $this->data['MinRecordId'] = $value;
        $this->options['form_params']['MinRecordId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getPersonID()
 */
class GetPersonDetail extends Rpc
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
    public function withPersonID($value)
    {
        $this->data['PersonID'] = $value;
        $this->options['form_params']['PersonID'] = $value;

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
 * @method string getPageNo()
 * @method string getPageSize()
 */
class ListPersons extends Rpc
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
class SearchBody extends Rpc
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
 * @method string getAlgorithmVendor()
 * @method string getTaskId()
 */
class StopMonitor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmVendor($value)
    {
        $this->data['AlgorithmVendor'] = $value;
        $this->options['form_params']['AlgorithmVendor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

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
 * @method string getBitRate()
 * @method string getDeviceDirection()
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
    public function withBitRate($value)
    {
        $this->data['BitRate'] = $value;
        $this->options['form_params']['BitRate'] = $value;

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
 * @method string getCorpId()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getPicOperateType()
 * @method string getAttributeName()
 * @method string getAttributeOperateType()
 * @method string getRuleExpression()
 * @method string getTaskId()
 * @method string getDeviceOperateType()
 * @method string getPicList()
 * @method string getAttributeValueList()
 * @method string getDeviceList()
 * @method string getAlgorithmVendor()
 */
class UpdateMonitor extends Rpc
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
    public function withRuleName($value)
    {
        $this->data['RuleName'] = $value;
        $this->options['form_params']['RuleName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicOperateType($value)
    {
        $this->data['PicOperateType'] = $value;
        $this->options['form_params']['PicOperateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributeName($value)
    {
        $this->data['AttributeName'] = $value;
        $this->options['form_params']['AttributeName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributeOperateType($value)
    {
        $this->data['AttributeOperateType'] = $value;
        $this->options['form_params']['AttributeOperateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRuleExpression($value)
    {
        $this->data['RuleExpression'] = $value;
        $this->options['form_params']['RuleExpression'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceOperateType($value)
    {
        $this->data['DeviceOperateType'] = $value;
        $this->options['form_params']['DeviceOperateType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicList($value)
    {
        $this->data['PicList'] = $value;
        $this->options['form_params']['PicList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributeValueList($value)
    {
        $this->data['AttributeValueList'] = $value;
        $this->options['form_params']['AttributeValueList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceList($value)
    {
        $this->data['DeviceList'] = $value;
        $this->options['form_params']['DeviceList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlgorithmVendor($value)
    {
        $this->data['AlgorithmVendor'] = $value;
        $this->options['form_params']['AlgorithmVendor'] = $value;

        return $this;
    }
}
