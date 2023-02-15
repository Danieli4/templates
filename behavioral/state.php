<!-- --><?php
// interface State
// {
//     public function toNext(Task $task);
//     public function getStatus();
// }
// class Task
// {
//     private State $state;
//     /**
//      * @return State
//      */
//     public function getState(): State
//     {
//         return $this->state;
//     }
//     /**
//      * @param State $state
//      */
//     public function setState(State $state): void
//     {
//         $this->state = $state;
//     }
//     public function processToNext()
//     {
//         $this->state->toNext($this);
//     }
//     public static function make():Task
//     {
//         $self = new self();
//         $self->setState(new Created());
//         return $self;
//     }
//
// }
// class Created implements State
// {
//     public function toNext(Task $task)
//     {
//        $task->setState(new Process());
//     }
//     public function getStatus()
//     {
//         return "Created";
//     }
// }
// class Process implements State
// {
//     public function toNext(Task $task)
//     {
//         $task->setState(new Test());
//     }
//     public function getStatus()
//     {
//         return "Processed";
//     }
// }
// class Test implements State
// {
//     public function toNext(Task $task)
//     {
//         $task->setState(new Done());
//     }
//     public function getStatus()
//     {
//         return "Tested";
//     }
// }
// class Done implements State
// {
//     public function toNext(Task $task)
//     {
//
//     }
//     public function getStatus()
//     {
//         return "Done";
//     }
// }
// $task = Task::make();
// var_dump($task->getState()->getStatus());
// $task->processToNext();
// var_dump($task->getState()->getStatus());
// $task->processToNext();
// var_dump($task->getState()->getStatus());
// $task->processToNext();
// var_dump($task->getState()->getStatus());
// $task->processToNext();
// var_dump($task->getState()->getStatus());
