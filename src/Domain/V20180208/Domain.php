<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Domain based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Domain\V20180208
 *
 * @method AcceptDemand acceptDemand(array $options = [])
 * @method BidDomain bidDomain(array $options = [])
 * @method FailDemand failDemand(array $options = [])
 * @method FinishDemand finishDemand(array $options = [])
 * @method GetReserveDomainUrl getReserveDomainUrl(array $options = [])
 * @method QueryAuctionDetail queryAuctionDetail(array $options = [])
 * @method QueryAuctions queryAuctions(array $options = [])
 * @method QueryBidRecords queryBidRecords(array $options = [])
 * @method QueryBookingDomainInfo queryBookingDomainInfo(array $options = [])
 * @method QueryBrokerDemand queryBrokerDemand(array $options = [])
 * @method QueryBrokerDemandRecord queryBrokerDemandRecord(array $options = [])
 * @method RecordDemand recordDemand(array $options = [])
 * @method RefuseDemand refuseDemand(array $options = [])
 * @method RequestPayDemand requestPayDemand(array $options = [])
 * @method ReserveDomain reserveDomain(array $options = [])
 */
class Domain
{
    use ApiResolverTrait;
}
