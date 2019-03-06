 <footer id="footer">
            <div class="company-logo-holder">
                <div class="company-logo">
                    <ul>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner03.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner05.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner04.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner06.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner08.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner09.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner10.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner11.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner12.png" alt="" title=""></a>
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <a href="#"><img src="images/partner02.png" alt="" title=""></a>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="copyright-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                                    <div class="footer-nav">
                                        <ul id="menu-footer-menu" class="menu">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="#">Members</a></li>
                                            <li><a href="faq.php">Faqs</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="contactus.php">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="footer-social-media">
                                        <ul class="">
                                            <li><a href="#" class="colrhover" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="colrhover" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#" class="colrhover" target="_blank"><i class="fa fa-google"></i></a></li>
                                            <li><a href="#" class="colrhover" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                                            <li><a href="#" class="colrhover" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="copy-right">
                                <p> © 2019 estateguru. All Rights Reserved.<a href="#"> azillesoft</a></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-12">
                            <div class="widget widget-app">
                                <a href="#"><img src="images/app-image1.png" alt=""></a>
                                <a href="#"><img src="images/app-image2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script>
    window.onscroll = function() {
        myFunction()
    };
    var navbar = document.getElementById("tmenu");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("fixed-top")
        } else {
            navbar.classList.remove("fixed-top");
        }
    }
    $(function() {
		$('.sale').show();
		$('.rent').hide();
		
		if ($(".blog .swiper-container").length != "") {

			var swiper = new Swiper(".blog .swiper-container", {

				slidesPerView: "auto",

				loop: true,

				autoplay: 3500,

				autoplayDisableOnInteraction: false,

				paginationClickable: true,

				nextButton: ".swiper-button-next",

				prevButton: ".swiper-button-prev"

			});
		}
		
		
        if ($(".testimonial-slider .swiper-container").length != '') {
            var swiper = new Swiper('.testimonial-slider .swiper-container', {
                nextButton: '.testimonial-slider .swiper-button-next',
                prevButton: '.testimonial-slider .swiper-button-prev',
                slidesPerView: 'auto',
                autoplay: 2500,
                centeredSlides: true,
                paginationClickable: true,
                spaceBetween: 30,
                loop: true,
                breakpoints: {
                    1024: {
                        slidesPerView: 3,
                    },
                    768: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 1,
                    },
                    480: {
                        slidesPerView: 1,
                    }
                }
            });
        }
		
		
    /*testimonial-holder slider*/



    var mySwiper = new Swiper('.testimonial-holder .text-holder .swiper-container', {

        autoplay: (5000),

        onSlideChangeStart: function () {



            $('.swiper-pagination-switch').removeClass('active');

            var activeSlide = mySwiper.activeIndex;

            $('.swiper-pagination-switch').eq(activeSlide).addClass('active')



        }



    });

    //navigation



    $(".testimonial-holder .swiper-pagination-switch").click(function (e) {



        e.preventDefault();

    });




    $('.testimonial-holder .swiper-pagination-switch').click(function () {



// swiper.swipeTo($(this).index());



        mySwiper.slideTo($(this).index());

        $('.swiper-pagination-switch').removeClass('active');

        $(this).addClass('active');

    });

    /*testimonial-holder slider*/

    // tooltip

    if (typeof jQuery.ui !== 'undefined'){

        $('[data-toggle="tooltip"]').tooltip({

          position: {

            my: "center bottom",

            at: "center top",

            using: function( position, feedback ) {

              $( this ).css( position );

              $( "<div>" )

                .addClass( "arrow" )

                .addClass( feedback.vertical )

                .addClass( feedback.horizontal )

                .appendTo( this );

            }

          }

        });

    }

    else{

        $('[data-toggle="tooltip"]').tooltip();

    }
	
	 
    
    
		
		
   		$('#adv_rent').on('click',function(){
			$('.rent').show();
			$('.sale').hide();
		});
		$('#adv_sale').on('click',function(){
			$('.sale').show();
			$('.rent').hide();
		});
   });
</script>


</html>