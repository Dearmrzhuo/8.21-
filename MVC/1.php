<?php
//数据和视图混在一起开发
//1.不能完成协同开发
//2.工作量巨大，不能完成代码的复用
//3.后期维护，工作量巨大

//model view  controller
//控制器将模型和视图关联起来  指定什么样的数据显示在什么样的页面当中
   //模型就是操作数据的方式（数据）后台人员工作
   //视图是指页面（前端人员）  页面的交互 页面的样式 页面的逻辑
   //前后台分离

//mvc优势:
//1.前后台分离
//2.协同合作
//3.将代码重复利用
//4.降低后期维护的消耗
//5.单入口应用 (方便管理，安全快捷)
//6.多入口  （不安全，不方便管理）