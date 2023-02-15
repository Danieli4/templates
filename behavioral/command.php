<?php
//
//interface Command
//{
//    public function execute ();
//}
//
//interface Undoable extends Command
//{
//    public function undo();
//}
//
//class Output
//{
//    private bool $isEnable = true;
//    private string $body='';
//
//    /**
//     * @return string
//     */
//    public function getBody(): string
//    {
//        return $this->body;
//    }
//
//    public function enable():void
//    {
//        $this->isEnable = true;
//    }
//
//    public function disable():bool
//    {
//        return $this->isEnable = false;
//    }
//
//    public function write($str):void
//    {
//        if ($this->isEnable) {
//            $this->body = $str;
//        }
//    }
//}
//
//class Invoker
//{
//    private Command $command;
//
//    /**
//     * @param Command $command
//     */
//    public function setCommand(Command $command): void
//    {
//        $this->command = $command;
//    }
//    public function run()
//    {
//        $this->command->execute();
//    }
//}
//
//class Message implements Command
//{
//    private Output $output;
//
//    /**
//     * @param Output $output
//     */
//    public function __construct(Output $output)
//    {
//        $this->output = $output;
//    }
//
//    public function execute()
//    {
//        $this->output->write('some string from execute');
//    }
//}
//
//class ChangerStatus implements Undoable
//{
//    private Output $output;
//
//    /**
//     * @param Output $output
//     */
//    public function __construct(Output $output)
//    {
//        $this->output = $output;
//    }
//
//    public function execute()
//    {
//        $this->output->enable();
//    }
//
//    public function undo()
//    {
//        $this->output->disable();
//    }
//}
//
//$output = new Output();
//$invoker = new Invoker();
//$message = new Message($output);
//$changerStatus = new ChangerStatus($output);
//var_dump($output->getBody());
//$changerStatus->undo();
//var_dump($output->getBody());
//$changerStatus->execute();
//$message->execute();
//var_dump($output->getBody());