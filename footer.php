
    <div class="footer wow animate__fadeInUp">
        <div class="container">
            <div class="footer-container row">
                <div class="col-lg-4 col-12 mb-3 text-light">
                    <img src="./assets/images/logo/logo.png"  class="footer-logo">
                    <h2>About</h2>
                    <p class="pe-md-4">Feline Club of India is the only active organization in India, involved in the improvement of Cat Fancy in India. FCI was formed 4 years ago by cat enthusiasts, and the Founding Members include vets as well as animal lovers with a keen interest in cat upkeep.</p>
                </div>
                <div class="col-lg-4 col-12 mb-3 text-light quick-links">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Why Choose Us</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Cancellation and Refund Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-12 mb-3 text-light">
                    <h2>Connect with us!</h2>
                    <div class="subscribe mb-3">
                        <input type="email" placeholder="Your Email">
                        <button><i class="fas fa-paper-plane text-solar"></i></button>
                    </div>
                    <h3>Social Media</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook-f text-solar"></i></a>
                        <a href="#"><i class="fab fa-instagram text-solar"></i></a>
                        <a href="#"><i class="fab fa-youtube text-solar"></i></a>
                        <a href="#"><i class="fab fa-twitter text-solar"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom text-light">
                <p>Designed & Developed by <a href="#">Web Lluminity Technologies</a>. Copyright © 2025. All rights reserved.</p>
            </div>
        </div>
    </div>













    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="./assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="./assets/plugins/uikit/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- Animate -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        // Initialize WOW.js
        new WOW({
            boxClass: "wow", // default
            animateClass: "animate__animated", // default
            offset: 0, // default
            mobile: true, // default
            live: true, // default
            scrollContainer: null // optional scroll container selector
        }).init();

        // Function to reset animations
        function resetAnimations() {
            var elements = document.querySelectorAll(".wow");
            elements.forEach(function (el) {
                el.classList.remove("animate__animated");
                void el.offsetWidth; // Trigger reflow
                el.classList.add("animate__animated");
            });

            // Scroll to top
            window.scrollTo(0, 0);
        }

        // Function to scroll to bottom
        function scrollToBottom() {
            window.scrollTo(0, document.body.scrollHeight);
        }

    </script>
    <!-- DataTables  & Plugins -->
    <script src="./assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="./assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="./assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="./assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <!-- Loader JS -->
    <script type="text/javascript">
        $(window).on("load", function () {
            // $(".loader").delay(1000).fadeOut(200); // By default
            $(".loader").delay(0).fadeOut(200);
        });
    </script>

    <script>
        // Function to redirect to a given link in a new tab
        function redirectToLink(url) {
            window.open(url, '_blank'); // Open the URL in a new tab
        }

    </script>

    <script>
        // Code for Responsive Hamburger
        $(document).ready(function () {
            // Toggle the main menu
            $("#nav-toggle").click(function () {
                $("#nav-menu").toggleClass("show");
                $(this).toggleClass("active");
            });

            // Toggle submenu on click for mobile
            $(".nav-link").click(function (e) {
                if ($(window).width() <= 1000) {
                    e.preventDefault();
                    var $submenu = $(this).next(".submenu");
                    $submenu.slideToggle();
                    $(".submenu").not($submenu).slideUp(); // Close other submenus
                }
            });

            // Handle active state for nav-items
            $(".nav-menu .nav-item").click(function () {
                // Remove active class from all nav-items
                $(".nav-item").removeClass("active");

                // Add active class to clicked nav-item
                $(this).addClass("active");

                // If a non-submenu item is clicked (like "Offers"), remove active_submenu from all submenu items
                if (!$(this).find(".submenu").length) {
                    $(".submenu li").removeClass("active_submenu");
                }
            });

            // Handle active_submenu state for submenu items
            $(".submenu li").click(function () {
                // Remove active_submenu from all submenu items across the entire menu
                $(".submenu li").removeClass("active_submenu");

                // Add active_submenu to the clicked li element
                $(this).addClass("active_submenu");
            });

            // Close menu when clicking outside
            $(document).click(function (e) {
                if ($(window).width() <= 1200) {
                    if (!$(e.target).closest("#nav-menu, #nav-toggle").length) {
                        $("#nav-menu").removeClass("show");
                        $("#nav-toggle").removeClass("active");
                    }
                }
            });
        });

    </script>

    <script>
        // Counts
        $(".counter").each(function () {
            var $this = $(this),
                countTo = $this.attr("data-countto");
            countDuration = parseInt($this.attr("data-duration"));
            $({ counter: $this.text() }).animate(
                {
                    counter: countTo
                },
                {
                    duration: countDuration,
                    easing: "linear",
                    step: function () {
                        $this.text(Math.floor(this.counter));
                    },
                    complete: function () {
                        $this.text(this.counter);
                    }
                }
            );
        });

    </script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
            const counters = document.querySelectorAll(".counter");
            
            const startCounting = () => {
                counters.forEach(counter => {
                    counter.innerText = "0";
                    const target = +counter.getAttribute("data-target");
                    const increment = target / 100;

                    const updateCounter = () => {
                        let current = +counter.innerText;
                        if (current < target) {
                            counter.innerText = Math.ceil(current + increment);
                            setTimeout(updateCounter, 50);
                        } else {
                            counter.innerText = target;
                        }
                    };

                    updateCounter();
                });
            };

            let section = document.querySelector(".counter-section");
            let sectionPosition = section.offsetTop;
            let started = false;

            window.addEventListener("scroll", () => {
                if (window.scrollY > sectionPosition - 500 && !started) {
                    startCounting();
                    started = true;
                }
            });
        });
    </script>
</body>

</html>