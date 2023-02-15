<!---->
<?php
//
//interface Worker
//{
//    public function work();
//}
//
//class ObjectManager
//{
//    private Worker $worker;
//
//    /**
//     * @param Worker $worker
//     */
//    public function __construct(Worker $worker)
//    {
//        $this->worker = $worker;
//    }
//    public function goWork(): void
//    {
//        $this->worker->work();
//    }
//}
//
//class Developer implements Worker
//{
//    public function work()
//    {
//        printf('Developer is working');
//    }
//
//}
//
//class NullWorker implements Worker
//{
//    public function work()
//    {
//
//    }
//
//}
//
//$developer = new Developer();
//$nullDeveloper = new NullWorker();
//$objectmanager = new ObjectManager($nullDeveloper);
//$objectmanager->goWork();
