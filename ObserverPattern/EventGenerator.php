<?php
/**
 * 事件产生者
 * User: ASUA
 * Date: 2014/12/11
 * Time: 8:57
 */

include_once "Observer.php";

abstract class EventGenerator{
    /**
     * 观察者(对象)数组
     * @var array
     * @access private
     */
    private $observers = array();

    /**
     * 添加一个观察者(对象)
     * @param string   $observer_no 观察者编号
     * @param Observer $observer
     */
    function addObserver($observer_no, Observer $observer){
        $this->observers[$observer_no] = $observer;
    }

    /**
     * 移除一个指定的观察者
     * @param string $observer_no 观察者编号
     */
    function removeObserver($observer_no){
        unset($this->observers[$observer_no]);
    }

    /**
     * 通知所有的观察者
     * am null $event_info 事件信息
     */
    function notify($event_info = null){
        foreach ($this->observers as $observer) {
            // 调用观察者的更新方法 让其进行更新
            $observer->update($event_info);
        }
    }
}