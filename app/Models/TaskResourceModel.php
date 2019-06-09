<?php
namespace MVC\Models;

use MVC\Core\ResourceModel;
use MVC\Models\TaskModel;

class TaskResourceModel extends ResourceModel
{
    public function __construct(TaskModel $taskModel)
    {
        $this->_init("thi_sinh", "id", $taskModel);
    }
}