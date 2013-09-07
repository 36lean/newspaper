from pyquery import PyQuery as pq
from lxml import etree

import MySQLdb
import sys
import urllib

reload(sys)
sys.setdefaultencoding( "gbk" )




d = pq(url="http://fund.eastmoney.com/news/1590,20130906321025158.html")

x = d(".Body")

m = str( x.html())

f = open("c://xxx.html" , "w")

f.writelines( m)

f.close()

conn=MySQLdb.connect(host="127.0.0.1",user="root",passwd="",db="newspaper",port=3306)

cur=conn.cursor()

cur.execute("set names gb2312");

cur.execute("insert into news(category,title,author,meta_data,flash,content,cover,createdtime) values( 1 ,'hello world' , 'mot' , 'nothing' , 'flash data' , '"+m+"' , 'empty' , 1321029321)")

cur.close()

conn.close()