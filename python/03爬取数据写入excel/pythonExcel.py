#coding=utf-8

import urllib2
import xlwt
from bs4 import BeautifulSoup


def set_style(name, height, bold = False):  
    style = xlwt.XFStyle()   #初始化样式  
      
    font = xlwt.Font()       #为样式创建字体  
    font.name = name  
    font.bold = bold  
    font.color_index = 4  
    font.height = height  
      
    style.font = font  
    return style  
      
def write_excel():  
    #创建工作簿  
    workbook = xlwt.Workbook(encoding='utf-8')    
    #创建sheet  
    data_sheet = workbook.add_sheet('demo')    
    title = ['id','标题', '网址', '图片地址', '副标题']
    # 内容  
    contents = []  
    row = 1
    url = "http://www.xunmall.com/artlist-1.html"
    htmlContent = urllib2.urlopen(url).read()  
    # print(htmlContent)
    soup = BeautifulSoup(htmlContent,"html.parser")

    print("*" * 80)
    for k in soup.find_all('div',class_='items'):
         for item in k.find_all('li'):
               contents1 = []
               print(item.h2.get_text())
               xunmallUrl = "http://www.xunmall.com/" + item.a.attrs['href']
               print(xunmallUrl)
               print(item.img.attrs['src'])
               print(item.find_all('span')[1].get_text())
               contents1.append(str(row))
               contents1.append(item.h2.get_text())
               contents1.append(xunmallUrl)
               contents1.append(item.img.attrs['src'])
               contents1.append(item.find_all('span')[1].get_text())
               contents.append(contents1)
               row += 1
    # print(contents[0])
      
    # 写上字段信息
    for field in range(0,len(title)):
        data_sheet.write(0,field,title[field],set_style('Times New Roman', 220, True))

    # 获取并写入数据段信息
    row = 1
    col = 0
    for row in range(0,len(contents)):
        
        for col in range(0,len(title)):
            data_sheet.write(row + 1,col,contents[row][col],set_style('Times New Roman', 220, True))
            #保存文件  
            workbook.save('demo.xls')    
      
if __name__ == '__main__':   
    write_excel()  
    print u'创建demo.xlsx文件成功'  

        


