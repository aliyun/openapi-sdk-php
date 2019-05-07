<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\ApiResolverTrait;
use AlibabaCloud\Rpc;

/**
 * Resolve Api based on the method name.
 *
 * @method QueryBrokerDemandRecord queryBrokerDemandRecord(array $options = [])
 * @method RequestPayDemand requestPayDemand(array $options = [])
 * @method FinishDemand finishDemand(array $options = [])
 * @method FailDemand failDemand(array $options = [])
 * @method RecordDemand recordDemand(array $options = [])
 * @method RefuseDemand refuseDemand(array $options = [])
 * @method AcceptDemand acceptDemand(array $options = [])
 * @method QueryBrokerDemand queryBrokerDemand(array $options = [])
 * @method GetReserveDomainUrl getReserveDomainUrl(array $options = [])
 * @method QueryAuctionDetail queryAuctionDetail(array $options = [])
 * @method QueryAuctions queryAuctions(array $options = [])
 * @method QueryBidRecords queryBidRecords(array $options = [])
 * @method QueryBookingDomainInfo queryBookingDomainInfo(array $options = [])
 * @method BidDomain bidDomain(array $options = [])
 * @method ReserveDomain reserveDomain(array $options = [])
 */
class DomainApiResolver
{
    use ApiResolverTrait;
}

class V20180208Rpc extends Rpc
{
    /** @var string */
    public $product = 'Domain';

    /** @var string */
    public $version = '2018-02-08';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class QueryBrokerDemandRecord extends V20180208Rpc
{
}

/**
 * @method string getPrice()
 * @method $this withPrice($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getProduceType()
 * @method $this withProduceType($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class RequestPayDemand extends V20180208Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class FinishDemand extends V20180208Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class FailDemand extends V20180208Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class RecordDemand extends V20180208Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class RefuseDemand extends V20180208Rpc
{
}

/**
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 */
class AcceptDemand extends V20180208Rpc
{
}

/**
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryBrokerDemand extends V20180208Rpc
{
}

class GetReserveDomainUrl extends V20180208Rpc
{
}

/**
 * @method string getAuctionId()
 */
class QueryAuctionDetail extends V20180208Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuctionId($value)
    {
        $this->data['AuctionId'] = $value;
        $this->options['form_params']['AuctionId'] = $value;

        return $this;
    }
}

/**
 * @method string getPageSize()
 * @method string getCurrentPage()
 * @method string getStatus()
 */
class QueryAuctions extends V20180208Rpc
{

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
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

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
 * @method string getAuctionId()
 * @method string getPageSize()
 * @method string getCurrentPage()
 */
class QueryBidRecords extends V20180208Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuctionId($value)
    {
        $this->data['AuctionId'] = $value;
        $this->options['form_params']['AuctionId'] = $value;

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
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainName()
 */
class QueryBookingDomainInfo extends V20180208Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }
}

/**
 * @method string getAuctionId()
 * @method string getMaxBid()
 * @method string getCurrency()
 */
class BidDomain extends V20180208Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuctionId($value)
    {
        $this->data['AuctionId'] = $value;
        $this->options['form_params']['AuctionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxBid($value)
    {
        $this->data['MaxBid'] = $value;
        $this->options['form_params']['MaxBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrency($value)
    {
        $this->data['Currency'] = $value;
        $this->options['form_params']['Currency'] = $value;

        return $this;
    }
}

/**
 * @method array getChannels()
 * @method string getDomainName()
 */
class ReserveDomain extends V20180208Rpc
{

    /**
     * @param array $channels
     *
     * @return $this
     */
    public function withChannels(array $channels)
    {
        $this->data['Channels'] = $channels;
        foreach ($channels as $i => $iValue) {
            $this->options['form_params']['Channels.' . ($i + 1)] = $iValue;
        }

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }
}
