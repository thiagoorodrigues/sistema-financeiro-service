<?php

namespace core;

use core\traits\EmailsTrait;
use core\traits\ResponseTrait;
use core\traits\SecurityTrait;
use core\traits\ValidationTrait;

class Controller
{
    use ValidationTrait;
    use SecurityTrait;
    use ResponseTrait;
    use EmailsTrait;
}