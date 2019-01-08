<?php

namespace AlibabaCloud\Linkedmall;

use AlibabaCloud\ApiResolverTrait;

/**
 * Find the specified Api of the Linkedmall based on the method name as the Api name.
 *
 * @package   AlibabaCloud\Linkedmall
 *
 * @method static V20180116\CreateMovieTicketOrder createMovieTicketOrder(array $options = [])
 * @method static V20180116\CreateOrder createOrder(array $options = [])
 * @method static V20180116\NotifyPayOrderStatus notifyPayOrderStatus(array $options = [])
 * @method static V20180116\QueryAllCinemas queryAllCinemas(array $options = [])
 * @method static V20180116\QueryAllCities queryAllCities(array $options = [])
 * @method static V20180116\QueryBizItems queryBizItems(array $options = [])
 * @method static V20180116\QueryGuideItemGroup queryGuideItemGroup(array $options = [])
 * @method static V20180116\QueryHotMovies queryHotMovies(array $options = [])
 * @method static V20180116\QueryItemDetail queryItemDetail(array $options = [])
 * @method static V20180116\QueryMessages queryMessages(array $options = [])
 * @method static V20180116\QueryMovieComments queryMovieComments(array $options = [])
 * @method static V20180116\QueryMovieSchedules queryMovieSchedules(array $options = [])
 * @method static V20180116\QueryMovieSeats queryMovieSeats(array $options = [])
 * @method static V20180116\QueryMovieTickets queryMovieTickets(array $options = [])
 * @method static V20180116\QueryUpcomingMovies queryUpcomingMovies(array $options = [])
 * @method static V20180116\ReleaseMovieSeat releaseMovieSeat(array $options = [])
 * @method static V20180116\RemoveMessages removeMessages(array $options = [])
 * @method static V20180116\ReserveMovieSeat reserveMovieSeat(array $options = [])
 */
class LinkedmallV20180116
{
    use ApiResolverTrait;

    /**
     * @var string
     */
    protected $namespace = 'AlibabaCloud\\Linkedmall\\V20180116';
}
