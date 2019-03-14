<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Rpc;

/**
 * Api UpdateBoard
 *
 * @method string getOwnerId()
 * @method string getAppId()
 * @method string getBoardData()
 */
class UpdateBoard extends Rpc
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
     * @param string $boardData
     *
     * @return $this
     */
    public function withBoardData($boardData)
    {
        $this->data['BoardData'] = $boardData;
        $this->options['query']['BoardData'] = $boardData;

        return $this;
    }
}
