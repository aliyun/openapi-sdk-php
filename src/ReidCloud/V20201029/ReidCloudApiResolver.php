<?php

namespace AlibabaCloud\ReidCloud\V20201029;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method DescribeBaseStatistics describeBaseStatistics(array $options = [])
 * @method DescribeCameraStatistics describeCameraStatistics(array $options = [])
 * @method DescribeCursor describeCursor(array $options = [])
 * @method DescribeCustomerFlowByLocation describeCustomerFlowByLocation(array $options = [])
 * @method DescribeCustomerFlowByLocationOffline describeCustomerFlowByLocationOffline(array $options = [])
 * @method DescribeDevices describeDevices(array $options = [])
 * @method DescribeHeatMap describeHeatMap(array $options = [])
 * @method DescribeImageUrls describeImageUrls(array $options = [])
 * @method DescribeIpcLiveAddress describeIpcLiveAddress(array $options = [])
 * @method DescribeOverviewData describeOverviewData(array $options = [])
 * @method DescribePredictGroupResult describePredictGroupResult(array $options = [])
 * @method ImportSpecialPersonnel importSpecialPersonnel(array $options = [])
 * @method ListActionData listActionData(array $options = [])
 * @method ListDevicesImages listDevicesImages(array $options = [])
 * @method ListEmap listEmap(array $options = [])
 * @method ListLocation listLocation(array $options = [])
 * @method ListMaskDetectionResults listMaskDetectionResults(array $options = [])
 * @method ListPersonByImage listPersonByImage(array $options = [])
 * @method ListSpecialPersonnelByImage listSpecialPersonnelByImage(array $options = [])
 * @method ListStore listStore(array $options = [])
 * @method PullActionData pullActionData(array $options = [])
 */
class ReidCloudApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'reid_cloud';

    /** @var string */
    public $version = '2020-10-29';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = '1.2.3';
}

/**
 * @method string getDate()
 * @method string getExtraStatisticTypes()
 * @method string getStoreId()
 * @method string getSummaryType()
 * @method string getLocationId()
 */
class DescribeBaseStatistics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDate($value)
    {
        $this->data['Date'] = $value;
        $this->options['form_params']['Date'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtraStatisticTypes($value)
    {
        $this->data['ExtraStatisticTypes'] = $value;
        $this->options['form_params']['ExtraStatisticTypes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSummaryType($value)
    {
        $this->data['SummaryType'] = $value;
        $this->options['form_params']['SummaryType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocationId($value)
    {
        $this->data['LocationId'] = $value;
        $this->options['form_params']['LocationId'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTimestamp()
 * @method string getStoreId()
 * @method string getEndTimestamp()
 * @method string getLocationId()
 */
class DescribeCameraStatistics extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartTimestamp($value)
    {
        $this->data['StartTimestamp'] = $value;
        $this->options['form_params']['StartTimestamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndTimestamp($value)
    {
        $this->data['EndTimestamp'] = $value;
        $this->options['form_params']['EndTimestamp'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocationId($value)
    {
        $this->data['LocationId'] = $value;
        $this->options['form_params']['LocationId'] = $value;

        return $this;
    }
}

/**
 * @method string getPartitionIndex()
 * @method string getStoreId()
 * @method string getTime()
 */
class DescribeCursor extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPartitionIndex($value)
    {
        $this->data['PartitionIndex'] = $value;
        $this->options['form_params']['PartitionIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTime($value)
    {
        $this->data['Time'] = $value;
        $this->options['form_params']['Time'] = $value;

        return $this;
    }
}

/**
 * @method string getStartDate()
 * @method string getStoreId()
 * @method string getMinCount()
 * @method string getParentAmount()
 * @method string getMaxCount()
 * @method string getEndDate()
 * @method string getLocationId()
 * @method string getParentLocationIds()
 */
class DescribeCustomerFlowByLocation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinCount($value)
    {
        $this->data['MinCount'] = $value;
        $this->options['form_params']['MinCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentAmount($value)
    {
        $this->data['ParentAmount'] = $value;
        $this->options['form_params']['ParentAmount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxCount($value)
    {
        $this->data['MaxCount'] = $value;
        $this->options['form_params']['MaxCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndDate($value)
    {
        $this->data['EndDate'] = $value;
        $this->options['form_params']['EndDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLocationId($value)
    {
        $this->data['LocationId'] = $value;
        $this->options['form_params']['LocationId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withParentLocationIds($value)
    {
        $this->data['ParentLocationIds'] = $value;
        $this->options['form_params']['ParentLocationIds'] = $value;

        return $this;
    }
}

/**
 * @method string getStartDate()
 * @method string getStoreId()
 */
class DescribeCustomerFlowByLocationOffline extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartDate($value)
    {
        $this->data['StartDate'] = $value;
        $this->options['form_params']['StartDate'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 */
class DescribeDevices extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getDate()
 * @method string getStoreId()
 * @method string getEmapId()
 */
class DescribeHeatMap extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDate($value)
    {
        $this->data['Date'] = $value;
        $this->options['form_params']['Date'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEmapId($value)
    {
        $this->data['EmapId'] = $value;
        $this->options['form_params']['EmapId'] = $value;

        return $this;
    }
}

/**
 * @method string getOriginUrls()
 * @method string getStoreId()
 * @method string getObjectKeys()
 */
class DescribeImageUrls extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOriginUrls($value)
    {
        $this->data['OriginUrls'] = $value;
        $this->options['form_params']['OriginUrls'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withObjectKeys($value)
    {
        $this->data['ObjectKeys'] = $value;
        $this->options['form_params']['ObjectKeys'] = $value;

        return $this;
    }
}

/**
 * @method string getIpcId()
 * @method string getStoreId()
 * @method string getProtocolType()
 */
class DescribeIpcLiveAddress extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpcId($value)
    {
        $this->data['IpcId'] = $value;
        $this->options['form_params']['IpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProtocolType($value)
    {
        $this->data['ProtocolType'] = $value;
        $this->options['form_params']['ProtocolType'] = $value;

        return $this;
    }
}

/**
 * @method string getDate()
 * @method string getStoreIds()
 */
class DescribeOverviewData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDate($value)
    {
        $this->data['Date'] = $value;
        $this->options['form_params']['Date'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreIds($value)
    {
        $this->data['StoreIds'] = $value;
        $this->options['form_params']['StoreIds'] = $value;

        return $this;
    }
}

/**
 * @method string getStartTime()
 * @method string getIpcId()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getPageSize()
 * @method string getTrackletId()
 * @method string getEndTime()
 * @method string getPredictType()
 */
class DescribePredictGroupResult extends Rpc
{

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
    public function withIpcId($value)
    {
        $this->data['IpcId'] = $value;
        $this->options['form_params']['IpcId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

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
    public function withTrackletId($value)
    {
        $this->data['TrackletId'] = $value;
        $this->options['form_params']['TrackletId'] = $value;

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
    public function withPredictType($value)
    {
        $this->data['PredictType'] = $value;
        $this->options['form_params']['PredictType'] = $value;

        return $this;
    }
}

/**
 * @method string getUkId()
 * @method string getDescription()
 * @method string getExternalId()
 * @method string getSource()
 * @method string getPersonType()
 * @method string getUrls()
 * @method string getPersonName()
 * @method string getStoreIds()
 * @method string getStatus()
 */
class ImportSpecialPersonnel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUkId($value)
    {
        $this->data['UkId'] = $value;
        $this->options['form_params']['UkId'] = $value;

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
    public function withExternalId($value)
    {
        $this->data['ExternalId'] = $value;
        $this->options['form_params']['ExternalId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['form_params']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonType($value)
    {
        $this->data['PersonType'] = $value;
        $this->options['form_params']['PersonType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUrls($value)
    {
        $this->data['Urls'] = $value;
        $this->options['form_params']['Urls'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonName($value)
    {
        $this->data['PersonName'] = $value;
        $this->options['form_params']['PersonName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreIds($value)
    {
        $this->data['StoreIds'] = $value;
        $this->options['form_params']['StoreIds'] = $value;

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
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 * @method string getFilterInvalidData()
 */
class ListActionData extends Rpc
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
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

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
    public function withFilterInvalidData($value)
    {
        $this->data['FilterInvalidData'] = $value;
        $this->options['form_params']['FilterInvalidData'] = $value;

        return $this;
    }
}

/**
 * @method string getIpcIdList()
 * @method string getStoreId()
 */
class ListDevicesImages extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIpcIdList($value)
    {
        $this->data['IpcIdList'] = $value;
        $this->options['form_params']['IpcIdList'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 */
class ListEmap extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 */
class ListLocation extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getEndTime()
 * @method string getStartTime()
 * @method string getStoreId()
 * @method string getPageNumber()
 * @method string getName()
 * @method string getPageSize()
 */
class ListMaskDetectionResults extends Rpc
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
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

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
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getImageUrl()
 */
class ListPersonByImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

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
}

/**
 * @method string getSource()
 * @method string getStoreId()
 * @method string getPersonType()
 * @method string getImageUrl()
 */
class ListSpecialPersonnelByImage extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withSource($value)
    {
        $this->data['Source'] = $value;
        $this->options['form_params']['Source'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPersonType($value)
    {
        $this->data['PersonType'] = $value;
        $this->options['form_params']['PersonType'] = $value;

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
}

class ListStore extends Rpc
{
}

/**
 * @method string getPartitionIndex()
 * @method string getStoreId()
 * @method string getEndMessageId()
 * @method string getLimit()
 * @method string getStartMessageId()
 */
class PullActionData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPartitionIndex($value)
    {
        $this->data['PartitionIndex'] = $value;
        $this->options['form_params']['PartitionIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndMessageId($value)
    {
        $this->data['EndMessageId'] = $value;
        $this->options['form_params']['EndMessageId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withLimit($value)
    {
        $this->data['Limit'] = $value;
        $this->options['form_params']['Limit'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartMessageId($value)
    {
        $this->data['StartMessageId'] = $value;
        $this->options['form_params']['StartMessageId'] = $value;

        return $this;
    }
}
