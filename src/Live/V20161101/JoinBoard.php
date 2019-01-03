<?php

namespace AlibabaCloud\Live\V20161101;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of JoinBoard
 *
 * @method string getBoardId()
 * @method string getAppUid()
 * @method string getOwnerId()
 * @method string getAppId()
 */
class JoinBoard extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'live';

    /**
     * @var string
     */
    public $version = '2016-11-01';

    /**
     * @var string
     */
    public $action = 'JoinBoard';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'live';

    /**
     * @deprecated deprecated since version 2.0, Use withBoardId() instead.
     *
     * @param string $boardId
     *
     * @return $this
     */
    public function setBoardId($boardId)
    {
        return $this->withBoardId($boardId);
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

    /**
     * @deprecated deprecated since version 2.0, Use withAppUid() instead.
     *
     * @param string $appUid
     *
     * @return $this
     */
    public function setAppUid($appUid)
    {
        return $this->withAppUid($appUid);
    }

    /**
     * @param string $appUid
     *
     * @return $this
     */
    public function withAppUid($appUid)
    {
        $this->data['AppUid'] = $appUid;
        $this->options['query']['AppUid'] = $appUid;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withOwnerId() instead.
     *
     * @param string $ownerId
     *
     * @return $this
     */
    public function setOwnerId($ownerId)
    {
        return $this->withOwnerId($ownerId);
    }

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
     * @deprecated deprecated since version 2.0, Use withAppId() instead.
     *
     * @param string $appId
     *
     * @return $this
     */
    public function setAppId($appId)
    {
        return $this->withAppId($appId);
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
}
