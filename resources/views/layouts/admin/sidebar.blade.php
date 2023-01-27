<!-- Sidebar  -->
<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="index.html" class="header-logo">
          <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
          <div class="logo-title">
             <span class="text-primary text-uppercase">Muzik</span> 
          </div>
       </a>
       <div class="iq-menu-bt-sidebar">
          <div class="iq-menu-bt align-self-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="las la-bars"></i></div>
             </div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
            <li>
               <a href="{{route('admin.dashboard.index')}}" class="iq-waves-effect"><i class="las la-calendar iq-arrow-left"></i><span>Dashboard</span></a>
            </li>
            <li class="active">
               <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="ri-admin-line iq-arrow-left"></i><span>Admin</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                  <li class="active"><a href="admin-dashboard.html"><i class="las la-house-damage"></i>Dashboard</a></li>
                  <li><a href="admin-category.html"><i class="ri-function-line"></i>Category</a></li>
                  <li><a href="admin-writer.html"><i class="las la-user"></i>Writer</a></li>
                  <li><a href="admin-singer.html"><i class="las la-microphone-alt"></i>Singer</a></li>
                  <li><a href="admin-song.html"><i class="las la-play-circle"></i>Music</a></li>
               </ul>
            </li>

             <li>
                <a href="#menu-level" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line iq-arrow-left"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="menu-level" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                   <li>
                      <a href="#"><i class="ri-record-circle-line"></i>Menu 2</a>
                      <ul>
                         <li class="menu-level">
                            <a href="#sub-menus" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-play-circle-line"></i><span>Sub-menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                            <ul id="sub-menus" class="iq-submenu iq-submenu-data collapse">
                               <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 1</a></li>
                               <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 2</a></li>
                               <li><a href="#"><i class="ri-record-circle-line"></i>Sub-menu 3</a></li>
                            </ul>
                         </li>
                      </ul>
                   </li>
                   <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3</a></li>
                   <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                </ul>
             </li>
          </ul>
       </nav>
    </div>
 </div>