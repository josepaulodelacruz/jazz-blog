<template>
    <div>
        <!-- Preloading -->
        <div id="preloader">
            <div class="spinner">
            </div>
        </div>

        <!-- Wrapper -->
        <div class="wrapper top_60 container">
            <div class="row">

                <!-- Profile Section
                ================================================== -->
                <div class="col-lg-3 col-md-4">
                    <div class="profile">
                        <div class="profile-name">
                            <span class="name">Jayzel Briones</span><br>
                            <span class="job">Entrepreneur & blogger</span>
                        </div>
                        <figure class="profile-image">
                            <img src="images/profile.jpg" alt="">
                        </figure>
                        <ul class="profile-information">
                            <li></li>
                            <li><p><span>Name:</span> Jayzel Mendoza Briones </p></li>
                            <li><p><span>Birthday:</span> 04 August 1998</p></li>
                            <li><p><span>Job:</span> Entrepreneur & Blog</p></li>
                            <li><p><span>Email:</span> jazz@jazz.tech</p></li>
                            <li><p><span>facebook:</span>jayzeliciouscxz04 </p></li>
                        </ul>
                        <div class="col-md-12">
                            <button class="site-btn icon">Download Cv <i class="fa fa-download" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Page Tab Container Div -->
                <div id="ajax-tab-container" class="col-lg-9 col-md-8 tab-container">

                    <!-- Header
                    ================================================== -->
                    <the-header/>
                    <div class="row">

                        <!-- Page Content
                        ================================================== -->
                        <div class="col-md-12">
                            <div id="content" class="panel-container">

                                <!-- Home Page
                                ================================================== -->
                                <home-page/>

                                <!-- Resume Page
                                ================================================== -->
                                <resume-page/>

                                <!-- Portfolio Page
                                ================================================== -->
                                <business-page/>

                                <!-- Blog Page
                                ================================================== -->
                                <blog-page/>

                                <!-- Contact Page
                                ================================================== -->
                                <contact-page/>


                            </div><!-- Content - End -->
                        </div> <!-- col-md-12 end -->
                    </div><!-- row end -->
                    <!-- Footer
                    ================================================== -->
                    <footer>
                        <div class="footer col-md-12 top_30 bottom_30">
                            <div class="name col-md-4 hidden-md hidden-sm hidden-xs">Jayzel Dela Cruz</div>
                            <div class="copyright col-lg-8 col-md-12">© 2020 All rights reserved. Designed by <a href="https://jeypsdelacruz.com">her Love.</a> </div>
                        </div>
                    </footer>

                </div> <!-- Tab Container - End -->
            </div> <!-- Row - End -->
        </div>
    </div>
</template>

<script>
    import TheHeader from "@/components/TheHeader";
    import HomePage from '../components/HomePage'
    import ResumePage from '../components/ResumePage'
    import BusinessPage from "@/components/Business"
    import BlogPage from '@/components/Blog'
    import ContactPage from '@/components/Contact'

    export default {
        components: {
            'the-header': TheHeader,
            'home-page': HomePage,
            'resume-page': ResumePage,
            'business-page': BusinessPage,
            'blog-page': BlogPage,
            'contact-page': ContactPage
        }
    }
</script>

<style></style>
