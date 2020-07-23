<?php

namespace AlibabaCloud\Cloudgame\V20200429;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method ListGames listGames(array $options = [])
 * @method ListProjects listProjects(array $options = [])
 */
class CloudgameApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cloudgame';

    /** @var string */
    public $version = '2020-04-29';

    /** @var string */
    public $method = 'POST';
}

/**
 * @method string getOrderKey()
 * @method $this withOrderKey($value)
 * @method string getSortType()
 * @method $this withSortType($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListGames extends Rpc
{
}

/**
 * @method string getProjectName()
 * @method $this withProjectName($value)
 * @method string getPageNumber()
 * @method $this withPageNumber($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 */
class ListProjects extends Rpc
{
}
