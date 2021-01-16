<?php
/*
 *********************************************************************************************************
 * daloRADIUS - RADIUS Web Platform
 * Copyright (C) 2007 - Liran Tal <liran@enginx.com> All Rights Reserved.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 *********************************************************************************************************
 * Description:
 *		English language file
 *
 * Authors:	Liran Tal <liran@enginx.com>
 *
 *********************************************************************************************************
 */
 
$l['all']['daloRADIUS'] = "daloRADIUS " . $configValues['DALORADIUS_VERSION'];
$l['all']['daloRADIUSVersion'] = "version " . $configValues['DALORADIUS_VERSION'];
$l['all']['copyright1'] = "RADIUS Management, Reporting, Accounting and Billing by <a href=\"https://github.com/lirantal/daloradius\">Liran Tal</a>";
$l['all']['copyright2'] = "daloRADIUS Copyright &copy; 2007-2019 by <a href=\"https://github.com/lirantal/daloradius\">Liran Tal</a> <br/>
Template design by <a href=\"http://www.sixshootermedia.com\">Six Shooter Media</a>.";
$l['all']['ID'] = "ID";
$l['all']['PoolName'] = "名称池";
$l['all']['CalledStationId'] = "被叫ID";
$l['all']['CallingStationID'] = "呼叫ID";
$l['all']['ExpiryTime'] = "到期时间";
$l['all']['PoolKey'] = "密钥池";

/********************************************************************************/
/* 供应商属性相关翻译                                        */
/********************************************************************************/
$l['all']['Dictionary'] = "字典";
$l['all']['VendorID'] = "供应商ID";
$l['all']['VendorName'] = "供应商名称";
$l['all']['VendorAttribute'] = "供应商属性";
$l['all']['RecommendedOP'] = "Recommended OP";
$l['all']['RecommendedTable'] = "Recommended Table";
$l['all']['RecommendedTooltip'] = "Recommended Tooltip";
$l['all']['RecommendedHelper'] = "Recommended Helper";
/********************************************************************************/

$l['all']['CSVData'] = "CSV-formatted data";

$l['all']['CPU'] = "CPU";

/* radius related text */
$l['all']['RADIUSDictionaryPath'] = "RADIUS字典路径";


$l['all']['DashboardSecretKey'] = "仪表板密钥";
$l['all']['DashboardDebug'] = "Debug";
$l['all']['DashboardDelaySoft'] = "Time in minutes to consider a 'soft' delay limit";
$l['all']['DashboardDelayHard'] = "Time in minutes to consider a 'hard' delay limit";



$l['all']['SendWelcomeNotification'] = "发送欢迎通知";
$l['all']['SMTPServerAddress'] = "SMTP服务器地址";
$l['all']['SMTPServerPort'] = "SMTP服务器端口";
$l['all']['SMTPServerFromEmail'] = "发件人电子邮件地址";

$l['all']['customAttributes'] = "自定义属性";

$l['all']['UserType'] = "用户类型";

$l['all']['BatchName'] = "批量名称";
$l['all']['BatchStatus'] = "批量状态";

$l['all']['Users'] = "用户";

$l['all']['Compare'] = "Compare";
$l['all']['Never'] = "比较";


$l['all']['Section'] = "部门";
$l['all']['Item'] = "项目";

$l['all']['Megabytes'] = "兆字节";
$l['all']['Gigabytes'] = "千兆字节";

$l['all']['Daily'] = "每日";
$l['all']['Weekly'] = "每周";
$l['all']['Monthly'] = "每月";
$l['all']['Yearly'] = "每年";

$l['all']['Month'] = "月";

$l['all']['RemoveRadacctRecords'] = "删除账单记录";

$l['all']['CleanupSessions'] = "Cleanup sessions older than";
$l['all']['DeleteSessions'] = "Delete sessions older than";

$l['all']['StartingDate'] = "开始日期";
$l['all']['EndingDate'] = "结束日期";

$l['all']['Realm'] = "域";
$l['all']['RealmName'] = "域名";
$l['all']['RealmSecret'] = "域安全";
$l['all']['AuthHost'] = "认证主机";
$l['all']['AcctHost'] = "统计主机";
$l['all']['Ldflag'] = "ldflag";
$l['all']['Nostrip'] = "nostrip";
$l['all']['Notrealm'] = "notrealm";
$l['all']['Hints'] = "提示";

$l['all']['Proxy'] = "代理";
$l['all']['ProxyName'] = "代理名称";
$l['all']['ProxySecret'] = "代理密钥";
$l['all']['DeadTime'] = "停滞时间";
$l['all']['RetryDelay'] = "重试延迟";
$l['all']['RetryCount'] = "重试次数";
$l['all']['DefaultFallback'] = "默认反回";


$l['all']['Firmware'] = "固件";
$l['all']['NASMAC'] = "NAS MAC";

$l['all']['WanIface'] = "Wan Iface";
$l['all']['WanMAC'] = "Wan MAC";
$l['all']['WanIP'] = "Wan IP";
$l['all']['WanGateway'] = "Wan Gateway";

$l['all']['LanIface'] = "Lan Iface";
$l['all']['LanMAC'] = "Lan MAC";
$l['all']['LanIP'] = "Lan IP";

$l['all']['WifiIface'] = "Wifi Iface";
$l['all']['WifiMAC'] = "Wifi MAC";
$l['all']['WifiIP'] = "Wifi IP";

$l['all']['WifiSSID'] = "Wifi SSID";
$l['all']['WifiKey'] = "Wifi Key";
$l['all']['WifiChannel'] = "Wifi Channel";

$l['all']['CheckinTime'] = "Last Checked-In";

$l['all']['FramedIPAddress'] = "Framed-IP-Address";
$l['all']['SimultaneousUse'] = "同时使用";
$l['all']['HgID'] = "HG ID";
$l['all']['Hg'] = "HG ";
$l['all']['HgIPHost'] = "HG IP/Host";
$l['all']['HgGroupName'] = "HG GroupName";
$l['all']['HgPortId'] = "HG Port Id";
$l['all']['NasID'] = "NAS ID";
$l['all']['Nas'] = "NAS ";
$l['all']['NasIPHost'] = "NAS IP/Host";
$l['all']['NasShortname'] = "NAS简称";
$l['all']['NasType'] = "NAS类型";
$l['all']['NasPorts'] = "NAS端口";
$l['all']['NasSecret'] = "NAS密钥";
$l['all']['NasVirtualServer'] = "NAS虚拟服务";
$l['all']['NasCommunity'] = "NAS社区";
$l['all']['NasDescription'] = "NAS说明";
$l['all']['PacketType'] = "数据包类型";
$l['all']['HotSpot'] = "热点";
$l['all']['HotSpots'] = "扫描热点";
$l['all']['HotSpotName'] = "热点名称";
$l['all']['Name'] = "名称";
$l['all']['Username'] = "用户名";
$l['all']['Password'] = "密码";
$l['all']['PasswordType'] = "密码类型";
$l['all']['IPAddress'] = "IP地址";
$l['all']['Profile'] = "配置文件";
$l['all']['Group'] = "组";
$l['all']['Groupname'] = "组名";
$l['all']['ProfilePriority'] = "配置文件优先权";
$l['all']['GroupPriority'] = "组优先权";
$l['all']['CurrentGroupname'] = "当前组名";
$l['all']['NewGroupname'] = "新建组名";
$l['all']['Priority'] = "优先权";
$l['all']['Attribute'] = "属性";
$l['all']['Operator'] = "操作员";
$l['all']['Value'] = "价值";
$l['all']['NewValue'] = "新价值";
$l['all']['MaxTimeExpiration'] = "最长时间 / 到期";
$l['all']['UsedTime'] = 使用时间"";
$l['all']['Status'] = "状态";
$l['all']['Usage'] = "用法";
$l['all']['StartTime'] = "开始时间";
$l['all']['StopTime'] = "停止时间";
$l['all']['TotalTime'] = "总时间";
$l['all']['TotalTraffic'] = "总流量";
$l['all']['Bytes'] = "字节";
$l['all']['Upload'] = "上传";
$l['all']['Download'] = "下载";
$l['all']['Rollback'] = "回滚";
$l['all']['Termination'] = "终止";
$l['all']['NASIPAddress'] = "NAS IP地址";
$l['all']['NASShortName'] = "NAS简称";
$l['all']['Action'] = "活动";
$l['all']['UniqueUsers'] = "单一用户";
$l['all']['TotalHits'] = "探测值";
$l['all']['AverageTime'] = "平均时间";
$l['all']['Records'] = "记录";
$l['all']['Summary'] = "明细";
$l['all']['Statistics'] = "统计";
$l['all']['Credit'] = "信用卡";
$l['all']['Used'] = "使用";
$l['all']['LeftTime'] = "剩余时间";
$l['all']['LeftPercent'] = "% of Time Left";
$l['all']['TotalSessions'] = "会话总数";
$l['all']['LastLoginTime'] = "上次登录时间";
$l['all']['TotalSessionTime'] = "总会话时间";
$l['all']['RateName'] = "费率名称";
$l['all']['RateType'] = "费率类型";
$l['all']['RateCost'] = "费率成本";
$l['all']['Billed'] = "帐单";
$l['all']['TotalUsers'] = "用户总数";
$l['all']['ActiveUsers'] = "活跃用户";
$l['all']['TotalBilled'] = "账单总额";
$l['all']['TotalPayed'] = "已付总额";
$l['all']['Balance'] = "平衡";
$l['all']['CardBank'] = "信用卡银行";
$l['all']['Type'] = "类型";
$l['all']['CardBank'] = "信用卡银行";
$l['all']['MACAddress'] = "MAC地址";
$l['all']['Geocode'] = "地理编码";
$l['all']['PINCode'] = "PIN代码";
$l['all']['CreationDate'] = "创建日期";
$l['all']['CreationBy'] = "创建人";
$l['all']['UpdateDate'] = "更新日期";
$l['all']['UpdateBy'] = "更新者";

$l['all']['Discount'] = "优惠";
$l['all']['BillAmount'] = "开票金额";
$l['all']['BillAction'] = "计费操作";
$l['all']['BillPerformer'] = "完成计费";
$l['all']['BillReason'] = "计费原因";
$l['all']['Lead'] = "领导";
$l['all']['Coupon'] = "优惠券";
$l['all']['OrderTaker'] = "接受订单";
$l['all']['BillStatus'] = "票据状态";
$l['all']['LastBill'] = "最后一张账单";
$l['all']['NextBill'] = "下一张账单";
$l['all']['BillDue'] = "到期票据";
$l['all']['NextInvoiceDue'] = "下次发票到期";
$l['all']['PostalInvoice'] = "邮寄发票";
$l['all']['FaxInvoice'] = "传真发票";
$l['all']['EmailInvoice'] = "Email发票";

$l['all']['ClientName'] = "客户名称";
$l['all']['Date'] = "日期";

$l['all']['edit'] = "编辑";
$l['all']['del'] = "del";
$l['all']['groupslist'] = "groups-list";
$l['all']['TestUser'] = "测试用户";
$l['all']['Accounting'] = "会计";
$l['all']['RADIUSReply'] = "RADIUS回复";

$l['all']['Disconnect'] = "断开";

$l['all']['Debug'] = "Debug";
$l['all']['Timeout'] = "超时";
$l['all']['Retries'] = "重试";
$l['all']['Count'] = "计数";
$l['all']['Requests'] = "请求";

$l['all']['DatabaseHostname'] = "数据库主机名";
$l['all']['DatabasePort'] = "数据库端口";
$l['all']['DatabaseUser'] = "数据库用户";
$l['all']['DatabasePass'] = "数据库密码";
$l['all']['DatabaseName'] = "数据库名称";

$l['all']['PrimaryLanguage'] = "初级语言";

$l['all']['PagesLogging'] = "记录页面 (页面访问量)";
$l['all']['QueriesLogging'] = "记录查询 (报告和图表)";
$l['all']['ActionsLogging'] = "记录操作 (表单提交)";
$l['all']['FilenameLogging'] = "日志文件名 (完整路径)";
$l['all']['LoggingDebugOnPages'] = "在页面上记录调试信息";
$l['all']['LoggingDebugInfo'] = "调试信息记录";

$l['all']['PasswordHidden'] = "启用密码隐藏 (将显示星号)";
$l['all']['TablesListing'] = "排/每个表的记录列表页";
$l['all']['TablesListingNum'] = "启用表列表编号";
$l['all']['AjaxAutoComplete'] = "Enable Ajax Auto-Complete";

$l['all']['RadiusServer'] = "Radius服务器";
$l['all']['RadiusPort'] = "Radius端口";

$l['all']['UsernamePrefix'] = "用户名前缀";

$l['all']['batchName'] = "批量Id/名称";
$l['all']['batchDescription'] = "批量描述";

$l['all']['NumberInstances'] = "要创建的实例数";
$l['all']['UsernameLength'] = "用户名字符串的长度";
$l['all']['PasswordLength'] = "密码字符串长度";

$l['all']['Expiration'] = "到期";
$l['all']['MaxAllSession'] = "Max-All-Session";
$l['all']['SessionTimeout'] = "会话超时";
$l['all']['IdleTimeout'] = "空闲超时";

$l['all']['DBEngine'] = "DB Engine";
$l['all']['radcheck'] = "无线电检查";
$l['all']['radreply'] = "无线电应答";
$l['all']['radgroupcheck'] = "无线电组检查";
$l['all']['radgroupreply'] = "无线电组回复";
$l['all']['usergroup'] = "用户组";
$l['all']['radacct'] = "无线电帐户";
$l['all']['operators'] = "操作员";
$l['all']['operators_acl'] = "operators_acl";
$l['all']['operators_acl_files'] = "operators_acl_files";
$l['all']['billingrates'] = "计费费率";
$l['all']['hotspots'] = "热点";
$l['all']['node'] = "节点";
$l['all']['nas'] = "nas";
$l['all']['hunt'] = "无线电搜索组";
$l['all']['radpostauth'] = "无线电邮寄认证";
$l['all']['radippool'] = "ip池";
$l['all']['userinfo'] = "用户信息";
$l['all']['dictionary'] = "词典";
$l['all']['realms'] = "域";
$l['all']['proxys'] = "代理";
$l['all']['billingpaypal'] = "paypal付费";
$l['all']['billingmerchant'] = "merchant付费";
$l['all']['billingplans'] = "plans付费";
$l['all']['billinghistory'] = "history付费";
$l['all']['billinginfo'] = "付费用户信息";


$l['all']['CreateIncrementingUsers'] = "创建递增用户";
$l['all']['CreateRandomUsers'] = "创建随机用户";
$l['all']['StartingIndex'] = "起始索引";
$l['all']['EndingIndex'] = "结束索引";
$l['all']['RandomChars'] = "允许的随机字符";
$l['all']['Memfree'] = "内存免费";
$l['all']['Uptime'] = "正常运行时间";
$l['all']['BandwidthUp'] = "带宽上行";
$l['all']['BandwidthDown'] = "带宽下行";

$l['all']['BatchCost'] = "批量成本";

$l['all']['PaymentDate'] = "付款日期";
$l['all']['PaymentStatus'] = "付款状态";
$l['all']['FirstName'] = "名字";
$l['all']['LastName'] = "姓";
$l['all']['VendorType'] = "批量供应商";
$l['all']['PayerStatus'] = "付款人状态";
$l['all']['PaymentAddressStatus'] = "付款地址状态";
$l['all']['PayerEmail'] = "付款人Email";
$l['all']['TxnId'] = "交易Id";
$l['all']['PlanActive'] = "统计活动";
$l['all']['PlanTimeType'] = "统计时间类型";
$l['all']['PlanTimeBank'] = "统计时间库";
$l['all']['PlanTimeRefillCost'] = "统计补充成本";
$l['all']['PlanTrafficRefillCost'] = "统计补充成本";
$l['all']['PlanBandwidthUp'] = "统计带宽上行";
$l['all']['PlanBandwidthDown'] = "统计带宽下行";
$l['all']['PlanTrafficTotal'] = "统计流量总量";
$l['all']['PlanTrafficDown'] = "统计流量下行";
$l['all']['PlanTrafficUp'] = "统计流量上行";
$l['all']['PlanRecurring'] = "统计周期性";
$l['all']['PlanRecurringPeriod'] = "统计重复周期";
$l['all']['planRecurringBillingSchedule'] = "统计周期性帐单计划";
$l['all']['PlanCost'] = "统计成本";
$l['all']['PlanSetupCost'] = "统计设置成本";
$l['all']['PlanTax'] = "统计税";
$l['all']['PlanCurrency'] = "统计货币";
$l['all']['PlanGroup'] = "Plan Profile (Group)";
$l['all']['PlanType'] = "统计类型";
$l['all']['PlanName'] = "统计名称";
$l['all']['PlanId'] = "统计Id";

$l['all']['UserId'] = "用户Id";

$l['all']['Invoice'] = "发票";
$l['all']['InvoiceID'] = "发票ID";
$l['all']['InvoiceItems'] = "发票项目";
$l['all']['InvoiceStatus'] = "Invoice Status";

$l['all']['InvoiceType'] = "发票类型";
$l['all']['Amount'] = "金额";
$l['all']['Total'] = "总计";
$l['all']['TotalInvoices'] = "发票总额";

$l['all']['PayTypeName'] = "付款类型名称";
$l['all']['PayTypeNotes'] = "付款类型说明";
$l['all']['payment_type'] = "付款类型";
$l['all']['payments'] = "付款";
$l['all']['PaymentId'] = "付款ID";
$l['all']['PaymentInvoiceID'] = "发票ID";
$l['all']['PaymentAmount'] = "金额";
$l['all']['PaymentDate'] = "日期";
$l['all']['PaymentType'] = "付款类型";
$l['all']['PaymentNotes'] = "付款通知";




$l['all']['Quantity'] = "数量";
$l['all']['ReceiverEmail'] = "接收Email";
$l['all']['Business'] = "业务";
$l['all']['Tax'] = "税额";
$l['all']['Cost'] = "价钱";
$l['all']['TotalCost'] = "总额";
$l['all']['TransactionFee'] = "交易费";
$l['all']['PaymentCurrency'] = "支付货币";
$l['all']['AddressRecipient'] = "收件人地址";
$l['all']['Street'] = "街道";
$l['all']['Country'] = "国家";
$l['all']['CountryCode'] = "国家代码";
$l['all']['City'] = "城市";
$l['all']['State'] = "州";
$l['all']['Zip'] = "Zip";

$l['all']['BusinessName'] = "企业名称";
$l['all']['BusinessPhone'] = "企业电话";
$l['all']['BusinessAddress'] = "企业地址";
$l['all']['BusinessWebsite'] = "企业网站";
$l['all']['BusinessEmail'] = "企业Email";
$l['all']['BusinessContactPerson'] = "企业联系人";
$l['all']['DBPasswordEncryption'] = "DB密码加密类型";


/* **********************************************************************************
 * Tooltips
 * Helper information such as tooltip text for mouseover events and popup tooltips
 ************************************************************************************/

$l['Tooltip']['batchNameTooltip'] = "提供此批创建的标识符名称";
$l['Tooltip']['batchDescriptionTooltip'] = "提供有关此批创建的一般说明";

$l['Tooltip']['hotspotTooltip'] = "选择与此批处理实例关联的热点名称";

$l['Tooltip']['startingIndexTooltip'] = "提供从中创建用户的起始索引";
$l['Tooltip']['planTooltip'] = "选择要与用户关联的计划";

$l['Tooltip']['InvoiceEdit'] = "编辑发票";
$l['Tooltip']['invoiceTypeTooltip'] = "";
$l['Tooltip']['invoiceStatusTooltip'] = "";
$l['Tooltip']['invoiceID'] = "输入发票id";
$l['Tooltip']['user_idTooltip'] = "用户id";

$l['Tooltip']['amountTooltip'] = "";
$l['Tooltip']['taxTooltip'] = "";

$l['Tooltip']['PayTypeName'] = "输入付款类型名称";
$l['Tooltip']['EditPayType'] = "编辑付款类型";
$l['Tooltip']['RemovePayType'] = "删除付款类型";
$l['Tooltip']['paymentTypeTooltip'] = "付款类型友好名称,<br/>
                                        说明付款目的";
$l['Tooltip']['paymentTypeNotesTooltip'] = "付款类型描述描,描述<br/>
                                        付款类型的操作";
$l['Tooltip']['EditPayment'] = "编辑付款";
$l['Tooltip']['PaymentId'] = "支付Id";
$l['Tooltip']['RemovePayment'] = "删除付款";
$l['Tooltip']['paymentInvoiceTooltip'] = "与此付款相关的发票";



$l['Tooltip']['Username'] = "输入用户名";
$l['Tooltip']['BatchName'] = "输入批处理名称";
$l['Tooltip']['UsernameWildcard'] = "提示:你可以使用char*或%指定通配符";
$l['Tooltip']['HotspotName'] = "输入热点名称";
$l['Tooltip']['NasName'] = "输入NAS名称";
$l['Tooltip']['GroupName'] = "输入组名称";
$l['Tooltip']['AttributeName'] = "输入属性名称";
$l['Tooltip']['VendorName'] = "输入供应商名称";
$l['Tooltip']['PoolName'] = "输入池名称";
$l['Tooltip']['IPAddress'] = "输入IP地址";
$l['Tooltip']['Filter'] = "输入一个过滤器,可以是任何字母数字字符串.留空以匹配任何内容. ";
$l['Tooltip']['Date'] = "输入日期 <br/> 例子: 1982-06-04 (Y-M-D)";
$l['Tooltip']['RateName'] = "输入费率名称";
$l['Tooltip']['OperatorName'] = "输入操作员名称";
$l['Tooltip']['BillingPlanName'] = "输入帐单计划名称";
$l['Tooltip']['PlanName'] = "输入计划名称";

$l['Tooltip']['EditRate'] = "编辑速率";
$l['Tooltip']['RemoveRate'] = "去除速率";

$l['Tooltip']['rateNameTooltip'] = "友好的费率名称,<br/>
					描述费率的用途";
$l['Tooltip']['rateTypeTooltip'] = "费率类型,描述<br/>
					利率的操作";
$l['Tooltip']['rateCostTooltip'] = "价格是多少";

$l['Tooltip']['planNameTooltip'] = "计划'名称.这是<br/>
					一个友好的名字描述
					计划的特点";
$l['Tooltip']['planIdTooltip'] = "";
$l['Tooltip']['planTimeTypeTooltip'] = "";
$l['Tooltip']['planTimeBankTooltip'] = "";
$l['Tooltip']['planTimeRefillCostTooltip'] = "";
$l['Tooltip']['planTrafficRefillCostTooltip'] = "";
$l['Tooltip']['planBandwidthUpTooltip'] = "";
$l['Tooltip']['planBandwidthDownTooltip'] = "";
$l['Tooltip']['planTrafficTotalTooltip'] = "";
$l['Tooltip']['planTrafficDownTooltip'] = "";
$l['Tooltip']['planTrafficUpTooltip'] = "";

$l['Tooltip']['planRecurringTooltip'] = "";
$l['Tooltip']['planRecurringBillingScheduleTooltip'] = "";
$l['Tooltip']['planRecurringPeriodTooltip'] = "";
$l['Tooltip']['planCostTooltip'] = "";
$l['Tooltip']['planSetupCostTooltip'] = "";
$l['Tooltip']['planTaxTooltip'] = "";
$l['Tooltip']['planCurrencyTooltip'] = "";
$l['Tooltip']['planGroupTooltip'] = "";

$l['Tooltip']['EditIPPool'] = "编辑IP池";
$l['Tooltip']['RemoveIPPool'] = "删除IP池";
$l['Tooltip']['EditIPAddress'] = "编辑IP地址";
$l['Tooltip']['RemoveIPAddress'] = "删除IP地址";

$l['Tooltip']['BusinessNameTooltip'] = "";
$l['Tooltip']['BusinessPhoneTooltip'] = "";
$l['Tooltip']['BusinessAddressTooltip'] = "";
$l['Tooltip']['BusinessWebsiteTooltip'] = "";
$l['Tooltip']['BusinessEmailTooltip'] = "";
$l['Tooltip']['BusinessContactPersonTooltip'] = "";

$l['Tooltip']['proxyNameTooltip'] = "Proxy name";
$l['Tooltip']['proxyRetryDelayTooltip'] = "时间 (以秒为单位) 等待 <br/>
					代理的回应, <br/>
					在重新发送代理请求之前.";
$l['Tooltip']['proxyRetryCountTooltip'] = "要发送的重试次数 <br/>
					在放弃之前,发送一个 <br/>
					拒绝发送给NAS.";
$l['Tooltip']['proxyDeadTimeTooltip'] = "如果家庭服务器没有响应 <br/>
					多次重试中的任何一次, <br/>
					那么FreeRADIUS将停止发送它 <br/>
					代理请求,做个记号, '死去的'.";
$l['Tooltip']['proxyDefaultFallbackTooltip'] = "如果所有完全匹配的领域 <br/>
						没有回应,我们可以试试 <br/>
						";
$l['Tooltip']['realmNameTooltip'] = "域名称";
$l['Tooltip']['realmTypeTooltip'] = "默认设置为radius";
$l['Tooltip']['realmSecretTooltip'] = "域RADIUS共享秘密";
$l['Tooltip']['realmAuthhostTooltip'] = "域身份验证主机";
$l['Tooltip']['realmAccthostTooltip'] = "域记帐主机";
$l['Tooltip']['realmLdflagTooltip'] = "允许负载平衡<br/>
					允许值为 '故障转移' <br/>
					和 '循环赛'.";
$l['Tooltip']['realmNostripTooltip'] = "是否剥离 <br/>
					域后缀";
$l['Tooltip']['realmHintsTooltip'] = "";
$l['Tooltip']['realmNotrealmTooltip'] = "";


$l['Tooltip']['vendorNameTooltip'] = "例如：思科<br/>&nbsp;&nbsp;&nbsp;
                                        供应商名称.<br/>&nbsp;&nbsp;&nbsp;";
$l['Tooltip']['typeTooltip'] = "例如：字符串<br/>&nbsp;&nbsp;&nbsp;
                                        属性变量类型<br/>&nbsp;&nbsp;&nbsp;
					(string, integer, date, ipaddr).";
$l['Tooltip']['attributeTooltip'] = "例如：带边框的IP地址<br/>&nbsp;&nbsp;&nbsp;
                                        确切的属性名称.<br/>&nbsp;&nbsp;&nbsp;";

$l['Tooltip']['RecommendedOPTooltip'] = "例如: :=<br/>&nbsp;&nbsp;&nbsp;
                                        推荐属性的运算符.<br/>&nbsp;&nbsp;&nbsp;
					(one of: := == != etc...)";
$l['Tooltip']['RecommendedTableTooltip'] = "例如：检查<br/>&nbsp;&nbsp;&nbsp;
                                        推荐的目标表.<br/>&nbsp;&nbsp;&nbsp;
					(either check or reply).";
$l['Tooltip']['RecommendedTooltipTooltip'] = "例如：用户的ip地址<br/>&nbsp;&nbsp;&nbsp;
                                        建议的工具提示.<br/>&nbsp;&nbsp;&nbsp;";
$l['Tooltip']['RecommendedHelperTooltip'] = "助手函数将<br/>&nbsp;&nbsp;&nbsp;
                                        添加此属性时可用<br/>&nbsp;&nbsp;&nbsp;";



$l['Tooltip']['AttributeEdit'] = "编辑属性";

$l['Tooltip']['BatchDetails'] = "批次详细信息";

$l['Tooltip']['UserEdit'] = "编辑用户";
$l['Tooltip']['HotspotEdit'] = "编辑热点";
$l['Tooltip']['EditNAS'] = "编辑NAS";
$l['Tooltip']['RemoveNAS'] = "删除NAS";
$l['Tooltip']['EditHG'] = "编辑狩猎组";
$l['Tooltip']['RemoveHG'] = "删除狩猎组";
$l['Tooltip']['hgNasIpAddress'] = "输入主机/Ip地址";
$l['Tooltip']['hgGroupName'] = "输入NAS的组名";
$l['Tooltip']['hgNasPortId'] = "输入NAS端口Id";
$l['Tooltip']['EditUserGroup'] = "编辑用户组";
$l['Tooltip']['ListUserGroups'] = "列出用户组";
$l['Tooltip']['DeleteUserGroup'] = "删除用户组关联";

$l['Tooltip']['EditProfile'] = "编辑配置文件";

$l['Tooltip']['EditRealm'] = "编辑领域";
$l['Tooltip']['EditProxy'] = "编辑代理";

$l['Tooltip']['EditGroup'] = "编辑组";

$l['FormField']['mngradgroupcheck.php']['ToolTip']['Value'] = "如果指定值则仅删除与组名和指定的特定值都匹配的单个记录.如果省略该值则该特定组名的所有记录都将被删除!";

$l['FormField']['mngradgroupreplydel.php']['ToolTip']['Value'] = "如果指定值则仅删除与组名和指定的特定值匹配的单个记录.如果省略该值则该特定组名的所有记录都将被删除!";

$l['FormField']['mngradnasnew.php']['ToolTip']['NasShortname'] = "(描述性名称)";

$l['FormField']['mngradusergroupdel.php']['ToolTip']['Groupname'] = "如果指定组则只有与用户名和指定的组匹配的单个记录才会被删除.如果省略组则该特定用户的所有记录都将被删除!";


$l['Tooltip']['usernameTooltip'] = "作为用户的确切用户名<br/>&nbsp;&nbsp;&nbsp;
					将用于连接到系统";
$l['Tooltip']['passwordTypeTooltip'] = "用于在Radius中验证用户的密码类型.";					
$l['Tooltip']['passwordTooltip'] = "密码是区分大小写的<br/>&nbsp;&nbsp;&nbsp;
					某些系统需要格外小心";
$l['Tooltip']['groupTooltip'] = "用户将被添加到此组.<br/>&nbsp;&nbsp;&nbsp;
					通过将用户分配到特定组<br/>&nbsp;&nbsp;&nbsp;
					用户受组属性的约束";
$l['Tooltip']['macaddressTooltip'] = "例如: 00:AA:BB:CC:DD:EE<br/>&nbsp;&nbsp;&nbsp;
					MAC地址格式应相同<br/>&nbsp;&nbsp;&nbsp;
					当NAS发送时.基本上这是没有的<br/>&nbsp;&nbsp;&nbsp;
					任何字符.";
$l['Tooltip']['pincodeTooltip'] = "例如: khrivnxufi101<br/>&nbsp;&nbsp;&nbsp;
					这是用户输入的pin码.<br/>&nbsp;&nbsp;&nbsp;
					可以使用字母数字字符,这个案子很敏感";
$l['Tooltip']['usernamePrefixTooltip'] = "例如: TMP_ POP_ WIFI1_ <br/>&nbsp;&nbsp;&nbsp;
					此用户名前缀将添加到<br/>&nbsp;&nbsp;&nbsp;
					最终生成的用户名.";
$l['Tooltip']['instancesToCreateTooltip'] = "例如: 100<br/>&nbsp;&nbsp;&nbsp;
					要创建的随机用户数<br/>&nbsp;&nbsp;&nbsp;
					使用指定的配置文件.";
$l['Tooltip']['lengthOfUsernameTooltip'] = "例如: 8<br/>&nbsp;&nbsp;&nbsp;
					用户名的字符长度<br/>&nbsp;&nbsp;&nbsp;
					待创建.推荐8-12个字符.";
$l['Tooltip']['lengthOfPasswordTooltip'] = "例如: 8<br/>&nbsp;&nbsp;&nbsp;
					密码的字符长度<br/>&nbsp;&nbsp;&nbsp;
					待创建.推荐8-12个字符.";


$l['Tooltip']['hotspotNameTooltip'] = "例如:斯特拉托卡斯特酒店<br/>&nbsp;&nbsp;&nbsp;
					一个友好的热点名称<br/>";

$l['Tooltip']['hotspotMacaddressTooltip'] = "例如: 00-aa-bb-cc-dd-ee<br/>&nbsp;&nbsp;&nbsp;
					NAS的MAC地址<br/>";

$l['Tooltip']['geocodeTooltip'] = "例如: -1.002,-2.201<br/>&nbsp;&nbsp;&nbsp;
					这是使用的GooleMaps位置代码<br/>&nbsp;&nbsp;&nbsp;
					 将热点/NAS固定在地图上(设置 GIS).";

$l['Tooltip']['reassignplanprofiles'] = "如果启用,则在应用用户信息时 <br/>
					配置文件选项卡中列出的配置文件将被忽略 <br/>
					配置文件将根据计划配置文件关联重新分配";

/* ********************************************************************************** */




/* **********************************************************************************
 * Links and Buttons
 ************************************************************************************/

$l['button']['DashboardSettings'] = "仪表板设置";


$l['button']['GenerateReport'] = "生成报告";

$l['button']['ListPayTypes'] = "列出付款类型";
$l['button']['NewPayType'] = "新付款类型";
$l['button']['EditPayType'] = "编辑付款类型";
$l['button']['RemovePayType'] = "删除付款类型";
$l['button']['ListPayments'] = "列出付款";
$l['button']['NewPayment'] = "新建付款";
$l['button']['EditPayment'] = "编辑付款";
$l['button']['RemovePayment'] = "删除付款";

$l['button']['NewUsers'] = "新建用户";

$l['button']['ClearSessions'] = "清除会话";
$l['button']['Dashboard'] = "仪表板";
$l['button']['MailSettings'] = "邮件设置";

$l['button']['Batch'] = "批量";
$l['button']['BatchHistory'] = "批量历史记录";
$l['button']['BatchDetails'] = "批量细节";

$l['button']['ListRates'] = "列出费率";
$l['button']['NewRate'] = "新建费率";
$l['button']['EditRate'] = "编辑速率";
$l['button']['RemoveRate'] = "删除速率";

$l['button']['ListPlans'] = "列出计划";
$l['button']['NewPlan'] = "新建计划";
$l['button']['EditPlan'] = "编辑计划";
$l['button']['RemovePlan'] = "删除计划";

$l['button']['ListInvoices'] = "列出发票";
$l['button']['NewInvoice'] = "新建发票";
$l['button']['EditInvoice'] = "编辑发票";
$l['button']['RemoveInvoice'] = "删除发票";

$l['button']['ListRealms'] = "列出域";
$l['button']['NewRealm'] = "新建域";
$l['button']['EditRealm'] = "编辑域";
$l['button']['RemoveRealm'] = "删除域";

$l['button']['ListProxys'] = 列表代理"";
$l['button']['NewProxy'] = "新建代理";
$l['button']['EditProxy'] = "编辑代理";
$l['button']['RemoveProxy'] = "删除代理";

$l['button']['ListAttributesforVendor'] = "列出供应商的属性:";
$l['button']['NewVendorAttribute'] = "新建供应商属性";
$l['button']['EditVendorAttribute'] = "编辑供应商属性";
$l['button']['SearchVendorAttribute'] = "搜索属性";
$l['button']['RemoveVendorAttribute'] = "删除供应商属性";
$l['button']['ImportVendorDictionary'] = "导入供应商词典";


$l['button']['BetweenDates'] = "日期之间:";
$l['button']['Where'] = "在哪里";
$l['button']['AccountingFieldsinQuery'] = "查询中的会计字段:";
$l['button']['OrderBy'] = "订货人";
$l['button']['HotspotAccounting'] = "热点会计";
$l['button']['HotspotsComparison'] = "热点比较";

$l['button']['CleanupStaleSessions'] = "清除过时会话";
$l['button']['DeleteAccountingRecords'] = "删除会计记录";

$l['button']['ListUsers'] = "列出用户";
$l['button']['ListBatches'] = "列出批次";
$l['button']['RemoveBatch'] = "删除批处理";
$l['button']['ImportUsers'] = "导入用户";
$l['button']['NewUser'] = "新建用户";
$l['button']['NewUserQuick'] = "新建用户-快速添加";
$l['button']['BatchAddUsers'] = "批量添加用户";
$l['button']['EditUser'] = "编辑用户";
$l['button']['SearchUsers'] = "搜索用户";
$l['button']['RemoveUsers'] = "删除用户";
$l['button']['ListHotspots'] = "列出热点";
$l['button']['NewHotspot'] = "新建热点";
$l['button']['EditHotspot'] = "编辑热点";
$l['button']['RemoveHotspot'] = "删除热点";

$l['button']['ListIPPools'] = "列出IP池";
$l['button']['NewIPPool'] = "新建IP池";
$l['button']['EditIPPool'] = "编辑IP池";
$l['button']['RemoveIPPool'] = "删除IP池";

$l['button']['ListNAS'] = "列出NAS";
$l['button']['NewNAS'] = "新建NAS";
$l['button']['EditNAS'] = "编辑NAS";
$l['button']['RemoveNAS'] = "删除NAS";
$l['button']['ListHG'] = "列出狩猎组";
$l['button']['NewHG'] = "新建狩猎组";
$l['button']['EditHG'] = "编辑狩猎组";
$l['button']['RemoveHG'] = "删除狩猎组";
$l['button']['ListUserGroup'] = "列出用户组映射";
$l['button']['ListUsersGroup'] = "列出用户的组映射";
$l['button']['NewUserGroup'] = "新建用户组映射";
$l['button']['EditUserGroup'] = "编辑用户组映射";
$l['button']['RemoveUserGroup'] = "删除用户组映射";

$l['button']['ListProfiles'] = "列出配置文件";
$l['button']['NewProfile'] = "新建配置文件";
$l['button']['EditProfile'] = "编辑配置文件";
$l['button']['DuplicateProfile'] = "复制配置文件";
$l['button']['RemoveProfile'] = "删除配置文件";

$l['button']['ListGroupReply'] = "显示组答复映射";
$l['button']['SearchGroupReply'] = "搜索组答复";
$l['button']['NewGroupReply'] = "新建组答复映射";
$l['button']['EditGroupReply'] = "编辑组答复映射";
$l['button']['RemoveGroupReply'] = "删除组答复映射";

$l['button']['ListGroupCheck'] = "显示组检查映射";
$l['button']['SearchGroupCheck'] = "搜索组检查";
$l['button']['NewGroupCheck'] = "新建组检查映射";
$l['button']['EditGroupCheck'] = "编辑组检查映射";
$l['button']['RemoveGroupCheck'] = "删除组检查映射";

$l['button']['UserAccounting'] = "用户记帐";
$l['button']['IPAccounting'] = "IP会计";
$l['button']['NASIPAccounting'] = "NAS IP会计";
$l['button']['NASIPAccountingOnlyActive'] = "仅显示活动";
$l['button']['DateAccounting'] = "日期会计";
$l['button']['AllRecords'] = "所有记录";
$l['button']['ActiveRecords'] = "活动记录";

$l['button']['PlanUsage'] = "计划用途";

$l['button']['OnlineUsers'] = "在线用户";
$l['button']['LastConnectionAttempts'] = "上次连接尝试";
$l['button']['TopUser'] = "顶级用户";
$l['button']['History'] = "历史";

$l['button']['ServerStatus'] = "服务状态";
$l['button']['ServicesStatus'] = "服务器状态";

$l['button']['daloRADIUSLog'] = "daloRADIUS日志";
$l['button']['RadiusLog'] = "Radius日志";
$l['button']['SystemLog'] = "系统日志";
$l['button']['BootLog'] = "启动日志";

$l['button']['UserLogins'] = "用户登录";
$l['button']['UserDownloads'] = "用户下载";
$l['button']['UserUploads'] = "用户上传";
$l['button']['TotalLogins'] = "总登录次数";
$l['button']['TotalTraffic'] = "总交通量";
$l['button']['LoggedUsers'] = "记录的用户";

$l['button']['ViewMAP'] = "查看地图";
$l['button']['EditMAP'] = "编辑地图";
$l['button']['RegisterGoogleMapsAPI'] = "注册谷歌地图API";

$l['button']['UserSettings'] = "用户设置";
$l['button']['DatabaseSettings'] = "数据库设置";
$l['button']['LanguageSettings'] = "语言设置";
$l['button']['LoggingSettings'] = "日志记录设置";
$l['button']['InterfaceSettings'] = "接口设置";

$l['button']['ReAssignPlanProfiles'] = "重新分配计划配置文件";

$l['button']['TestUserConnectivity'] = "测试用户连接";
$l['button']['DisconnectUser'] = "断开用户连接";

$l['button']['ManageBackups'] = "管理备份";
$l['button']['CreateBackups'] = "创建备份";

$l['button']['ListOperators'] = "显示操作";
$l['button']['NewOperator'] = "新建操作";
$l['button']['EditOperator'] = "编辑操作";
$l['button']['RemoveOperator'] = "删除操作";

$l['button']['ProcessQuery'] = "进程查询";

 
 
/* ********************************************************************************** */


/* **********************************************************************************
 * Titles
 * The text related to all the title headers in captions,tables and tabbed layout text
 ************************************************************************************/

$l['title']['ImportUsers'] = "导入用户";


$l['title']['Dashboard'] = "仪表板";
$l['title']['DashboardAlerts'] = "警报";

$l['title']['Invoice'] = "发票";
$l['title']['Invoices'] = "发票联";
$l['title']['InvoiceRemoval'] = "删除发票";
$l['title']['Payments'] = "付款";
$l['title']['Items'] = "项目";

$l['title']['PayTypeInfo'] = "付款类型信息";
$l['title']['PaymentInfo'] = "付款信息";

 
$l['title']['RateInfo'] = "费率信息";
$l['title']['PlanInfo'] = "计划信息";
$l['title']['TimeSettings'] = "时间设置";
$l['title']['BandwidthSettings'] = "带宽设置";
$l['title']['PlanRemoval'] = "平面图删除";

$l['title']['BatchRemoval'] = "批量删除";

$l['title']['Backups'] = "备份";
$l['title']['FreeRADIUSTables'] = "FreeRADIUS数据表";
$l['title']['daloRADIUSTables'] = "daloRADIUS数据表";

$l['title']['IPPoolInfo'] = "IP池信息";

$l['title']['BusinessInfo'] = "业务信息";

$l['title']['CleanupRecordsByUsername'] = "按用户名";
$l['title']['CleanupRecordsByDate'] = "按日期";
$l['title']['DeleteRecords'] = "删除记录";

$l['title']['RealmInfo'] = "域信息";

$l['title']['ProxyInfo'] = "代理信息";

$l['title']['VendorAttribute'] = "供应商属性";

$l['title']['AccountRemoval'] = "帐户删除";
$l['title']['AccountInfo'] = "账户信息";

$l['title']['Profiles'] = "配置文件";
$l['title']['ProfileInfo'] = "配置文件信息";

$l['title']['GroupInfo'] = "组信息";
$l['title']['GroupAttributes'] = "组属性";

$l['title']['NASInfo'] = "NAS信息";
$l['title']['NASAdvanced'] = "NAS高级";
$l['title']['HGInfo'] = "HG信息";
$l['title']['UserInfo'] = "用户信息";
$l['title']['BillingInfo'] = "帐单信息";

$l['title']['Attributes'] = "属性";
$l['title']['ProfileAttributes'] = "配置文件属性";

$l['title']['HotspotInfo'] = "热点信息";
$l['title']['HotspotRemoval'] = "热点移除";

$l['title']['ContactInfo'] = "联系方式";

$l['title']['Plan'] = "计划";

$l['title']['Profile'] = "描述";
$l['title']['Groups'] = "组";
$l['title']['RADIUSCheck'] = "检查属性";
$l['title']['RADIUSReply'] = "回复属性";

$l['title']['Settings'] = "设置";
$l['title']['DatabaseSettings'] = "数据库设置";
$l['title']['DatabaseTables'] = "数据库表";
$l['title']['AdvancedSettings'] = "高级设置";

$l['title']['Advanced'] = "高级";
$l['title']['Optional'] = "可选";

/* ********************************************************************************** */

/* **********************************************************************************
 * Graphs 
 * General graphing text
 ************************************************************************************/
$l['graphs']['Day'] = "日";
$l['graphs']['Month'] = "月";
$l['graphs']['Year'] = "年";
$l['graphs']['Jan'] = "一月";
$l['graphs']['Feb'] = "二月";
$l['graphs']['Mar'] = "三月";
$l['graphs']['Apr'] = "四月";
$l['graphs']['May'] = "五月";
$l['graphs']['Jun'] = "六月";
$l['graphs']['Jul'] = "七月";
$l['graphs']['Aug'] = "八月";
$l['graphs']['Sep'] = "九月";
$l['graphs']['Oct'] = "十月";
$l['graphs']['Nov'] = "十一月";
$l['graphs']['Dec'] = "十二月";


/* ********************************************************************************** */

/* **********************************************************************************
 * Text
 * General text information that is used through-out the pages
 ************************************************************************************/

$l['text']['LoginRequired'] = "需要登录";
$l['text']['LoginPlease'] = "请登录";

/* ********************************************************************************** */



/* **********************************************************************************
 * Contact Info 
 * Related to all contact info text, user info, hotspot owner contact information etc
 ************************************************************************************/

$l['ContactInfo']['FirstName'] = "名字";
$l['ContactInfo']['LastName'] = "姓";
$l['ContactInfo']['Email'] = "Email";
$l['ContactInfo']['Department'] = "部门";
$l['ContactInfo']['WorkPhone'] = "工作电话";
$l['ContactInfo']['HomePhone'] = "家庭电话";
$l['ContactInfo']['Phone'] = "电话";
$l['ContactInfo']['MobilePhone'] = "移动电话";
$l['ContactInfo']['Notes'] = "笔记";
$l['ContactInfo']['EnableUserUpdate'] = "启用用户更新";
$l['ContactInfo']['EnablePortalLogin'] = "启用用户门户登录";
$l['ContactInfo']['PortalLoginPassword'] = "用户门户登录密码";

$l['ContactInfo']['OwnerName'] = "所有者名称";
$l['ContactInfo']['OwnerEmail'] = "所有者Email";
$l['ContactInfo']['ManagerName'] = "经理姓名";
$l['ContactInfo']['ManagerEmail'] = "经理Email";
$l['ContactInfo']['Company'] = "公司";
$l['ContactInfo']['Address'] = "地址";
$l['ContactInfo']['City'] = "城市";
$l['ContactInfo']['State'] = "州";
$l['ContactInfo']['Country'] = "国家";
$l['ContactInfo']['Zip'] = "Zip";
$l['ContactInfo']['Phone1'] = "电话1";
$l['ContactInfo']['Phone2'] = "电话2";
$l['ContactInfo']['HotspotType'] = "热点类型";
$l['ContactInfo']['CompanyWebsite'] = "公司网站";
$l['ContactInfo']['CompanyPhone'] = "公司电话";
$l['ContactInfo']['CompanyEmail'] = "公司Email";
$l['ContactInfo']['CompanyContact'] = "公司联系人";

$l['ContactInfo']['PlanName'] = "计划名称";
$l['ContactInfo']['ContactPerson'] = "联系人";
$l['ContactInfo']['PaymentMethod'] = "付款方式";
$l['ContactInfo']['Cash'] = "Cash";
$l['ContactInfo']['CreditCardNumber'] = "Credit Card Number";
$l['ContactInfo']['CreditCardName'] = "信用卡名称";
$l['ContactInfo']['CreditCardVerificationNumber'] = "信用卡验证";
$l['ContactInfo']['CreditCardType'] = "信用卡类型";
$l['ContactInfo']['CreditCardExpiration'] = "信用卡到期";

/* ********************************************************************************** */

$l['Intro']['configdashboard.php'] = "仪表板设置";



$l['Intro']['paymenttypesmain.php'] = "付款类型页";
$l['Intro']['paymenttypesdel.php'] = "删除付款类型条目";
$l['Intro']['paymenttypesedit.php'] = "编辑付款类型详细信息";
$l['Intro']['paymenttypeslist.php'] = "付款类型表";
$l['Intro']['paymenttypesnew.php'] = "新建付款类型条目";
$l['Intro']['paymenttypeslist.php'] = "付款类型表";
$l['Intro']['paymentslist.php'] = "付款表";
$l['Intro']['paymentsmain.php'] = "付款页";
$l['Intro']['paymentsdel.php'] = "删除付款条目";
$l['Intro']['paymentsedit.php'] = "编辑付款明细";
$l['Intro']['paymentsnew.php'] = "新建付款条目";

$l['Intro']['billhistorymain.php'] = "帐单历史记录";
$l['Intro']['msgerrorpermissions.php'] = "错误";

$l['Intro']['repnewusers.php'] = "显示新用户";

$l['Intro']['mngradproxys.php'] = "管理代理";
$l['Intro']['mngradproxysnew.php'] = "新建代理";
$l['Intro']['mngradproxyslist.php'] = "显示代理";
$l['Intro']['mngradproxysedit.php'] = "编辑代理";
$l['Intro']['mngradproxysdel.php'] = "删除代理";

$l['Intro']['mngradrealms.php'] = "管理域";
$l['Intro']['mngradrealmsnew.php'] = "新建域";
$l['Intro']['mngradrealmslist.php'] = "显示域";
$l['Intro']['mngradrealmsedit.php'] = "编辑域";
$l['Intro']['mngradrealmsdel.php'] = "删除域";

$l['Intro']['mngradattributes.php'] = "供应商属性管理";
$l['Intro']['mngradattributeslist.php'] = "显示供应商属性";
$l['Intro']['mngradattributesnew.php'] = "新建供应商属性";
$l['Intro']['mngradattributesedit.php'] = "编辑供应商属性";
$l['Intro']['mngradattributessearch.php'] = "搜索属性";
$l['Intro']['mngradattributesdel.php'] = "删除供应商属性";
$l['Intro']['mngradattributesimport.php'] = "导入供应商词典";
$l['Intro']['mngimportusers.php'] = "导入用户";


$l['Intro']['acctactive.php'] = "活动记录会计";
$l['Intro']['acctall.php'] = "所有用户记帐";
$l['Intro']['acctdate.php'] = "日期排序会计";
$l['Intro']['accthotspot.php'] = "热点会计";
$l['Intro']['acctipaddress.php'] = "IP会计";
$l['Intro']['accthotspotcompare.php'] = "热点比较";
$l['Intro']['acctmain.php'] = "会计页";
$l['Intro']['acctplans.php'] = "计划会计页";
$l['Intro']['acctnasipaddress.php'] = "NAS IP会计";
$l['Intro']['acctusername.php'] = "用户记帐";
$l['Intro']['acctcustom.php'] = "自定义帐户";
$l['Intro']['acctcustomquery.php'] = "自定义查询核算";
$l['Intro']['acctmaintenance.php'] = "会计记录维护";
$l['Intro']['acctmaintenancecleanup.php'] = "清除过时的连接";
$l['Intro']['acctmaintenancedelete.php'] = "删除会计记录";

$l['Intro']['billmain.php'] = "帐单页";
$l['Intro']['ratesmain.php'] = "费率计费页";
$l['Intro']['billratesdate.php'] = "预付费会计";
$l['Intro']['billratesdel.php'] = "删除费率条目";
$l['Intro']['billratesedit.php'] = "编辑费率详细信息";
$l['Intro']['billrateslist.php'] = "费率表";
$l['Intro']['billratesnew.php'] = "新建费率条目";

$l['Intro']['paypalmain.php'] = "PayPal交易记录页";
$l['Intro']['billpaypaltransactions.php'] = "PayPal交易记录页";

$l['Intro']['billhistoryquery.php'] = "帐单历史记录";

$l['Intro']['billinvoice.php'] = "帐单发票";
$l['Intro']['billinvoicedel.php'] = "删除发票条目";
$l['Intro']['billinvoiceedit.php'] = "编辑发票";
$l['Intro']['billinvoicelist.php'] = "显示发票";
$l['Intro']['billinvoicereport.php'] = "发票报表";
$l['Intro']['billinvoicenew.php'] = "新建发票";

$l['Intro']['billplans.php'] = "帐单计划页";
$l['Intro']['billplansdel.php'] = "删除计划条目";
$l['Intro']['billplansedit.php'] = "编辑计划详细信息";
$l['Intro']['billplanslist.php'] = "计划表";
$l['Intro']['billplansnew.php'] = "新建计划条目";

$l['Intro']['billpos.php'] = "计费销售点页面";
$l['Intro']['billposdel.php'] = "删除用户";
$l['Intro']['billposedit.php'] = "编辑用户";
$l['Intro']['billposlist.php'] = "显示用户";
$l['Intro']['billposnew.php'] = "新建用户";

$l['Intro']['giseditmap.php'] = "编辑地图模式";
$l['Intro']['gismain.php'] = "GIS制图";
$l['Intro']['gisviewmap.php'] = "查看地图模式";

$l['Intro']['graphmain.php'] = "使用情况图表";
$l['Intro']['graphsalltimetrafficcompare.php'] = "总流量比较使用率";
$l['Intro']['graphsalltimelogins.php'] = "总登录次数";
$l['Intro']['graphsloggedusers.php'] = "记录的用户";
$l['Intro']['graphsoveralldownload.php'] = "用户下载";
$l['Intro']['graphsoveralllogins.php'] = "用户登录";
$l['Intro']['graphsoverallupload.php'] = "用户上传";

$l['Intro']['rephistory.php'] = "动作历史";
$l['Intro']['replastconnect.php'] = "上次连接尝试";
$l['Intro']['repstatradius.php'] = "守护程序信息";
$l['Intro']['repstatserver.php'] = "服务状态和信息";
$l['Intro']['reponline.php'] = "显示在线用户";
$l['Intro']['replogssystem.php'] = "系统日志文件";
$l['Intro']['replogsradius.php'] = "RADIUS服务日志文件";
$l['Intro']['replogsdaloradius.php'] = "daloRADIUS日志文件";
$l['Intro']['replogsboot.php'] = "启动日志文件";
$l['Intro']['replogs.php'] = "日志";
$l['Intro']['rephb.php'] = "心跳";
$l['Intro']['rephbdashboard.php'] = "daloRADIUS NAS仪表板";
$l['Intro']['repbatch.php'] = "批量";
$l['Intro']['mngbatchlist.php'] = "批量会话列表";
$l['Intro']['repbatchlist.php'] = "批量用户列表";
$l['Intro']['repbatchdetails.php'] = "批量细节";

$l['Intro']['rephsall.php'] = "热点列表";
$l['Intro']['repmain.php'] = "报告页";
$l['Intro']['repstatus.php'] = "状态页";
$l['Intro']['reptopusers.php'] = "顶级用户";
$l['Intro']['repusername.php'] = "用户列表";

$l['Intro']['mngbatch.php'] = "创建批处理用户";
$l['Intro']['mngbatchdel.php'] = "删除批处理会话";

$l['Intro']['mngdel.php'] = "删除用户";
$l['Intro']['mngedit.php'] = "编辑用户详细信息";
$l['Intro']['mnglistall.php'] = "用户列表";
$l['Intro']['mngmain.php'] = "用户和热点管理";
$l['Intro']['mngbatch.php'] = "批量用户管理";
$l['Intro']['mngnew.php'] = "新建用户";
$l['Intro']['mngnewquick.php'] = "快速用户添加";
$l['Intro']['mngsearch.php'] = "用户搜索";

$l['Intro']['mnghsdel.php'] = "删除热点";
$l['Intro']['mnghsedit.php'] = "编辑热点详细信息";
$l['Intro']['mnghslist.php'] = "显示热点";
$l['Intro']['mnghsnew.php'] = "新建热点";

$l['Intro']['mngradusergroupdel.php'] = "删除用户组映射";
$l['Intro']['mngradusergroup.php'] = "用户组配置";
$l['Intro']['mngradusergroupnew.php'] = "新建用户组映射";
$l['Intro']['mngradusergrouplist'] = "数据库中的用户组映射";
$l['Intro']['mngradusergrouplistuser'] = "数据库中的用户组映射";
$l['Intro']['mngradusergroupedit'] = "编辑用户的用户组映射:";

$l['Intro']['mngradippool.php'] = "IP池配置";
$l['Intro']['mngradippoolnew.php'] = "新建IP池";
$l['Intro']['mngradippoollist.php'] = "显示IP池";
$l['Intro']['mngradippooledit.php'] = "编辑IP池";
$l['Intro']['mngradippooldel.php'] = "删除IP池";

$l['Intro']['mngradnas.php'] = "NAS配置";
$l['Intro']['mngradnasnew.php'] = "新建NAS记录";
$l['Intro']['mngradnaslist.php'] = "数据库中的NAS列表";
$l['Intro']['mngradnasedit.php'] = "编辑NAS记录";
$l['Intro']['mngradnasdel.php'] = "删除NAS记录";

$l['Intro']['mngradhunt.php'] = "狩猎组配置";
$l['Intro']['mngradhuntnew.php'] = "新建狩猎组记录";
$l['Intro']['mngradhuntlist.php'] = "在数据库中列出狩猎组";
$l['Intro']['mngradhuntedit.php'] = "编辑狩猎组记录";
$l['Intro']['mngradhuntdel.php'] = "删除狩猎组记录";

$l['Intro']['mngradprofiles.php'] = "配置文件配置";
$l['Intro']['mngradprofilesedit.php'] = "编辑配置文件";
$l['Intro']['mngradprofilesduplicate.php'] = "复制配置文件";
$l['Intro']['mngradprofilesdel.php'] = "删除配置文件";
$l['Intro']['mngradprofileslist.php'] = "显示配置文件";
$l['Intro']['mngradprofilesnew.php'] = "新建配置文件";

$l['Intro']['mngradgroups.php'] = "组配置";

$l['Intro']['mngradgroupreplynew.php'] = "新建组答复映射";
$l['Intro']['mngradgroupreplylist.php'] = "数据库中的组回复映射";
$l['Intro']['mngradgroupreplyedit.php'] = "编辑组的组答复映射:";
$l['Intro']['mngradgroupreplydel.php'] = "删除组答复映射";
$l['Intro']['mngradgroupreplysearch.php'] = "搜索组答复映射";

$l['Intro']['mngradgroupchecknew.php'] = "新建组检查映射";
$l['Intro']['mngradgroupchecklist.php'] = "数据库中的组检查映射";
$l['Intro']['mngradgroupcheckedit.php'] = "编辑组的组检查映射:";
$l['Intro']['mngradgroupcheckdel.php'] = "删除组检查映射";
$l['Intro']['mngradgroupchecksearch.php'] = "搜索组检查映射";

$l['Intro']['configuser.php'] = "用户配置";
$l['Intro']['configmail.php'] = "邮件配置";

$l['Intro']['configdb.php'] = "数据库配置";
$l['Intro']['configlang.php'] = "语言配置";
$l['Intro']['configlogging.php'] = "日志记录配置";
$l['Intro']['configinterface.php'] = "Web界面配置";
$l['Intro']['configmainttestuser.php'] = "测试用户连接";
$l['Intro']['configmain.php'] = "数据库配置";
$l['Intro']['configmaint.php'] = "维护";
$l['Intro']['configmaintdisconnectuser.php'] = "断开用户连接";
$l['Intro']['configbusiness.php'] = "业务详细信息";
$l['Intro']['configbusinessinfo.php'] = "业务信息";
$l['Intro']['configbackup.php'] = "Backup";
$l['Intro']['configbackupcreatebackups.php'] = "创建备份";
$l['Intro']['configbackupmanagebackups.php'] = "管理备份";

$l['Intro']['configoperators.php'] = "配置操作";
$l['Intro']['configoperatorsdel.php'] = "删除操作";
$l['Intro']['configoperatorsedit.php'] = "编辑操作设置";
$l['Intro']['configoperatorsnew.php'] = "新建操作";
$l['Intro']['configoperatorslist.php'] = "显示操作";

$l['Intro']['login.php'] = "登录";

$l['captions']['providebillratetodel'] = "提供要删除的汇率条目类型";
$l['captions']['detailsofnewrate'] = "您可以填写以下新费率的详细信息";
$l['captions']['filldetailsofnewrate'] = "在下面填写新费率条目的详细信息";

/* **********************************************************************************
 * Help Pages Info 
 * Each page has a header which is the Intro class, when clicking on the header
 * it will reveal/hide a helpPage div content which is a description of a specific
 * page, basically your expanded tool-tip.
 ************************************************************************************/

$l['helpPage']['configdashboard'] = "仪表板设置";


$l['helpPage']['repnewusers'] = "下表列出了每月创建的新用户.";

$l['helpPage']['login'] = "";

$l['helpPage']['billpaypaltransactions'] = "显示所有PayPal交易";
$l['helpPage']['billhistoryquery'] = "显示用户的所有帐单历史记录(s)";

$l['helpPage']['billinvoicereport'] = "";

$l['helpPage']['billinvoicelist'] = "";
$l['helpPage']['billinvoicenew'] = "";
$l['helpPage']['billinvoiceedit'] = "";
$l['helpPage']['billinvoicedel'] = "";

$l['helpPage']['paymenttypeslist'] = "";
$l['helpPage']['paymenttypesnew'] = "";
$l['helpPage']['paymenttypesedit'] = "";
$l['helpPage']['paymenttypesdel'] = "";
$l['helpPage']['paymenttypesdate'] = "";

$l['helpPage']['paymentslist'] = "";
$l['helpPage']['paymentsnew'] = "";
$l['helpPage']['paymentsedit'] = "";
$l['helpPage']['paymentsdel'] = "";
$l['helpPage']['paymentsdate'] = "";

$l['helpPage']['billplanslist'] = "";
$l['helpPage']['billplansnew'] = "";
$l['helpPage']['billplansedit'] = "";
$l['helpPage']['billplansdel'] = "";

$l['helpPage']['billposlist'] = "";
$l['helpPage']['billposnew'] = "";
$l['helpPage']['billposedit'] = "";
$l['helpPage']['billposdel'] = "";

$l['helpPage']['billrateslist'] = "";
$l['helpPage']['billratesnew'] = "";
$l['helpPage']['billratesedit'] = "";
$l['helpPage']['billratesdel'] = "";
$l['helpPage']['billratesdate'] = "";

$l['helpPage']['mngradproxys'] = "";
$l['helpPage']['mngradproxyslist'] = "";
$l['helpPage']['mngradproxysnew'] = "";
$l['helpPage']['mngradproxysedit'] = "";
$l['helpPage']['mngradproxysdel'] = "";

$l['helpPage']['mngradrealms'] = "";
$l['helpPage']['mngradrealmslist'] = "";
$l['helpPage']['mngradrealmsnew'] = "";
$l['helpPage']['mngradrealmsedit'] = "";
$l['helpPage']['mngradrealmsdel'] = "";

$l['helpPage']['mngradattributes'] = "";
$l['helpPage']['mngradattributeslist'] = "";
$l['helpPage']['mngradattributesnew'] = "";
$l['helpPage']['mngradattributesedit'] = "";
$l['helpPage']['mngradattributessearch'] = "";
$l['helpPage']['mngradattributesdel'] = "";
$l['helpPage']['mngradattributesimport'] = "";
$l['helpPage']['mngimportusers'] = "";

$l['helpPage']['msgerrorpermissions'] = "您没有访问该页的权限. <br/>
请咨询您的系统管理员. <br/>";

$l['helpPage']['mngradusergroup'] = "";
$l['helpPage']['mngradusergroupdel'] = "要从数据库中删除用户目录必须提供帐户的用户名";
$l['helpPage']['mngradusergroupnew'] = "";
$l['helpPage']['mngradusergrouplist'] = "";
$l['helpPage']['mngradusergrouplistuser'] = "";
$l['helpPage']['mngradusergroupedit'] = "";


$l['helpPage']['mngradprofiles'] = "
<b>配置文件管理</b> - 通过组合一组回复属性和检查属性来管理用户的配置文件 <br/>
概要文件可以看作是组回复和组检查的组合. <br/>
<h200><b>List Profiles </b></h200> - 显示配置文件 <br/>
<h200><b>New Profile </b></h200> - 添加配置文件 <br/>
<h200><b>Edit Profile </b></h200> - 编辑配置文件 <br/>
<h200><b>Delete Profile </b></h200> - 删除配置文件 <br/>
";
$l['helpPage']['mngradprofilesedit'] = "
<h200><b>Edit Profile </b></h200> - 编辑配置文件 <br/>
";
$l['helpPage']['mngradprofilesdel'] = "
<h200><b>Delete Profile </b></h200> - 删除配置文件 <br/>
";
$l['helpPage']['mngradprofilesduplicate'] = "
<h200><b>Duplicate Profile </b></h200> - 将配置文件的属性集复制到具有不同配置文件名称的新属性集 <br/>
";
$l['helpPage']['mngradprofileslist'] = "
<h200><b>List Profiles </b></h200> - 显示配置文件 <br/>
";
$l['helpPage']['mngradprofilesnew'] = "
<h200><b>New Profile </b></h200> -添加配置文件  <br/>
";

$l['helpPage']['mngradgroups'] = "
<b>Groups Management</b> - 管理组回复和组检查映射 (radgroupreply/radgroupcheck tables).<br/>
<h200><b>List Group Reply/Check </b></h200> - 显示组答复/检查映射<br/>
<h200><b>Search Group Reply/Check </b></h200> - 搜索群答复/检查映射 (您可以使用通配符) <br/>
<h200><b>New Group Reply/Check </b></h200> - 添加组答复/检查映射 <br/>
<h200><b>Edit Group Reply/Check </b></h200> - 编辑群回复/检查映射 <br/>
<h200><b>Delete Group Reply/Check </b></h200> - 删除群回复/检查映射 <br/>
";


$l['helpPage']['mngradgroupchecknew'] = "
<h200><b>New Group Check </b></h200> - 添加组检查映射 <br/>
";
$l['helpPage']['mngradgroupcheckdel'] = "
<h200><b>Delete Group Check </b></h200> - 删除组检查映射 <br/>
";

$l['helpPage']['mngradgroupchecklist'] = "
<h200><b>List Group Check </b></h200> - 显示组检查映射 <br/>
";
$l['helpPage']['mngradgroupcheckedit'] = "
<h200><b>Edit Group Check </b></h200> - 编辑组检查映射 <br/>
";
$l['helpPage']['mngradgroupchecksearch'] = "
<h200><b>Search Group Check </b></h200> - 搜索组检查映射 <br/>
要使用通配符可以输入 % 在SQL中常见的字符或者您可以使用更常见的 *
为了方便起见daloRADIUS会把它翻译成 %
";

$l['helpPage']['mngradgroupreplynew'] = "
<h200><b>New Group Reply </b></h200> - 添加组答复映射 <br/>
";
$l['helpPage']['mngradgroupreplydel'] = "
<h200><b>Delete Group Reply </b></h200> - 删除组答复映射 <br/>
";
$l['helpPage']['mngradgroupreplylist'] = "
<h200><b>List Group Reply </b></h200> - 显示组答复映射<br/>
";
$l['helpPage']['mngradgroupreplyedit'] = "
<h200><b>Edit Group Reply </b></h200> - 编辑组答复映射 <br/>
";
$l['helpPage']['mngradgroupreplysearch'] = "
<h200><b>Search Group Reply </b></h200> - 搜索群答复 </ Mapping <br/>
要使用通配符可以输入 % 在SQL中常见的字符或者您可以使用更常见的 *
为了方便起见daloRADIUS会把它翻译成 %
";


$l['helpPage']['mngradippool'] = "
<h200><b>List IP Pools</b></h200> - 显示已配置的IP池及其分配的IP地址 <br/>
<h200><b>New IP Pool</b></h200> - 向配置的IP池添加新IP地址 <br/>
<h200><b>Edit IP Pool</b></h200> - 编辑已配置IP池的IP地址 <br/>
<h200><b>Remove IP Pool</b></h200> - 从配置的IP池中删除IP地址 <br/>
";
$l['helpPage']['mngradippoollist'] = "<h200><b>List IP Pools</b></h200> - 显示已配置的IP池及其分配的IP地址 <br/>";
$l['helpPage']['mngradippoolnew'] = "<h200><b>New IP Pool</b></h200> - 向配置的IP池添加新IP地址 <br/>";
$l['helpPage']['mngradippooledit'] = "<h200><b>Edit IP Pool</b></h200> -编辑已配置IP池的IP地址  <br/>";
$l['helpPage']['mngradippooldel'] = "<h200><b>Remove IP Pool</b></h200> - 从配置的IP池中删除IP地址 <br/>";


$l['helpPage']['mngradnas'] = "";
$l['helpPage']['mngradnasdel'] = "删除NSA IP/数据库中的主机条目必须提供 IP/帐户的主机;
$l['helpPage']['mngradnasnew'] = "";
$l['helpPage']['mngradnaslist'] = "";
$l['helpPage']['mngradnasedit'] = "";

$l['helpPage']['mngradhunt'] = "在开始亨特集团的工作之前,请阅读 <a href='http://wiki.freeradius.org/SQL_Huntgroup_HOWTO' target='_blank'>http://wiki.freeradius.org/SQL_Huntgroup_HOWTO</a>.
<br/>
特别地:
...
<i>在您的radiusd.conf或启用站点的中找到授权部分/默认配置文件并对其进行编辑.在预处理模块之后的授权部分的顶部插入这些行:</i>
<br/>
<pre>
update request {
    Huntgroup-Name := \"%{sql:select groupname from radhuntgroup where nasipaddress=\\\"%{NAS-IP-Address}\\\"}\"
}
</pre>
<i> What this does is perform a lookup in the radhuntgroup table using the ip-address as a key to return the huntgroup name. It then adds an attribute/value pair to the request where the name of the attribute is Huntgroup-Name and it's value is whatever was returned from the SQL query. If the query did not find anything then the value is the empty string. </i>";


$l['helpPage']['mngradhuntdel'] = "要从数据库中删除寻线组条目您必须提供ip/寻线组的主机和端口号";
$l['helpPage']['mngradhuntnew'] = "";
$l['helpPage']['mngradhuntlist'] = "";
$l['helpPage']['mngradhuntedit'] = "";

$l['helpPage']['mnghsdel'] = "要从数据库中删除热点您必须提供热点的名称<br/>";
$l['helpPage']['mnghsedit'] = "您可以编辑以下热点详细信息<br/>";
$l['helpPage']['mnghsnew'] = "您可以在以下详细信息中添加新热点添加到数据库中";
$l['helpPage']['mnghslist'] = "数据库中所有热点的列表.您可以使用快速链接来从数据库中编辑或删除热点.";

$l['helpPage']['configdb'] = "
<b>Database Settings</b> - 配置数据库引擎,连接设置,表名称如果
默认不使用,和数据库中的密码加密类型.<br/>
<h200><b>Global Settings</b></h200> - 数据库存储引擎<br/>
<h200><b>Tables Settings</b></h200> - 如果不使用默认的FreeRADIUS模式则可以更改名称
表名的<br/>
<h200><b>Advanced Settings</b></h200> - 如果希望将用户密码存储在数据库中而不是
纯文本而是以某种方式进行加密您可以选择MD5或Crypt中的一种<br/>
";
$l['helpPage']['configlang'] = "
<h200><b>Language Settings</b></h200> - 配置界面语言.<br/>
";
$l['helpPage']['configuser'] = "
<h200><b>User Settings</b></h200> - 配置用户管理行为.<br/>
";
$l['helpPage']['configmail'] = "
<h200><b>User Settings</b></h200> - 配置邮件设置.<br/>
";
$l['helpPage']['configlogging'] = "
<h200><b>Logging Settings</b></h200> - 配置日志记录规则和功能 <br/>
请确保您指定的文件名具有网络服务器的写入权限<br/>";
$l['helpPage']['configinterface'] = "
<h200><b>Interface Settings</b></h200> - 配置界面布局设置和行为 <br/>
";
$l['helpPage']['configmain'] = "
<b>Global Settings</b><br/>
<h200><b>Database Settings</b></h200> - 配置数据库引擎,连接设置,表名称如果
默认不使用,和数据库中的密码加密类型.<br/>
<h200><b>Language Settings</b></h200> - 配置界面语言.<br/>
<h200><b>Logging Settings</b></h200> - 配置日志记录规则和功能 <br/>
<h200><b>Interface Settings</b></h200> - 配置界面布局设置和行为 <br/>

<b>Sub-Category Configuration</b>
<h200><b>Maintenance </b></h200> - 用于测试用户连接或终止其会话的维护选项 <br/>
<h200><b>Operators</b></h200> - 配置操作员访问控制列表 (ACL) <br/>
";
$l['helpPage']['configbusiness'] = "
<b>Business Information</b><br/>
<h200><b>Business Contact</b></h200> -设置业务联系信息  (拥有者,标题,地址,电话,等等)<br/>
";
$l['helpPage']['configbusinessinfo'] = "";
$l['helpPage']['configmaint'] = "
<b>Maintenance</b><br/>
<h200><b>Test User Connectivity</b></h200> - 向RADIUS服务器发送访问请求以检查用户凭据是否有效<br/>
<h200><b>Disconnect User</b></h200> -  发送PoD(断开包)或CoA(权限变更)数据包到NAS服务器
断开用户并终止其用户/她在给定NAS中的会话.<br/>
";
$l['helpPage']['configmainttestuser'] = "
<h200><b>Test User Connectivity</b></h200> - 向RADIUS服务器发送访问请求以检查用户凭据是否有效<br/>
daloRADIUS使用radius客户端二进制实用程序执行测试并在完成后返回命令的结果. <br/>
daloRADIUS依靠您可以使用的radius客户端二进制文件\$PATH环境变量,如果不是,请做出来
对图书馆的更正/exten-maint-radclient.php文件.<br/><br/>

请注意测试可能需要一段时间才能完成(最多几秒钟[10-20秒左右])因为失败而
radius客户端将重新传输数据包.

在高级选项卡中可以微调测试选项:<br/>
超时-等待'超时'重试前几秒钟(可能是浮点数) <br/>
重试-如果超时,重试发送数据包'重试'次. <br/>
计数-发送每个数据包'计数'次 <br/>
请求-发送'数'来自文件的并行数据包 <br/>
";
$l['helpPage']['configmaintdisconnectuser'] = "
<h200><b>Disconnect User</b></h200> - 发送PoD(断开包)或CoA(权限变更)数据包发送到NAS服务器以断开用户并终止其用户/她在给定NAS中的会话.<br/>
为了终止用户的会话，要求NAS支持PoD或CoA数据包类型,请咨询您的NAS供应商或
有关此文档.此外,需要知道用于PoD或CoA数据包的NAS端口,而较新的NAS使用端口3799
而其他配置为在端口1700上接收数据包.

daloRADIUS使用radius客户端二进制实用程序执行测试并在完成后返回命令的结果. <br/>
daloRADIUS依靠您可以使用的radius客户端二进制文件\$PATH环境变量,如果不是
请对图书馆的更正/exten-maint-radclient.php文件.<br/><br/>

请注意测试可能需要一段时间才能完成(最多几秒钟[10-20秒左右])因为失败而
radius客户端将重新传输数据包.

在高级选项卡中可以微调测试选项:<br/>
超时-等待'超时'重试前几秒钟(可能是浮点数) <br/>
重试-如果超时,重试发送数据包'重试'次. <br/>
计数-发送每个数据包'计数'次 <br/>
请求-发送'数'来自文件的并行数据包 <br/>


";
$l['helpPage']['configoperatorsdel'] = "要从数据库中删除运算符必须提供用户名.";
$l['helpPage']['configoperatorsedit'] = "在下面编辑操作员用户详细信息";
$l['helpPage']['configoperatorsnew'] = "您可以在下面的详细信息中为数据库添加新的操作员用户";
$l['helpPage']['configoperatorslist'] = "列出数据库中的所有运算符";
$l['helpPage']['configoperators'] = "运营商配置";
$l['helpPage']['configbackup'] = "执行备份";
$l['helpPage']['configbackupcreatebackups'] = "创建备份";
$l['helpPage']['configbackupmanagebackups'] = "管理备份";


$l['helpPage']['graphmain'] = "
<b>Graphs</b><br/>
<h200><b>Overall Logins/Hits</b></h200> - 绘制给定时间段内特定用户使用情况的图形图表.
登录量(或'命中'NAS)以图形显示并附有表格清单.<br/>
<h200><b>Overall Download Statistics</b></h200> - 绘制给定时间段内特定用户使用情况的图形图表.
客户端下载的数据量就是正在计算的值.该图附有表格清单<br/>
<h200><b>Overall Upload Statistics</b></h200> - 绘制给定时间段内特定用户使用情况的图形图表.
客户端上传的数据量就是正在计算的值.该图附有表格清单<br/>
<br/>
<h200><b>Alltime Logins/Hits</b></h200> - 在给定的时间段内绘制登录到服务器的图形图表.<br/>
<h200><b>Alltime Traffic Comparison</b></h200> - 绘制下载和上传统计信息的图形图表.</br>
<h200><b>Logged Users</b></h200> - 绘制指定时间段内已登录用户的图形图表.
按天筛选,月和年以小时图或仅按月和年过滤(选择\"---\"在日间场)绘制所选月份的最小和最大登录用户数.
";
$l['helpPage']['graphsalltimelogins'] = "根据一段时间内的分布情况登录到服务器的全时统计信息";
$l['helpPage']['graphsalltimetrafficcompare'] = "基于一段时间内分布的通过服务器的流量的全时统计.";
$l['helpPage']['graphsloggedusers'] = "绘制登录用户总数的图形图表";
$l['helpPage']['graphsoveralldownload'] = "绘制已下载字节到服务器的图形图表";
$l['helpPage']['graphsoverallupload'] = "绘制上载字节到服务器的图形图表";
$l['helpPage']['graphsoveralllogins'] = "绘制登录尝试到服务器的图形图表";



$l['helpPage']['rephistory'] = "列出对管理项目执行的所有活动并提供有关 <br/>
创建日期,创建依据以及更新日期和更新依据历史记录字段";
$l['helpPage']['replastconnect'] = "列出所有到RADIUS服务器的登录尝试,成功登录和失败登录";
$l['helpPage']['replogsboot'] = "监视操作系统启动日志-等同于运行dmesg命令.";
$l['helpPage']['replogsdaloradius'] = "监控daloRADIUS的日志文件.";
$l['helpPage']['replogsradius'] = "监视FreeRADIUS的日志文件.";
$l['helpPage']['replogssystem'] = "监视操作系统日志文件.";
$l['helpPage']['rephb'] = "";
$l['helpPage']['rephbdashboard'] = "";
$l['helpPage']['repbatch'] = "";
$l['helpPage']['repbatchlist'] = "";
$l['helpPage']['mngbatchlist'] = "";
$l['helpPage']['mngbatchdel'] = "";
$l['helpPage']['repbatchdetails'] = "提供此批处理实例的活动用户列表";
$l['helpPage']['replogs'] = "
<b>Logs</b><br/>
<h200><b>daloRADIUS Log</b></h200> - 监控daloRADIUS日志文件.<br/>
<h200><b>RADIUS Log</b></h200> - 监视FreeRADIUS的日志文件 - 等同于 /var/log/freeradius/radius.log or /usr/local/var/log/radius/radius.log.
日志文件的其他可能位置,如果是这种情况请相应地调整配置.<br/>
<h200><b>System Log</b></h200> - 监视操作系统日志文件 - 等同于 /var/log/syslog or /var/log/message 在大多数平台上.
日志文件的其他可能位置,如果是这种情况请相应地调整配置.<br/>
<h200><b>Boot Log</b></h200> - 监视操作系统启动日志 - 等同于运行dmesg命令.
";
$l['helpPage']['repmain'] = "
<b>General Reports</b><br/>
<h200><b>Online Users</b></h200> - 提供所有以下用户的列表
通过数据库中的计费表发现在线.正在执行的检查是针对用户的
没有结束时间(停止时间)组.重要的是要注意，这些用户也可能是过时的会话
当NAS由于某种原因无法发送记帐停止数据包时发生.<br/>
<h200><b>Last Connection Attempts</b></h200> - 提供所有访问接受和访问拒绝的列表(接受并失败)登入
给用户. <br/> 这些是从需要定义的数据库的postauth表中提取的
在FreeRADIUS的配置文件中以实际记录这些 .<br/>
<h200><b>Top User</b></h200> - 提供前N个用户的列表列出其带宽消耗和会话时间<br/><br/>
<b>Sub-Category Reports</b><br/>
<h200><b>Logs</b></h200> - 提供对daloRADIUS日志文件的访问,FreeRADIUS日志文件,系统日志文件和启动日志文件<br/>
<h200><b>Status</b></h200> - 提供有关服务器状态和RADIUS组件状态的信息";
$l['helpPage']['repstatradius'] = "提供有关服务器本身的常规信息: CPU用法,工艺流程,正常运行时间,内存使用情况,等等.
";
$l['helpPage']['repstatserver'] = "提供有关FreeRADIUS守护程序和MySQL数据库服务的常规信息";
$l['helpPage']['repstatus'] = "<b>Status</b><br/>
<h200><b>Server Status</b></h200> - 提供有关服务器本身的常规信息: CPU用法,工艺流程,正常运行时间,内存使用情况,等等.<br/>
<h200><b>RADIUS Status</b></h200> - 提供有关FreeRADIUS守护程序和MySQL数据库服务的常规信息";
$l['helpPage']['reptopusers'] = "最高用户记录,那些下面列出的那些获得了会话的最高消耗
时间或带宽使用.列出类别的用户: ";
$l['helpPage']['repusername'] = "找到用户的记录:";
$l['helpPage']['reponline'] = "
下表列出了当前连接到的用户
系统.存在过时的连接的可能性很大,
表示用户已断开连接但NAS未发送或未发送
能够将STOP计费数据包发送到RADIUS服务器.
";


$l['helpPage']['mnglistall'] = "列出数据库中的用户";
$l['helpPage']['mngsearch'] = "搜索用户: ";
$l['helpPage']['mngnew'] = "您可以在下面填写新用户添加到数据库的详细信息<br/>";
$l['helpPage']['mngedit'] = "在下面编辑用户详细信息.<br/>";
$l['helpPage']['mngdel'] = "要从数据库中删除用户条目您必须提供帐户的用户名<br/>";
$l['helpPage']['mngbatch'] = "您可以在下面填写新用户添加到数据库的详细信息.<br/>
请注意这些设置将适用于您创建的所有用户.<br/>";
$l['helpPage']['mngnewquick'] = "以下用户/卡类型为预付费.<br/>
在时间积分中指定的时间量将用作会话超时和最大所有会话
redius属性";

// accounting section
$l['helpPage']['acctactive'] = "
	提供对跟踪数据库中的活动或过期用户有用的信息
    具有期满属性或最多所有会话属性的用户.
<br/>
";
$l['helpPage']['acctall'] = "
	提供数据库中所有会话的完整记帐信息.
<br/>
";
$l['helpPage']['acctdate'] = "
	提供特定用户在给定2个日期之间所有会话的完整记帐信息.
<br/>
";
$l['helpPage']['acctipaddress'] = "
	为源自特定IP地址的所有会话提供完整的记帐信息.
<br/>
";

$l['helpPage']['acctplans'] = "";
$l['helpPage']['acctmain'] = "
<b>General Accounting</b><br/>
<h200><b>User Accounting</b></h200> - 
	为特定用户提供数据库中所有会话的完整记帐信息.
<br/>
<h200><b>IP Accounting</b></h200> - 
	为源自特定IP地址的所有会话提供完整的记帐信息.
<br/>
<h200><b>NAS Accounting</b></h200> - 
	提供特定NAS IP地址已处理的所有会话的完整记帐信息.
<br/>
<h200><b>Date Accounting</b></h200> - 
	提供特定用户在给定2个日期之间所有会话的完整记帐信息.
<br/>
<h200><b>All Accounting Records</b></h200> - 
	提供数据库中所有会话的完整记帐信息.
<br/>
<h200><b>Active Records Accounting</b></h200> - 
	提供对跟踪数据库中的活动或过期用户有用的信息
    具有期满属性或最多所有会话属性的用户.
<br/>

<br/>
<b>Sub-Category Accounting</b><br/>
<h200><b>Custom</b></h200> - 
	提供最灵活的自定义查询以在数据库上运行.
<br/>
<h200><b>Hotspots</b></h200> - 
	提供有关不同托管热点的信息,比较,和其他有用的信息.
<br/>
";
$l['helpPage']['acctnasipaddress'] = "
	提供特定NAS IP地址已处理的所有会话的完整记帐信息.
<br/>
";
$l['helpPage']['acctusername'] = "
	为特定用户提供数据库中所有会话的完整记帐信息.
<br/>
";
// accounting hotspot section
$l['helpPage']['accthotspotaccounting'] = "
	为源自此特定热点的所有会话提供完整的会计信息.
	通过仅列出radius账户表中带有被叫站ID的那些记录来计算此列表
    与热点管理数据库中的热点MAC地址条目匹配的字段.
<br/>
";
$l['helpPage']['accthotspotcompare'] = "
	提供基本记帐信息以便在数据库中找到的所有活动热点之间进行比较.
	提供的会计信息: <br/><br/>
	热点名称-热点名称 <br/>
	唯一身份用户-仅通过此热点登录的用户 <br/>
	总点击数-从此热点执行的总登录数 (独特与非独特) <br/>
	平均时间-用户在此热点上花费的平均时间 <br/>
	总时间-此热点中所有用户的累计花费时间 <br/>

<br/>
	提供不同比较结果的图表 <br/>
	图表: <br/><br/>
	每个热点的唯一身份用户分布 <br/>
	每个热点的命中分布 <br/>
	每个热点的时间使用分布 <br/>
<br/>
";
$l['helpPage']['accthotspot'] = "
<h200><b>Hotspot Accounting</b></h200> - 
	为源自此特定热点的所有会话提供完整的会计信息.
<br/>
<h200><b>Hotspot Comparison</b></h200> - 
	提供基本记帐信息以便在数据库中找到的所有活动热点之间进行比较.
	Provides a graph plot of different comparisons made.
<br/>
";
// 会计定制查询部分
$l['helpPage']['acctcustom'] = "
<h200><b>Custom</b></h200> - 
	提供最灵活的自定义查询以在数据库上运行.<br/>
	您可以通过修改左侧边栏中的设置将查询调整为最大值.<br/>
<br/>
	<b> Between Dates </b> - 设定开始和结束日期.
<br/>
	<b> Where </b> - 在您要匹配的数据库中设置字段(像一把钥匙),选择是否值
    匹配应等于 (=)或包含您要搜索的部分值(像正则表达式).如果你
    选择使用Contains运算符，不应添加任何通用形式的通配符'*'反而
    您输入的值将以这种形式自动搜索: *值* (或以mysql类型: %值%).
<br/>
	<b> Query Accounting Fields </b> - 您可以选择要在结果中显示的字段
清单.
<br/>
	<b> Order By </b> - 选择您要订购结果的字段及其类型(上升
    或下降)
<br/>
";
$l['helpPage']['acctcustomquery'] = "";
$l['helpPage']['acctmaintenance'] = "
<h200><b>Cleanup stale-sessions</b></h200> - 
	由于NAS无法为服务器提供记帐STOP记录因此通常会存在过期会话 <br/>
	用户会话,导致会计记录中出现一个过时的打开会话，从而模拟了一个伪造的登录用户
    记录 (假阳性).
<br/>
<h200><b>Delete accounting records</b></h200> - 
	删除数据库中的会计记录.执行此操作或允许其他用户使用可能不明智
    受监督的管理员对此页面的访问除外.
<br/>
";
$l['helpPage']['acctmaintenancecleanup'] = "
<h200><b>Cleanup Stale Sessions</b></h200> - 按用户名或日期清除陈旧会话.<br/><br/>
	当用户连接在FreeRADIUS中保持活动状态时将发生旧会话 (所以,在daloRADIUS中),但它在NAS中不存在.
	这通常是由于从NAS到FreeRADIUS的断开连接消息丢失而引起的.</br></br>
	您有两种选择来清除过时的会话,谨慎使用它们:<br/>
	&nbsp;&bullet; By Username: This option will <b>CLOSE</b> FreeRADIUS数据库中用户名的所有打开的会话.<br/>
	&nbsp;&bullet; By Date: This option will <b>DELETE</b> 所有打开的会话早于FreeRADIUS数据库中的日期.<br/>	
";
$l['helpPage']['acctmaintenancedelete'] = "";



$l['helpPage']['giseditmap'] = "
	编辑地图模式 - 在这种模式下您只需单击即可添加或删除热点
    在地图上的位置或通过单击热点(分别).<br/><br/>
	<b> Adding Hotspot </b> - 只需单击地图的明确位置,您将被要求提供
    热点的名称和MAC地址.这些是稍后用于识别此热点的2个关键细节
    在会计表中.始终提供正确的MAC地址!
<br/><br/>
	<b> Deleting Hotspot </b> - 只需单击一个热点的图标，然后确认从热点中将其删除
    数据库.
<br/>
";
$l['helpPage']['gisviewmap'] = "
	查看地图模式-在此模式下，您可以浏览热点的布局
    在GoogleMaps服务提供的地图上的图标中.<br/><br/>

	<b> Clicking a Hotspot </b> -Will provide you with more in-depth detail on the hotspot.
	例如热点的联系信息,和统计信息.
<br/>
";
$l['helpPage']['gismain'] = "
<b> General Information </b>
GIS Mapping使用Google Maps API提供了热点地图在全球地图上的可视化映射. <br/>
在管理页面中您可以将新的热点条目添加到数据库中其中也有一个字段
称为地理位置,这是Google Maps API用来精确定位的数字值
该热点在地图上的位置.<br/><br/>

<h200><b>2 Modes of Operation are provided:</b></h200>
One is the <b>View MAP</b> 模式启用 '冲浪'通过世界地图
并查看数据库中热点的当前位置以及另一个  - <b>Edit MAP</b> - 这是模式
只需在地图上单击鼠标左键或将其删除即可直观地创建热点
左键单击现有热点标志以获取现有热点条目.<br/><br/>

另一个重要的问题是网络上的每台计算机都需要唯一的注册码，
可以通过向以下地址的托管目录提供完整的网址来从Google Maps API页面获取
服务器上的daloRADIUS应用程序.从Google获得该代码后,只需将其粘贴到
注册框，然后单击'注册码'按钮来写.
这样您便可以使用Google Maps服务. <br/><br/>";

/* ********************************************************************************** */



$l['messages']['noCheckAttributesForUser'] = "该用户没有与其关联的检查属性";
$l['messages']['noReplyAttributesForUser'] = "该用户没有与之关联的回复属性";

$l['messages']['noCheckAttributesForGroup'] = "该组没有与其关联的检查属性";
$l['messages']['noReplyAttributesForGroup'] = "该组没有与之关联的回复属性";

$l['messages']['nogroupdefinedforuser'] = "该用户没有与之关联的组";
$l['messages']['wouldyouliketocreategroup'] = "您想创建一个?";


$l['messages']['missingratetype'] = "错误:要删除的缺失率类型 ";
$l['messages']['missingtype'] = "错误: 遗失类型";
$l['messages']['missingcardbank'] = "错误: 银行卡丢失";
$l['messages']['missingrate'] = "错误: 遗漏率";
$l['messages']['success'] = "成功";
$l['messages']['gisedit1'] = "欢迎,您当前处于编辑模式 ";
$l['messages']['gisedit2'] = "从地图和数据库中删除当前标记?";
$l['messages']['gisedit3'] = "请输入热点名称";
$l['messages']['gisedit4'] = "将当前标记添加到数据库?";
$l['messages']['gisedit5'] = "请输入热点名称";
$l['messages']['gisedit6'] = "请输入热点的MAC地址";

$l['messages']['gismain1'] = "成功更新了GoogleMaps API注册代码";
$l['messages']['gismain2'] = "错误: 无法打开文件进行写入:";
$l['messages']['gismain3'] = "检查文件权限. 该文件应由Web服务器写入用户/组";
$l['messages']['gisviewwelcome'] = "欢迎使用Enginx视觉地图";

$l['messages']['loginerror'] = "<br/><br/>以下任一:<br/>
1. 用户名/密码错误<br/>
2. 管理员已经登录(仅允许一个实例) <br/>
3. 似乎不止一个 'administrator' 数据库中的用户 <br/>
";

$l['buttons']['savesettings'] = "保存设置";
$l['buttons']['apply'] = 应用"";

$l['menu']['Home'] = "<em>主</em>页</a>";
$l['menu']['Managment'] = "<em>管</em>理</a>";
$l['menu']['Reports'] = "<em>报</em>告</a>";
$l['menu']['Accounting'] = "<em>账</em>单</a>";
$l['menu']['Billing'] = "<em>记</em>账</a>";
$l['menu']['Gis'] = "<em>G</em>IS</a>";
$l['menu']['Graphs'] = "<em>图</em>表</a>";
$l['menu']['Config'] = "<em>配</em>置</a>";
$l['menu']['Help'] = "<em>帮</em>助</a>";
?>
