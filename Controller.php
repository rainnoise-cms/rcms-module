<?php
namespace Modules\Module;

use \App\Controller as BaseController;
use App\Core;
use RuntimeException;
use ReflectionException;


class Controller extends BaseController {
    /**
     * Controller constructor.
     * @param Core $core
     * @throws ReflectionException
     */
    public function __construct(Core $core){
		parent::__construct($core);
	}
}