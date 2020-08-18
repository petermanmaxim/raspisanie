<?php
include 'Schedule.php';

class App
{
    private $response = '';

    public function run()
    {
        $group = trim($_POST['group']);

        if (!empty($group)) {
            $schedule = new Schedule();
            $this->response = $schedule->find($group);
        }
    }

    public function response()
    {
        return json_encode($this->response, JSON_THROW_ON_ERROR);
    }
}