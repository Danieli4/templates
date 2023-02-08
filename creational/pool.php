<?php
class WorkerPool
{
    private array $freeWorks = [];
    private array $busyWorkers = [];
    public function getWorker():Worker
    {
        if (count($this->freeWorks)===0)
        {
            $worker = new Worker();
        } else
        {
            $worker = array_pop($this->freeWorks);
        }
        $this->busyWorkers[spl_object_hash($worker)] = $worker;
        return $worker;

    }

    public function release(Worker $worker):void
    {
        $key = spl_object_hash($worker);

        if (isset($this->busyWorkers[$key])){
            unset($this->busyWorkers[$key]);
            $this->freeWorks[$key] = $worker;
        }
    }

    /**
     * @return array
     */
    public function getFreeWorks(): array
    {
        return $this->freeWorks;
    }

    /**
     * @param array $freeWorks
     */
    public function setFreeWorks(array $freeWorks): void
    {
        $this->freeWorks = $freeWorks;
    }

    /**
     * @return array
     */
    public function getBusyWorkers(): array
    {
        return $this->busyWorkers;
    }

    /**
     * @param array $busyWorkers
     */
    public function setBusyWorkers(array $busyWorkers): void
    {
        $this->busyWorkers = $busyWorkers;
    }

}

class Worker
{
    public function work()
    {
        printf('im working');
    }
}

$pool = new WorkerPool();
$worker = $pool->getWorker();
$worker2 = $pool->getWorker();
$worker3 = $pool->getWorker();
$worker4 = $pool->getWorker();
//$worker->work();
var_dump('busy_1: ', $pool->getBusyWorkers());
var_dump('free_1: ', $pool->getFreeWorks());
$pool->release($worker);

var_dump('busy: ', $pool->getBusyWorkers());
var_dump('free: ', $pool->getFreeWorks());