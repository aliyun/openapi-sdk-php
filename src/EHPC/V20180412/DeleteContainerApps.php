<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * Request of DeleteContainerApps
 *
 * @method array getContainerApp()
 */
class DeleteContainerApps extends RpcRequest
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
    public $action = 'DeleteContainerApps';

    /**
     * @var string
     */
    public $serviceCode = 'ehs';

    /**
     * @param array $containerApp
     *
     * @return $this
     */
    public function withContainerApp(array $containerApp)
    {
        $this->data['ContainerApp'] = $containerApp;
        foreach ($containerApp as $i => $iValue) {
            $this->options['query']['ContainerApp.' . ($i + 1) . '.Id'] = $containerApp[$i]['Id'];
        }

        return $this;
    }
}
