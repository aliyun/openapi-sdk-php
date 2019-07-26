<?php

namespace AlibabaCloud\CusanalyticScOnline\V20190524;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
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
 * @method string getTsEnd()
 * @method string getPageNo()
 * @method string getTsStart()
 * @method string getStoreId()
 * @method string getPageLimit()
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
 * @method string getImgUrl()
 * @method string getStoreId()
 */
class SearchPersonByImg extends Rpc
{

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
 * @method string getPkId()
 * @method string getGender()
 * @method string getUkId()
 * @method string getPageSize()
 * @method string getLocationIds()
 * @method string getEndTime()
 * @method string getEnterCount()
 * @method string getPageIndex()
 * @method string getStartTime()
 * @method string getAgeStart()
 * @method string getAgeEnd()
 * @method string getStoreIds()
 */
class ListVisitors extends Rpc
{

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
    public function withStoreIds($value)
    {
        $this->data['StoreIds'] = $value;
        $this->options['form_params']['StoreIds'] = $value;

        return $this;
    }
}

/**
 * @method string getStartUserCount()
 * @method string getEndDate()
 * @method string getEndUserCount()
 * @method string getPageSize()
 * @method string getMinSupportCount()
 * @method string getPageIndex()
 * @method string getStoreId()
 * @method string getStartDate()
 * @method string getStayPeriod()
 */
class GetAnalyzeCommodityData extends Rpc
{

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
    public function withStayPeriod($value)
    {
        $this->data['StayPeriod'] = $value;
        $this->options['form_params']['StayPeriod'] = $value;

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
 * @method string getLocationId()
 * @method string getStoreId()
 */
class GetEMap extends Rpc
{

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
    public function withStoreId($value)
    {
        $this->data['StoreId'] = $value;
        $this->options['form_params']['StoreId'] = $value;

        return $this;
    }
}

/**
 * @method string getEndUVCount()
 * @method string getParentAmount()
 * @method string getEndDate()
 * @method string getLocationId()
 * @method string getParentLocationIds()
 * @method string getStartDate()
 * @method string getStartUVCount()
 * @method string getStoreId()
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
