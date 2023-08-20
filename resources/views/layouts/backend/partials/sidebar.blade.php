<div id="scrollbar">
    <div class="container-fluid">

        <div id="two-column-menu">
        </div>
        <ul class="navbar-nav" id="navbar-nav">

            <li class="menu-title"><span data-key="t-menu">Menu</span></li>

            <li class="nav-item">
                <a href="{{ route('app.dashboard') }}" class="nav-link menu-link"> <span data-key="t-dashboard">Dashboard</span> </a>
            </li>


            <li class="nav-item">
                <a href="#sidebarDocs" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDocs">
                    <i class="ph-ticket"></i> <span data-key="t-support-tickets">Manage Documents</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarDocs">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="{{route('app.documents.index')}}" class="nav-link" data-key="t-list-view">Documents</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('app.docsversion.index')}}" class="nav-link" data-key="t-overview">Documents Versoin</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a href="#sidebarTickets" class="nav-link menu-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets">
                    <i class="ph-ticket"></i> <span data-key="t-support-tickets">Client Request</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarTickets">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view">List View</a>
                        </li>
                        <li class="nav-item">
                            <a href="apps-tickets-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link menu-link collapsed" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                    <i class="ph-user-circle"></i> <span data-key="t-authentication">Authentication</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarAuth">
                    <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link" role="button" data-key="t-signin"> Users </a>
                        </li>

                    </ul>
                </div>
            </li>





        </ul>
    </div>
    <!-- Sidebar -->
</div>
