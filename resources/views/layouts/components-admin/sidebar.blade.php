     <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <ul class="nav">
             <li class="nav-item">
                 <a class="nav-link" href="{{ route('home') }}">
                     <i class="icon-grid menu-icon"></i>
                     <span class="menu-title">Dashboard</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                     <i class="icon-grid-2 menu-icon"></i>
                     <span class="menu-title">Tables</span>
                     <i class="menu-arrow"></i>
                 </a>
                 <div class="collapse" id="tables">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item"> <a class="nav-link" href="{{ route('kategori.index') }}">Kategori</a>
                         </li>
                         <li class="nav-item"> <a class="nav-link" href="{{ route('Merk.index') }}">Merk</a></li>
                         <li class="nav-item"> <a class="nav-link" href="{{ route('Produks.index') }}">Produk</a></li>
                     </ul>
                 </div>
             </li>
         </ul>
     </nav>
