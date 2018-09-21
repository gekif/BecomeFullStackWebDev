<div class="sidebar" data-background-color="white" data-active-color="danger">

    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ url('/admin') }}" class="simple-text">
                Toko Fikar Admin
            </a>
        </div>

        <ul class="nav">
            <li>
                <a href="{{ url('/admin') }}">
                {{--<a href="/admin">--}}
                    <i class="ti-panel"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/products/create') }}">
                {{--<a href="/admin/products/create">--}}
                    <i class="ti-archive"></i>
                    <p>Tambah Produk</p>
                </a>
            </li>
            <li>
                <a href="{{ url('/admin/products') }}">
                {{--<a href="admin/products">--}}
                    <i class="ti-view-list-alt"></i>
                    <p>Lihat Produk</p>
                </a>
            </li>
            <li>
                {{--<a href="admin/orders">--}}
                    <a href="{{ url('/admin/orders') }}">
                    <i class="ti-calendar"></i>
                    <p>Pesanan</p>
                </a>
            </li>
            <li>
                {{--<a href="admin/users">--}}
                <a href="{{ url('/admin/users') }}">
                    <i class="fa fa-users"></i>
                    <p>Pengguna</p>
                </a>
            </li>
        </ul>
    </div>
</div>