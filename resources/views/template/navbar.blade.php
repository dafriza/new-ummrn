<!-- Navbar -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom" style="height:100px; background-color:#113448">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Aria</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="{{ route('/') }}"><img src="images/logo.png" alt="alternative"
            style="height:70px;" /></a>

    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ route('/') }}">HOME <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="{{ route('researchers') }}">RESEARCHERS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php?page=cops">COMMUNITIES OF PRACTICE</a>
            </li>

            <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php?page=projects">PROJECTS</a>
            </li>

            <li class="nav-item">
                <a class="nav-link page-scroll" href="index.php?page=cfps">CALL FOR PROJECTS</a>
            </li>
            <li class='nav-item dropdown'>
                @if (Auth::check())
                    <span class='nav-link dropdown-toggle page-scroll' id='navbarDropdown' role='button'
                        aria-haspopup='true' aria-expanded='false'>MY ACCOUNT</span>
                    <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                        <a class='dropdown-item' href='index.php?page=notifications'><span
                                class='item-text'>NOTIFICATIONS</span></a>
                        <div class='dropdown-items-divide-hr'></div>
                        <a class='dropdown-item' href='index.php?page=my_account'><span class='item-text'>MY
                                ACCOUNT</span></a>
                        <div class='dropdown-items-divide-hr'></div>
                        <a class='dropdown-item' href='logout.php'><span class='item-text'>LOGOUT</span></a>
                    </div>
                    @else
                    <a class="nav-link" href="{{route('auth.login')}}">LOGIN</a>
                @endif
            </li>
        </ul>
    </div>
</nav> <!-- end of navbar -->
