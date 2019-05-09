<?php

namespace AlibabaCloud\Openanalytics\V20180301;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method GetProductStatus getProductStatus(array $options = [])
 * @method CloseProductAccount closeProductAccount(array $options = [])
 * @method GetRegionStatus getRegionStatus(array $options = [])
 * @method OpenProductAccount openProductAccount(array $options = [])
 * @method GetAllowIP getAllowIP(array $options = [])
 * @method DescribeRegionList describeRegionList(array $options = [])
 * @method GetEndPointByDomain getEndPointByDomain(array $options = [])
 * @method QueryEndPointList queryEndPointList(array $options = [])
 * @method SetAllowIP setAllowIP(array $options = [])
 */
class OpenanalyticsApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'openanalytics';

    /** @var string */
    public $version = '2018-03-01';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'openanalytics';
}

/**
 * @method string getProductCode()
 * @method string getProductAccessKey()
 * @method string getTargetUid()
 * @method string getTargetArnRole()
 */
class GetProductStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductAccessKey($value)
    {
        $this->data['ProductAccessKey'] = $value;
        $this->options['form_params']['ProductAccessKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUid($value)
    {
        $this->data['TargetUid'] = $value;
        $this->options['form_params']['TargetUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetArnRole($value)
    {
        $this->data['TargetArnRole'] = $value;
        $this->options['form_params']['TargetArnRole'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getProductAccessKey()
 * @method string getTargetUid()
 * @method string getTargetArnRole()
 */
class CloseProductAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductAccessKey($value)
    {
        $this->data['ProductAccessKey'] = $value;
        $this->options['form_params']['ProductAccessKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUid($value)
    {
        $this->data['TargetUid'] = $value;
        $this->options['form_params']['TargetUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetArnRole($value)
    {
        $this->data['TargetArnRole'] = $value;
        $this->options['form_params']['TargetArnRole'] = $value;

        return $this;
    }
}

/**
 * @method string getTargetUid()
 */
class GetRegionStatus extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUid($value)
    {
        $this->data['TargetUid'] = $value;
        $this->options['form_params']['TargetUid'] = $value;

        return $this;
    }
}

/**
 * @method string getProductCode()
 * @method string getProductAccessKey()
 * @method string getTargetUid()
 * @method string getTargetArnRole()
 */
class OpenProductAccount extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductCode($value)
    {
        $this->data['ProductCode'] = $value;
        $this->options['form_params']['ProductCode'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductAccessKey($value)
    {
        $this->data['ProductAccessKey'] = $value;
        $this->options['form_params']['ProductAccessKey'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetUid($value)
    {
        $this->data['TargetUid'] = $value;
        $this->options['form_params']['TargetUid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withTargetArnRole($value)
    {
        $this->data['TargetArnRole'] = $value;
        $this->options['form_params']['TargetArnRole'] = $value;

        return $this;
    }
}

/**
 * @method string getUserID()
 * @method string getNetworkType()
 */
class GetAllowIP extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserID($value)
    {
        $this->data['UserID'] = $value;
        $this->options['form_params']['UserID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }
}

class DescribeRegionList extends Rpc
{
}

/**
 * @method string getUserID()
 * @method string getDomainURL()
 */
class GetEndPointByDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserID($value)
    {
        $this->data['UserID'] = $value;
        $this->options['form_params']['UserID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainURL($value)
    {
        $this->data['DomainURL'] = $value;
        $this->options['form_params']['DomainURL'] = $value;

        return $this;
    }
}

/**
 * @method string getUserID()
 */
class QueryEndPointList extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserID($value)
    {
        $this->data['UserID'] = $value;
        $this->options['form_params']['UserID'] = $value;

        return $this;
    }
}

/**
 * @method string getUserID()
 * @method string getNetworkType()
 * @method string getAllowIP()
 * @method string getAppend()
 */
class SetAllowIP extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUserID($value)
    {
        $this->data['UserID'] = $value;
        $this->options['form_params']['UserID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withNetworkType($value)
    {
        $this->data['NetworkType'] = $value;
        $this->options['form_params']['NetworkType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAllowIP($value)
    {
        $this->data['AllowIP'] = $value;
        $this->options['form_params']['AllowIP'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAppend($value)
    {
        $this->data['Append'] = $value;
        $this->options['form_params']['Append'] = $value;

        return $this;
    }
}
