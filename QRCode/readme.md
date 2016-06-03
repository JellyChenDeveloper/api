# QRCode

二维码生成。

二维码生成库使用endroid的QrCode开源库[endroid/QrCode](https://github.com/JellyChenDeveloper/QrCode)

## 常用二维码文本解析：

1. 网址 （URL）
`URL:www.jellychen.cn`或者直接使用带前缀的网址`www.jellychen.cn`
2. 电子邮箱地址（E-mail Address）
`mailto:JellyChen@qq.com`
3. 电话号码 （telephone numbers）
`tel:13111111111`
4. 短信（SMS）
`smsto:10086:你好`
5. 彩信（MMS）
`mmsto:10086:你好`
6. 地理位置（Geographic information）
和朋友一起分享你现在的位置，无疑是个很有用的功能。例如查看google公司在美国纽约的位置：北纬40.71872，西经73.98905；高度为100米。语法格式：
`geo:40.71872,-73.98905,100`
7. 获取安卓软件
在google的安卓市场找软件，可以使用应用市场软件识别并进行软件搜索，例如微信的格式：
`market://details?id=com.tencent.mm`
8.获取Wifi配置（Android）
`WIFI:T:WPA;S:mynetwork;P:mypass;;`