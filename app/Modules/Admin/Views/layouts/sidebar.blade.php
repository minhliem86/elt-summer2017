  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class=""><a href=""><i class="fa fa-photo"></i> <span>Thống kê</span></a></li> -->
        <li class="{!!\Active::setActive(2,'dashboard')!!}"><a href="{!!url('admin/dashboard')!!}"><i class="fa fa-photo"></i> <span>Dashboard</span></a></li>
        <li class="{!!\Active::setActive(2,'center')!!}"><a href="{!!url('admin/center')!!}"><i class="fa fa-photo"></i> <span>Center</span></a></li>
        <li class="{!!\Active::setActive(2,'promotion')!!}"><a href="{!!route('admin.promotion.index')!!}"><i class="fa fa-photo"></i> <span>Promotions</span></a></li>
        <li class="{!!\Active::setActive(2,'testimonial')!!}"><a href="{!!route('admin.testimonial.index')!!}"><i class="fa fa-photo"></i> <span>Testinmonials</span></a></li>
        <li class="{!!\Active::setActive(2,'album')!!}"><a href="{!!route('admin.album.index')!!}"><i class="fa fa-photo"></i> <span>Albums</span></a></li>
        <li class="{!!\Active::setActive(2,'image')!!}"><a href="{!!route('admin.image.index')!!}"><i class="fa fa-photo"></i> <span>Image</span></a></li>
        <li class="{!!\Active::setActive(2,'video')!!}"><a href="{!!route('admin.video.index')!!}"><i class="fa fa-photo"></i> <span>Videos</span></a></li>
        <li class="{!!\Active::setActive(2,'activity')!!}"><a href="{!!route('admin.activity.index')!!}"><i class="fa fa-photo"></i> <span>Activity</span></a></li>
        <li class="{!!\Active::setActive(2,'schedule')!!}"><a href="{!!route('admin.schedule.index')!!}"><i class="fa fa-photo"></i> <span>Schedule</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
