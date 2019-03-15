<?php

namespace AlibabaCloud\Cms\V20180308;

use AlibabaCloud\Rpc;

/**
 * @method string getCaller()
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getIspCity()
 * @method $this withIspCity($value)
 * @method string getAlertIds()
 * @method $this withAlertIds($value)
 * @method string getOptions()
 * @method $this withOptions($value)
 * @method string getTaskName()
 * @method $this withTaskName($value)
 * @method string getInterval()
 * @method $this withInterval($value)
 * @method string getAlertRule()
 * @method $this withAlertRule($value)
 * @method string getTaskId()
 * @method $this withTaskId($value)
 */
class ModifyTask extends Rpc
{
    public $product = 'Cms';

    public $version = '2018-03-08';

    public $method = 'POST';

    public $serviceCode = 'cms';

    /**
     * @param string $caller
     *
     * @return $this
     */
    public function withCaller($caller)
    {
        $this->data['Caller'] = $caller;
        $this->options['query']['caller'] = $caller;

        return $this;
    }
}
