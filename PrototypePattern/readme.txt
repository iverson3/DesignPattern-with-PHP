说明：

php设计模式---原型模式

1. 与工厂模式作用类似，都是用来创建对象

2. 与工厂模式的实现不同，原型模式是先创建好一个原型对象，然后通过clone原型对象来创建新的对象。这样就免去了类创建时重复的初始化操作。

3. 原型模式适用于大对象的创建。创建一个大对象需要很大的开销，如果每次new就会消耗很大，原型模式仅需内存拷贝即可


原型模式的优点:
每new一次，都需要执行一次构造函数，如果构造函数的执行时间很长，那么多次的执行这个初始化操作就实在是太低效了。
一般在初始化的信息不发生变化的情况下，克隆是最好的办法。这即隐藏了对象的细节，又对性能是大大的提高。
意思就是不用重新初始化对象，而是动态地获取对象运行时的状态。

