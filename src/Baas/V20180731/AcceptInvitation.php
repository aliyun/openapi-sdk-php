<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of AcceptInvitation
 *
 * @method string getCode()
 * @method string getIsAccepted()
 */
class AcceptInvitation extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'Baas';

    /**
     * @var string
     */
    public $version = '2018-07-31';

    /**
     * @var string
     */
    public $action = 'AcceptInvitation';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @deprecated deprecated since version 2.0, Use withCode() instead.
     *
     * @param string $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        return $this->withCode($code);
    }

    /**
     * @param string $code
     *
     * @return $this
     */
    public function withCode($code)
    {
        $this->data['Code'] = $code;
        $this->options['query']['Code'] = $code;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withIsAccepted() instead.
     *
     * @param string $isAccepted
     *
     * @return $this
     */
    public function setIsAccepted($isAccepted)
    {
        return $this->withIsAccepted($isAccepted);
    }

    /**
     * @param string $isAccepted
     *
     * @return $this
     */
    public function withIsAccepted($isAccepted)
    {
        $this->data['IsAccepted'] = $isAccepted;
        $this->options['query']['IsAccepted'] = $isAccepted;

        return $this;
    }
}
