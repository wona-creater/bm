<!DOCTYPE html>
<html lang="en-US">


<!-- Mirrored from html.bslthemes.com/plax-demo/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Oct 2024 16:58:26 GMT -->

<head>

    <title>Mine Tech Lab - Staking Platform</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true">
    <meta name="author" content="bslthemes" />

    <!-- switzer font css -->
    <link rel="stylesheet" href="/frontend/fonts/css/switzer.css" type="text/css" media="all">
    <!-- font awesome css -->
    <link rel="stylesheet" href="/frontend/fonts/css/font-awesome.min.css" type="text/css" media="all">
    <!-- bootstrap grid css -->
    <link rel="stylesheet" href="/frontend/css/plugins/bootstrap-grid.css" type="text/css" media="all">
    <!-- swiper css -->
    <link rel="stylesheet" href="/frontend/css/plugins/swiper.min.css" type="text/css" media="all">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/frontend/css/plugins/magnific-popup.css" type="text/css" media="all">
    <!-- plax css -->
    <link rel="stylesheet" href="./frontend/css/style.css" type="text/css" media="all">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/frontend/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/frontend/favicon.ico" type="image/x-icon">

    <style>
        note {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Notification Wrapper */
        .notification-wrapper {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            z-index: 1000;
        }

        /* Notification Container */
        .notification {
            background-color: #fff;
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 10px;
            border-left: 5px solid #4caf50;
            animation: slideIn 0.5s ease-out, fadeOut 4s ease-in forwards;
        }

        /* Icon Style */
        .notification-icon {
            width: 20px;
            height: 20px;
            background-color: #4caf50;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-weight: bold;
            font-size: 14px;
        }

        /* Notification Message */
        .notification-message {
            font-size: 14px;
            color: #333;
        }

        /* Animations */
        @keyframes slideIn {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fadeOut {

            0%,
            80% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                transform: translateY(10px);
            }
        }
    </style>

</head>

<body>
    <!-- wrapper -->
    <div id="smooth-wrapper" class="mil-wrapper">



        <!-- scroll progress -->
        <div class="mil-progress-track">
            <div class="mil-progress"></div>
        </div>
        <!-- scroll progress end -->

        <!-- back to top -->
        <div class="progress-wrap active-progress"></div>

        <!-- top panel end -->
        <div class="mil-top-panel">
            <div class="container">
                <a href="index-2.html" class="mil-logo">
                    <img src="/frontend/img/logo.png" alt="Plax" width="83" height="32">
                </a>
                <nav class="mil-top-menu">
                    <ul>
                        <li>
                            <a href="#.">Home</a>

                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="#.">Blog</a>

                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>

                    </ul>
                </nav>
                <div class="mil-menu-buttons">
                    <a href="{{ route('login') }}" class="mil-btn mil-sm">Log in</a>
                    <div class="mil-menu-btn">
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- top panel end -->

        {{ $slot }}
        <!-- footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <a href="#." class="mil-footer-logo mil-mb-60">
                            <img src="/frontend/img/logo-2.png" alt="Plax" width="28" height="32">
                        </a>
                    </div>
                    <div class="col-xl-3 mil-mb-60">
                        <h6 class="mil-mb-60">Usefull Links</h6>
                        <ul class="mil-footer-list">
                            <li class="mil-text-m mil-soft mil-mb-15">
                                <a href="index-2.html">Home</a>
                            </li>
                            <li class="mil-text-m mil-soft mil-mb-15">
                                <a href="about.html">About Us</a>
                            </li>
                            <li class="mil-text-m mil-soft mil-mb-15">
                                <a href="contact.html">Contact Us</a>
                            </li>
                            <li class="mil-text-m mil-soft mil-mb-15">
                                <a href="services.html">Services</a>
                            </li>
                            <li class="mil-text-m mil-soft mil-mb-15">
                                <a href="price.html">Pricing</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 mil-mb-60">
                        <h6 class="mil-mb-60">Help</h6>
                        <ul class="mil-footer-list">
                            <li class="mil-text-m mil-soft mil-mb-15">
                                3412, 34th floor, Al Maqam Tower, Regus Adgm Square, Al Maryah Island, Abu Dhabi,
                                <br>United Arab Emirates
                            </li>
                            <li class="mil-text-m mil-soft mil-mb-15">
                                +161 960 84881
                            </li>
                            <li class="mil-text-m mil-soft mil-mb-15">
                                support@plax.network
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 mil-mb-80">
                        <h6 class="mil-mb-60">Newsletter</h6>
                        <p class="mil-text-xs mil-soft mil-mb-15">Subscribe to get the latest news form us</p>
                        <form class="mil-subscripe-form-footer">
                            <input class="mil-input" type="email" placeholder="Email">
                            <button type="submit"><i class="far fa-envelope-open mil-dark"></i></button>
                            <div class="mil-checkbox-frame mil-mt-15">
                                <div class="mil-checkbox">
                                    <input type="checkbox" id="checkbox" checked>
                                    <label for="checkbox"></label>
                                </div>
                                <p class="mil-text-xs mil-soft">Stake on our Platform</p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mil-footer-bottom">
                    <div class="row">
                        <div class="col-xl-6">
                            <p class="mil-text-s mil-soft">© 2024 Mine Tech Lab</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->

        <div class="note">
            <div class="notification">
                <div class="notification-icon">✔</div>
                <div class="notification-message">John withdrew $1000 2 minutes ago</div>
            </div>
        </div>

    </div>
    <!-- content end -->
    </div>
    <!-- wrapper end -->

    <!-- jquery js -->
    <script src="/frontend/js/plugins/jquery.min.js"></script>

    <!-- swiper css -->
    <script src="/frontend/js/plugins/swiper.min.js"></script>
    <!-- gsap js -->
    <script src="/frontend/js/plugins/gsap.min.js"></script>
    <!-- scroll smoother -->
    <script src="/frontend/js/plugins/ScrollSmoother.min.js"></script>
    <!-- scroll trigger js -->
    <script src="/frontend/js/plugins/ScrollTrigger.min.js"></script>
    <!-- scroll to js -->
    <script src="/frontend//frontend/jsjs/plugins/ScrollTo.min.js"></script>
    <!-- magnific -->
    <script src="/frontend/js/plugins/magnific-popup.js"></script>
    <!-- plax js -->
    <script src="/frontend/js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js"></script>


    <div class="notification-wrapper" id="notificationWrapper"></div>

    <script>
        // Sample data for 15 notifications
        const notifications = [{
                name: "John",
                amount: 1000,
                minutes: 2
            },
            {
                name: "Alice",
                amount: 500,
                minutes: 5
            },
            {
                name: "Mike",
                amount: 1200,
                minutes: 1
            },
            {
                name: "Sarah",
                amount: 800,
                minutes: 3
            },
            {
                name: "David",
                amount: 300,
                minutes: 10
            },
            {
                name: "Emma",
                amount: 700,
                minutes: 7
            },
            {
                name: "Chris",
                amount: 1500,
                minutes: 4
            },
            {
                name: "Olivia",
                amount: 900,
                minutes: 6
            },
            {
                name: "Sophia",
                amount: 400,
                minutes: 8
            },
            {
                name: "James",
                amount: 600,
                minutes: 9
            },
            {
                name: "Ethan",
                amount: 1100,
                minutes: 2
            },
            {
                name: "Liam",
                amount: 950,
                minutes: 5
            },
            {
                name: "Charlotte",
                amount: 450,
                minutes: 3
            },
            {
                name: "Noah",
                amount: 1250,
                minutes: 1
            },
            {
                name: "Ava",
                amount: 350,
                minutes: 12
            },
        ];

        const notificationWrapper = document.getElementById("notificationWrapper");

        // Function to create a notification
        function createNotification({
            name,
            amount,
            minutes
        }) {
            const notification = document.createElement("div");
            notification.className = "notification";

            notification.innerHTML = `
          <div class="notification-icon">✔</div>
          <div class="notification-message">${name} withdrew $${amount} ${minutes} minutes ago</div>
        `;

            notificationWrapper.appendChild(notification);

            // Remove notification after 4 seconds
            setTimeout(() => {
                notification.remove();
            }, 4000);
        }

        // Display notifications one by one with an interval
        let index = 0;
        const interval = setInterval(() => {
            if (index < notifications.length) {
                createNotification(notifications[index]);
                index++;
            } else {
                clearInterval(interval); // Stop when all notifications are displayed
            }
        }, 1000); // New notification every 1 second
    </script>F


</body>



</html>
