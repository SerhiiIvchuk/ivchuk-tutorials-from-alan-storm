<?php
declare(strict_types=1);

namespace Ivchuk\HelloWorld\Block;

use Magento\Framework\View\Element\Template;

class Main extends Template
{
    protected function _prepareLayout()
    {
        $this->setMessage('Hello Again World');
    }
    public function getGoodbyeMessage()
    {
        return 'Goodbye World';
    }
}
