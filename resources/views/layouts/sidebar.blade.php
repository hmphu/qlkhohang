 <div class="side-content-wrap">
        <div
          class="sidebar-left open rtl-ps-none"
          data-perfect-scrollbar
          data-suppress-scroll-x="true">
          <ul class="navigation-left">
            <li class="nav-item " data-item="dashboard">
              <a class="nav-item-hold" href="#">
                <i class="nav-icon i-Bar-Chart"></i>
                <span class="nav-text">Dashboard</span>
              </a>
              <div class="triangle"></div>
            </li>
            <li class="nav-item active" data-item="uikits">
              <a class="nav-item-hold" href="#">
                <i class="nav-icon i-Library"></i>
                <span class="nav-text">UI kits</span>
              </a>
              <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="extrakits">
              <a class="nav-item-hold" href="#">
                <i class="nav-icon i-Suitcase"></i>
                <span class="nav-text">Extra kits</span>
              </a>
              <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="apps">
              <a class="nav-item-hold" href="#">
                <i class="nav-icon i-Computer-Secure"></i>
                <span class="nav-text">Apps</span>
              </a>
              <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="forms">
              <a class="nav-item-hold" href="#">
                <i class="nav-icon i-File-Clipboard-File--Text"></i>
                <span class="nav-text">Forms</span>
              </a>
              <div class="triangle"></div>
            </li>
            <li class="nav-item">
              <a class="nav-item-hold" href="datatables.html">
                <i class="nav-icon i-File-Horizontal-Text"></i>
                <span class="nav-text">Datatables</span>
              </a>
              <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="sessions">
              <a class="nav-item-hold" href="#">
                <i class="nav-icon i-Administrator"></i>
                <span class="nav-text">Người Dùng</span>
              </a>
              <div class="triangle"></div>
            </li>
            <li class="nav-item" data-item="others">
              <a class="nav-item-hold" href="#">
                <i class="nav-icon i-Double-Tap"></i>
                <span class="nav-text">Others</span>
              </a>
              <div class="triangle"></div>
            </li>
            <li class="nav-item">
              <a
                class="nav-item-hold"
                href="http://demos.ui-lib.com/gull-html-doc/"
                target="_blank"
              >
                <i class="nav-icon i-Safe-Box1"></i>
                <span class="nav-text">Doc</span>
              </a>
              <div class="triangle"></div>
            </li>
          </ul>
        </div>

        <div
          class="sidebar-left-secondary rtl-ps-none"
          data-perfect-scrollbar
          data-suppress-scroll-x="true"
        >
        <i class="sidebar-close i-Close" (click)="toggelSidebar()"></i>
        <header>
            <div class="logo">
                <img src="{{asset('assets/images/logo-text.png')}}" alt="">
            </div>
        </header>
          <!-- Submenu Dashboards -->
          <div class="submenu-area" data-parent="dashboard">
            <header>
                <h6>Dashboards</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
            <ul class="childNav">
                <li class="nav-item">
                    <a href="dashboard.v1.html">
                    <i class="nav-icon i-Clock-3"></i>
                    <span class="item-name">Version 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.v2.html">
                    <i class="nav-icon i-Clock-4"></i>
                    <span class="item-name">Version 2</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.v3.html">
                    <i class="nav-icon i-Over-Time"></i>
                    <span class="item-name">Version 3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard.v4.html">
                    <i class="nav-icon i-Clock"></i>
                    <span class="item-name">Version 4</span>
                    </a>
                </li>
                </ul>
          </div>
          <div class="submenu-area" data-parent="forms">
                <header>
                    <h6>Forms</h6>
                    <p>Lorem ipsum dolor sit.</p>
                </header>
                <ul class="childNav">
                    <li class="nav-item">
                        <a href="form.basic.html">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Basic Elements</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="form.layouts.html">
                        <i class="nav-icon i-Split-Vertical"></i>
                        <span class="item-name">Form Layouts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="form.input.group.html">
                        <i class="nav-icon i-Receipt-4"></i>
                        <span class="item-name">Input Groups</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="form.validation.html">
                        <i class="nav-icon i-Close-Window"></i>
                        <span class="item-name">Form Validation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="smart.wizard.html">
                        <i class="nav-icon i-Width-Window"></i>
                        <span class="item-name">Smart Wizard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tag.input.html">
                        <i class="nav-icon i-Tag-2"></i>
                        <span class="item-name">Tag Input</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="editor.html">
                        <i class="nav-icon i-Pen-2"></i>
                        <span class="item-name">Rich Editor</span>
                        </a>
                    </li>
                    </ul>
          </div>
          <div class="submenu-area" data-parent="apps">
            <header>
                <h6>Apps</h6>
                <p>Lorem ipsum dolor sit.</p>
            </header>
                <ul class="childNav">
                    <li class="nav-item">
                        <a href="invoice.html">
                        <i class="nav-icon i-Add-File"></i>
                        <span class="item-name">Invoice</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="inbox.html">
                        <i class="nav-icon i-Email"></i>
                        <span class="item-name">Inbox</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="chat.html">
                        <i class="nav-icon i-Speach-Bubble-3"></i>
                        <span class="item-name">Chat</span>
                        </a>
                    </li>
                </ul>
          </div>
          <div class="submenu-area" data-parent="extrakits">
                <header>
                    <h6>Extra Kits</h6>
                    <p>Lorem ipsum dolor sit.</p>
                </header>
                <ul class="childNav">
                    <li class="nav-item">
                        <a href="image.cropper.html">
                        <i class="nav-icon i-Crop-2"></i>
                        <span class="item-name">Image Cropper</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="loaders.html">
                        <i class="nav-icon i-Loading-3"></i>
                        <span class="item-name">Loaders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ladda.button.html">
                        <i class="nav-icon i-Loading-2"></i>
                        <span class="item-name">Ladda Buttons</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="toastr.html">
                        <i class="nav-icon i-Bell"></i>
                        <span class="item-name">Toastr</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="sweet.alerts.html">
                        <i class="nav-icon i-Approved-Window"></i>
                        <span class="item-name">Sweet Alerts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tour.html">
                        <i class="nav-icon i-Plane"></i>
                        <span class="item-name">User Tour</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="upload.html">
                        <i class="nav-icon i-Data-Upload"></i>
                        <span class="item-name">Upload</span>
                        </a>
                    </li>
                    </ul>
          </div>
          <div class="submenu-area" data-parent="uikits">
                <header>
                        <h6>UI Kits</h6>
                        <p>Lorem ipsum dolor sit.</p>
                    </header>
                <ul class="childNav">
                    <li class="nav-item">
                        <a href="alerts.html">
                        <i class="nav-icon i-Bell1"></i>
                        <span class="item-name">Alerts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="accordion.html">
                        <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                        <span class="item-name">Accordion</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="badges.html" class="open">
                        <i class="nav-icon i-Medal-2"></i>
                        <span class="item-name">Badges</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="buttons.html">
                        <i class="nav-icon i-Cursor-Click"></i>
                        <span class="item-name">Buttons</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="cards.html">
                        <i class="nav-icon i-Line-Chart-2"></i>
                        <span class="item-name">Cards</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="card.metrics.html">
                        <i class="nav-icon i-ID-Card"></i>
                        <span class="item-name">Card Metrics</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="carousel.html">
                        <i class="nav-icon i-Video-Photographer"></i>
                        <span class="item-name">Carousels</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="lists.html">
                        <i class="nav-icon i-Belt-3"></i>
                        <span class="item-name">Lists</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="pagination.html">
                        <i class="nav-icon i-Arrow-Next"></i>
                        <span class="item-name">Paginations</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="popover.html">
                        <i class="nav-icon i-Speach-Bubble-2"></i>
                        <span class="item-name">Popover</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="progressbar.html">
                        <i class="nav-icon i-Loading"></i>
                        <span class="item-name">Progressbar</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tables.html">
                        <i class="nav-icon i-File-Horizontal-Text"></i>
                        <span class="item-name">Tables</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tabs.html">
                        <i class="nav-icon i-New-Tab"></i>
                        <span class="item-name">Tabs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="tooltip.html">
                        <i class="nav-icon i-Speach-Bubble-8"></i>
                        <span class="item-name">Tooltip</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="modals.html">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Modals</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="nouislider.html">
                        <i class="nav-icon i-Width-Window"></i>
                        <span class="item-name">Sliders</span>
                        </a>
                    </li>
                    </ul>
          </div>
          <div class="submenu-area" data-parent="sessions">
                <header>
                        <h6>Users</h6>
                        <p>Quản lý thành viên.</p>
                    </header>
                <ul class="childNav">
                    <li class="nav-item">
                        <a href="signin.html">
                        <i class="nav-icon i-Checked-User"></i>
                        <span class="item-name">Danh sách Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="signin.html">
                        <i class="nav-icon i-Checked-User"></i>
                        <span class="item-name">Thêm Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="signup.html">
                        <i class="nav-icon i-Add-User"></i>
                        <span class="item-name">Sign up</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="forgot.html">
                        <i class="nav-icon i-Find-User"></i>
                        <span class="item-name">Forgot</span>
                        </a>
                    </li>
                </ul>
          </div>
          <div class="submenu-area" data-parent="others">
                <header>
                        <h6>Others</h6>
                        <p>Lorem ipsum dolor sit.</p>
                    </header>
                <ul class="childNav" data-parent="">
                    <li class="nav-item">
                        <a href="not.found.html">
                        <i class="nav-icon i-Error-404-Window"></i>
                        <span class="item-name">Not Found</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="user.profile.html">
                        <i class="nav-icon i-Male"></i>
                        <span class="item-name">User Profile</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="blank.html">
                        <i class="nav-icon i-File-Horizontal"></i>
                        <span class="item-name">Blank Page</span>
                        </a>
                    </li>
                </ul>
          </div>

        </div>
      </div>
      <!--=============== Left side End ================-->
