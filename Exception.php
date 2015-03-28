<?php

namespace codezen\soapclient;

/**
 * Class Exception
 *
 * @author marius Brinzea <devbyzen@gmail.com>
 */
class Exception extends \yii\base\Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'SOAP Client Exception';
    }
}
