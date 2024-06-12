<?php include_once 'link.php'; ?>



<div class="container-fluid" style="background-color: #071A30">
  <div class="container">
    <!-- Sidebar -->
    <nav class="navbar navbar-expand-lg">
      <!-- Brand -->
      <a class="navbar-brand" href="http://localhost/Qunatac/index.php">
        <img src="http://localhost/Qunatac/assets/Quantac.png" alt=" logo image " class="img-fluid"
          style="height: 25px">
      </a>
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" id="sidebarCollapse">
        <span class="fas fa-bars"></span>
      </button>
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Qunatac/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Qunatac/service/">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Qunatac/about_us/">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Qunatac/case_studies/">Case Studies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Qunatac/blog/">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Qunatac/contact/">Contact</a>
          </li>
        </ul>
        <div>
    <button class="btn btn-sm rounded-8 text-capitalize" onclick="BookMeeting()">
      Schedule a Meeting
    </button>
        </div>
      </div>
    </nav>
  </div>
</div>

<!-- Sidebar content -->
<div id="sidebar" class="container sidebar">
  <!-- Link -->
  <a class="nav-link" href="http://localhost/Qunatac/index.php">Home</a>

  <hr>
  <a class="nav-link" href="http://localhost/Qunatac/service/">Services</a>

  <hr>
  <a class="nav-link" href="http://localhost/Qunatac/about_us/">About Us</a>

  <hr>
  <a class="nav-link" href="http://localhost/Qunatac/case_studies/">Case Studies</a>

  <hr>
  <a class="nav-link" href="http://localhost/Qunatac/blog/">Blogs</a>

  <hr>
  <a class="nav-link" href="http://localhost/Qunatac/contact/">Contact</a>

  <hr>
    <button class="btn btn-sm rounded-8 text-capitalize" onclick="BookMeeting()">
      Schedule a Meeting
    </button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
      // Get the sidebar element
      var sidebar = document.getElementById('sidebar');

      // Check if the sidebar has the 'sidebar-active' class
      var isActive = sidebar.classList.contains('sidebar-active');

      if (isActive) {
        sidebar.classList.remove('sidebar-active');
      } else {
        sidebar.classList.add('sidebar-active');
      }
    });
  });

</script>

<style>
  .sidebar {
    width: 200px;
    height: 100vh;
    background-color: #071a30;
    z-index: 99;
    position: fixed;
    top: 0;
    right: -200px;
    margin-top: 60px;
    transition: right 0.3s ease;
  }

  .sidebar-active {
    right: 0;
  }

  .nav-link.active {
  color: #ffe164;
}
</style>

<script>
  function BookMeeting(){
window.open( 'https://koalendar.com/e/meet-with-dave-miller')
  }
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Get the current URL path
    const currentUrl = window.location.href;
    // Get all the nav links
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Loop through each nav link
    navLinks.forEach(function (link) {
        // Check if the href of the link is included in the current URL
        if (currentUrl.includes(link.getAttribute('href'))) {
            link.classList.add('active');
        }
    });
});
</script>
