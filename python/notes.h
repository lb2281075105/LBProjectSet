
python 核心编程 第一节：

  1.import导入模块
  2.循环导入
  3.== is：是否是同一个对象 id(a)获取地址

    a=100;b=100 a is b ：true（-6，127）相同
    a=10000;b=10000 a is b false
  4.深拷贝和浅拷贝

   b=a;浅拷贝：地址给拷贝过去了；值没有复制一份，指向原来a的值的方向，给a添加一个值,b的值跟着变；
   b=copy.deepcopy(a)深拷贝：值复制一份，地址不一样，给a添加一个值,b的值不变。
   b=copy.copy(a):给a添加一个值,b的值变，地址变化。c=[a,b]a,b都是列表c[0]
   b=copy.copy(a):给a添加一个值,b的值变，地址不变。c=(a,b)a,b都是列表c[0]
   copy()会自动判断是都是可变类型，是可变类型拷贝一层，不可变类型什么都不拷贝（浅拷贝）。

5. 原码、反码和补码：计算
6.二进制、八进制和十进制:bin();oct();hex()
int("0x18",16、2、8)转化成16进制
7.位运算：0000 0110 ：8421计算；向左移动原来的值乘以2，右原值除以2；
8.私有化：self.__num=100;就是添加了一个属性__num;
def __num()：私有属性和方法
xx_;_xx(在本模块能使用，其他模块不能使用，import siyou整体拿过来可以用);__xx__;xx

__num； t._Test.__num访问；名字重整

9.(1)property升级getter、getter
(2)@property def num():
10.迭代器和生成器
列表不是可迭代对象，但是可以迭代
生成器都是迭代器
iter(a)转化成迭代器
可迭代不一定是可迭代对象，列表可迭代，但是不是可迭代对象

11.闭包：函数体
def test():

b = test;
b指向test的函数体

12.%s/^/#/g;1,7s/^/#/g  总端注释
解开：1，14s/#//g
13.def num():
pass
14.装饰器：
@w1
def f1():
f1=w1(f1);
注意：先装饰接近函数的，以此往外，执行函数先执行最外围的，再执行接近函数的装饰；

带参数的装饰器

又返回值的装饰器

@w1("哈哈哈")

15. 命名空间 import  test /// from test import *

16. 作用域：glocals locals

17. 动态添加属性和方法

18. 动态添加静态方法，类方法和实例方法

19. 生成器：用小括号包围

yield

20. 类装饰器
__call__

21. 元类

22.type创建一个类；类也是一个对象；

type创建一个类；继承类；创建类的属性和方法；

23. filter

reduce

24. 集合set()

25. 不定长参数（*ha，**hahh）;

26. functools

27. import hashlib

hashlib.MD5()

28. python3 -m http.server 8000 / 8888

29. matplotlib



