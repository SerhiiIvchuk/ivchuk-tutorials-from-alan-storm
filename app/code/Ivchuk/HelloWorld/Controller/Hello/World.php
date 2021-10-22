<?php
declare(strict_types=1);

namespace Ivchuk\HelloWorld\Controller\Hello;

class World extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        echo '<p>You Did It!</p>';
//        var_dump(__METHOD__);
    }
}

