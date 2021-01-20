<?php

namespace AlibabaCloud\EmasAppmonitor\V20190611;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetAlarmLog getAlarmLog(array $options = [])
 * @method GetAppDailyDeviceCount getAppDailyDeviceCount(array $options = [])
 * @method GetAppFilePolicy getAppFilePolicy(array $options = [])
 * @method GetAppMonthlyDeviceCount getAppMonthlyDeviceCount(array $options = [])
 * @method GetAppStatus getAppStatus(array $options = [])
 * @method GetCrashSummary getCrashSummary(array $options = [])
 * @method GetSdkConfig getSdkConfig(array $options = [])
 * @method QueryApiAvgDurationGroupTrend queryApiAvgDurationGroupTrend(array $options = [])
 * @method QueryApiAvgDurationTrend queryApiAvgDurationTrend(array $options = [])
 * @method QueryApiDurationDistribution queryApiDurationDistribution(array $options = [])
 * @method QueryApiErrorGroupTrend queryApiErrorGroupTrend(array $options = [])
 * @method QueryApiErrorTrend queryApiErrorTrend(array $options = [])
 * @method QueryApiStatusCodeGroupTrend queryApiStatusCodeGroupTrend(array $options = [])
 * @method QueryApiStatusCodeTrend queryApiStatusCodeTrend(array $options = [])
 * @method QueryCrashTrend queryCrashTrend(array $options = [])
 * @method QueryLaunchTimeDistribution queryLaunchTimeDistribution(array $options = [])
 * @method QueryLaunchTimeTrend queryLaunchTimeTrend(array $options = [])
 * @method QueryLaunchTimeTrendGroupByProvince queryLaunchTimeTrendGroupByProvince(array $options = [])
 * @method QueryLaunchTimeTrendWithCarrier queryLaunchTimeTrendWithCarrier(array $options = [])
 * @method QueryPagePerfDistribution queryPagePerfDistribution(array $options = [])
 * @method QueryPagePerfTrend queryPagePerfTrend(array $options = [])
 * @method QueryPagePerfTrendGroupByPageName queryPagePerfTrendGroupByPageName(array $options = [])
 * @method QueryPagePerfTrendGroupByProvince queryPagePerfTrendGroupByProvince(array $options = [])
 * @method QuerySingleDomainApiAvgDurationGroupTrend querySingleDomainApiAvgDurationGroupTrend(array $options = [])
 * @method QuerySingleDomainApiErrorGroupTrend querySingleDomainApiErrorGroupTrend(array $options = [])
 * @method QuerySingleDomainApiStatusCodeGroupTrend querySingleDomainApiStatusCodeGroupTrend(array $options = [])
 * @method SaveAppFile saveAppFile(array $options = [])
 */
class EmasAppmonitorApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'emas-appmonitor';

    /** @var string */
    public $version = '2019-06-11';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getAlarmItemType()
 * @method string getPageNumber()
 * @method string getFromDate()
 * @method string getPageSize()
 * @method string getAlarmItemId()
 * @method string getUniqueAppId()
 * @method string getUntilDate()
 */
class GetAlarmLog extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAlarmItemType($value)
    {
        $this->data['AlarmItemType'] = $value;
        $this->options['form_params']['AlarmItemType'] = $value;

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
    public function withFromDate($value)
    {
        $this->data['FromDate'] = $value;
        $this->options['form_params']['FromDate'] = $value;

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
    public function withAlarmItemId($value)
    {
        $this->data['AlarmItemId'] = $value;
        $this->options['form_params']['AlarmItemId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUntilDate($value)
    {
        $this->data['UntilDate'] = $value;
        $this->options['form_params']['UntilDate'] = $value;

        return $this;
    }
}

/**
 * @method string getUniqueAppId()
 * @method string getFromDateMs()
 * @method string getService()
 * @method string getUntilDateMs()
 */
class GetAppDailyDeviceCount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromDateMs($value)
    {
        $this->data['FromDateMs'] = $value;
        $this->options['form_params']['FromDateMs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withService($value)
    {
        $this->data['Service'] = $value;
        $this->options['form_params']['Service'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUntilDateMs($value)
    {
        $this->data['UntilDateMs'] = $value;
        $this->options['form_params']['UntilDateMs'] = $value;

        return $this;
    }
}

/**
 * @method string getFileType()
 * @method string getUniqueAppId()
 */
class GetAppFilePolicy extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }
}

/**
 * @method string getUniqueAppId()
 * @method string getFromDateMs()
 * @method string getService()
 * @method string getUntilDateMs()
 */
class GetAppMonthlyDeviceCount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFromDateMs($value)
    {
        $this->data['FromDateMs'] = $value;
        $this->options['form_params']['FromDateMs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withService($value)
    {
        $this->data['Service'] = $value;
        $this->options['form_params']['Service'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUntilDateMs($value)
    {
        $this->data['UntilDateMs'] = $value;
        $this->options['form_params']['UntilDateMs'] = $value;

        return $this;
    }
}

/**
 * @method string getUniqueAppId()
 */
class GetAppStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }
}

/**
 * @method string getUniqueAppId()
 * @method string getDateTimeMs()
 * @method string getAppVersion()
 */
class GetCrashSummary extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDateTimeMs($value)
    {
        $this->data['DateTimeMs'] = $value;
        $this->options['form_params']['DateTimeMs'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersion($value)
    {
        $this->data['AppVersion'] = $value;
        $this->options['form_params']['AppVersion'] = $value;

        return $this;
    }
}

/**
 * @method string getUniqueAppId()
 */
class GetSdkConfig extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getGroup()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 */
class QueryApiAvgDurationGroupTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method array getIp()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method array getUrlPath()
 * @method string getDomain()
 */
class QueryApiAvgDurationTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param array $ip
     *
     * @return $this
     */
	public function withIp(array $ip)
	{
	    $this->data['Ip'] = $ip;
		foreach ($ip as $i => $iValue) {
			$this->options['form_params']['Ip.' . ($i + 1)] = $iValue;
		}

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $urlPath
     *
     * @return $this
     */
	public function withUrlPath(array $urlPath)
	{
	    $this->data['UrlPath'] = $urlPath;
		foreach ($urlPath as $i => $iValue) {
			$this->options['form_params']['UrlPath.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method array getIp()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method array getUrlPath()
 * @method string getDomain()
 */
class QueryApiDurationDistribution extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param array $ip
     *
     * @return $this
     */
	public function withIp(array $ip)
	{
	    $this->data['Ip'] = $ip;
		foreach ($ip as $i => $iValue) {
			$this->options['form_params']['Ip.' . ($i + 1)] = $iValue;
		}

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $urlPath
     *
     * @return $this
     */
	public function withUrlPath(array $urlPath)
	{
	    $this->data['UrlPath'] = $urlPath;
		foreach ($urlPath as $i => $iValue) {
			$this->options['form_params']['UrlPath.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getGroup()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 */
class QueryApiErrorGroupTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method array getIp()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method array getUrlPath()
 * @method string getDomain()
 */
class QueryApiErrorTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param array $ip
     *
     * @return $this
     */
	public function withIp(array $ip)
	{
	    $this->data['Ip'] = $ip;
		foreach ($ip as $i => $iValue) {
			$this->options['form_params']['Ip.' . ($i + 1)] = $iValue;
		}

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $urlPath
     *
     * @return $this
     */
	public function withUrlPath(array $urlPath)
	{
	    $this->data['UrlPath'] = $urlPath;
		foreach ($urlPath as $i => $iValue) {
			$this->options['form_params']['UrlPath.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getGroup()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 */
class QueryApiStatusCodeGroupTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method array getIp()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method array getUrlPath()
 * @method string getDomain()
 */
class QueryApiStatusCodeTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param array $ip
     *
     * @return $this
     */
	public function withIp(array $ip)
	{
	    $this->data['Ip'] = $ip;
		foreach ($ip as $i => $iValue) {
			$this->options['form_params']['Ip.' . ($i + 1)] = $iValue;
		}

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $urlPath
     *
     * @return $this
     */
	public function withUrlPath(array $urlPath)
	{
	    $this->data['UrlPath'] = $urlPath;
		foreach ($urlPath as $i => $iValue) {
			$this->options['form_params']['UrlPath.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getCrashStatType()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method array getErrorType()
 * @method string getErrorCategory()
 */
class QueryCrashTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCrashStatType($value)
    {
        $this->data['CrashStatType'] = $value;
        $this->options['form_params']['CrashStatType'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $errorType
     *
     * @return $this
     */
	public function withErrorType(array $errorType)
	{
	    $this->data['ErrorType'] = $errorType;
		foreach ($errorType as $i => $iValue) {
			$this->options['form_params']['ErrorType.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withErrorCategory($value)
    {
        $this->data['ErrorCategory'] = $value;
        $this->options['form_params']['ErrorCategory'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getLaunchType()
 * @method string getDeviceLevel()
 * @method array getProvince()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 */
class QueryLaunchTimeDistribution extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withLaunchType($value)
    {
        $this->data['LaunchType'] = $value;
        $this->options['form_params']['LaunchType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceLevel($value)
    {
        $this->data['DeviceLevel'] = $value;
        $this->options['form_params']['DeviceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $province
     *
     * @return $this
     */
	public function withProvince(array $province)
	{
	    $this->data['Province'] = $province;
		foreach ($province as $i => $iValue) {
			$this->options['form_params']['Province.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getLaunchType()
 * @method string getDeviceLevel()
 * @method array getProvince()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 */
class QueryLaunchTimeTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withLaunchType($value)
    {
        $this->data['LaunchType'] = $value;
        $this->options['form_params']['LaunchType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceLevel($value)
    {
        $this->data['DeviceLevel'] = $value;
        $this->options['form_params']['DeviceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $province
     *
     * @return $this
     */
	public function withProvince(array $province)
	{
	    $this->data['Province'] = $province;
		foreach ($province as $i => $iValue) {
			$this->options['form_params']['Province.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getLaunchType()
 * @method string getDeviceLevel()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method string getGroupByDistrict()
 */
class QueryLaunchTimeTrendGroupByProvince extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withLaunchType($value)
    {
        $this->data['LaunchType'] = $value;
        $this->options['form_params']['LaunchType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDeviceLevel($value)
    {
        $this->data['DeviceLevel'] = $value;
        $this->options['form_params']['DeviceLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupByDistrict($value)
    {
        $this->data['GroupByDistrict'] = $value;
        $this->options['form_params']['GroupByDistrict'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getLaunchType()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method array getCarrier()
 */
class QueryLaunchTimeTrendWithCarrier extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withLaunchType($value)
    {
        $this->data['LaunchType'] = $value;
        $this->options['form_params']['LaunchType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $carrier
     *
     * @return $this
     */
	public function withCarrier(array $carrier)
	{
	    $this->data['Carrier'] = $carrier;
		foreach ($carrier as $i => $iValue) {
			$this->options['form_params']['Carrier.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getDeviceLevel()
 * @method array getProvince()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method array getPage()
 */
class QueryPagePerfDistribution extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricType($value)
    {
        $this->data['MetricType'] = $value;
        $this->options['form_params']['MetricType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withDeviceLevel($value)
    {
        $this->data['DeviceLevel'] = $value;
        $this->options['form_params']['DeviceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $province
     *
     * @return $this
     */
	public function withProvince(array $province)
	{
	    $this->data['Province'] = $province;
		foreach ($province as $i => $iValue) {
			$this->options['form_params']['Province.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $page
     *
     * @return $this
     */
	public function withPage(array $page)
	{
	    $this->data['Page'] = $page;
		foreach ($page as $i => $iValue) {
			$this->options['form_params']['Page.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getDeviceLevel()
 * @method array getProvince()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method array getPage()
 */
class QueryPagePerfTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricType($value)
    {
        $this->data['MetricType'] = $value;
        $this->options['form_params']['MetricType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withDeviceLevel($value)
    {
        $this->data['DeviceLevel'] = $value;
        $this->options['form_params']['DeviceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $province
     *
     * @return $this
     */
	public function withProvince(array $province)
	{
	    $this->data['Province'] = $province;
		foreach ($province as $i => $iValue) {
			$this->options['form_params']['Province.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $page
     *
     * @return $this
     */
	public function withPage(array $page)
	{
	    $this->data['Page'] = $page;
		foreach ($page as $i => $iValue) {
			$this->options['form_params']['Page.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getDeviceLevel()
 * @method array getProvince()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getGroupByPageName()
 * @method string getEndTime()
 * @method array getAppVersion()
 */
class QueryPagePerfTrendGroupByPageName extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricType($value)
    {
        $this->data['MetricType'] = $value;
        $this->options['form_params']['MetricType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withDeviceLevel($value)
    {
        $this->data['DeviceLevel'] = $value;
        $this->options['form_params']['DeviceLevel'] = $value;

        return $this;
    }

    /**
     * @param array $province
     *
     * @return $this
     */
	public function withProvince(array $province)
	{
	    $this->data['Province'] = $province;
		foreach ($province as $i => $iValue) {
			$this->options['form_params']['Province.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupByPageName($value)
    {
        $this->data['GroupByPageName'] = $value;
        $this->options['form_params']['GroupByPageName'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getMetricType()
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getDeviceLevel()
 * @method string getStatType()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method string getGroupByDistrict()
 */
class QueryPagePerfTrendGroupByProvince extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMetricType($value)
    {
        $this->data['MetricType'] = $value;
        $this->options['form_params']['MetricType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withDeviceLevel($value)
    {
        $this->data['DeviceLevel'] = $value;
        $this->options['form_params']['DeviceLevel'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatType($value)
    {
        $this->data['StatType'] = $value;
        $this->options['form_params']['StatType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withGroupByDistrict($value)
    {
        $this->data['GroupByDistrict'] = $value;
        $this->options['form_params']['GroupByDistrict'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getGroup()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method string getDomain()
 */
class QuerySingleDomainApiAvgDurationGroupTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getGroup()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method string getDomain()
 */
class QuerySingleDomainApiErrorGroupTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }
}

/**
 * @method string getAppVersionStrategy()
 * @method string getStartTime()
 * @method string getGroup()
 * @method string getIntervalMinutes()
 * @method string getUniqueAppId()
 * @method string getEndTime()
 * @method array getAppVersion()
 * @method string getDomain()
 */
class QuerySingleDomainApiStatusCodeGroupTrend extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersionStrategy($value)
    {
        $this->data['AppVersionStrategy'] = $value;
        $this->options['form_params']['AppVersionStrategy'] = $value;

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
    public function withGroup($value)
    {
        $this->data['Group'] = $value;
        $this->options['form_params']['Group'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIntervalMinutes($value)
    {
        $this->data['IntervalMinutes'] = $value;
        $this->options['form_params']['IntervalMinutes'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

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
     * @param array $appVersion
     *
     * @return $this
     */
	public function withAppVersion(array $appVersion)
	{
	    $this->data['AppVersion'] = $appVersion;
		foreach ($appVersion as $i => $iValue) {
			$this->options['form_params']['AppVersion.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomain($value)
    {
        $this->data['Domain'] = $value;
        $this->options['form_params']['Domain'] = $value;

        return $this;
    }
}

/**
 * @method string getFileType()
 * @method string getFilePath()
 * @method string getUniqueAppId()
 * @method string getAppVersion()
 * @method string getFileName()
 */
class SaveAppFile extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileType($value)
    {
        $this->data['FileType'] = $value;
        $this->options['form_params']['FileType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFilePath($value)
    {
        $this->data['FilePath'] = $value;
        $this->options['form_params']['FilePath'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUniqueAppId($value)
    {
        $this->data['UniqueAppId'] = $value;
        $this->options['form_params']['UniqueAppId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppVersion($value)
    {
        $this->data['AppVersion'] = $value;
        $this->options['form_params']['AppVersion'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileName($value)
    {
        $this->data['FileName'] = $value;
        $this->options['form_params']['FileName'] = $value;

        return $this;
    }
}
