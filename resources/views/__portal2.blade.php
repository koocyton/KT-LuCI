<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- KTAnchor -->
    <link href="/bootstrap/css/KTAnchor.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="body-background"></div>

    <div class="body-content">
      <div class="body-content-left scroll-container opacity-80">
        <div style="top:0px;position:relative;" id="main-menu"></div>
      </div>
      <div class="body-content-right scroll-container opacity-95">
      </div>
    </div>

    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a href="javascript:void(0);" class="navbar-brand"> &nbsp; AOL Manager</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" native="yes" class="dropdown-toggle" data-toggle="dropdown" style="padding:6px;"><span class="glyphicon glyphicon-cog" style="font-size:23px;"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="dropdown-menu-arrow"><b class="angle-up"></b></li>
                <li>
                  <a href="javascript:$.KTAnchor.popupLoader(null)"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; 问题反馈</a>
                </li>
                <li>
                  <a href="javascript:$.KTAnchor.popupLoader(null)"><span class="glyphicon glyphicon-lock"></span> &nbsp; 账号安全</a>
                </li>
                <li>
                  <a href="javascript:$.KTAnchor.popupLoader('/sundry/icons')"><span class="glyphicon glyphicon-th"></span> &nbsp; 图标大全</a>
                </li>
                <li>
                  <a pushstate="no" href="/login/signout"><span class="glyphicon glyphicon-log-out"></span> &nbsp; 退出</a>
                </li>
              </ul>
            </li>
          </ul>
        </div><!-- /#navbar -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->



    <div class="alert alert-danger" role="alert">
      <strong>Warning!</strong>
      <span class="alert-message"></span>
    </div><!-- /.alert -->

    <div class="window-modal-dialog">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
            12
            </div>
            <div class="modal-body scroll-container">
            234
            234
            234
            234
            234
            234
            234
            234
            </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>

    <script src="/bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
    <script src="/bootstrap/js/KTAnchor.js"></script>
    <script>
    var menu_data = [
          {"text":"主控", "menus":[
              {"text":"广告管理", "href":"/advert"},
              {"text":"素材管理", "href":"/resouse"},
              {"text":"联盟管理", "href":"/union"},
              {"text":"数据统计", "open":true, "menus":[
                  {"text":"数据简报", "href":"/bulletin"},
                  {"text":"各项统计", "href":"/count"},
                  {"text":"优化分析", "href":"/optimize"}
              ]}
          ]},
          {"text":"项目研发 · 微闻", "menus":[
              {"text":"频道设置", "href":"/channel-manager/list"},
              {"text":"项目任务", "href":"/task/list"},
              {"text":"API 接口", "open":true, "menus":[
                  {"text":"登录 GET /access-token", "href":"/project/api-debug/access-token"},
                  {"text":"频道列表 GET /channel-menu", "href":"/project/api-debug/channel-menu"},
                  {"text":"频道新闻 GET /channel-detail/{id}", "href":"/project/api-debug/channel-detail"},
                  {"text":"新闻内容 GET /news/{id}", "href":"/project/api-debug/news"},
                  {"text":"上传新闻 POST /news", "href":"/project/api-debug/post-news"},
                  {"text":"选择地区 UPDATE /region/{id}", "href":"/project/api-debug/region/{id}"}
              ]},
              {"text":"数据管理", "open":false, "menus":[
                  {"text":"频道信息", "href":"/project/data-manage/channel"},
                  {"text":"新闻列表", "href":"/project/data-manage/news"},
                  {"text":"用户管理", "href":"/project/data-manage/user"},
              ]},
              {"text":"项目文档", "open":false, "menus":[
                  {"text":"概叙", "href":"/project/doc/1"},
                  {"text":"登录", "href":"/project/doc/2"},
                  {"text":"注册", "href":"/project/doc/3"},
                  {"text":"主界面", "href":"/project/doc/4"},
                  {"text":"拍照", "href":"/project/doc/5"},
                  {"text":"填写拍照信息", "href":"/project/doc/6"},
              ]},
          ]},
          {"text":"管理员", "menus":[
              {"text":"操作日志", "href":"/operation/list"},
              {"text":"权限管理", "href":"/manager/list" }
          ]}
      ];
      $("#main-menu").html($.KTTreeMenuHTML.getMenuHtml(menu_data));
    </script>
  </body>
</html>