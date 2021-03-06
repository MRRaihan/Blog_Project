<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('assets/admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
                <a href="{{route('admin.dashboard')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard

                    </p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Users
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('user.index')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>User List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('user.create')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Create New User</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Categories
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Category List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.create')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Create New Category</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-user-shield"></i>
                    <p>
                        Authors
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('author.index')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Author List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('author.create')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Create New Author</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tag"></i>
                    <p>
                        Tags
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('tag.index')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Tag List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('tag.create')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Create New Tag</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-pen-square"></i>
                    <p>
                        Posts
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('post.index')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Post List</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('post.create')}}" class="nav-link">
                            <i class="far  nav-icon"></i>
                            <p>Create New Post</p>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
