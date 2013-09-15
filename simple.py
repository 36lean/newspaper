from pyquery import PyQuery as pq
from lxml import etree

import MySQLdb
import sys
import urllib

reload(sys)
sys.setdefaultencoding( "utf8" )

d = pq(url="http://www.baidu.com/s?tn=baiduhome_pg&ie=utf-8&bs=python%E7%88%AC%E8%99%AB&f=8&rsv_bp=1&rsv_spt=1&wd=%E7%B2%BE%E7%9B%8A%E5%88%9B%E4%B8%9A&rsv_sug3=4&rsv_sug1=3&rsv_sug4=174&rsv_sug=0&inputT=8277")
x = d(".Body")
m = str( x.html())

conn=MySQLdb.connect(host="127.0.0.1",user="root",passwd="",db="newspaper",port=3306)
cur=conn.cursor()
cur.execute("set names gb2312");
cur.execute("insert into news(category,title,author,meta_data,flash,content,cover,createdtime) values( 1 ,'hello world' , 'mot' , 'nothing' , 'flash data' , '"+m+"' , 'empty' , 1321029321)")
cur.close()
conn.close()