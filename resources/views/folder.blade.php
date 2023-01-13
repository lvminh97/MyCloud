@include("layouts.header")

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    @include("layouts.sidebar")
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        @include("layouts.topbar")
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">
            <div class="col-12">
            @php
            if ($folder["public"] == 1) {
                $mTop = "50px";
                $dirHeight = "75vh";
            }
            else { 
                $mTop = "auto";
                $dirHeight = "64vh";
            }
            @endphp
              <h5 style="display: block; font-weight: bold; margin-left: 50px; margin-top: {{ $mTop }}; margin-bottom: 20px;">
                <?php echo $folder["name"] ?>
              </h5>
              <div style="display: block; width: 90%; height: {{ $dirHeight }}; margin-left: 50px; margin-right: 50px; overflow-y: scroll; background: #fff; border: solid #eee;">
                <div class="table-responsive">
                  <table class="table">
                    @if (count($itemList) > 0)
                    @foreach ($itemList as $item)
                    <tr>
                        <td width="10%">
                          @php
                          $icon = "img/";
                          if ($item['type'] == "folder") {
                            $icon .= getItemName($item['path']) != ".." ? "folder.png" : "return.png";
                          } else {
                            $icon .= "file.png";
                          }
                          @endphp
                          <img src="{{ url($icon) }}" width="28">
                        </td>
                        <td width="40%">
                          @if ($item['type'] == "folder")
                          <a href="?site=dirview&itemid={{ $item['item_id'] }}">
                          @else
                          <a href='#' data-toggle='modal' data-target='#fileViewModal' onclick="fileView('{{ $item['item_id'] }}', '{{ $item['type'] }}')" >
                          @endif
                          {{ $folder["name"] }}
                          </a>
                        </td>
                        <td width="10%">
                          @if (getItemName($item['path']) != "..")
                            <div class="dropdown">
                              <button data-toggle="dropdown"><i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i></button>
                              <ul class="dropdown-menu" id="<?php echo "item__" . $item['item_id']; ?>">
                                @if ($item['type'] != "folder")
                                  <li onclick="downloadItem(this)">Tải xuống</li>
                                @endif
                                
                                @if($viewParams['type'] == "own")
                                <li data-toggle="modal" onclick="setShareItem(this)" data-target="#shareModal">Chia sẻ </li>
                                @endif
                                
                                @if($viewParams['type'] != "public")
                                <li data-toggle="modal" onclick="setRenameItem(this)" data-target="#renameModal">Đổi tên</li>
                                <li data-toggle="modal" onclick="setDeleteItemId(this)" data-target="#deleteModal">Xóa</li> 
                                @else
                                <li data-toggle="modal" onclick="alert('Bạn không có quyền để thực hiện mục này?')" data-target="#renameModal">Đổi tên</li>
                                <li data-toggle="modal" onclick="alert('Bạn không có quyền để thực hiện mục này?')" data-target="#deleteModal">Xóa</li>
                                @endif
                              </ul>
                            </div>
                          @endif
                        </td>
                        <td width="20%">
                            @if (getItemName($item['path']) != "..") 
                            {{ $item['type'] }}
                            @endif
                        </td>
                        <td width="20%">
                            @if (getItemName($item['path']) != "..") 
                            {{ date("H:i:s d/m/Y", filemtime("Resource/" . $item['path'])) }}
                            @endif 
                        </td>
                    </tr>
                    @endforeach
                    @endif
                    <tr>
                      <td colspan="5" height="150px" style="background-color: transparent;"></td>
                    </tr>
                  </table>
                  @include("modals.file_view")
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End of Main Content -->
@include("layouts.footer")