<?php
/* $Id$ */

/**
 * Last translation by: Funda Wang <fundawang@en2china.com>
 * update by Simon <simon@venustech.com.cn>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'simsun, 宋体';
$right_font_family = 'simsun';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('字节', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('周日', '周一', '周二', '周三', '周四', '周五', '周六');
$month = array('一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%Y 年 %m 月 %d 日 %H:%M';

$timespanfmt = '%s 天 %s 小时，%s 分 %s 秒';

$strAbortedClients = '中止';
$strAbsolutePathToDocSqlDir = '请输入 docSQL 目录在网站服务器的绝对路径';
$strAccessDenied = '访问被拒绝';
$strAccessDeniedExplanation = 'phpMyAdmin 试图连接到 MySQL 服务器，但服务器拒绝连接。您应该检查 config.inc.php 中的主机、用户名和密码，并且确定这些信息与 MySQL 服务器的管理员所给出的信息一致。';
$strAction = '操作';
$strAddAutoIncrement = '添加 AUTO_INCREMENT 值';
$strAddConstraints = '强制添加';
$strAddDeleteColumn = '添加/删除字段列';
$strAddDeleteRow = '添加/删除条件行';
$strAddDropDatabase = '添加 DROP DATABASE';
$strAddedColumnComment = '已添加列注释';
$strAddedColumnRelation = '已添加列关系';
$strAddHeaderComment = '在标题中增加一个定制的注释 (\\n 行隔离符)';
$strAddIfNotExists = '如果不存在就增加';
$strAddIntoComments = '添加进注释';
$strAddNewField = '添加新字段';
$strAddPrivilegesOnDb = '在下列数据库添加权限';
$strAddPrivilegesOnTbl = '在下列表添加权限';
$strAddSearchConditions = '添加搜索条件(“where”语句的主体)：';
$strAddToIndex = '添加到 %s 列';
$strAddUserMessage = '您已添加了一个新用户。';
$strAddUser = '添加新用户';
$strAdministration = '管理';
$strAffectedRows = '影响列数：';
$strAfterInsertBack = '后退到上一页';
$strAfterInsertNewInsert = '插入新的一行';
$strAfterInsertSame = '返回这一页';
$strAfter = '于 %s 之后';
$strAll = '全部';
$strAllTableSameWidth = '以相同宽度显示所有表吗?';
$strAlterOrderBy = '更改表顺序，依据';
$strAnalyzeTable = '分析表';
$strAnd = '与';
$strAnIndex = '索引已经添加到 %s';
$strAny = '任意';
$strAnyHost = '任意主机';
$strAnyUser = '任意用户';
$strAPrimaryKey = '主键已经添加到 %s';
$strArabic = '阿拉伯语';
$strArmenian = '亚美尼亚语';
$strAscending = '递增';
$strAtBeginningOfTable = '于表开头';
$strAtEndOfTable = '于表结尾';
$strAttr = '属性';
$strAutodetect = '自动检测';
$strAutomaticLayout = '自动套用格式';

$strBack = '返回';
$strBaltic = '巴拉克语';
$strBeginCut = '开始剪切';
$strBeginRaw = '开始原文';
$strBinary = '二进制';
$strBinaryDoNotEdit = '二进制 - 无法编辑';
$strBookmarkAllUsers = '让每个用户都可以访问这个书签';
$strBookmarkDeleted = '书签已经删除。';
$strBookmarkLabel = '标签';
$strBookmarkOptions = '书签选项';
$strBookmarkQuery = '已加书签的 SQL 查询';
$strBookmarkThis = '将此 SQL 查询加为书签';
$strBookmarkView = '只查看';
$strBrowse = '浏览';
$strBrowseForeignValues = '浏览不相关的值';
$strBulgarian = '保加利亚语';
$strBzError = 'phpMyAdmin 无法压缩转存，原因是此版本 php 中的 Bz2 模块损坏。强制将 phpMyAdmin 配置文件中的 <code>$cfg[\'BZipDump\']</code> 设置为 <code>FALSE</code>。如果您想使用 Bz2 压缩功能，请更新 php 的版本。详情请参看 php 错误报告 %s。';
$strBzip = 'bzip 压缩';

$strCalendar = '日历';
$strCannotLogin = '无法登入 MySQL 服务器';
$strCantLoadRecodeIconv = '无法载入 iconv 或者进行字符集转换所需的重编码扩展程序，请配置 php 允许使用这些扩展或者在 phpMyAdmin 中禁用字符集转换功能。';
$strCantLoad = '无法载入 %s 扩展，<br />请检查 PHP 配置';
$strCantRenameIdxToPrimary = '无法将索引更名为 PRIMARY！';
$strCantUseRecodeIconv = '载入扩展报告时 iconv，libiconv 和 recode_string 都无法使用。请检查您的 php 配置。';
$strCardinality = '基数';
$strCarriage = '回车：\\r';
$strCaseInsensitive = '不区分大小写';
$strCaseSensitive = '区分大小写';
$strCentralEuropean = '中欧';
$strChange = '更改';
$strChangeCopyModeCopy = '... 保留旧用户。';
$strChangeCopyModeDeleteAndReload = ' ... 从用户表中删除旧用户，然后重新载入权限。';
$strChangeCopyModeJustDelete = ' ... 从用户表中删除旧用户。';
$strChangeCopyModeRevoke = ' ... 收回旧用户的所有激活权限，然后删除旧用户。';
$strChangeCopyMode = '创建带有相同权限的新用户并 ...';
$strChangeCopyUser = '更改登录信息/复制用户';
$strChangeDisplay = '选择要显示的字段';
$strChangePassword = '更改密码';
$strCharset = '字符集';
$strCharsetOfFile = '文件的字符集：';
$strCharsets = '字符集';
$strCharsetsAndCollations = '字符集和整理';
$strCheckAll = '全选';
$strCheckOverhead = '彻底检查';
$strCheckPrivs = '检查权限';
$strCheckPrivsLong = '检查数据库“%s”的权限。';
$strCheckTable = '检查表';
$strChoosePage = '请选择需要编辑的页号';
$strColComFeat = '显示列注解';
$strCollation = '整理';
$strColumnNames = '列名';
$strColumnPrivileges = '按列指定权限';
$strCommand = '命令';
$strCommentsForTable = '表的注释';
$strComments = '注释';
$strCompleteInserts = '完整插入';
$strCompression = '压缩';
$strConfigFileError = 'phpMyAdmin 无法读取您的配置文件！<br />这可能是因为 php 发现了语法错误或 php 未能找到文档。<br />请直接使用下面的链接调用配置文件，然后读取您收到的 php 错误提示。通常的错误都是因为某处漏了引号或分号。<br />如果您看到的是一个空白页，则代表没有任何问题。';
$strConfigureTableCoord = '请配置表 %s 的坐标';
$strConnectionError = '无法连接：非法设置。';
$strConnections = '连接';
$strConstraintsForDumped = '限制导出的表';
$strConstraintsForTable = '限制表';
$strCookiesRequired = 'Cookies 必须启用才能登入。';
$strCopyTable = '将表复制到(数据库名<b>.</b>表名)：';
$strCopyTableOK = '表 %s 已经成功复制为 %s。';
$strCopyTableSameNames = '无法将表复制为相同名称！';
$strCouldNotKill = 'phpMyAdmin 无法杀死线程 %s。可能该线程已经关闭。';
$strCreate = '创建';
$strCreateIndex = '在第 %s 列创建索引';
$strCreateIndexTopic = '创建新索引';
$strCreateNewDatabase = '创建一个新的数据库';
$strCreateNewTable = '在数据库 %s 中创建一个新表';
$strCreatePage = '创建新页';
$strCreatePdfFeat = '创建 PDF';
$strCreationDates = '创建/更新/日期检查';
$strCriteria = '条件';
$strCroatian = '克罗地亚语';
$strCSVOptions = 'CSV 选项';
$strCyrillic = '西里尔语';
$strCzech = '捷克语';
$strCzechSlovak = '捷克斯洛伐克语';

$strDanish = '丹麦语';
$strData = '数据';
$strDatabase = '数据库';
$strDatabaseEmpty = '这个数据库名字是空！';
$strDatabaseExportOptions = '数据库导出选项';
$strDatabaseHasBeenDropped = '数据库 %s 已被删除。';
$strDatabaseNoTable = '此数据库中没有表！';
$strDatabases = '数据库';
$strDatabasesDropped = '已经成功删除了 %s 个数据库。';
$strDatabasesStats = '数据库统计';
$strDatabasesStatsDisable = '禁用统计';
$strDatabasesStatsEnable = '启用统计';
$strDatabasesStatsHeavyTraffic = '注意：在此启用数据库统计可能导致网站服务器和 MySQL 服务器之间的流量骤增。';
$strDataDict = '数据字典';
$strDataOnly = '只有数据';
$strDBComment = '数据库注释：';
$strDBGContext = '上下文';
$strDBGContextID = '上下文 ID';
$strDBGHits = '次数';
$strDBGLine = '行';
$strDBGMaxTimeMs = '最大时间，毫秒';
$strDBGMinTimeMs = '最小时间，毫秒';
$strDBGModule = '模块';
$strDBGTimePerHitMs = '时间/次，毫秒';
$strDBGTotalTimeMs = '总计时间，毫秒';
$strDbPrivileges = '按数据库指定权限';
$strDBRename = '重新命名数据库为 ';
$strDbSpecific = '按数据库指定';
$strDefault = '默认';
$strDefaultValueHelp = '对于默认值，请只输入单个值，不要加反斜线或引号，请用此格式：a';
$strDefragment = '整理表碎片';
$strDelayedInserts = '延时插入';
$strDelete = '删除';
$strDeleteAndFlushDescr = '这是一个最干净的做法，但重新读取权限需一段时间。';
$strDeleteAndFlush = '删除用户并重新读取权限。';
$strDeleted = '该行已经被删除。';
$strDeletedRows = '已删除行数：';
$strDeleting = '正在删除 %s';
$strDelOld = '当前页所引用的表不存在了。您是否想要删除这些引用?';
$strDescending = '递减';
$strDescription = '描述';
$strDictionary = '字典';
$strDisabled = '已禁用';
$strDisableForeignChecks = '禁止选定不相关的主键';
$strDisplayFeat = '显示特性';
$strDisplayOrder = '显示顺序';
$strDisplayPDF = '显示 PDF 大纲';
$strDoAQuery = '执行“按例查询”(通配符：“%”)';
$strDocu = '文档';
$strDoYouReally = '您真的要';
$strDrop = '删除';
$strDropDatabaseStrongWarning = '您将要删除一个完整的数据库！';
$strDropSelectedDatabases = '删除选中数据库';
$strDropUsersDb = '删除与用户名称相同的数据库。';
$strDumpingData = '导出表中的数据';
$strDumpSaved = '转存已经保存到文件 %s 中了。';
$strDumpXRows = '转存 %s 行，从记录 #%s 开始。';
$strDynamic = '动态';

$strEdit = '编辑';
$strEditPDFPages = '编辑 PDF 页';
$strEditPrivileges = '编辑权限';
$strEffective = '有效';
$strEmpty = '清空';
$strEmptyResultSet = 'MySQL 返回的查询结果为空(即零行)。';
$strEnabled = '已启用';
$strEncloseInTransaction = '处理事务中封装输出';
$strEnd = '结束';
$strEndCut = '结束剪切';
$strEndRaw = '结束原文';
$strEnglish = '英语';
$strEnglishPrivileges = ' 注意：MySQL 权限名称会以英文显示 ';
$strError = '错误';
$strEstonian = '爱沙尼亚语';
$strExcelEdition = 'Excel 版本';
$strExcelOptions = 'Excel 选项';
$strExecuteBookmarked = '执行书签中的查询';
$strExplain = '解释 SQL';
$strExport = '导出';
$strExtendedInserts = '扩展插入';
$strExtra = '额外';

$strFailedAttempts = '尝试失败';
$strField = '字段';
$strFieldHasBeenDropped = '字段 %s 已被删除';
$strFields = '字段数';
$strFieldsEmpty = ' 字段总数是空的！';
$strFieldsEnclosedBy = '包裹字段的字符';
$strFieldsEscapedBy = '转义字段的字符';
$strFieldsTerminatedBy = '分隔字段的字符';
$strFileAlreadyExists = '文件 %s 已经存在于服务器上，请更改文件名或者选中覆盖选项。';
$strFileCouldNotBeRead = '文件无法读取';
$strFileNameTemplateHelp = '使用 __DB__ 代表数据库名，__TABLE__ 代表表名，使用%s任何 strftime%s 选项指定时间，扩展名会自动添加。任何其它文本都会被保留。';
$strFileNameTemplate = '文件名模板';
$strFileNameTemplateRemember = '记住模板';
$strFixed = '固定';
$strFlushPrivilegesNote = '注意：phpMyAdmin 直接由 MySQL 权限表取得用户权限。如果用户手动更改表，表内容将可能与服务器使用的用户权限有异。在这种情况下，您应在继续前%s重新载入权限%s。';
$strFlushTable = '强制更新资料表("FLUSH")';
$strFormat = '格式';
$strFormEmpty = '表单内缺少值！';
$strFullText = '完整文字';
$strFunction = '函数';

$strGenBy = '生成者';
$strGeneralRelationFeat = '一般关系特性';
$strGenTime = '生成日期';
$strGeorgian = '乔治亚语';
$strGerman = '德语';
$strGlobal = '全局';
$strGlobalPrivileges = '全局权限';
$strGlobalValue = '全局值';
$strGo = '执行';
$strGrantOption = '授权';
$strGreek = '希腊语';
$strGzip = 'gzip 压缩';

$strHasBeenAltered = '已经被修改。';
$strHasBeenCreated = '已经建立。';
$strHaveToShow = '您需要最少选择显示一列';
$strHebrew = '希伯来语';
$strHexForBinary = '二进制区域使用十六进制显示';
$strHome = '主目录';
$strHomepageOfficial = 'phpMyAdmin 官方网站';
$strHost = '主机';
$strHostEmpty = '主机名称是空的！';
$strHungarian = '匈牙利语';

$strIcelandic = '冰岛语';
$strId = 'ID'; // use eng
$strIdxFulltext = '全文搜索';
$strIfYouWish = '如果您仅仅要载入表中的几列，请给出用逗号分隔的字段列表。';
$strIgnore = '忽略';
$strIgnoreInserts = '忽略插入';
$strIgnoringFile = '忽略文件 %s';
$strImportDocSQL = '导入 docSQL 文档';
$strImportFiles = '导入文件';
$strImportFinished = '导入完成';
$strIndex = '索引';
$strIndexes = '索引';
$strIndexHasBeenDropped = '索引 %s 已被删除';
$strIndexName = '索引名称：';
$strIndexType = '索引类型：';
$strInnodbStat = 'InnoDB 状态';
$strInsecureMySQL = '您配置文件中的设定与 MySQL 默认权限账户对应(没有密码的 root)。您的 MySQL 服务器使用默认值运行当然没有问题，不过这样的话，被入侵的可能性会很大，您真的应该先补上这个安全漏洞。';
$strInsert = '插入';
$strInsertAsNewRow = '以新行插入';
$strInsertedRowId = '插入行 id：';
$strInsertedRows = '插入的行数：';
$strInsertNewRow = '插入新行';
$strInsertTextfiles = '从文本文件中提取数据，插入到表';
$strInstructions = '指示';
$strInternalNotNecessary = '当 * 也存在于InnoDB中的时候，内部关联并不必要。';
$strInternalRelations = '内在联系';
$strInUse = '使用中';

$strJapanese = '日语';
$strJumpToDB = '跳到数据库“%s”。';
$strJustDeleteDescr = '“删除”的用户仍然能像往常一样登入数据库，直至重新载入权限。';
$strJustDelete = '只从权限数据库删除用户。';

$strKeepPass = '请不要更改密码';
$strKeyname = '键名';
$strKill = 'Kill'; //should expressed in English
$strKorean = '朝鲜语';

$strLandscape = '横向';
$strLatexCaption = '表的标题';
$strLatexContent = '__TABLE__ 表的内容';
$strLatexContinued = '(延续的)';
$strLatexContinuedCaption = '延续的表的标题';
$strLatexIncludeCaption = '包含表的标题';
$strLatexLabel = '关键标签';
$strLaTeX = 'LaTeX';  // use eng
$strLaTeXOptions = 'LaTeX 选项';
$strLatexStructure = '__TABLE__ 表的结构';
$strLatvian = '拉脱维亚语';
$strLengthSet = '长度/值*';
$strLimitNumRows = '每页行数';
$strLineFeed = '换行：\\n';
$strLinesTerminatedBy = '行终止的字符';
$strLinkNotFound = '找不到链接';
$strLinksTo = '链接到';
$strLithuanian = '立陶宛语';
$strLoadExplanation = '默认情况下选中的是最好的模式，但是如果失败的话，您也可以进行更改。';
$strLoadMethod = 'LOAD 模式';
$strLocalhost = '本地';
$strLocationTextfile = '文本文件的位置';
$strLogin = '登入';
$strLoginInformation = '登入信息';
$strLogout = '登出';
$strLogPassword = '密码：';
$strLogServer = '服务器';
$strLogUsername = '登入名称：';

$strMaximumSize = '最大限制：%s %s';
$strMIME_available_mime = '可用的 MIME 类型';
$strMIME_available_transform = '可用的变换';
$strMIME_description = '描述';
$strMIME_MIMEtype = 'MIME 类型';
$strMIME_nodescription = '此变换无可用的描述。<br />详细功能请询问 %s 的作者。';
$strMIME_transformation_note = '要获得可用变换选项的清单及对应的 MIME 类型变换，请单击%s变换描述%s';
$strMIME_transformation_options_note = '请使用此格式输入变换选项的值：\'a\',\'b\',\'c\'...<br />如果您需要在值中输入反斜线(“\”)或者单引号(“\'”)，请在前面加上反斜线(如 \'\\\\xyz\' 或 \'a\\\'b\')。';
$strMIME_transformation_options = '变换选项';
$strMIME_transformation = '浏览器变换';
$strMIMETypesForTable = 'MIME 类型表';
$strMIME_without = '以斜体打印的 MIME 类型没有单独的变换函数';
$strModifications = '修改已经保存。';
$strModify = '修改';
$strModifyIndexTopic = '修改索引';
$strMoreStatusVars = '更多状态变量';
$strMoveTable = '将表移动到(数据库名<b>.</b>表名)：';
$strMoveTableOK = '表 %s 已经移动到 %s。';
$strMoveTableSameNames = '无法将表移动为相同名称！';
$strMultilingual = '多语言';
$strMustSelectFile = '您应该选择您想要插入的文件。';
$strMySQLCharset = 'MySQL 字符集';
$strMySQLConnectionCollation = 'MySQL 连接校对';
$strMySQLReloaded = 'MySQL 重新启动完成。';
$strMySQLSaid = 'MySQL 返回：';
$strMySQLServerProcess = 'MySQL %pma_s1% 在 %pma_s2% 以 %pma_s3% 的身份执行';
$strMySQLShowProcess = '显示进程';
$strMySQLShowStatus = '显示 MySQL 的运行信息';
$strMySQLShowVars = '显示 MySQL 的系统变量';

$strName = '名字';
$strNeedPrimaryKey = '您应该给这个表定义一个主键。';
$strNext = '下一个';
$strNo = '否';
$strNoDatabases = '无数据库';
$strNoDatabasesSelected = '没有选中数据库。';
$strNoDescription = '无描述';
$strNoDropDatabases = '已经禁用“DROP DATABASE”语句。';
$strNoExplain = '略过解释 SQL';
$strNoFrames = 'phpMyAdmin 更适合在支持<b>框架</b>的浏览器中使用。';
$strNoIndexPartsDefined = '没有定义的索引部分！';
$strNoIndex = '没有已定义的索引！';
$strNoModification = '无更改';
$strNone = '无';
$strNoOptions = '这种格式并无选项';
$strNoPassword = '无密码';
$strNoPermission = '网站服务器不允许保存文件 %s。';
$strNoPhp = '无 PHP 代码';
$strNoPrivileges = '无权限';
$strNoQuery = '无 SQL 查询！';
$strNoRights = '您现在没有足够的权限在此出现！';
$strNoRowsSelected = '未选择行';
$strNoSpace = '没有足够的空间保存文件 %s。';
$strNoTablesFound = '数据库中没有表。';
$strNotNumber = '这不是一个数字！';
$strNotOK = '不好';
$strNotSet = '<b>%s</b> 表找不到或还未在 %s 设定';
$strNotValidNumber = ' 不是有效的行数！';
$strNoUsersFound = '找不到用户。';
$strNoValidateSQL = '略过校验 SQL';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s 个匹配项 - 于表 <i>%s</i> 中';
$strNumSearchResultsTotal = '<b>总计：</b> <i>%s</i> 个匹配项';
$strNumTables = '个表';

$strOftenQuotation = '通常为引号。可选意味着只有 char 和 varchar 类型的字段才需要用此字符包裹起来。';
$strOK = '确定';
$strOperations = '操作';
$strOperator = '操作员';
$strOptimizeTable = '优化表';
$strOptionalControls = '可选。控制如何读写特殊字符。';
$strOptionally = '可选';
$strOr = '或';
$strOverhead = '多余';
$strOverwriteExisting = '覆盖已有文件';

$strPageNumber = '页号：';
$strPaperSize = '纸张大小';
$strPartialText = '部分文字';
$strPassword = '密码';
$strPasswordChanged = '%s 的密码已成功更改。';
$strPasswordEmpty = '密码是空的！';
$strPasswordNotSame = '密码并非相同！';
$strPdfDbSchema = '“%s”数据库大纲 - 第 %s 页';
$strPdfInvalidTblName = '表“%s”不存在！';
$strPdfNoTables = '没有表';
$strPerHour = '每小时';
$strPerMinute = '每分钟';
$strPerSecond = '每秒';
$strPersian = '波斯语';
$strPhoneBook = '电话本';
$strPHP40203 = '您正使用 PHP 版本 4.2.3，该版本有一个双字节字符(mbstring)的严重错误。请参阅 PHP 臭虫报告 19404。phpMyAdmin 并不建议使用这个版本的 PHP。';
$strPhp = '创建 PHP 代码';
$strPHPVersion = 'PHP 版本';
$strPmaDocumentation = 'phpMyAdmin 文档';
$strPmaUriError = '必须在您的配置文件中设定 <tt>$cfg[\'PmaAbsoluteUri\']</tt> 指令！';
$strPolish = '波兰语';
$strPortrait = '纵向';
$strPos1 = '开始';
$strPrevious = '前一个';
$strPrimary = '主键';
$strPrimaryKeyHasBeenDropped = '主键已被删除';
$strPrimaryKeyName = '主键的名称必须称为 PRIMARY！';
$strPrimaryKeyWarning = '(“PRIMARY”<b>必须</b>是主键的名称，并且主键必须<b>唯一</b>！)';
$strPrint = '打印';
$strPrintView = '打印预览';
$strPrintViewFull = '打印预览 (全文显示)';
$strPrivDescAllPrivileges = '包括所有权限除了授权 (GRANT)。';
$strPrivDescAlter = '允许修改现有表的结构。';
$strPrivDescCreateDb = '允许创建新数据库和表。';
$strPrivDescCreateTbl = '允许创建新表。';
$strPrivDescCreateTmpTable = '允许创建暂时表。';
$strPrivDescDelete = '允许删除数据。';
$strPrivDescDropDb = '允许删除数据库和表。';
$strPrivDescDropTbl = '允许删除表。';
$strPrivDescExecute = '允许运行存储过程；在此版本的 MySQL 中无效。';
$strPrivDescFile = '允许从文件中导入数据以及将数据导出至文件。';
$strPrivDescGrant = '允许添加用户和权限，而不允许重新载入权限表。';
$strPrivDescIndex = '允许创建和删除索引。';
$strPrivDescInsert = '允许插入和替换数据。';
$strPrivDescLockTables = '允许锁住当前线索的表。';
$strPrivDescMaxConnections = '限制用户每小时打开的新连接数。';
$strPrivDescMaxQuestions = '限制用户每小时可发送的查询数。';
$strPrivDescMaxUpdates = '限制用户每小时可执行的将会更改任何表或数据库的命令数。';
$strPrivDescProcess3 = '允许杀死其它用户的进程。';
$strPrivDescProcess4 = '允许查看进程列表中的完整查询。';
$strPrivDescReferences = '在此版本的 MySQL 中无效。';
$strPrivDescReload = '允许重新载入服务器设置并刷新服务器的缓存。';
$strPrivDescReplClient = '用户有权询问附属者/控制者在哪里。';
$strPrivDescReplSlave = '回复附属者所需。';
$strPrivDescSelect = '允许读取数据。';
$strPrivDescShowDb = '允许访问完整的数据库列表。';
$strPrivDescShutdown = '允许关闭服务器。';
$strPrivDescSuper = '允许在达到最大允许数目时仍进行连接；对于大多数像设置全局变量或杀死其它用户线程这样的管理操作是必需的。';
$strPrivDescUpdate = '允许更改数据。';
$strPrivDescUsage = '无权限。';
$strPrivileges = '权限';
$strPrivilegesReloaded = '权限已经成功载入。';
$strProcesslist = '进程列表';
$strPutColNames = '将字段名称放在首行';

$strQBE = '查询';
$strQBEDel = '删除';
$strQBEIns = '添加';
$strQueryFrame = '查询窗口';
$strQueryOnDb = '在数据库 <b>%s</b> 执行 SQL 语句：';
$strQuerySQLHistory = 'SQL 历史';
$strQueryStatistics = '<b>查询统计</b>：自从启动后，服务器共收到了 %s 次查询。';
$strQueryTime = '查询花费 %01.4f 秒';
$strQueryType = '查询方式';
$strQueryWindowLock = '不从窗口外覆盖此查询';

$strReceived = '已收到';
$strRecords = '记录数';
$strReferentialIntegrity = '检查引用完整性：';
$strRefresh = '刷新';
$strRelationalSchema = '关系大纲';
$strRelationNotWorking = '使用链接表的额外特性尚未激活。要查出原因，请单击%s此处%s。';
$strRelations = '关系';
$strRelationsForTable = '表的关联';
$strRelationView = '关系查看';
$strReloadFailed = 'MySQL 重启失败。';
$strReloadingThePrivileges = '重新载入权限';
$strReloadMySQL = '重启 MySQL';
$strRemoveSelectedUsers = '删除选中用户';
$strRenameDatabaseOK = '数据库 %s 已经被重命名为 %s';
$strRenameTableOK = '表 %s 名字已经被改成 %s。';
$strRenameTable = '将表改名为';
$strRepairTable = '修复表';
$strReplaceNULLBy = '将 NULL 替换为';
$strReplaceTable = '将表的数据用此文件替换：';
$strReplace = '替换';
$strReset = '重置';
$strResourceLimits = '资源限制';
$strReType = '重新输入';
$strRevoke = '收回';
$strRevokeAndDeleteDescr = '用户仍然拥有 USAGE 权限，直到权限重载。';
$strRevokeAndDelete = '收回用户的所有激活权限，然后删除用户。';
$strRevokeMessage = '您已收回 %s 的权限';
$strRomanian = '罗马尼亚语';
$strRowLength = '行长度';
$strRows = '行数';
$strRowsFrom = '行，开始行数：';
$strRowSize = ' 行大小 ';
$strRowsModeFlippedHorizontal = '水平(旋转标题)';
$strRowsModeHorizontal = '水平';
$strRowsModeOptions = '以 %s 模式显示，并且在 %s 个单元格后重复标题';
$strRowsModeVertical = '垂直';
$strRowsStatistic = '行统计';
$strRunning = '运行于 %s';
$strRunQuery = '提交查询';
$strRunSQLQuery = '在数据库 %s 运行 SQL 查询';
$strRussian = '俄语';

$strSave = '保存';
$strSaveOnServer = '保存于服务器的 %s 目录';
$strScaleFactorSmall = '比例因子太小，无法在一页中显示大纲';
$strSearch = '搜索';
$strSearchFormTitle = '搜索数据库';
$strSearchInTables = '于以下表：';
$strSearchNeedle = '查找的文字或数值(通配符：“%”)：';
$strSearchOption1 = '至少一个单词';
$strSearchOption2 = '所有单词';
$strSearchOption3 = '精确短语';
$strSearchOption4 = '按正规表达式';
$strSearchResultsFor = '“<i>%s</i>”的搜索结果 %s：';
$strSearchType = '查找：';
$strSecretRequired = '配置文件现在需要绝密的短语密码(blowfish_secret)。';
$strSelectADb = '请选择数据库';
$strSelectAll = '全选';
$strSelectFields = '至少选择一个字段：';
$strSelectNumRows = '查询中';
$strSelectTables = '选择表';
$strSend = '另存为文件';
$strSent = '送出';
$strServer = '服务器';
$strServerChoice = '选择服务器';
$strServerNotResponding = '服务器没有响应';
$strServerStatusUptime = '此 MySQL 服务器已经运行了 %s，启动时间为 %s。';
$strServerStatus = '运行信息';
$strServerTabProcesslist = '进程';
$strServerTabVariables = '变量';
$strServerTrafficNotes = '<b>服务器流量</b>：这些表显示了此 MySQL 服务器自启动以来的网络流量统计。';
$strServerVars = '服务器变量和设置';
$strServerVersion = '服务器版本';
$strSessionValue = '会话值';
$strSetEnumVal = '如字段类型是“enum”或“set”，请使用以下的格式输入：\'a\',\'b\',\'c\'...<br />如果您需要在值中输入反斜线(“\”)或者单引号(“\'”)，请在前面加上反斜线(如 \'\\\\xyz\' 或 \'a\\\'b\')。';
$strShow = '显示';
$strShowAll = '全部显示';
$strShowColor = '显示颜色';
$strShowDatadictAs = '数据字典格式';
$strShowFullQueries = '显示完整查询';
$strShowGrid = '显示网格';
$strShowingRecords = '显示行';
$strShowPHPInfo = '显示 PHP 信息';
$strShowTableDimension = '显示表格大小';
$strShowTables = '显示表';
$strShowThisQuery = ' 在此再次显示此查询 ';
$strSimplifiedChinese = '简体中文';
$strSingly = '(逐一)';
$strSize = '大小';
$strSlovak = '斯洛伐克语';
$strSlovenian = '斯洛文尼亚语';
$strSort = '排序';
$strSortByKey = '主键排序';
$strSpaceUsage = '已使用空间';
$strSpanish = '西班牙语';
$strSplitWordsWithSpace = '每个单词以空格 (" ") 分隔。';
$strSQLExportType = '导出类型';
$strSQLOptions = 'SQL 选项';
$strSQLParserBugMessage = '有可能您发现了 SQL 分析器的臭虫。请仔细检查您的查询，包括引号是否正确及是否匹配。其它可能的失败原因可能由于您上传了超过引用文本区域外的二进制数据。您还可以在 MySQL 命令行界面试一下您的查询。如果可能的话，以下会列出 MySQL 服务器的错误输出，这可能对您解决问题有一定的帮助作用。如果您仍然有问题，或者命令行界面执行成功而分析器出错，请将您的 SQL 查询缩减到导致问题的某一条语句，然后和下面剪切区中的数据一起提交一个臭虫报告：';
$strSQLParserUserError = '您的 SQL 查询可能有错。如果可能的话，以下会列出 MySQL 服务器的错误输出，这可能对您解决问题有一定的帮助作用。';
$strSQLQuery = 'SQL 查询';
$strSQLResult = 'SQL 查询结果';
$strSQL = 'SQL'; // should express in english
$strSQPBugInvalidIdentifer = '无效的标识符';
$strSQPBugUnclosedQuote = '引号不配对';
$strSQPBugUnknownPunctuation = '未知的标点符号字符串';
$strStatCheckTime = '最后检查时间';
$strStatCreateTime = '创建时间';
$strStatement = '语句';
$strStatUpdateTime = '最后更新时间';
$strStatus = '状态';
$strStrucCSV = 'CSV 数据';
$strStrucData = '结构和数据';
$strStrucDrop = '添加 DROP TABLE';
$strStrucExcelCSV = 'MS Excel 的 CSV 格式';
$strStrucNativeExcel = '本地 MS Excel 数据';
$strStrucOnly = '只结构';
$strStructPropose = '规划表结构';
$strStructure = '结构';
$strSubmit = '提交';
$strSuccess = '您运行的 SQL 语句已经成功运行了。';
$strSum = '总计';
$strSwedish = '瑞典语';
$strSwitchToTable = '切换到复制的表';

$strTable = '表 ';
$strTableComments = '表注释';
$strTableEmpty = '表名称是空的！';
$strTableHasBeenDropped = '表 %s 已被删除';
$strTableHasBeenEmptied = '表 %s 已被清空';
$strTableHasBeenFlushed = '表 %s 已被强制更新';
$strTableMaintenance = '表维护';
$strTableOfContents = '目录';
$strTableOptions = '表选项';
$strTables = '%s 个表';
$strTableStructure = '表的结构';
$strTableType = '表类型';
$strTakeIt = '断定';
$strTblPrivileges = '按表指定权限';
$strTextAreaLength = ' 由于长度限制<br />此字段可能无法编辑 ';
$strThai = '泰语';
$strTheContent = '文件中的内容已经插入到表中。';
$strTheContents = '文件中的内容将会取代所选定表中具有相同主键或唯一键的记录。';
$strTheme = '主题 / 风格';
$strTheTerminator = '字段的结束符。';
$strThisHost = '此主机';
$strThisNotDirectory = '这并不是一个目录';
$strThreadSuccessfullyKilled = '线程 %s 已成功杀死。';
$strTime = '时间';
$strToggleScratchboard = '切换刮板';
$strTotal = '总计';
$strTotalUC = '统计';
$strTraditionalChinese = '繁体中文';
$strTraditionalSpanish = '传统西班牙语';
$strTraffic = '流量';
$strTransformation_application_octetstream__download = '字段中显示一个二进制文件的下载连接。第一个选项是二进制数据的名字。第二个选项是表列中可能包含文件名的字段。 如果你提供第二个选项那么第一个选项必须设置为空字符串。';
$strTransformation_image_jpeg__inline = '显示可点击的缩略图；选项：以像素指定的宽度、高度(保留原有比例)';
$strTransformation_image_jpeg__link = '显示到此图像的链接(即直接二进制下载)。';
$strTransformation_image_png__inline = '查看 image/jpeg: 嵌入';
$strTransformation_text_plain__dateformat = '选择 TIME，TIMESTAMP 或 DATETIME 字段并将其用您的本地日期格式进行格式化。第一个选项是将会加入到时间戳中的偏移量(以小时为单位，默认为 0)。第二个选项是根据 PHP 的 strftime() 函数参数的格式编写的不同日期格式。';
$strTransformation_text_plain__external = '只对 LINUX：调用外部程序并通过标准输入填充字段数据。返回此应用程序的标准输出。默认为 Tidy，可以很好的打印 HTML 代码。为了安全起见，您需要手动编辑文件 libraries/transformations/text_plain__external.inc.php 然后插入允许您运行的工具。第一个选项是您想要使用的程序编号，而第二个选项是程序的参数。至于第三个参数，如果设为 1 的话将会用 htmlspecialchars() 转换其输出(默认为 1)。第四个参数如果设为 1 的话，将会在内容单元格中输出 NOWRAP，这样全部输出就会不经重新格式化直接输出了(默认为 1)';
$strTransformation_text_plain__formatted = '保留字段的原始格式。不进行转码。';
$strTransformation_text_plain__imagelink = '显示图像和链接，字段内包含文件名；第一个选项是类似“http://domain.com/”这样的前缀，第二个选项是以像素为单位的宽度，第三个参数是高度。';
$strTransformation_text_plain__link = '显示链接，字段内包含文件名；第一个选项是类似“http://domain.com/”这样的前缀，第二个选项是链接的标题(弹出提示)。';
$strTransformation_text_plain__substr = '只显示字符串的一部分。第一个选项定义了文本开始输出的偏移量(默认为 0)。第二个选项是所返回文字数量的偏移量。如果为空的话，将返回剩下的所有文本。第三个选项是将会追加到子字符串之后的输出(默认为：...) .';
$strTransformation_text_plain__unformatted = '将 HTML 代码显示为 HTML 实体。不显示 HTML 格式化。';
$strTruncateQueries = '截断显示的查询';
$strTurkish = '土耳其语';
$strType = '类型';

$strUkrainian = '乌克兰语';
$strUncheckAll = '全部不选';
$strUnicode = 'Unicode'; //USE ENG
$strUnique = '唯一';
$strUnknown = '未知';
$strUnselectAll = '全部不选';
$strUpdatePrivMessage = '您已经更新了 %s 的权限。';
$strUpdateProfileMessage = '配置文件己更新。';
$strUpdateQuery = '更新查询';
$strUpdComTab = '请参看文档中关于如何更新您的 Column_comments 表的部分';
$strUpgrade = '您应该升级到 %s %s 或者更高。';
$strUsage = '用法';
$strUseBackquotes = '请在表名及字段名使用引号';
$strUseHostTable = '使用主机表';
$strUserAlreadyExists = '用户 %s 己存在！';
$strUserEmpty = '用户名称是空的！';
$strUserName = '用户名';
$strUserNotFound = '选中的用户在权限表内找不到。';
$strUserOverview = '用户一览';
$strUsersDeleted = '选中的用户已成功删除。';
$strUsersHavingAccessToDb = '用户可访问“%s”';
$strUser = '用户';
$strUseTables = '使用表';
$strUseTextField = '使用文本域';
$strUseThisValue = '使用此值';

$strValidateSQL = '校验 SQL';
$strValidatorError = 'SQL 校验程序无法初始化。请检查是否已经安装了%s文档%s内描述的必需 PHP 扩展。';
$strValue = '值';
$strVar = '变量';
$strViewDumpDatabases = '查看数据库的转存(大纲)';
$strViewDumpDB = '查看数据库的转存(大纲)。';
$strViewDump = '查看表的转存(大纲)。';

$strWebServerUploadDirectoryError = '设定的上载目录错误，未能使用';
$strWebServerUploadDirectory = '网站服务器上载目录';
$strWelcome = '欢迎使用 %s';
$strWestEuropean = '西欧';
$strWildcard = '通配符';
$strWindowNotFound = '目标浏览窗口不可更新。可能你已经关闭了父窗口或者您浏览器的安全设置阻断了更新窗口。';
$strWithChecked = '选中项：';
$strWritingCommentNotPossible = '不能写注释';
$strWritingRelationNotPossible = '不能写关系';
$strWrongUser = '用户名/密码错误，访问被拒绝。';

$strXML = 'XML'; //USE ENG

$strYes = '是';

$strZeroRemovesTheLimit = '注意：将这些选项设为 0(零) 将删除限制。';
$strZip = 'zip 压缩';

$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinaryLog = 'Binary log';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
$strIndexWarningPrimary = 'PRIMARY and INDEX keys should not both be set for column `%s`';//to translate
$strIndexWarningUnique = 'UNIQUE and INDEX keys should not both be set for column `%s`';//to translate
$strIndexWarningMultiple = 'More than one %s key was created for column `%s`';//to translate
$strIndexWarningTable = 'Problems with indexes of table `%s`';//to translate
$strNoActivity = 'No activity since %s seconds or more, please login again';  //to translate
$strApproximateCount = 'May be approximate. See FAQ 3.11';  //to translate
$strSQLExportCompatibility = 'SQL export compatibility';  //to translate
$strMbOverloadWarning = 'You have enabled mbstring.func_overload in your PHP configuration. This option is incompatible with phpMyAdmin and might cause breaking of some data!';  //to translate
$strMbExtensionMissing = 'The mbstring PHP extension was not found and you seem to be using multibyte charset. Without mbstring extension phpMyAdmin is unable to split strings correctly and it may result in unexpected results.';  //to translate
$strAfterInsertNext = 'Edit next row';  //to translate
$strView = 'View';  //to translate
$strViewHasBeenDropped = 'View %s has been dropped';  //to translate
$strEngines = 'Engines';  //to translate
$strStorageEngines = 'Storage Engines';  //to translate
$strStorageEngine = 'Storage Engine';  //to translate
$strNoDetailsForEngine = 'There is no detailed status information available for this storage engine.';  //to translate
$strDefaultEngine = '%s is the default storage engine on this MySQL server.';  //to translate
$strEngineAvailable = '%s is available on this MySQL server.';  //to translate
$strEngineUnsupported = 'This MySQL server does not support the %s storage engine.';  //to translate
$strEngineDisabled = '%s has been disabled for this MySQL server.';  //to translate
$strMyISAMSortBufferSize = 'Sort buffer size';  //to translate
$strMyISAMSortBufferSizeDesc = 'The buffer that is allocated when sorting MyISAM indexes during a REPAIR TABLE or when creating indexes with CREATE INDEX or ALTER TABLE.';  //to translate
$strMyISAMDataPointerSize = 'Data pointer size';  //to translate
$strMyISAMDataPointerSizeDesc = 'The default pointer size in bytes, to be used by CREATE TABLE for MyISAM tables when no MAX_ROWS option is specified.';  //to translate
$strMyISAMRecoverOptions = 'Automatic recovery mode';  //to translate
$strMyISAMRecoverOptionsDesc = 'The mode for automatic recovery of crashed MyISAM tables, as set via the --myisam-recover server startup option.';  //to translate
$strMyISAMRepairThreads = 'Repair threads';  //to translate
$strMyISAMRepairThreadsDesc = 'If this value is greater than 1, MyISAM table indexes are created in parallel (each index in its own thread) during the Repair by sorting process.';  //to translate
$strMyISAMMaxSortFileSize = 'Maximum size for temporary sort files';  //to translate
$strMyISAMMaxSortFileSizeDesc = 'The maximum size of the temporary file MySQL is allowed to use while re-creating a MyISAM index (during REPAIR TABLE, ALTER TABLE, or LOAD DATA INFILE).';  //to translate
$strMyISAMMaxExtraSortFileSize = 'Maximum size for temporary files on index creation';  //to translate
$strMyISAMMaxExtraSortFileSizeDesc = 'If the temporary file used for fast MyISAM index creation would be larger than using the key cache by the amount specified here, prefer the key cache method.';  //to translate
$strLongOperation = 'This operation could be long. Proceed anyway?';  //to translate
$strVersionInformation = 'Version information';  //to translate
$strInnoDBDataHomeDir = 'Data home directory';  //to translate
$strInnoDBDataHomeDirDesc = 'The common part of the directory path for all InnoDB data files.';  //to translate
$strInnoDBDataFilePath = 'Data files';  //to translate
$strInnoDBAutoextendIncrement = 'Autoextend increment';  //to translate
$strInnoDBAutoextendIncrementDesc = ' The increment size for extending the size of an autoextending tablespace when it becomes full.';  //to translate
$strBufferPool = 'Buffer Pool';  //to translate
$strBufferPoolUsage = 'Buffer Pool Usage';  //to translate
$strDataPages = 'Pages containing data';  //to translate
$strFreePages = 'Free pages';  //to translate
$strBusyPages = 'Busy pages';  //to translate
$strDirtyPages = 'Dirty pages';  //to translate
$strPagesToBeFlushed = 'Pages to be flushed';  //to translate
$strLatchedPages = 'Latched pages';  //to translate
$strBufferPoolActivity = 'Buffer Pool Activity';  //to translate
$strReadRequests = 'Read requests';  //to translate
$strWriteRequests = 'Write requests';  //to translate
$strBufferReadMisses = 'Read misses';  //to translate
$strBufferReadMissesInPercent = 'Read misses in %';  //to translate
$strBufferWriteWaits = 'Write waits';  //to translate
$strBufferWriteWaitsInPercent = 'Write waits in %';  //to translate
$strHTMLExcel = 'Microsoft Excel 2000';  //to translate
$strHTMLExcelOptions = 'Microsoft Excel 2000 export options';  //to translate
$strHTMLWord = 'Microsoft Word 2000';  //to translate
$strHTMLWordOptions = 'Microsoft Word 2000 export options';  //to translate
$strInnoDBBufferPoolSizeDesc = 'The size of the memory buffer InnoDB uses to cache data and indexes of its tables.';  //to translate
$strInnoDBBufferPoolSize = 'Buffer pool size';  //to translate
$strInnoDBPages = 'pages';  //to translate
?>
