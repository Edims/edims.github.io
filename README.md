# 大沭MVC框架

#### 介绍
大沭MVC框架

#### 软件架构
大沭MVC框架采用PHP+MYSQL做为技术基础进行开发。
大沭MVC框架采用OOP（面向对象）方式进行基础运行框架搭建。模块化开发方式做为功能开发形式。框架易于功能扩展，代码维护，优秀的二次开发能力，可满足所有网站的应用需求。

目前预置：文件缓存类，数据库类，模板引擎，语言包引擎

#### 文件目录结构
```
根目录
|  –  caches 缓存文件目录

       |  – configs 系统配置文件目录

       |  – caches_* 系统缓存目录

       |  – error_log.php 错误日志

|  –  core  框架主目录

       |  – languages 框架语言包目录

       |  – libs 框架主类库、主函数库目录

             |  – classes  类库

             |  – functions 函数库

       |  – model 框架数据库模型目录

       |  – app 框架模块目录

             |  – content 演示模块

       |  – templates 框架系统模板目录

               |  – default 默认模板

                    |  – content 演示模板

|  –  index.php  框架主入口
```

#### 数据模型的使用

1.  caches/configs/database.php连接数据库
2.  新建 tablepre_表名, tablepre_为caches/configs/database.php里定义的前缀
3.  model里新建数据模型，参照caches_model
4.  控制器__construct里引入数据模型：$this->db = shy_base::load_model('xxx_model');
5.  方法里使用：
```
    1,$info = $this->db->get_one(array('id'=>$id));
    
    2,$info = $this->db->listinfo('','id DESC',$page,10);
```
#### 内置的数据调用方式

1.  调用外部xml数据
```
    {edi:xml url="XML文件地址" return="info"}
      {loop $info $r}
         {var_dump($r)}
      {/loop}
    {/edi}
```
2.  调用外部json数据
```
    {edi:json url="JSON文件地址" return="info"}
      {loop $info $r}
         {var_dump($r)}
      {/loop}
    {/edi} 
```
3.  GET SQL语句调用数据库数据
```
    {edi:get sql="SQL语句" num="10" return="info"}
      {loop $info $r}
         {var_dump($r)}
      {/loop}
    {/edi} 
```
#### 参与贡献

1.  Fork 本仓库
2.  新建 Feat_xxx 分支
3.  提交代码
4.  新建 Pull Request


#### 声明

本框架为[大沭网](https://www.shuyanghao.com/ "大沭网")使用框架，永久免费使用。

联系方式：QQ：6045564（注明大沭框架）

20200305