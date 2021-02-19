<?php

namespace AlibabaCloud\CDRS\V20201101;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AddCdrsMonitor addCdrsMonitor(array $options = [])
 * @method AddMonitor addMonitor(array $options = [])
 * @method BindDevice bindDevice(array $options = [])
 * @method CreateProject createProject(array $options = [])
 * @method GetCdrsMonitorList getCdrsMonitorList(array $options = [])
 * @method GetCdrsMonitorResult getCdrsMonitorResult(array $options = [])
 * @method GetMonitorList getMonitorList(array $options = [])
 * @method GetMonitorResult getMonitorResult(array $options = [])
 * @method ListAreaHotSpotMetrics listAreaHotSpotMetrics(array $options = [])
 * @method ListCityMapAois listCityMapAois(array $options = [])
 * @method ListCityMapCameraResults listCityMapCameraResults(array $options = [])
 * @method ListCityMapCameraStatistics listCityMapCameraStatistics(array $options = [])
 * @method ListCityMapImageDetails listCityMapImageDetails(array $options = [])
 * @method ListCityMapPersonFlow listCityMapPersonFlow(array $options = [])
 * @method ListCityMapRangeStatistic listCityMapRangeStatistic(array $options = [])
 * @method ListCorpMetricsStatistic listCorpMetricsStatistic(array $options = [])
 * @method ListDataStatistics listDataStatistics(array $options = [])
 * @method ListDataStatisticsByDay listDataStatisticsByDay(array $options = [])
 * @method ListDeviceDetail listDeviceDetail(array $options = [])
 * @method ListDeviceGenderStatistics listDeviceGenderStatistics(array $options = [])
 * @method ListDevicePerson listDevicePerson(array $options = [])
 * @method ListDevicePersonStatistics listDevicePersonStatistics(array $options = [])
 * @method ListDeviceRelation listDeviceRelation(array $options = [])
 * @method ListMapRouteDetails listMapRouteDetails(array $options = [])
 * @method ListPersonDetails listPersonDetails(array $options = [])
 * @method ListPersonResult listPersonResult(array $options = [])
 * @method ListPersonTag listPersonTag(array $options = [])
 * @method ListPersonTop listPersonTop(array $options = [])
 * @method ListPersonTrack listPersonTrack(array $options = [])
 * @method ListRangeDevice listRangeDevice(array $options = [])
 * @method ListStorageStatistics listStorageStatistics(array $options = [])
 * @method ListStructureStatistics listStructureStatistics(array $options = [])
 * @method ListTagMetrics listTagMetrics(array $options = [])
 * @method ListVehicleDetails listVehicleDetails(array $options = [])
 * @method ListVehicleResults listVehicleResults(array $options = [])
 * @method ListVehicleTagDistribute listVehicleTagDistribute(array $options = [])
 * @method ListVehicleTop listVehicleTop(array $options = [])
 * @method ListVehicleTrack listVehicleTrack(array $options = [])
 * @method PaginateDevice paginateDevice(array $options = [])
 * @method PaginateProject paginateProject(array $options = [])
 * @method RecognizeImage recognizeImage(array $options = [])
 * @method SearchAggregateObject searchAggregateObject(array $options = [])
 * @method SearchObject searchObject(array $options = [])
 * @method StopCdrsMonitor stopCdrsMonitor(array $options = [])
 * @method StopMonitor stopMonitor(array $options = [])
 * @method UnbindDevice unbindDevice(array $options = [])
 * @method UpdateCdrsMonitor updateCdrsMonitor(array $options = [])
 * @method UpdateMonitor updateMonitor(array $options = [])
 * @method UpdateProject updateProject(array $options = [])
 */
class CDRSApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'CDRS';

    /** @var string */
    public $version = '2020-11-01';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getMonitorType()
 * @method string getCorpId()
 * @method string getDescription()
 * @method string getNotifierAppSecret()
 * @method string getNotifierExtendValues()
 * @method string getNotifierUrl()
 * @method string getNotifierType()
 * @method string getBatchIndicator()
 * @method string getBizId()
 * @method string getNotifierTimeOut()
 * @method string getAlgorithmVendor()
 */
class AddCdrsMonitor extends Rpc
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
    public function withNotifierAppSecret($value)
    {
        $this->data['NotifierAppSecret'] = $value;
        $this->options['form_params']['NotifierAppSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierExtendValues($value)
    {
        $this->data['NotifierExtendValues'] = $value;
        $this->options['form_params']['NotifierExtendValues'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierUrl($value)
    {
        $this->data['NotifierUrl'] = $value;
        $this->options['form_params']['NotifierUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierType($value)
    {
        $this->data['NotifierType'] = $value;
        $this->options['form_params']['NotifierType'] = $value;

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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierTimeOut($value)
    {
        $this->data['NotifierTimeOut'] = $value;
        $this->options['form_params']['NotifierTimeOut'] = $value;

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
 * @method string getMonitorType()
 * @method string getCorpId()
 * @method string getDescription()
 * @method string getNotifierAppSecret()
 * @method string getNotifierExtendValues()
 * @method string getNotifierUrl()
 * @method string getNotifierType()
 * @method string getBatchIndicator()
 * @method string getBizId()
 * @method string getNotifierTimeOut()
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
    public function withNotifierAppSecret($value)
    {
        $this->data['NotifierAppSecret'] = $value;
        $this->options['form_params']['NotifierAppSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierExtendValues($value)
    {
        $this->data['NotifierExtendValues'] = $value;
        $this->options['form_params']['NotifierExtendValues'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierUrl($value)
    {
        $this->data['NotifierUrl'] = $value;
        $this->options['form_params']['NotifierUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierType($value)
    {
        $this->data['NotifierType'] = $value;
        $this->options['form_params']['NotifierType'] = $value;

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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierTimeOut($value)
    {
        $this->data['NotifierTimeOut'] = $value;
        $this->options['form_params']['NotifierTimeOut'] = $value;

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
 * @method string getCorpId()
 * @method array getDevices()
 * @method string getAppName()
 * @method string getNameSpace()
 */
class BindDevice extends Rpc
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
     * @param array $devices
     *
     * @return $this
     */
	public function withDevices(array $devices)
	{
	    $this->data['Devices'] = $devices;
		foreach ($devices as $depth1 => $depth1Value) {
			if(isset($depth1Value['CorpId'])){
				$this->options['form_params']['Devices.' . ($depth1 + 1) . '.CorpId'] = $depth1Value['CorpId'];
			}
			if(isset($depth1Value['DeviceId'])){
				$this->options['form_params']['Devices.' . ($depth1 + 1) . '.DeviceId'] = $depth1Value['DeviceId'];
			}
		}

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
    public function withNameSpace($value)
    {
        $this->data['NameSpace'] = $value;
        $this->options['form_params']['NameSpace'] = $value;

        return $this;
    }
}

/**
 * @method string getClientToken()
 * @method string getIcon()
 * @method string getDescription()
 * @method string getAppName()
 * @method string getNameSpace()
 * @method string getName()
 * @method string getAggregateSceneCode()
 */
class CreateProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withClientToken($value)
    {
        $this->data['ClientToken'] = $value;
        $this->options['form_params']['ClientToken'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIcon($value)
    {
        $this->data['Icon'] = $value;
        $this->options['form_params']['Icon'] = $value;

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
    public function withNameSpace($value)
    {
        $this->data['NameSpace'] = $value;
        $this->options['form_params']['NameSpace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAggregateSceneCode($value)
    {
        $this->data['AggregateSceneCode'] = $value;
        $this->options['form_params']['AggregateSceneCode'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getPageNo()
 * @method string getPageSize()
 * @method string getBizId()
 */
class GetCdrsMonitorList extends Rpc
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

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getBizId()
 * @method string getAlgorithmVendor()
 * @method string getMinRecordId()
 * @method string getTaskId()
 */
class GetCdrsMonitorResult extends Rpc
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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

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
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getBizId()
 */
class GetMonitorList extends Rpc
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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getBizId()
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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

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
 * @method string getSchema()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getDeviceId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getPersonId()
 */
class ListAreaHotSpotMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withDeviceId($value)
    {
        $this->data['DeviceId'] = $value;
        $this->options['form_params']['DeviceId'] = $value;

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
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }
}

/**
 * @method string getLatitude()
 * @method string getRadius()
 * @method string getLongitude()
 */
class ListCityMapAois extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLatitude($value)
    {
        $this->data['Latitude'] = $value;
        $this->options['form_params']['Latitude'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRadius($value)
    {
        $this->data['Radius'] = $value;
        $this->options['form_params']['Radius'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLongitude($value)
    {
        $this->data['Longitude'] = $value;
        $this->options['form_params']['Longitude'] = $value;

        return $this;
    }
}

/**
 * @method string getPageNum()
 * @method string getDataSourceIdList()
 * @method string getPageSize()
 */
class ListCityMapCameraResults extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceIdList($value)
    {
        $this->data['DataSourceIdList'] = $value;
        $this->options['form_params']['DataSourceIdList'] = $value;

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
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDataSourceIdList()
 * @method string getPageSize()
 */
class ListCityMapCameraStatistics extends Rpc
{

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
    public function withDataSourceIdList($value)
    {
        $this->data['DataSourceIdList'] = $value;
        $this->options['form_params']['DataSourceIdList'] = $value;

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
 * @method string getTimeInterval()
 * @method string getRecordNumber()
 * @method string getDataSourceId()
 */
class ListCityMapImageDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTimeInterval($value)
    {
        $this->data['TimeInterval'] = $value;
        $this->options['form_params']['TimeInterval'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRecordNumber($value)
    {
        $this->data['RecordNumber'] = $value;
        $this->options['form_params']['RecordNumber'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method string getRange()
 * @method string getStartTime()
 * @method string getOriginDataSourceIdList()
 * @method string getPageNumber()
 * @method string getTargetDataSourceIdList()
 * @method string getPageSize()
 */
class ListCityMapPersonFlow extends Rpc
{

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
    public function withRange($value)
    {
        $this->data['Range'] = $value;
        $this->options['form_params']['Range'] = $value;

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
    public function withOriginDataSourceIdList($value)
    {
        $this->data['OriginDataSourceIdList'] = $value;
        $this->options['form_params']['OriginDataSourceIdList'] = $value;

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
    public function withTargetDataSourceIdList($value)
    {
        $this->data['TargetDataSourceIdList'] = $value;
        $this->options['form_params']['TargetDataSourceIdList'] = $value;

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
 * @method string getLatitude()
 * @method string getEndTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getRadius()
 * @method string getLongitude()
 */
class ListCityMapRangeStatistic extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLatitude($value)
    {
        $this->data['Latitude'] = $value;
        $this->options['form_params']['Latitude'] = $value;

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
    public function withRadius($value)
    {
        $this->data['Radius'] = $value;
        $this->options['form_params']['Radius'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLongitude($value)
    {
        $this->data['Longitude'] = $value;
        $this->options['form_params']['Longitude'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDeviceGroupList()
 * @method string getTagCode()
 * @method string getUserGroupList()
 * @method string getPageSize()
 * @method string getDeviceIdList()
 */
class ListCorpMetricsStatistic extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withDeviceGroupList($value)
    {
        $this->data['DeviceGroupList'] = $value;
        $this->options['form_params']['DeviceGroupList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTagCode($value)
    {
        $this->data['TagCode'] = $value;
        $this->options['form_params']['TagCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserGroupList($value)
    {
        $this->data['UserGroupList'] = $value;
        $this->options['form_params']['UserGroupList'] = $value;

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
    public function withDeviceIdList($value)
    {
        $this->data['DeviceIdList'] = $value;
        $this->options['form_params']['DeviceIdList'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getBackCategory()
 */
class ListDataStatistics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBackCategory($value)
    {
        $this->data['BackCategory'] = $value;
        $this->options['form_params']['BackCategory'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 */
class ListDataStatisticsByDay extends Rpc
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
}

/**
 * @method string getCorpId()
 * @method string getPageNumber()
 * @method string getDataSourceId()
 * @method string getPageSize()
 */
class ListDeviceDetail extends Rpc
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
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

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
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getDataSourceId()
 */
class ListDeviceGenderStatistics extends Rpc
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
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

        return $this;
    }
}

/**
 * @method string getStatisticsType()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getDataSourceId()
 * @method string getPageSize()
 */
class ListDevicePerson extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatisticsType($value)
    {
        $this->data['StatisticsType'] = $value;
        $this->options['form_params']['StatisticsType'] = $value;

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
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

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
 * @method string getStatisticsType()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getDataSourceId()
 */
class ListDevicePersonStatistics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatisticsType($value)
    {
        $this->data['StatisticsType'] = $value;
        $this->options['form_params']['StatisticsType'] = $value;

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
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceId()
 * @method string getAppName()
 * @method string getNameSpace()
 */
class ListDeviceRelation extends Rpc
{

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
    public function withNameSpace($value)
    {
        $this->data['NameSpace'] = $value;
        $this->options['form_params']['NameSpace'] = $value;

        return $this;
    }
}

/**
 * @method string getRouteList()
 */
class ListMapRouteDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRouteList($value)
    {
        $this->data['RouteList'] = $value;
        $this->options['form_params']['RouteList'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getPersonId()
 */
class ListPersonDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }
}

/**
 * @method string getProfession()
 * @method string getSchema()
 * @method string getCorpId()
 * @method string getGender()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getAge()
 */
class ListPersonResult extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProfession($value)
    {
        $this->data['Profession'] = $value;
        $this->options['form_params']['Profession'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withGender($value)
    {
        $this->data['Gender'] = $value;
        $this->options['form_params']['Gender'] = $value;

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
    public function withAge($value)
    {
        $this->data['Age'] = $value;
        $this->options['form_params']['Age'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getCorpId()
 * @method string getPageNumber()
 * @method string getTagCode()
 * @method string getPageSize()
 */
class ListPersonTag extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withTagCode($value)
    {
        $this->data['TagCode'] = $value;
        $this->options['form_params']['TagCode'] = $value;

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
 * @method string getSchema()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getPersonId()
 */
class ListPersonTop extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getCorpId()
 * @method string getAggregateDimension()
 * @method string getImageSourceType()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getPersonId()
 */
class ListPersonTrack extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withAggregateDimension($value)
    {
        $this->data['AggregateDimension'] = $value;
        $this->options['form_params']['AggregateDimension'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageSourceType($value)
    {
        $this->data['ImageSourceType'] = $value;
        $this->options['form_params']['ImageSourceType'] = $value;

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
    public function withPersonId($value)
    {
        $this->data['PersonId'] = $value;
        $this->options['form_params']['PersonId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getPageNumber()
 * @method string getDataSourceId()
 * @method string getPageSize()
 * @method string getRadius()
 */
class ListRangeDevice extends Rpc
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
    public function withDataSourceId($value)
    {
        $this->data['DataSourceId'] = $value;
        $this->options['form_params']['DataSourceId'] = $value;

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
    public function withRadius($value)
    {
        $this->data['Radius'] = $value;
        $this->options['form_params']['Radius'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 */
class ListStorageStatistics extends Rpc
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
 * @method string getBackCategory()
 */
class ListStructureStatistics extends Rpc
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
    public function withBackCategory($value)
    {
        $this->data['BackCategory'] = $value;
        $this->options['form_params']['BackCategory'] = $value;

        return $this;
    }
}

/**
 * @method string getSchema()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getTagCode()
 * @method string getPageSize()
 * @method string getAggregateType()
 */
class ListTagMetrics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSchema($value)
    {
        $this->data['Schema'] = $value;
        $this->options['form_params']['Schema'] = $value;

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
    public function withTagCode($value)
    {
        $this->data['TagCode'] = $value;
        $this->options['form_params']['TagCode'] = $value;

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
    public function withAggregateType($value)
    {
        $this->data['AggregateType'] = $value;
        $this->options['form_params']['AggregateType'] = $value;

        return $this;
    }
}

/**
 * @method string getPlateId()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class ListVehicleDetails extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateId($value)
    {
        $this->data['PlateId'] = $value;
        $this->options['form_params']['PlateId'] = $value;

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
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getVehicleColor()
 * @method string getVehicleApplication()
 * @method string getPageNumber()
 * @method string getVehicleClass()
 * @method string getPageSize()
 */
class ListVehicleResults extends Rpc
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
    public function withVehicleColor($value)
    {
        $this->data['VehicleColor'] = $value;
        $this->options['form_params']['VehicleColor'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withVehicleApplication($value)
    {
        $this->data['VehicleApplication'] = $value;
        $this->options['form_params']['VehicleApplication'] = $value;

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
    public function withVehicleClass($value)
    {
        $this->data['VehicleClass'] = $value;
        $this->options['form_params']['VehicleClass'] = $value;

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
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getTagCode()
 */
class ListVehicleTagDistribute extends Rpc
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
    public function withTagCode($value)
    {
        $this->data['TagCode'] = $value;
        $this->options['form_params']['TagCode'] = $value;

        return $this;
    }
}

/**
 * @method string getPlateId()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNum()
 * @method string getPageSize()
 */
class ListVehicleTop extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateId($value)
    {
        $this->data['PlateId'] = $value;
        $this->options['form_params']['PlateId'] = $value;

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
    public function withPageNum($value)
    {
        $this->data['PageNum'] = $value;
        $this->options['form_params']['PageNum'] = $value;

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
 * @method string getPlateId()
 * @method string getCorpId()
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getPageNumber()
 * @method string getPageSize()
 */
class ListVehicleTrack extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPlateId($value)
    {
        $this->data['PlateId'] = $value;
        $this->options['form_params']['PlateId'] = $value;

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
 * @method string getPageNumber()
 * @method string getCountTotalNum()
 * @method string getAppName()
 * @method string getNameSpace()
 * @method string getPageSize()
 */
class PaginateDevice extends Rpc
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
    public function withCountTotalNum($value)
    {
        $this->data['CountTotalNum'] = $value;
        $this->options['form_params']['CountTotalNum'] = $value;

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
    public function withNameSpace($value)
    {
        $this->data['NameSpace'] = $value;
        $this->options['form_params']['NameSpace'] = $value;

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
 * @method string getType()
 * @method string getPageNumber()
 * @method string getCountTotalNum()
 * @method string getAppName()
 * @method string getNameSpace()
 * @method string getPageSize()
 * @method string getNameLike()
 */
class PaginateProject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withType($value)
    {
        $this->data['Type'] = $value;
        $this->options['form_params']['Type'] = $value;

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
    public function withCountTotalNum($value)
    {
        $this->data['CountTotalNum'] = $value;
        $this->options['form_params']['CountTotalNum'] = $value;

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
    public function withNameSpace($value)
    {
        $this->data['NameSpace'] = $value;
        $this->options['form_params']['NameSpace'] = $value;

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
    public function withNameLike($value)
    {
        $this->data['NameLike'] = $value;
        $this->options['form_params']['NameLike'] = $value;

        return $this;
    }
}

/**
 * @method string getRequireCropImage()
 * @method string getCorpId()
 * @method string getRecognizeType()
 * @method string getVendor()
 * @method string getImageUrl()
 * @method string getImageContent()
 */
class RecognizeImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withRequireCropImage($value)
    {
        $this->data['RequireCropImage'] = $value;
        $this->options['form_params']['RequireCropImage'] = $value;

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
    public function withRecognizeType($value)
    {
        $this->data['RecognizeType'] = $value;
        $this->options['form_params']['RecognizeType'] = $value;

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
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }
}

/**
 * @method string getShotTimeEnd()
 * @method string getCorpId()
 * @method string getPageNumber()
 * @method string getFeature()
 * @method string getVendor()
 * @method string getRequireTotalCount()
 * @method string getPageSize()
 * @method string getImageContent()
 * @method string getObjectType()
 * @method string getDeviceList()
 * @method string getImageUrl()
 * @method string getAttributes()
 * @method string getShotTimeStart()
 */
class SearchAggregateObject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShotTimeEnd($value)
    {
        $this->data['ShotTimeEnd'] = $value;
        $this->options['form_params']['ShotTimeEnd'] = $value;

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
    public function withFeature($value)
    {
        $this->data['Feature'] = $value;
        $this->options['form_params']['Feature'] = $value;

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
    public function withRequireTotalCount($value)
    {
        $this->data['RequireTotalCount'] = $value;
        $this->options['form_params']['RequireTotalCount'] = $value;

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
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectType($value)
    {
        $this->data['ObjectType'] = $value;
        $this->options['form_params']['ObjectType'] = $value;

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
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributes($value)
    {
        $this->data['Attributes'] = $value;
        $this->options['form_params']['Attributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShotTimeStart($value)
    {
        $this->data['ShotTimeStart'] = $value;
        $this->options['form_params']['ShotTimeStart'] = $value;

        return $this;
    }
}

/**
 * @method string getShotTimeEnd()
 * @method string getCorpId()
 * @method string getPageNumber()
 * @method string getFeature()
 * @method string getVendor()
 * @method string getPageSize()
 * @method string getImageContent()
 * @method string getObjectType()
 * @method string getDeviceList()
 * @method string getImageUrl()
 * @method string getAttributes()
 * @method string getShotTimeStart()
 */
class SearchObject extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShotTimeEnd($value)
    {
        $this->data['ShotTimeEnd'] = $value;
        $this->options['form_params']['ShotTimeEnd'] = $value;

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
    public function withFeature($value)
    {
        $this->data['Feature'] = $value;
        $this->options['form_params']['Feature'] = $value;

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
    public function withImageContent($value)
    {
        $this->data['ImageContent'] = $value;
        $this->options['form_params']['ImageContent'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectType($value)
    {
        $this->data['ObjectType'] = $value;
        $this->options['form_params']['ObjectType'] = $value;

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
    public function withImageUrl($value)
    {
        $this->data['ImageUrl'] = $value;
        $this->options['form_params']['ImageUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAttributes($value)
    {
        $this->data['Attributes'] = $value;
        $this->options['form_params']['Attributes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withShotTimeStart($value)
    {
        $this->data['ShotTimeStart'] = $value;
        $this->options['form_params']['ShotTimeStart'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getBizId()
 * @method string getAlgorithmVendor()
 * @method string getTaskId()
 */
class StopCdrsMonitor extends Rpc
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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

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
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getCorpId()
 * @method string getBizId()
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
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

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
    public function withTaskId($value)
    {
        $this->data['TaskId'] = $value;
        $this->options['form_params']['TaskId'] = $value;

        return $this;
    }
}

/**
 * @method string getDeviceIds()
 * @method string getCorpId()
 * @method string getAppName()
 * @method string getNameSpace()
 */
class UnbindDevice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceIds($value)
    {
        $this->data['DeviceIds'] = $value;
        $this->options['form_params']['DeviceIds'] = $value;

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
    public function withNameSpace($value)
    {
        $this->data['NameSpace'] = $value;
        $this->options['form_params']['NameSpace'] = $value;

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
 * @method string getNotifierTimeOut()
 * @method string getTaskId()
 * @method string getDeviceOperateType()
 * @method string getPicList()
 * @method string getAttributeValueList()
 * @method string getNotifierAppSecret()
 * @method string getNotifierExtendValues()
 * @method string getDeviceList()
 * @method string getNotifierUrl()
 * @method string getNotifierType()
 * @method string getBizId()
 * @method string getAlgorithmVendor()
 */
class UpdateCdrsMonitor extends Rpc
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
    public function withNotifierTimeOut($value)
    {
        $this->data['NotifierTimeOut'] = $value;
        $this->options['form_params']['NotifierTimeOut'] = $value;

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
    public function withNotifierAppSecret($value)
    {
        $this->data['NotifierAppSecret'] = $value;
        $this->options['form_params']['NotifierAppSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierExtendValues($value)
    {
        $this->data['NotifierExtendValues'] = $value;
        $this->options['form_params']['NotifierExtendValues'] = $value;

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
    public function withNotifierUrl($value)
    {
        $this->data['NotifierUrl'] = $value;
        $this->options['form_params']['NotifierUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierType($value)
    {
        $this->data['NotifierType'] = $value;
        $this->options['form_params']['NotifierType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

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
 * @method string getCorpId()
 * @method string getDescription()
 * @method string getRuleName()
 * @method string getPicOperateType()
 * @method string getAttributeName()
 * @method string getAttributeOperateType()
 * @method string getRuleExpression()
 * @method string getNotifierTimeOut()
 * @method string getTaskId()
 * @method string getDeviceOperateType()
 * @method string getPicList()
 * @method string getAttributeValueList()
 * @method string getNotifierAppSecret()
 * @method string getNotifierExtendValues()
 * @method string getDeviceList()
 * @method string getNotifierUrl()
 * @method string getNotifierType()
 * @method string getPicExtendList()
 * @method string getBizId()
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
    public function withNotifierTimeOut($value)
    {
        $this->data['NotifierTimeOut'] = $value;
        $this->options['form_params']['NotifierTimeOut'] = $value;

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
    public function withNotifierAppSecret($value)
    {
        $this->data['NotifierAppSecret'] = $value;
        $this->options['form_params']['NotifierAppSecret'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierExtendValues($value)
    {
        $this->data['NotifierExtendValues'] = $value;
        $this->options['form_params']['NotifierExtendValues'] = $value;

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
    public function withNotifierUrl($value)
    {
        $this->data['NotifierUrl'] = $value;
        $this->options['form_params']['NotifierUrl'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNotifierType($value)
    {
        $this->data['NotifierType'] = $value;
        $this->options['form_params']['NotifierType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPicExtendList($value)
    {
        $this->data['PicExtendList'] = $value;
        $this->options['form_params']['PicExtendList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

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
 * @method string getCorpId()
 * @method string getIcon()
 * @method string getDescription()
 * @method string getAppName()
 * @method string getNameSpace()
 * @method string getName()
 * @method string getAggregateSceneCode()
 */
class UpdateProject extends Rpc
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
    public function withIcon($value)
    {
        $this->data['Icon'] = $value;
        $this->options['form_params']['Icon'] = $value;

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
    public function withNameSpace($value)
    {
        $this->data['NameSpace'] = $value;
        $this->options['form_params']['NameSpace'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withName($value)
    {
        $this->data['Name'] = $value;
        $this->options['form_params']['Name'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAggregateSceneCode($value)
    {
        $this->data['AggregateSceneCode'] = $value;
        $this->options['form_params']['AggregateSceneCode'] = $value;

        return $this;
    }
}
