<?php

namespace AlibabaCloud\Domain;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Domain based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Domain
 *
 * @method static V20180208\AcceptDemand acceptDemand(array $options = [])
 * @method static V20180208\BidDomain bidDomain(array $options = [])
 * @method static V20180208\FailDemand failDemand(array $options = [])
 * @method static V20180208\FinishDemand finishDemand(array $options = [])
 * @method static V20180208\GetReserveDomainUrl getReserveDomainUrl(array $options = [])
 * @method static V20180208\QueryAuctionDetail queryAuctionDetail(array $options = [])
 * @method static V20180208\QueryAuctions queryAuctions(array $options = [])
 * @method static V20180208\QueryBidRecords queryBidRecords(array $options = [])
 * @method static V20180208\QueryBookingDomainInfo queryBookingDomainInfo(array $options = [])
 * @method static V20180208\QueryBrokerDemand queryBrokerDemand(array $options = [])
 * @method static V20180208\QueryBrokerDemandRecord queryBrokerDemandRecord(array $options = [])
 * @method static V20180208\RecordDemand recordDemand(array $options = [])
 * @method static V20180208\RefuseDemand refuseDemand(array $options = [])
 * @method static V20180208\RequestPayDemand requestPayDemand(array $options = [])
 * @method static V20180208\ReserveDomain reserveDomain(array $options = [])
 */
class DomainV20180208
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Domain\\V20180208';
}
