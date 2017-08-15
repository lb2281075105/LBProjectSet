# coding:utf-8

# 爬虫：数据采集
# 反爬：Web后端开发
# 模块化开发

# 1.查看源代码获取
# 2.异步加载：ajax
# 3.数据加密
# ssl:证书用于数据传输过程中不被更改，私密(服务器证书)加密，公钥(浏览器证书)解密
# 证书没有被授权
# 网页源代码:type()
import ssl
import urllib2
from json import loads

ssl._create_default_https_context = ssl._create_unverified_context
# 问题：from_station=CSQ
#      to_station=ICW
def getList():
    htmlContent = urllib2.urlopen("https://kyfw.12306.cn/otn/leftTicket/query?leftTicketDTO.train_date=2017-08-09&leftTicketDTO.from_station=CSQ&leftTicketDTO.to_station=ICW&purpose_codes=ADULT").read()
    # 把字符串转化成字典
    dict = loads(htmlContent)
    #print (type(dict))
    return dict["data"]["result"]
#while 1:

for i in getList():
      tmp_list = i.split("|")
      for n in tmp_list:
          print (n)
          if tmp_list[23] > 0:
              print ("有票")
              print (tmp_list[3])
          else:
              break