from distutils.core import setup

setup(name="liubo",version="1.0",description="liubo's module",author="liubo",py_modules=['xiaoWang.c','xiaoWang.d','xiaoZhang.a','xiaoZhang.b'])

# 1. 创建setup.py文件，导入上面固定的两句代码
# 2. python setup.py build  //执行2、3步骤两句命令需要在setup.py文件下执行
# 3. python setup.py sdist  
# 4. 进入dist文件，tar zxvf liubo-1.0.tar.gz
# 5. sudo python setup.py install 安装