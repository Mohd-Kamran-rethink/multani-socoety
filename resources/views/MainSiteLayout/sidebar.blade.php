<div class="menu">
    <div class="main-menu">
        <div class="scroll">
            <ul class="list-unstyled">
                <li class="active">
                    <a href="{{ url('app/dashboard') }}">
                        <i class="simple-icon-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="#layouts">
                        <i class="iconsminds-digital-drawing"></i> Analytics
                    </a>
                </li>
                <li>
                    <a href="#applications">
                        <i class="simple-icon-grid"></i> Features
                    </a>
                </li>
                <li>
                    <a href="#ui">
                        <i class="iconsminds-financial"></i> Funds
                    </a>
                </li>
                <li>
                    <a href="#bureau">
                        <i class="iconsminds-family-sign"></i> Bureau
                    </a>
                </li>
                <li>
                    <a href="#menu">
                        <i class="iconsminds-engineering"></i> Members
                    </a>
                </li>
                <li>
                    <a href="https://dore-jquery-docs.coloredstrategies.com" target="_blank">
                        <i class="simple-icon-paper-plane"></i> Appeal
                    </a>
                </li>
                <li class="">
                    <a href="Blank.Page.html">
                        <i class="simple-icon-question"></i>Help
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="sub-menu">
        <div class="scroll">
            {{-- <ul class="list-unstyled" data-link="dashboard">
                <li>
                    <a href="Dashboard.Default.html">
                        <i class="simple-icon-rocket"></i> <span class="d-inline-block">Default</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Analytics.html">
                        <i class="simple-icon-pie-chart"></i> <span class="d-inline-block">Analytics</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Ecommerce.html">
                        <i class="simple-icon-basket-loaded"></i> <span class="d-inline-block">Ecommerce</span>
                    </a>
                </li>
                <li>
                    <a href="Dashboard.Content.html">
                        <i class="simple-icon-doc"></i> <span class="d-inline-block">Content</span>
                    </a>
                </li>
            </ul> --}}
            <ul class="list-unstyled" data-link="layouts" id="layouts">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseAuthorization" aria-expanded="true"
                        aria-controls="collapseAuthorization" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Community Analytics</span>
                    </a>
                    <div id="collapseAuthorization" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Pages.Auth.Login.html">
                                    <i class="iconsminds-map-marker-2"></i> <span class="d-inline-block">In India</span>
                                </a>
                            </li>
                            <li>
                                <a href="Pages.Auth.Register.html">
                                    <i class="iconsminds-map2"></i> <span class="d-inline-block">Globally</span>
                                </a>
                            </li>
                            <li>
                                <a href="Pages.Auth.Register.html">
                                    <i class="iconsminds-edit-map"></i> <span class="d-inline-block">Customized</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
               
            </ul>
            <ul class="list-unstyled" data-link="applications">
                <li>
                    <a href="Apps.MediaLibrary.html">
                        <i class="iconsminds-blogger"></i> <span class="d-inline-block">Blogs</span>
                    </a>
                </li>
                <li>
                    <a href="Apps.Todo.List.html">
                        <i class="iconsminds-newspaper"></i> <span class="d-inline-block">News</span>
                    </a>
                </li>
                <li>
                    <a href="Apps.Survey.List.html">
                        <i class="simple-icon-calculator"></i> <span class="d-inline-block">Survey</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="Apps.Chat.html">
                        <i class="simple-icon-bubbles"></i> <span class="d-inline-block">Chat</span>
                    </a>
                </li> --}}
            </ul>
            <ul class="list-unstyled" data-link="ui">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseForms" aria-expanded="true"
                        aria-controls="collapseForms" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Raise Funds</span>
                    </a>
                    <div id="collapseForms" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Ui.Forms.Components.html">
                                    <i class="simple-icon-event"></i> <span class="d-inline-block">For Society</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Forms.Layouts.html">
                                    <i class="simple-icon-doc"></i> <span class="d-inline-block">For Poors</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Forms.Validation.html">
                                    <i class="simple-icon-check"></i> <span class="d-inline-block">For Medicals</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Forms.Wizard.html">
                                    <i class="simple-icon-magic-wand"></i> <span class="d-inline-block">Charity Funds</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseDataTables" aria-expanded="true"
                        aria-controls="collapseDataTables" class="rotate-arrow-icon opacity-50">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Request Funds</span>
                    </a>
                    <div id="collapseDataTables" class="collapse show">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Ui.Datatables.Rows.html">
                                    <i class="simple-icon-screen-desktop"></i> <span class="d-inline-block">For Education</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Datatables.Scroll.html">
                                    <i class="simple-icon-mouse"></i> <span class="d-inline-block">For Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="Ui.Datatables.Pagination.html">
                                    <i class="simple-icon-notebook"></i> <span
                                        class="d-inline-block">For Business</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <ul class="list-unstyled" data-link="bureau">
                            <li>
                                <a href="Ui.Forms.Components.html">
                                    <i class="simple-icon-user"></i> <span class="d-inline-block">Male</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="simple-icon-user-female"></i> <span class="d-inline-block">Querry Women's Data</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="iconsminds-add-user"></i> <span class="d-inline-block">Add Your Data</span>
                                </a>
                            </li>
                
            </ul> 

            <ul class="list-unstyled" data-link="menu" id="menuTypes">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuTypes" aria-expanded="true"
                        aria-controls="collapseMenuTypes" class="rotate-arrow-icon">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Types</span>
                    </a>
                    <div id="collapseMenuTypes" class="collapse show" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="Menu.Default.html">
                                    <i class="simple-icon-control-pause"></i> <span
                                        class="d-inline-block">Default</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Subhidden.html">
                                    <i class="simple-icon-arrow-left mi-subhidden"></i> <span
                                        class="d-inline-block">Subhidden</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Hidden.html">
                                    <i class="simple-icon-control-start mi-hidden"></i> <span
                                        class="d-inline-block">Hidden</span>
                                </a>
                            </li>
                            <li>
                                <a href="Menu.Mainhidden.html">
                                    <i class="simple-icon-control-rewind mi-hidden"></i> <span
                                        class="d-inline-block">Mainhidden</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel" aria-expanded="true"
                        aria-controls="collapseMenuLevel" class="rotate-arrow-icon collapsed">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Menu Levels</span>
                    </a>
                    <div id="collapseMenuLevel" class="collapse" data-parent="#menuTypes">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="#">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                        Level</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#collapseMenuLevel2"
                                    aria-expanded="true" aria-controls="collapseMenuLevel2"
                                    class="rotate-arrow-icon collapsed">
                                    <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Another
                                        Level</span>
                                </a>
                                <div id="collapseMenuLevel2" class="collapse">
                                    <ul class="list-unstyled inner-level-menu">
                                        <li>
                                            <a href="#">
                                                <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                                    Level</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached"
                        aria-expanded="true" aria-controls="collapseMenuDetached"
                        class="rotate-arrow-icon collapsed">
                        <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                    </a>
                    <div id="collapseMenuDetached" class="collapse">
                        <ul class="list-unstyled inner-level-menu">
                            <li>
                                <a href="#">
                                    <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                        Level</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dont-close-menu">
                        <a href="#">
                            <i class="simple-icon-arrow-right"></i> <span class="d-inline-block">Keep Sub
                                Open</span>
                        </a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</div>
