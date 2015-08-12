说明：

php设计模式---适配器模式

可以将截然不同的函数接口封装成统一的API

实际应用举例：
1. php的数据库操作有mysql mysqli pdo三种，可以用适配器模式统一成一致的API
2. cache适配器，将memcached redis file apc等不同的缓存函数，统一成一致的API
