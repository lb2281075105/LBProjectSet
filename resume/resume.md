阿里一面： 
	1.	MVC具有什么样的优势，各个模块之间怎么通信，比如点击 Button 后 怎么通知 Model？ 
	2.	两个无限长度链表（也就是可能有环） 判断有没有交点 
	3.	UITableView的相关优化 
	4.	KVO、Notification、delegate各自的优缺点，效率还有使用场景 
	5.	如何手动通知KVO 
	6.	Objective-C 中的copy方法 
	7.	runtime 中，SEL和IMP的区别 
	8.	autoreleasepool的使用场景和原理 
	9.	RunLoop的实现原理和数据结构，什么时候会用到 
	10.	block为什么会有循环引用 
	11.	使用GCD如何实现这个需求：A、B、C 三个任务并发，完成后执行任务 D。 
	12.	NSOperation和GCD的区别 
	13.	CoreData的使用，如何处理多线程问题 
	14.	如何设计图片缓存？ 
	15.	有没有自己设计过网络控件？

	蚂蚁金服面试

1：在KVO中，他是怎么知道监听的对象发生了变化？

2：字典的工作原理 ？怎100w个中是怎么快速去取value？

3：一个上线的项目，知道这个方法可能会出问题，在不破坏改方法前提下，怎么搞？

4：Block和函数指针的区别？

支付宝面试题：1.iOS多线程有哪些？他们之间各有什么区别，优劣性？2.UIView和NSObject这两个类，所有里面的方法和原理都需要了解一下。3.Runloop和线程的关系？4.Runloop的作用？RunloopMode的原理？




饿了么面试题：
你了解哪些iOS底层知识
* automic一定是线程安全的吗
* iOS中的消息传递是怎么一步一步实现的
* category和extension有什么区别
* iOS中的私有属性如何设置
* 串行队列和同步锁两者在保护线程安全上的性能对比
* 并行队列是同时执行的吗
* iOS中有哪些锁，你了解多少
* iOS中UIKit框架的架构
* UIView和CALayer之间的关系
* UIView、CoreAnimation和CoreGraphics的关系
* 应该知道SegmentFault，这个在iOS中是什么错误，那StackOverFlow呢
* GCD、NSThread、NSOperation性能上有何区别

iOS之MRC和ARC
1.栈放局部变量（代码结束就释放，系统自动回收）堆放对象（动态分配）
2.每个对象里分配4个字节的存储空间放 引用计数器 当引用计数器值为0时对象占用的内存自动被回收自动回收，引用计数器的初始值是1.
3.retain 引用计数器＋1   release引用计数器－1
4.可以给对象发送（调用）retainCount来接收当前的引用计数器的值
5.重写dealloc（对象遗言）来判断是否回收对象内存，都要调用
［super dealloc］(写在方法最后)
6.使用alloc new copy retain计数器为1.只要出现了上面3个，就必须要出现release或者autorelease;
7.retain返回的是调用它的本身，release没有返回值
8.野指针：指向僵尸对象（不可用内存）的指针。防止野指针例如：p=nil;
9.EXC-BAD-ACCESS访问已经被释放的内存（野指针错误）。僵尸对象后再用retain是不行的。（人死不能复生）
10.僵尸对象：所占有内存已经被回收的对象。
11.property的retain参数只适用于OC对象类型：release旧值,retain新值。
12.property中的多线程nonatomic性能高，atomic性能低，一般用nonatomic
13.property中参数的setter:决定了set方法的名称，一定要加冒号。getter决定了get方法的名称
14.当一个方法的返回值是bool时用is开头（规范）
15.在实际开发中不能打开实时对象检测；
16.在OC中用nil调用方法不会出现异常；
17.内存泄漏就是不被使用的对象一直在内存中没有被销毁
18.如果一个程序中出现互引用问题，那么一端对象的@property参数用assign
19.在互引用问题中开发中引用一个类的规范
1> 在.h文件中用@class来声明类
2> 在.m文件中用#import来包含类的所有东西
20.在dealloc方法中的［super dealloc］要写在最后面；
21.不管对象是在@autoreleasepool大括号之内还是之外，只要在大括号里面调用对象的autoreleasepool就有作用
22.只有在自动释放池的作用域中调用对象的autoreleasepool方法才能正常的使用
23.在ARC机制中不能再去调用release,retain和[super dealloc];
24.只要没有强指针指向的对象，ARC中立即被自动回收，默认情况所有指针都是强指针；
25.__weak中是两个弱指针


2、什么是ARC？

Automatic Reference Counting，自动引用计数，即ARC，在工程中使用ARC非常简单：只需要像往常那样编写代码，只不过永远不写retain,release和autorelease三个关键字就好，这是ARC的基本原则。当ARC开启时，编译器将自动在代码合适的地方插入retain,release和autorelease，而作为开发者，完全不需要担心编译器会做错。

ARC与其他语言的“垃圾回收”机制不同。ARC：编译器特性；“垃圾回收”：运行时特性。


3、ARC工作原理及判断准则

ARC是Objective-C编译器的特性，而不是运行时特性或者垃圾回收机制，ARC所做的只不过是在代码编译时为你自动在合适的位置插入release或autorelease，

只要没有强指针指向对象，对象就会被释放。


我要发阿里二面参考答案了：
1.    怎么判断某个cell是否显示在屏幕上
2.    进程和线程的区别
3.    TCP与UDP区别
4.    TCP流量控制
5.    数组和链表的区别
6.    UIView生命周期
7.    如果页面 A 跳转到 页面 B，A 的viewDidDisappear方法和 B 的viewDidAppear方法哪个先调用？
8.    block循环引用问题
9.    ARC的本质
10.    RunLoop的基本概念，它是怎么休眠的？
11.    Autoreleasepool什么时候释放，在什么场景下使用？
12.    如何找到字符串中第一个不重复的字符
13.    哈希表如何处理冲突


阿里二面：
1.    怎么判断某个cell是否显示在屏幕上
2.    进程和线程的区别
3.    TCP与UDP区别
4.    TCP流量控制
5.    数组和链表的区别
6.    UIView生命周期
7.    如果页面 A 跳转到 页面 B，A 的viewDidDisappear方法和 B 的viewDidAppear方法哪个先调用？
8.    block循环引用问题
9.    ARC的本质
10.    RunLoop的基本概念，它是怎么休眠的？
11.    Autoreleasepool什么时候释放，在什么场景下使用？
12.    如何找到字符串中第一个不重复的字符
13.    哈希表如何处理冲突

今日更新，阿里二面以及参考答案；
此后群内会陆续更新iOS BAT最新面试题；
包括滴滴、京东、今日头条、陆金所、携程等！

包括北京、上海、广州、深圳等全国各大城市iOS最新行情，靠实际行动、用数据说话！

敬请期待~
