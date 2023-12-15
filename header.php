<style>
    .nav {
        display: flex;
        padding: 2% 6%;
        justify-content: space-between;
        align-items: center;

    }

    .nav img {
        width: 150px;
    }

    .nav-links {
        flex: 1;
        text-align: right;
    }

    .nav-links ul li {
        list-style: none;
        display: inline-block;
        padding: 8px 12px;
        position: relative;
    }

    .nav-links ul li a {
        color: #000;
        text-decoration: none;
        font-size: 13px;
    }

    .nav-links ul li::after {
        content: '';
        width: 0%;
        height: 2px;
        background: #bcc41c;
        display: block;
        margin: auto;
        transition: 0.5s;

    }

    .nav-links ul li:hover::after {
        width: 100%;
    }
</style>
<nav class="nav">
    <div>
        <img id="logo" width="90" src="/group_3/LOGO.png" position="left" alt="ImagiNationInk logo" />
    </div>
    <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li><a href="/group_3/index.php">Home</a></li>
            <li><a href="/group_3/aboutus.php">About Us</a></li>
            <!-- <li><a href="">Our Services</a></li> -->
            <li><a href="/group_3/courses">Courses</a></li>
            <li><a href="">Learning Tool</a></li>
            <li><a href="/group_3/Contact.php">Contact Us</a></li>
        </ul>
    </div>
    <i class="fa fa-bars" onclick="showMenu()"></i>
</nav>
<! ------JavaScript for Toggle Menu--- -->
    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>