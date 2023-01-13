<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route("home") }}">
      <div class="sidebar-brand-icon">
        <img src="{{ url("img/cloud.png") }}" width="60px">
      </div>
      <div class="sidebar-brand-text mx-3">MyCloud</sup></div>
    </a>
  
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="?site=dirview&itemid=root">
        <i class="fa fa-folder"></i>
        <span>Thư mục của tôi</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="?site=dirview&itemid=share">
        <i class="fa fa-share"></i>
        <span>Chia sẻ với tôi</span></a>
    </li>
    <!-- Divider -->
    <!-- <hr class="sidebar-divider d-none d-md-block"> -->
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#createFolderModal">
        <i class="fa fa-folder"></i>
        <span>Tạo thư mục</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#uploadFolderModal">
        <i class="fa fa-upload"></i>
        <span>Tải lên thư mục</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#uploadFileModal">
        <i class="fa fa-upload"></i>
        <span>Tải lên tệp tin</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
    @include("modals.folder_create")
    @include("modals.folder_upload")
    <?php //getModal("file.upload", $viewParams) ?>
    <?php //getModal("item.rename", $viewParams) ?>
    <?php //getModal("item.delete", $viewParams) ?>
    <?php //getModal("share", $viewParams) ?>
  </ul>
  <!-- End of Sidebar -->