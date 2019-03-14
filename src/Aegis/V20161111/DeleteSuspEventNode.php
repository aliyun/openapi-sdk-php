<?php

namespace AlibabaCloud\Aegis\V20161111;

use AlibabaCloud\Rpc;

/**
 * Api DeleteSuspEventNode
 *
 * @method string getSourceIp()
 * @method string getNoteId()
 */
class DeleteSuspEventNode extends Rpc
{
    public $product = 'aegis';

    public $version = '2016-11-11';

    public $method = 'POST';

    public $serviceCode = 'vipaegis';

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function withSourceIp($sourceIp)
    {
        $this->data['SourceIp'] = $sourceIp;
        $this->options['query']['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $noteId
     *
     * @return $this
     */
    public function withNoteId($noteId)
    {
        $this->data['NoteId'] = $noteId;
        $this->options['query']['NoteId'] = $noteId;

        return $this;
    }
}
