<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
<div class="position-sticky pt-3 sidebar-sticky">
  <div class="border p-1">
    <?php echo $_SESSION['name']; ?> <br>
    <?php echo $_SESSION['email']; ?> <br>
    <?php echo $_SESSION['role']; ?> <br>
  </div>        
<ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" >
              <span data-feather="file" class="align-text-bottom"></span>
              Posts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin?module=category&action=category_list">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin?module=users&action=users_list">
              <span data-feather="users" class="align-text-bottom"></span>
              Users
            </a>
          </li>
        
        </ul>

      
      </div>
    </nav>