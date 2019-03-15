<?php

namespace AlibabaCloud\EHPC\V20180412;

use AlibabaCloud\Rpc;

/**
 * @method array getContainerApp()
 */
class DeleteContainerApps extends Rpc
{
    public $product = 'EHPC';

    public $version = '2018-04-12';

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
