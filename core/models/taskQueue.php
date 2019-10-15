<?php
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
class TaskQueue
{

    private $channel = null;
    private $connection = null;
    /**
     * TaskQueue constructor.
     * Init connection
     *
     */
    public function __construct()
    {
        $this->connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $this->channel = $this->connection->channel();
    }

    public function sendTask($i)
    {
        $this->channel->queue_declare('hello', false, false, false, false);

        $msg = new AMQPMessage("{json:'body',i:{$i}}");
        $this->channel->basic_publish($msg, '', 'hello');

    }

    public function getTask($callBack)
    {
        $this->channel->queue_declare('hello', false, false, false, false);

        $this->channel->basic_consume('hello', '', false, true, false, false, $callBack);
        while ($this->channel->is_consuming()) {
            $this->channel->wait();
        }
        $this->channel->close();
        $this->connection>close();
    }

}