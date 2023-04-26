<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Jquery CDN Link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('assets/styles/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <title>Dashboard</title>
</head>

<body>
    <div class="sidebar sidebarclose">
        <div class="logo-details ms-3">
            <img src="{{ asset('assets/images/menu_bar_logo.png') }}" alt="">
            <span class="logo_name">
                Dr.CARROT EMR
            </span>
        </div>
        <ul class="nav-links">
            <li class="user-profile">
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Roman</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Edit Profile</a>
                    </li>
                    <li>
                        <a href="#">Reset Passwor</a>
                    </li>
                    <li>
                        <a href="#">Logout</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-category-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-collection'></i>
                        <span class="link_name">Appointments</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Consultations</a>
                    </li>
                    <li>
                        <a href="#">Appointments List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-user'></i>
                    <span class="link_name">Patients</span>
                </a>
                <ul class="sub-menu blank">
                    <li>
                        <a href="#">Patients</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-capsule'></i>
                        <span class="link_name">Vaccines</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Vaccines</a>
                    </li>
                    <li>
                        <a href="#">Search</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-receipt'></i>
                        <span class="link_name">Billing</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Items List</a>
                    </li>
                    <li>
                        <a href="#">Bills List</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-credit-card'></i>
                        <span class="link_name">Payments</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Payments List</a>
                    </li>
                    <li>
                        <a href="#">Paymnets Bill List</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-bong'></i>
                        <span class="link_name">Laboratory</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Lab Master</a>
                    </li>
                    <li>
                        <a href="#">Lab Purchase</a>
                    </li>
                    <li>
                        <a href="#">Lab Purchase Payments</a>
                    </li>
                    <li>
                        <a href="#">Lab Purchase Return</a>
                    </li>
                    <li>
                        <a href="#">Lab Purchase</a>
                    </li>
                    <li>
                        <a href="#">Lab Goods Issue</a>
                    </li>
                    <li>
                        <a href="#">Lab Goods Issue Return</a>
                    </li>
                    <li>
                        <a href="#">Lab Stock Adjustment</a>
                    </li>
                    <li>
                        <a href="#">Lab Bills</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-hotel'></i>
                    <span class="link_name">Inpatients</span>
                </a>
                <ul class="sub-menu blank">
                    <li>
                        <a href="#">Inpatients</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-wallet-alt'></i>
                        <span class="link_name">Accounts</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Expenses</a>
                    </li>
                    <li>
                        <a href="#">Cash Summary</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-calendar-plus'></i>
                        <span class="link_name">Pharmacy</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Sales Bill</a>
                    </li>
                    <li>
                        <a href="#">Sales Return</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-briefcase'></i>
                        <span class="link_name">Procurements</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">Master</a>
                    </li>
                    <li>
                        <a href="#">Purchase Bill</a>
                    </li>
                    <li>
                        <a href="#">Purchase Payments</a>
                    </li>
                    <li>
                        <a href="#">Purchase Return</a>
                    </li>
                    <li>
                        <a href="#">Indents</a>
                    </li>
                    <li>
                        <a href="#">Goods Issue</a>
                    </li>
                    <li>
                        <a href="#">Goods Issue Return</a>
                    </li>
                    <li>
                        <a href="#">Stock Adjustment</a>
                    </li>
                    <li>
                        <a href="#">Stock Transfer</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-extension'></i>
                    <span class="link_name">Stents</span>
                </a>
                <ul class="sub-menu blank">
                    <li>
                        <a href="#">Stents</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-report'></i>
                    <span class="link_name">Reports</span>
                </a>
                <ul class="sub-menu blank">
                    <li>
                        <a href="#">Reports</a>
                    </li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-shield'></i>
                        <span class="link_name">Admin</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li>
                        <a href="#">User Account</a>
                    </li>
                    <li>
                        <a href="#">Patients Account</a>
                    </li>
                    <li>
                        <a href="#">Referral Docters</a>
                    </li>
                    <li>
                        <a href="#">Room Master</a>
                    </li>
                    <li>
                        <a href="#">Hospital Master</a>
                    </li>
                    <li>
                        <a href="#">Logged In Users</a>
                    </li>
                    <li>
                        <a href="#">SMS Logs</a>
                    </li>
                    <li>
                        <a href="#">Role Master</a>
                    </li>
                    <li>
                        <a href="#">Shift Timing Master</a>
                    </li>
                    <li>
                        <a href="#">Bill Category Master</a>
                    </li>
                    <li>
                        <a href="#">Assign Permission</a>
                    </li>
                    <li>
                        <a href="#">Sequence Master</a>
                    </li>
                    <li>
                        <a href="#">Payee Master</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="nav-div">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="user-div" onclick="toggleprofile()">
                    <img src="{{ asset('assets/images/drcarrot_logo.svg') }}" alt="" class="user-pic mr-2">
                    <h5 class="profile-head-name mx-3 my-2">Roman</h5>
                    <i class='bx bxs-chevron-down down' id="down-arrow"></i>
                </div>
            </div>
            <div class="sub-menu-wrap" id="profile-sub-menu">
                <div class="profile-sub-menu">
                    <div class="user-info">
                        <img src="{{ asset('assets/images/drcarrot_logo.svg') }}" alt="">
                        <h4>Roman</h4>
                    </div>
                    <hr>
                    <a href="#" class="profile-sub-menu-link">
                        <img src="{{ asset('assets/images/profile/profile.png') }}" alt="">
                        Edit Profiles
                    </a>
                    <a href="#" class="profile-sub-menu-link">
                        <img src="{{ asset('assets/images/profile/key.png') }}" alt="">
                        Reset Password
                    </a>
                    <hr>
                    <a href="#" class="profile-sub-menu-link">
                        <img src="{{ asset('assets/images/profile/logout-icon.png') }}" alt="">
                        Logout
                    </a>
                </div>
            </div>
        </nav>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
        let profile_menu = document.querySelector("#profile-sub-menu");
        let profile_arow = document.querySelector("#down-arrow");
        let sidebar = document.querySelector(".sidebar");
        let arrow = document.querySelectorAll(".iocn-link");
        let arrowParent = '';
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                if (e.target.localName == "i") {
                    if (e.target.className == "bx bxs-chevron-down arrow") {
                        arrowParent = e.target.parentElement.parentElement;
                    } else {
                        arrowParent = e.target.parentElement.parentElement.parentElement;

                    }
                } else if (e.target.className == "iocn-link") {
                    arrowParent = e.target.parentElement;
                } else {
                    arrowParent = e.target.parentElement.parentElement.parentElement;
                }
                arrowParent.classList.toggle("showMenu");
            });
        }

        let sidebarBtn = document.querySelector(".bx-menu");

        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("sidebarclose");
        });


        $(function() {
            $(".bx-menu").on('click', function() {
                $(this).toggleClass("bx-menu-alt-left");
            });
        });

        function toggleprofile() {
            profile_menu.classList.toggle("open-profile");
            profile_arow.classList.toggle("up");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> --}}
</body>

</html>
