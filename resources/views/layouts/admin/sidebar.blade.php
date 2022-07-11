        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebar-menu">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="" href="{{ url('/dashboard') }}" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="nav-label">Resource</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-file"></i><span class="hide-menu">Products</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/product') }}">Show Products</a></li>
                                <li><a href="layout-boxed.html">Barcode</a></li>
                                <li><a href="layout-fix-header.html">Status</a></li>
                                <li><a href="layout-fix-sidebar.html">Trash</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-columns"></i><span class="hide-menu">Categories</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/category') }}">Show All Categories</a></li>
                                <li><a href="layout-boxed.html">Sub Category</a></li>
                                <li><a href="layout-fix-header.html">View Product</a></li>
                                <li><a href="layout-fix-sidebar.html">Trash</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Statistic Products</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Pembelian</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.html">Overview</a></li>
                                <li><a href="email-read.html">Transaksi Sukses</a></li>
                                <li><a href="email-inbox.html">Transaksi Gagal</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-file-text"></i><span class="hide-menu">Invoices</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ url('/admin/invoices') }}">Overview</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Keuangan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.html">Pendapatan</a></li>
                                <li><a href="chart-morris.html">Pengeluaran</a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Customers</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Data Penyewa</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.html">Overview</a></li>
                                <li><a href="email-read.html">Transaksi Sukses</a></li>
                                <li><a href="email-inbox.html">Transaksi Gagal</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->