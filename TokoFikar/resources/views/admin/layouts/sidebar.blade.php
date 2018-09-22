<div class="sidebar" data-background-color="white" data-active-color="danger">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/') }}" class="simple-text">
                Toko Fikar Admin
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="{{ url('/') }}">
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/products/create') }}">
                    <i class="ti-archive"></i>
                    <p>Tambah Produk</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/products') }}">
                    <i class="ti-view-list-alt"></i>
                    <p>Lihat Produk</p>
                </a>
            </li>
            <li>
                    <a href="{{ url('/orders') }}">
                    <i class="ti-calendar"></i>
                    <p>Pesanan</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/users') }}">
                    <i class="fa fa-users"></i>
                    <p>Pengguna</p>
                </a>
            </li>
        </ul>
    </div>
</div>