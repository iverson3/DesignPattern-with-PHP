<?php
/**
 * Created by PhpStorm.
 * User: ASUA
 * Date: 2014/12/11
 * Time: 8:50
 */

include_once "EventGenerator.php";

class Event extends EventGenerator{
    /**
     * 触发事件
     */
    function trigger(){
        echo "event is trigger<br>\n";

        /**
         * 传统编程模式
         * 事件发生后 进行更新操作的方式
         * (传统的更新方式  耦合度比较高  难以维护)
         */
        /*
        echo "更新操作 1 <br>\n";
        echo "更新操作 2 <br>\n";
        echo "更新操作 3 <br>\n";
        */

        /**
         * 使用观察者模式
         * 事件发生后 调用父类中的notify方法去通知所有的观察者进行更新
         */
        $event_info = "这是测试事件的信息";
        $this->notify($event_info);
    }
}


/**
 * 实现一个观察者
 * Class Observer1
 */
class Observer1 implements Observer {
    function update($event_info = null){
        echo "更新操作 1 --- 事件信息: $event_info <br>\n";
    }
}
/**
 * 实现一个观察者
 * Class Observer2
 */
class Observer2 implements Observer {
    function update($event_info = null){
        echo "更新操作 2 --- 事件信息: $event_info <br>\n";
    }
}


// 实例化一个事件
$event = new Event();
// 将一个观察者添加到当前事件的观察者队列中去
$event->addObserver("ob1", new Observer1());
// 将一个观察者添加到当前事件的观察者队列中去
$event->addObserver("ob2", new Observer2());
// 触发事件
$event->trigger();


// 移除一个指定的观察者
$event->removeObserver("ob2");
