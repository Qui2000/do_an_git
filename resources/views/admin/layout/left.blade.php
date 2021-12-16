<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="{{ route('admin.home') }}" class="waves-effect"><i class="fa fa-clock-o m-r-10" aria-hidden="true"></i>Trang chủ</a>
                </li>
                <li>
                    <a href="{{ route('admin.profile') }}" class="waves-effect"><i class="fa fa-user m-r-10" aria-hidden="true"></i>Thông tin cá nhân</a>
                </li>
                <li>
                    <a href="{{ route('admin.putPitch.index') }}" class="waves-effect"><i class="fa fa-address-card-o m-r-10" aria-hidden="true"></i>Quản lý đặt sân</a>
                </li>
                <li>
                    <a href="{{ route('admin.customer.index') }}" class="waves-effect"><i class="fa fa-address-card-o m-r-10" aria-hidden="true"></i>Quản lý khách hàng</a>
                </li>
                <li>
                    <a href="{{ route('admin.personnel.index') }}" class="waves-effect"><i class="fa fa-address-card-o m-r-10" aria-hidden="true"></i>Quản lý nhân viên</a>
                </li>
                <li>
                    <a href="{{ route('admin.football_pitch.index') }}" class="waves-effect"><i class="fa fa-futbol-o m-r-10" aria-hidden="true"></i>Quản lý sân bóng</a>
                </li>
                <li>
                    <a href="{{ route('admin.service.index') }}" class="waves-effect"><i class="fa fa-columns m-r-10" aria-hidden="true"></i>Quản lý dịch vụ</a>
                </li>
                <li>
                    <a href="{{ route('admin.regulation.index') }}" class="waves-effect"><i class="fa fa-info-circle m-r-10" aria-hidden="true"></i>Quản lý qui định</a>
                </li>
                <li>
                    <a href="{{ route('admin.chart.index') }}" class="waves-effect"><i class="fa fa-bar-chart m-r-10" aria-hidden="true"></i>Thống kê</a>
                </li>
            </ul>
            <div class="text-center m-t-30">
                <a href="https://themewagon.com/themes/free-bootstrap-4-admin-dashboard-template/" class="btn btn-danger">Đăng xuất</a>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>