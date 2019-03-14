<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api CompleteBoard
 *
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getBoardId()
 */
class CompleteBoard extends Rpc
{
    public $product = 'live';

    public $version = '2016-11-01';

    public $method = 'POST';

    public $serviceCode = 'live';

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId'] = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }

    /**
     * @param string $appId
     *
     * @return $this
     */
    public function withAppId($appId)
    {
        $this->data['AppId'] = $appId;
        $this->options['query']['AppId'] = $appId;

        return $this;
    }

    /**
     * @param string $boardId
     *
     * @return $this
     */
    public function withBoardId($boardId)
    {
        $this->data['BoardId'] = $boardId;
        $this->options['query']['BoardId'] = $boardId;

        return $this;
    }
}
