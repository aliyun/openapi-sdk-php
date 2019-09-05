<?php

namespace AlibabaCloud\CusanalyticScOnline\V20190524;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetImageUrl getImageUrl(array $options = [])
 * @method GetActionCursor getActionCursor(array $options = [])
 * @method DescribeActionData describeActionData(array $options = [])
 * @method DescribeLocations describeLocations(array $options = [])
 * @method SearchPersonByImg searchPersonByImg(array $options = [])
 * @method GetLocations getLocations(array $options = [])
 * @method ListVisitors listVisitors(array $options = [])
 * @method GetAnalyzeCommodityData getAnalyzeCommodityData(array $options = [])
 * @method GetHeatMapData getHeatMapData(array $options = [])
 * @method GetEMap getEMap(array $options = [])
 * @method GetAnalyzePlaceData getAnalyzePlaceData(array $options = [])
 * @method GetPortrayal getPortrayal(array $options = [])
 * @method GetOverviewData getOverviewData(array $options = [])
 * @method GetSupportStore getSupportStore(array $options = [])
 */
class CusanalyticScOnlineApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cusanalytic_sc_online';

    /** @var string */
    public $version = '2019-05-24';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getOriginUrls()
 * @method string getStoreId()
 * @method string getObjectKeys()
 */
class GetImageUrl extends Rpc
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
 * @method string getStoreId()
 */
class GetActionCursor extends Rpc
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
 * @method string getTsEnd()
 * @method string getStoreId()
 * @method string getPageLimit()
 * @method string getPageNo()
 * @method string getTsStart()
 */
class DescribeActionData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTsEnd($value)
    {
        $this->data['TsEnd'] = $value;
        $this->options['form_params']['TsEnd'] = $value;

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
    public function withPageLimit($value)
    {
        $this->data['PageLimit'] = $value;
        $this->options['form_params']['PageLimit'] = $value;

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
    public function withTsStart($value)
    {
        $this->data['TsStart'] = $value;
        $this->options['form_params']['TsStart'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 */
class DescribeLocations extends Rpc
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
 * @method string getImgUrl()
 */
class SearchPersonByImg extends Rpc
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
    public function withImgUrl($value)
    {
        $this->data['ImgUrl'] = $value;
        $this->options['form_params']['ImgUrl'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 */
class GetLocations extends Rpc
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
 * @method string getGender()
 * @method string getUkId()
 * @method string getLocationIds()
 * @method string getStartTime()
 * @method string getPageSize()
 * @method string getEnterCount()
 * @method string getPageIndex()
 * @method string getAgeStart()
 * @method string getAgeEnd()
 * @method string getPkId()
 * @method string getEndTime()
 * @method string getStoreIds()
 */
class ListVisitors extends Rpc
{

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
    public function withLocationIds($value)
    {
        $this->data['LocationIds'] = $value;
        $this->options['form_params']['LocationIds'] = $value;

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
    public function withEnterCount($value)
    {
        $this->data['EnterCount'] = $value;
        $this->options['form_params']['EnterCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['form_params']['PageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgeStart($value)
    {
        $this->data['AgeStart'] = $value;
        $this->options['form_params']['AgeStart'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAgeEnd($value)
    {
        $this->data['AgeEnd'] = $value;
        $this->options['form_params']['AgeEnd'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPkId($value)
    {
        $this->data['PkId'] = $value;
        $this->options['form_params']['PkId'] = $value;

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
    public function withStoreIds($value)
    {
        $this->data['StoreIds'] = $value;
        $this->options['form_params']['StoreIds'] = $value;

        return $this;
    }
}

/**
 * @method string getStoreId()
 * @method string getStartDate()
 * @method string getEndUserCount()
 * @method string getPageSize()
 * @method string getPageIndex()
 * @method string getStayPeriod()
 * @method string getStartUserCount()
 * @method string getMinSupportCount()
 * @method string getEndDate()
 */
class GetAnalyzeCommodityData extends Rpc
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
    public function withEndUserCount($value)
    {
        $this->data['EndUserCount'] = $value;
        $this->options['form_params']['EndUserCount'] = $value;

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
    public function withPageIndex($value)
    {
        $this->data['PageIndex'] = $value;
        $this->options['form_params']['PageIndex'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStayPeriod($value)
    {
        $this->data['StayPeriod'] = $value;
        $this->options['form_params']['StayPeriod'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartUserCount($value)
    {
        $this->data['StartUserCount'] = $value;
        $this->options['form_params']['StartUserCount'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMinSupportCount($value)
    {
        $this->data['MinSupportCount'] = $value;
        $this->options['form_params']['MinSupportCount'] = $value;

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
}

/**
 * @method string getEMapName()
 * @method string getStoreId()
 */
class GetHeatMapData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEMapName($value)
    {
        $this->data['EMapName'] = $value;
        $this->options['form_params']['EMapName'] = $value;

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
 * @method string getLocationId()
 */
class GetEMap extends Rpc
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
    public function withLocationId($value)
    {
        $this->data['LocationId'] = $value;
        $this->options['form_params']['LocationId'] = $value;

        return $this;
    }
}

/**
 * @method string getEndUVCount()
 * @method string getParentAmount()
 * @method string getStartDate()
 * @method string getStartUVCount()
 * @method string getStoreId()
 * @method string getEndDate()
 * @method string getLocationId()
 * @method string getParentLocationIds()
 */
class GetAnalyzePlaceData extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndUVCount($value)
    {
        $this->data['EndUVCount'] = $value;
        $this->options['form_params']['EndUVCount'] = $value;

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
    public function withStartUVCount($value)
    {
        $this->data['StartUVCount'] = $value;
        $this->options['form_params']['StartUVCount'] = $value;

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
 * @method string getDate()
 * @method string getLocationIds()
 * @method string getStoreIds()
 */
class GetPortrayal extends Rpc
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
    public function withLocationIds($value)
    {
        $this->data['LocationIds'] = $value;
        $this->options['form_params']['LocationIds'] = $value;

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
 * @method string getDate()
 * @method string getStoreIds()
 */
class GetOverviewData extends Rpc
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

class GetSupportStore extends Rpc
{
}
