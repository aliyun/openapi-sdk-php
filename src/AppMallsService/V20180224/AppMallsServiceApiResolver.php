<?php

namespace AlibabaCloud\AppMallsService\V20180224;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method TaobaoFilmLockSeat taobaoFilmLockSeat(array $options = [])
 * @method TaobaoFilmGetSchedules taobaoFilmGetSchedules(array $options = [])
 * @method TaobaoFilmGetSeats taobaoFilmGetSeats(array $options = [])
 * @method TaobaoFilmGetCinemas taobaoFilmGetCinemas(array $options = [])
 * @method TaobaoFilmGetShowComments taobaoFilmGetShowComments(array $options = [])
 * @method TaobaoFilmGetHotShows taobaoFilmGetHotShows(array $options = [])
 * @method TaobaoFilmGetSoonShows taobaoFilmGetSoonShows(array $options = [])
 * @method TaobaoFilmGetRegionList taobaoFilmGetRegionList(array $options = [])
 * @method TaobaoFilmUnLockSeat taobaoFilmUnLockSeat(array $options = [])
 * @method TaobaoFilmIssueOrder taobaoFilmIssueOrder(array $options = [])
 * @method GetMessages getMessages(array $options = [])
 * @method RemoveMessages removeMessages(array $options = [])
 */
class AppMallsServiceApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'AppMallsService';

    /** @var string */
    public $version = '2018-02-24';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getScheduleId()
 * @method $this withScheduleId($value)
 * @method string getSeatIds()
 * @method $this withSeatIds($value)
 * @method string getSeatNames()
 * @method $this withSeatNames($value)
 * @method string getMobile()
 * @method $this withMobile($value)
 * @method string getExtUserId()
 * @method $this withExtUserId($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmLockSeat extends Rpc
{
}

/**
 * @method string getCinemaId()
 * @method $this withCinemaId($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmGetSchedules extends Rpc
{
}

/**
 * @method string getScheduleId()
 * @method $this withScheduleId($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmGetSeats extends Rpc
{
}

/**
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmGetCinemas extends Rpc
{
}

/**
 * @method string getShowId()
 * @method $this withShowId($value)
 * @method string getPageIndex()
 * @method $this withPageIndex($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmGetShowComments extends Rpc
{
}

/**
 * @method string getCityCode()
 * @method $this withCityCode($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmGetHotShows extends Rpc
{
}

/**
 * @method string getCityCode()
 * @method $this withCityCode($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmGetSoonShows extends Rpc
{
}

/**
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmGetRegionList extends Rpc
{
}

/**
 * @method string getLockSeatApplyKey()
 * @method $this withLockSeatApplyKey($value)
 * @method string getExtUserId()
 * @method $this withExtUserId($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmUnLockSeat extends Rpc
{
}

/**
 * @method string getLockSeatApplyKey()
 * @method $this withLockSeatApplyKey($value)
 * @method string getExtUserId()
 * @method $this withExtUserId($value)
 * @method string getExtOrderId()
 * @method $this withExtOrderId($value)
 * @method string getTotalPrice()
 * @method $this withTotalPrice($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class TaobaoFilmIssueOrder extends Rpc
{
}

/**
 * @method string getTopic()
 * @method $this withTopic($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class GetMessages extends Rpc
{
}

/**
 * @method string getMsgIds()
 * @method $this withMsgIds($value)
 * @method string getParamsJson()
 * @method $this withParamsJson($value)
 */
class RemoveMessages extends Rpc
{
}
