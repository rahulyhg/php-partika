<?php
/**
 * @author Dmitry Stepanov <dmitry@stepanov.lv>
 * @copyright 2013, Dmitry Stepanov. All rights reserved.
 * @link http://stepanov.lv
 */

namespace RTK\Request;

use \RTK\Request;

class Forbidden extends Request
{
    public function GetResponse()
    {
        return $this->Forbidden();
    }
}