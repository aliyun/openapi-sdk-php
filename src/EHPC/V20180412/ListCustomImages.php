<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of ListCustomImages
 *
 * @method string getBaseOsTag()
 * @method string getImageOwnerAlias()
 */
class ListCustomImages extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'EHPC';

    /**
     * @var string
     */
    public $version = '2018-04-12';

    /**
     * @var string
     */
    public $action = 'ListCustomImages';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @deprecated deprecated since version 2.0, Use withBaseOsTag() instead.
     *
     * @param string $baseOsTag
     *
     * @return $this
     */
    public function setBaseOsTag($baseOsTag)
    {
        return $this->withBaseOsTag($baseOsTag);
    }

    /**
     * @param string $baseOsTag
     *
     * @return $this
     */
    public function withBaseOsTag($baseOsTag)
    {
        $this->data['BaseOsTag'] = $baseOsTag;
        $this->options['query']['BaseOsTag'] = $baseOsTag;

        return $this;
    }

    /**
     * @deprecated deprecated since version 2.0, Use withImageOwnerAlias() instead.
     *
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function setImageOwnerAlias($imageOwnerAlias)
    {
        return $this->withImageOwnerAlias($imageOwnerAlias);
    }

    /**
     * @param string $imageOwnerAlias
     *
     * @return $this
     */
    public function withImageOwnerAlias($imageOwnerAlias)
    {
        $this->data['ImageOwnerAlias'] = $imageOwnerAlias;
        $this->options['query']['ImageOwnerAlias'] = $imageOwnerAlias;

        return $this;
    }
}
