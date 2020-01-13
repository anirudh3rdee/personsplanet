<!-- Sidebar navigation-->
<style type="text/css">
    .registerbtn {
  background-color: #6893b9;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  border-color: #6893b9;
  cursor: pointer;
  height: 60px;
  width: 100%;
  opacity: 0.9;
  border-width: 1px;
  border-style: solid;
  box-shadow: 0 0.25em 0 0 #a71000, 0 4px 9px rgba(0,0,0,0.75);
}

.registerbtn:hover {
  opacity: 1;
}
#para {
  margin-top: 80px;
 padding-left: 450px;
   border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  height: auto;
}
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 9px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: -20px; /* Add a top margin */
  margin-bottom: 8px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
label[for=email]{
  padding: 12px 12px 12px 0;
  display: inline-block;
  background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);background-size: 20px 20px;background-position: 1px 13px;background-repeat: no-repeat;
}
label[for=f_name]{
  padding: 12px 12px 12px 0;
  display: inline-block;
  background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);background-size: 20px 20px;background-position: 1px 13px;background-repeat: no-repeat;
}
label[for=msg]{
  padding: 12px 12px 12px 0;
  display: inline-block;
  background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);background-size: 20px 20px;background-position: 1px 13px;background-repeat: no-repeat;
}
 .link {
      color: #6893b9;
      text-decoration: none;
      &:hover {
         text-decoration: underline;
      }
   }
  </style>

<nav class="sidebar-nav">

    <ul id="sidebarnav" class="p-t-30">

        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Setting </span></a>

            <ul aria-expanded="false" class="collapse  first-level">

                <li class="sidebar-item"><a href="<?php echo base_url('admin/setting/header'); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Header </span></a></li>

                <li class="sidebar-item"><a href="<?php echo base_url('admin/setting/footer'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Footer </span></a></li>

                <li class="sidebar-item"><a href="<?php echo base_url('admin/pages/menu'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Header Menu </span></a></li>

                <li class="sidebar-item"><a href="<?php echo base_url('admin/setting/footer_menu'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Footer Menu </span></a></li>

            </ul>

        </li>

         <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Pages </span></a>

            <ul aria-expanded="false" class="collapse  first-level">

                <li class="sidebar-item"><a href="<?php echo base_url('admin/pages/all_pages'); ?>" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">All Pages </span></a></li>

                <li class="sidebar-item"><a href="<?php echo base_url('admin/pages/add_new_page'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> New Page </span></a></li>

                <!-- <li class="sidebar-item"><a href="" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Header Menu </span></a></li> -->

            </ul>

        </li>

        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link active" href="<?php echo base_url('admin/home'); ?>" aria-expanded="false"><i class="mdi mdi-file-image"></i><span class="hide-menu">Home page</span></a></li>

        

        <!-- <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link active" href="" aria-expanded="false"><i class="mdi mdi-file-image"></i><span class="hide-menu">Client Logo</span></a></li> -->

        <!-- <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link active" href="" aria-expanded="false"><i class="mdi mdi-folder-star"></i><span class="hide-menu">Review</span></a></li> -->

         <!-- <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link active" href="" aria-expanded="false"><i class="mdi mdi-youtube-play"></i><span class="hide-menu">Video</span></a></li> -->
         

          <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-image"></i><span class="hide-menu">Media </span></a>

            <ul aria-expanded="false" class="collapse  first-level">

                <li class="sidebar-item"><a id="get_all_media" data-toggle="modal" data-target="#get_media_popup" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Get a Media </span></a></li>

                <li class="sidebar-item"><a href="<?php echo base_url('admin/media'); ?>" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu">Media </span></a></li>


               

            </ul>

        </li>

        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-calendar"></i><span class="hide-menu">Events </span></a>

            <ul aria-expanded="false" class="collapse  first-level">

                <li class="sidebar-item"><a href="<?php echo base_url('admin/events/'); ?>" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu">All Events </span></a></li>

                <li class="sidebar-item"><a href="<?php echo base_url('admin/events/add_new'); ?>" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu"> Add Event </span></a></li>
            </ul>

        </li>
        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Courses </span></a>

            <ul aria-expanded="false" class="collapse  first-level">

                <li class="sidebar-item"><a href="<?php echo base_url('admin/courses/'); ?>" class="sidebar-link"><i class="mdi mdi-book"></i><span class="hide-menu">All Courses </span></a></li>

                <li class="sidebar-item"><a href="<?php echo base_url('admin/courses/add_new'); ?>" class="sidebar-link"><i class="mdi mdi-book"></i><span class="hide-menu"> Add Course </span></a></li>
            </ul>

        </li>

             

     <li class="sidebar-item"><a href="<?php echo base_url('admin/testimonial/'); ?>" class="sidebar-link"><i class="mdi mdi-comment"></i><span class="hide-menu">All Testimonials </span></a></li>
    <!-- <li class="sidebar-item"><a class="sidebar-link"><i class="fas fa-map-marker-alt"></i><span class="hide-menu">Event Location</span></a></li> -->
    <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-map-marker-alt"></i><span class="hide-menu">Location </span></a>

      <ul aria-expanded="false" class="collapse  first-level">

          <li class="sidebar-item"><a href="<?php echo base_url('admin/location/'); ?>" class="sidebar-link"><i class="fas fa-map-marker-alt"></i><span class="hide-menu">All Locations </span></a></li>

          <li class="sidebar-item"><a href="<?php echo base_url('admin/location/add_new'); ?>" class="sidebar-link"><i class="fas fa-map-marker-alt"></i><span class="hide-menu"> Add Location </span></a></li>
      </ul>

</li>
        </li>

       <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('admin/stylesheet'); ?>" aria-expanded="false"><i class="mdi mdi-file-image"></i><span class="hide-menu">Stylesheet </span></a></li>  

    </ul>

</nav>

<!-- End Sidebar navigation -->

 <!-- Media Popup -->
         