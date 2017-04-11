<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" type="iimage/x-icon" href="/backend/web/assets/img/favicon.png">
  <title>Test</title>
  <link href="/backend/web/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/backend/web/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="/backend/web/assets/css/weather-icons.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300"
        rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.0/css/responsive.dataTables.min.css">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet">
  <link href="/backend/web/assets/css/beyond.min.css" rel="stylesheet">
  <link href="/backend/web/assets/css/demo.min.css" rel="stylesheet">
  <link href="/backend/web/assets/css/typicons.min.css" rel="stylesheet">
  <link href="/backend/web/assets/css/animate.min.css" rel="stylesheet">
  <link href="/backend/web/assets/css/custome.css" rel="stylesheet">
  <link href="/backend/web/assets/css/accounting.css" rel="stylesheet">
</head>

<body>

<div class="navbar">
  <div class="navbar-inner">
    <div class="navbar-container">
      <div class="navbar-header pull-left">
        <a href="/backend/" class="navbar-brand">
          <small>
            <img src="/backend/web/assets/img/logo.png"/>
          </small>
        </a>
      </div>

      <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="collapse-icon fa fa-bars"></i>
      </div>

      <div class="pull-left wrap-search">
        <form action="/backend/search/index">
          <input type="text"
                 class="form-control"
                 style="margin-top: 5px; margin-left: 35px; width: 350px;"
                 placeholder="Tìm khách hàng"
                 id="search"
          />
        </form>
        <div class="content-list" id="list">
          <ul class="drop-list">
            <li>
              <a class="item" href="#">
                <i class="icon people"></i>
                <p class="title">29A-12345</p>
                <p>Hang xe</p>
              </a>
            </li>
            <li>
              <a class="item" href="#">
                <i class="icon image"></i>
                <p class="title">29A-12345</p>
                <p>Hang xe</p>
              </a>
            </li>
            <li>
              <a class="item" href="#">
                <i class="icon video"></i>
                <p class="title">29A-12345</p>
                <p>Hang xe</p>
              </a>
            </li>
            <li>
              <a class="item" href="#">
                <i class="icon place"></i>
                <p class="title">29A-12345</p>
                <p>Hang xe</p>
              </a>
            </li>
            <li>
              <a class="item" href="#">
                <i class="icon music"></i>
                <p class="title">29A-12345</p>
                <p>Hang xe</p>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="navbar-header pull-right">
        <div class="navbar-account">
          <ul class="account-area">
            <li>
              <a class="wave in" id="chat-link" title="Chat" href="#">
                <i class="icon glyphicon glyphicon-comment"></i>
              </a>
            </li>
            <li>
              <a class="login-area dropdown-toggle" data-toggle="dropdown">
                <div class="avatar" title="View your public profile">
                  <img src="/backend/web/assets/img/anonymous.png">
                </div>
                <section>
                  <h2><span class="profile"><span>Administrator</span></span></h2>
                </section>
              </a>
              <!--Login Area Dropdown-->
              <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                <li class="username"><a>David Stevenson</a></li>
                <li class="email"><a>David.Stevenson@live.com</a></li>
                <!--Avatar Area-->
                <li>
                  <div class="avatar-area">
                    <img src="/backend/web/assets/img/anonymous.png" class="avatar">
                    <span class="caption">Change Photo</span>
                  </div>
                </li>
                <!--Avatar Area-->
                <li class="edit">
                  <a href="/backend/sign-in/profile" class="pull-left">Profile</a>
                  <a href="/backend/sign-in/profile" class="pull-right">Setting</a>
                </li>

                <!--/Theme Selector Area-->
                <li class="dropdown-footer">
                  <a class="" href="/backend/sign-in/logout" data-method="post">Đăng xuất</a></li>
              </ul>
              <!--/Login Area Dropdown-->
            </li>
            <!-- /Account Area -->
            <!--Note: notice that setting div must start right after account area list.
            no space must be between these elements-->
            <!-- Settings -->
          </ul>
          <div class="setting">
            <a id="btn-setting1" title="Setting" href="/backend/system/key-storage">
              <i class="icon glyphicon glyphicon-cog"></i>
            </a>

            <!-- Settings -->
          </div>
        </div>
        <!-- /Account Area and Settings -->
      </div>
    </div>
  </div>
  <!-- /Navbar -->
  <!-- Main Container -->
  <div class="main-container container-fluid">
    <!-- Page Container -->
    <div class="page-container">

      <!-- Page Sidebar -->
      <div class="page-sidebar" id="sidebar">

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="nav sidebar-menu">
          <li>
            <a href="#" class="menu-dropdown">
              <span class='menu-item'>
<span class='menu-icon'>
  <i class="menu-icon fa fa-th"></i>
</span>
<span class='menu-label'>Phân hệ thống</span>
<i class="menu-expand"></i>
</span>
            </a>
            <ul class="submenu">
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Danh mục quyển chứng từ</span></a></li>
              <li><a href="/backend/accounting/system/currency"><span
                    class="menu-text">Danh mục tiền tệ</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Danh mục nhân viên</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Khai báo ngày bắt đầu năm tài chính</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Danh mục tài khoản</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Danh mục khách hàng</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Danh mục vật tư</span></a></li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Danh mục kho hàng</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Danh mục vụ việc</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Danh mục loại chứng từ</span></a></li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Khóa số liệu</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Bảo trì số liệu</span></a></li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Khai báo người dùng và phân quyền truy cập</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Nhật ký người sử dụng</span></a></li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Danh mục thuế</span></a>
              </li>
            </ul>
          </li>
          <li><a href="#" class="menu-dropdown"><span class='menu-item'>
<span class='menu-icon'><i class="menu-icon fa fa-th"></i></span>
<span class='menu-label'>Phân tổng hợp</span>
<i class="menu-expand"></i>
</span></a>
            <ul class="submenu">
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Cập nhật phiếu kế toán</span></a></li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Khai báo các bút toán kết chuyển cuối kỳ</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Bút toán kết chuyển cuối kỳ</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Vào số dư đầu kỳ của các tài khoản</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Vào số dư đầu kỳ các công nợ</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Vào số dư đầu kỳ các vụ việc</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Vào tồn kho đầu kỳ</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Chuyển số dư tài khoản sang năm sau</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Chuyển số dư công nợ sang năm sau</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Chuyển số dư các vụ việc sang năm sau</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Chuyển tồn kho sang năm sau</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Bảng cân đối phát sinh các tài khoản</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Kết quả hoạt động kinh doanh</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Sổ chi tiết tài khoản</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Sổ tổng hợp chữ T của 1 tài khoản</span></a>
              </li>
            </ul>
          </li>
          <li><a href="#" class="menu-dropdown"><span class='menu-item'>
<span class='menu-icon'><i class="menu-icon fa fa-th"></i></span>
<span class='menu-label'>Tiền mặt, tiền gửi ngân hàng</span>
<i class="menu-expand"></i>
</span></a>
            <ul class="submenu">
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Phiếu thu tiền mặt</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Phiếu chi tiền mặt</span></a></li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Qiấy báo có (thu) của ngân hàng</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Giấy báo nợ (chi) của ngân hàng</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Sổ quỹ</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Sổ quỹ in theo ngày</span></a></li>
            </ul>
          </li>
          <li><a href="#" class="menu-dropdown"><span class='menu-item'>
<span class='menu-icon'><i class="menu-icon fa fa-th"></i></span>
<span class='menu-label'>Mua bán hàng và công nợ phải thu, phải trả</span>
<i class="menu-expand"></i>
</span></a>
            <ul class="submenu">
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Hóa đơn bán hàng kiêm phiếu xuất kho</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Hóa đơn dịch vụ</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Phiếu nhập mua hàng</span></a></li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Phiếu nhập chi phí mua hàng</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Phiếu trả lại nhà cung cấp</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Bảng kê phiếu nhập hàng bán bị trả lại</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Bảng kê hóa đơn bán hàng và dịch vụ</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Báo cáo tổng hợp bán hàng và dịch vụ</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Báo cáo bán hàng 2 chỉ tiêu</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Báo cáo tổng hợp hàng bán bị trả lại</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Báo cáo doanh số theo khách hàng</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Bảng kê phiếu nhập</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Bảng kê hóa đơn mua hàng và dịch vụ</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Bảng kê phiếu xuất trả lại nhà cung cấp</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Tổng hợp hàng hóa nhập mua</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Tổng hợp hàng xuất trả lại nhà cung cấp</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Báo cáo giá trị hàng nhập theo nhà cung cấp, vụ việc</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Báo cáo hàng nhập nhóm theo 2 chỉ tiêu</span></a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#" class="menu-dropdown">
                            <span class='menu-item'>
<span class='menu-icon'>
  <i class="menu-icon fa fa-th"></i>
</span>
<span class='menu-label'>Kế toán hàng tồn kho</span>
<i class="menu-expand"></i>
</span>
            </a>
            <ul class="submenu">
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Phiếu nhập kho</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Phiếu xuất kho</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Phiếu điều chuyển kho</span></a></li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Thẻ kho/ Sổ chi tiết vật tư</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Tổng hợp nhập xuất tồn</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Báo cáo tồn kho</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Báo cáo tồn theo kho</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Báo cáo tồn kho đầu kỳ</span></a></li>
            </ul>
          </li>
          <li><a href="#" class="menu-dropdown"><span class='menu-item'>
<span class='menu-icon'><i class="menu-icon fa fa-th"></i></span>
<span class='menu-label'>Báo cáo vụ việc, giá thành</span>
<i class="menu-expand"></i>
</span></a>
            <ul class="submenu">
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Sổ chi tiết vụ việc</span></a></li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Bảng kê chứng từ theo vụ việc</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span class="menu-text">Tổng hợp phát sinh theo vụ việc</span></a>
              </li>
              <li><a href="/backend/accounting/default/#"><span
                    class="menu-text">Bảng cân đối phát sinh các vụ việc</span></a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- /Sidebar Menu -->
      </div>
      <!-- /Page Sidebar -->
      <!-- Chat Bar -->
      <div id="chatbar" class="page-chatbar">
        <div class="chatbar-contacts">
          <div class="contacts-search">
            <input type="text" class="searchinput" placeholder="Search Contacts"/>
            <i class="searchicon fa fa-search"></i>
            <div class="searchhelper">Search Your Contacts and Chat History</div>
          </div>
          <ul class="contacts-list">
            <li class="contact">
              <div class="contact-avatar">
                <img src="/backend/web/assets/img/avatars/divyia.jpg"/>
              </div>
              <div class="contact-info">
                <div class="contact-name">Divyia Philips</div>
                <div class="contact-status">
                  <div class="online"></div>
                  <div class="status">online</div>
                </div>
                <div class="last-chat-time">
                  last week
                </div>
              </div>
            </li>
            <li class="contact">
              <div class="contact-avatar">
                <img src="/backend/web/assets/img/avatars/Nicolai-Larson.jpg"/>
              </div>
              <div class="contact-info">
                <div class="contact-name">Adam Johnson</div>
                <div class="contact-status">
                  <div class="offline"></div>
                  <div class="status">left 4 mins ago</div>
                </div>
                <div class="last-chat-time">
                  today
                </div>
              </div>
            </li>
            <li class="contact">
              <div class="contact-avatar">
                <img src="/backend/web/assets/img/avatars/John-Smith.jpg"/>
              </div>
              <div class="contact-info">
                <div class="contact-name">John Smith</div>
                <div class="contact-status">
                  <div class="online"></div>
                  <div class="status">online</div>
                </div>
                <div class="last-chat-time">
                  1:57 am
                </div>
              </div>
            </li>
            <li class="contact">
              <div class="contact-avatar">
                <img src="/backend/web/assets/img/avatars/Osvaldus-Valutis.jpg"/>
              </div>
              <div class="contact-info">
                <div class="contact-name">Osvaldus Valutis</div>
                <div class="contact-status">
                  <div class="online"></div>
                  <div class="status">online</div>
                </div>
                <div class="last-chat-time">
                  today
                </div>
              </div>
            </li>
            <li class="contact">
              <div class="contact-avatar">
                <img src="/backend/web/assets/img/avatars/Javi-Jimenez.jpg"/>
              </div>
              <div class="contact-info">
                <div class="contact-name">Javi Jimenez</div>
                <div class="contact-status">
                  <div class="online"></div>
                  <div class="status">online</div>
                </div>
                <div class="last-chat-time">
                  today
                </div>
              </div>
            </li>
            <li class="contact">
              <div class="contact-avatar">
                <img src="/backend/web/assets/img/avatars/Stephanie-Walter.jpg"/>
              </div>
              <div class="contact-info">
                <div class="contact-name">Stephanie Walter</div>
                <div class="contact-status">
                  <div class="online"></div>
                  <div class="status">online</div>
                </div>
                <div class="last-chat-time">
                  yesterday
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="chatbar-messages" style="display: none;">
          <div class="messages-contact">
            <div class="contact-avatar">
              <img src="/backend/web/assets/img/avatars/divyia.jpg"/>
            </div>
            <div class="contact-info">
              <div class="contact-name">Divyia Philips</div>
              <div class="contact-status">
                <div class="online"></div>
                <div class="status">online</div>
              </div>
              <div class="last-chat-time">
                a moment ago
              </div>
              <div class="back">
                <i class="fa fa-arrow-circle-left"></i>
              </div>
            </div>
          </div>
          <ul class="messages-list">
            <li class="message">
              <div class="message-info">
                <div class="bullet"></div>
                <div class="contact-name">Me</div>
                <div class="message-time">10:14 AM, Today</div>
              </div>
              <div class="message-body">
                Hi, Hope all is good. Are we meeting today?
              </div>
            </li>
            <li class="message reply">
              <div class="message-info">
                <div class="bullet"></div>
                <div class="contact-name">Divyia</div>
                <div class="message-time">10:15 AM, Today</div>
              </div>
              <div class="message-body">
                Hi, Hope all is good. Are we meeting today?
              </div>
            </li>
            <li class="message">
              <div class="message-info">
                <div class="bullet"></div>
                <div class="contact-name">Me</div>
                <div class="message-time">10:14 AM, Today</div>
              </div>
              <div class="message-body">
                Hi, Hope all is good. Are we meeting today?
              </div>
            </li>
            <li class="message reply">
              <div class="message-info">
                <div class="bullet"></div>
                <div class="contact-name">Divyia</div>
                <div class="message-time">10:15 AM, Today</div>
              </div>
              <div class="message-body">
                Hi, Hope all is good. Are we meeting today?
              </div>
            </li>
            <li class="message">
              <div class="message-info">
                <div class="bullet"></div>
                <div class="contact-name">Me</div>
                <div class="message-time">10:14 AM, Today</div>
              </div>
              <div class="message-body">
                Hi, Hope all is good. Are we meeting today?
              </div>
            </li>
            <li class="message reply">
              <div class="message-info">
                <div class="bullet"></div>
                <div class="contact-name">Divyia</div>
                <div class="message-time">10:15 AM, Today</div>
              </div>
              <div class="message-body">
                Hi, Hope all is good. Are we meeting today?
              </div>
            </li>
          </ul>
          <div class="send-message">
                        <span class="input-icon icon-right">
                            <textarea rows="4" class="form-control" placeholder="Type your message"></textarea>
                            <i class="fa fa-camera themeprimary"></i>
                        </span>
          </div>
        </div>
      </div>
      <!-- /Chat Bar -->
      <!-- Page Content -->
      <div class="page-content">
        <!-- Page Breadcrumb -->
        <div class="page-breadcrumbs">
          <ul class="breadcrumb">
            <li>
              <i class="fa fa-home"></i>
              <a href="/backend/">Trang chủ</a>
            </li>
          </ul>

          <div class=" pull-right">
            <a class="btn btn-default" href="/backend/repair/ticket/create">
              <i class="fa fa-plus withe"></i>Vào xưởng
            </a>

            <a class="btn btn-default" href="/backend/repair/invoice/create">
              <i class="fa fa-plus withe"></i>Lập báo giá
            </a>

            <a class="btn btn-default" href="/backend/repair/repair-command/create">
              <i class="fa fa-plus withe"></i>Lập lệnh sửa chữa
            </a>

            <a class="btn btn-default" href="/backend/repair/costing/create">
              <i class="fa fa-plus withe"></i>Hạch toán
            </a>
          </div>
        </div>
        <!-- /Page Breadcrumb -->
        <!-- Page Header -->
        <div class="page-header position-relative">
          <div class="header-title">
            <h1>
            </h1>
          </div>
          <!--Header Buttons-->
          <div class="header-buttons">
            <a class="sidebar-toggler" href="#">
              <i class="fa fa-arrows-h"></i>
            </a>
            <a class="refresh" id="refresh-toggler" href="">
              <i class="glyphicon glyphicon-refresh"></i>
            </a>

            <a class="fullscreen" id="fullscreen-toggler" href="#">
              <i class="glyphicon glyphicon-fullscreen"></i>
            </a>
          </div>
          <!--Header Buttons End-->
        </div>
        <!-- /Page Header -->
        <!-- Page Body -->
        <div class="page-body">
          <div class="row">
            <div class="tabbable">
            </div>
          </div>
          <div class="row">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="/backend/web/assets/js/skins.min.js"></script>
  <script src="/backend/web/assets/js/bootstrap.min.js"></script>
  <script src="/backend/web/assets/js/slimscroll/jquery.slimscroll.min.js"></script>
  <script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.9/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.0.0/js/dataTables.responsive.min.js"></script>
  <script src="/backend/web/assets/js/beyond.js"></script>
  <script src="/backend/web/assets/js/libs/bootbox.min.js"></script>
  <script src="/backend/web/assets/js/libs/confirm.js"></script>
  <script src="/backend/web/assets/js/common.js"></script>
  <script src="/backend/web/assets/js/data-helper.js"></script>
  <script src="/backend/web/assets/js/helper.js"></script>
  <script type="text/javascript">
    var pre = function (c, name) {
      return $(c).attr("pre-" + name);
    };

    var preview = function () {
      var element = '{{ csrf_field() }}';

      $(".frm_support_preview").find("[pre-show='true']").each(function (index) {
        var input_val = pre(this, "val");
        var input_name = pre(this, "label");

        element += '<input type="hidden" name="item[' + index + '][name]" value="' + input_name + '"/>\n';
        element += '<input type="hidden" name="item[' + index + '][val]" value="' + input_val + '"/>\n';
      });
      $("#fm_preview_accounting").html(element);
      $("#fm_preview_accounting").submit();

    };

    $(document).ready(function () {
      $(".frm_support_preview").find("[pre-show='true']").each(function (e) {
        $(this).attr('pre-val', $(this).val());
        var change_to = pre(this, "change-to");

        $(this).change(function () {
          $(this).attr('pre-val', $(this).val());
          if (change_to != '') {
            $(change_to).attr('pre-val', $(this).val());
            $(change_to).val($(this).val());
          }
        });

      });
    });
  </script>


  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
  </script>
</div>
@yield('scripts')

</body>
</html>
