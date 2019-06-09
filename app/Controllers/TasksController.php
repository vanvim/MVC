<?php
namespace MVC\Controllers;

use MVC\Core\Controller;
use MVC\Models\TaskModel;
use MVC\Models\TaskRepository;


class TasksController extends Controller
{
    protected $taskRepository;

    public function __construct()
    {
        $this->taskRepository = new TaskRepository(new TaskModel());
    }

    function index()
    {

        $d['tasks'] = $this->taskRepository->getAll();
        // print_r($tasks->getAll());
        // echo "abjdf";
        // exit();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["btn"])) {   
            $model= new TaskModel();
            $model->setSbd($_POST["so_bao_danh"]);
            $model->setHoten($_POST["ho_ten"]);
            $model->setDiachi($_POST["dia_chi"]);
            $model->setUutien($_POST["uu_tien"]);
            $model->setMakhoi($_POST["ma_khoi"]);
            
           
            $taskRepository = new TaskRepository($model);
            if($taskRepository->add()) {
                header("Location: " . WEBROOT . "tasks/index");
            }    
        }

        $this->render("create");
    }

    function edit($id)
    {
        $d["task"] =  $this->taskRepository->get($id);

        if (isset($_POST["btn"])) {   
            $model= new TaskModel();
            $model->setSbd($_POST["so_bao_danh"]);
            $model->setHoten($_POST["ho_ten"]);
            $model->setDiachi($_POST["dia_chi"]);
            $model->setUutien($_POST["uu_tien"]);
            $model->setMakhoi($_POST["ma_khoi"]);
            
            $taskRepository = new TaskRepository($model);
            //  echo "<pre>";
            //  print_r($taskRepository);
            // echo "<pre>";
            // $a=$taskRepository->add();
            // echo "<pre>";
            // print_r($a);
            // echo "<pre>";
            // die();
            if($taskRepository->edit($id)) {
                header("Location: " . WEBROOT . "tasks/index");
            }    
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        // $task = new TaskModle();
        // $this->$taskRepository->delete($task);
        if ($this->taskRepository->delete($id))
        {
            header("Location: " . WEBROOT . "tasks/index");
        }
    }
}
?>