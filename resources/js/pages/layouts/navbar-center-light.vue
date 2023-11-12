<script setup>
import LogoDark from '../../../images/logo-dark.png';
import LogoLight from '../../../images/logo-light.png';
</script>

<template>
    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky">
        <div class="relative flex justify-center">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <span class="inline-block dark:hidden">
                    <img :src="LogoDark" class="l-dark" height="24" alt="">
                    <img :src="LogoLight" class="l-light" height="24" alt="">
                </span>
                <img :src="LogoLight" height="24" class="hidden dark:inline-block" alt="">
            </a>
            <!-- End Logo container-->

            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="index.html" class="sub-menu-item">Home</a></li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Landings</a><span class="menu-arrow"></span>

                        <ul class="submenu">
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                    <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                    <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                    <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                    <li><a href="page-testimonial.html" class="sub-menu-item">Testimonial </a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Accounts</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="user-profile.html" class="sub-menu-item">User Profile</a></li>
                                    <li><a href="user-billing.html" class="sub-menu-item">Billing</a></li>
                                    <li><a href="user-payment.html" class="sub-menu-item">Payment</a></li>
                                    <li><a href="user-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    <li><a href="user-social.html" class="sub-menu-item">Social</a></li>
                                    <li><a href="user-notification.html" class="sub-menu-item">Notification</a></li>
                                    <li><a href="user-setting.html" class="sub-menu-item">Setting</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Real Estate</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="property-listing.html" class="sub-menu-item">Listing</a></li>
                                    <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Courses </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="course-listing.html" class="sub-menu-item">Course Listing</a></li>
                                    <li><a href="course-detail.html" class="sub-menu-item">Course Detail</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> NFT Market </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="nft-explore.html" class="sub-menu-item">Explore</a></li>
                                    <li><a href="nft-auction.html" class="sub-menu-item">Auction</a></li>
                                    <li><a href="nft-collection.html" class="sub-menu-item">Collections</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)">
                                        Creator </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="nft-creators.html" class="sub-menu-item"> Creators</a></li>
                                            <li><a href="nft-creator-profile.html" class="sub-menu-item"> Creator
                                                Profile </a></li>
                                            <li><a href="nft-creator-profile-edit.html" class="sub-menu-item"> Profile
                                                Edit </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="nft-wallet.html" class="sub-menu-item">Wallet</a></li>
                                    <li><a href="nft-create-item.html" class="sub-menu-item">Create NFT</a></li>
                                    <li><a href="nft-detail.html" class="sub-menu-item">Single NFT</a></li>
                                </ul>
                            </li>
                            <li><a href="food-recipe.html" class="sub-menu-item">Food Recipe </a></li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> eCommerce </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="shop-grid.html" class="sub-menu-item">Product Grid</a></li>
                                    <li><a href="shop-grid-two.html" class="sub-menu-item">Product Grid Two</a></li>
                                    <li><a href="shop-item-detail.html" class="sub-menu-item">Product Detail</a></li>
                                    <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                    <li><a href="shop-checkout.html" class="sub-menu-item">Checkout</a></li>
                                    <li><a href="shop-account.html" class="sub-menu-item">My Account</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Photography </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="photography-about.html" class="sub-menu-item">About Us</a></li>
                                    <li><a href="photography-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job /
                                Careers </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
                                    <li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
                                    <li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
                                    <li><a href="page-job-post.html" class="sub-menu-item">Job Post </a></li>
                                    <li><a href="page-job-career.html" class="sub-menu-item">Job Career </a></li>
                                    <li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
                                    <li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate
                                        Detail</a></li>
                                    <li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
                                    <li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Forums </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="forums-topic.html" class="sub-menu-item">Forum Topic</a></li>
                                    <li><a href="forums-comments.html" class="sub-menu-item">Forum Comments</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
                                    <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                    <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                    <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                                    <li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
                                    <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Blog
                                        Posts </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="blog-standard-post.html" class="sub-menu-item">Standard
                                                Post</a></li>
                                            <li><a href="blog-slider-post.html" class="sub-menu-item">Slider Post</a>
                                            </li>
                                            <li><a href="blog-gallery-post.html" class="sub-menu-item">Gallery Post</a>
                                            </li>
                                            <li><a href="blog-youtube-post.html" class="sub-menu-item">Youtube Post</a>
                                            </li>
                                            <li><a href="blog-vimeo-post.html" class="sub-menu-item">Vimeo Post</a></li>
                                            <li><a href="blog-audio-post.html" class="sub-menu-item">Audio Post</a></li>
                                            <li><a href="blog-blockquote-post.html" class="sub-menu-item">Blockquote</a>
                                            </li>
                                            <li><a href="blog-left-sidebar-post.html" class="sub-menu-item">Left
                                                Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email
                                Template</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                    <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a>
                                    </li>
                                    <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                    <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                    <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                    <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                    <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                    <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                    <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                    <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                    <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                    <li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
                                    <li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level
                                Menu</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span
                                        class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                            <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                    <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                    <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                    <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                    <li><a href="page-testimonial.html" class="sub-menu-item">Testimonial </a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Accounts</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="user-profile.html" class="sub-menu-item">User Profile</a></li>
                                    <li><a href="user-billing.html" class="sub-menu-item">Billing</a></li>
                                    <li><a href="user-payment.html" class="sub-menu-item">Payment</a></li>
                                    <li><a href="user-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    <li><a href="user-social.html" class="sub-menu-item">Social</a></li>
                                    <li><a href="user-notification.html" class="sub-menu-item">Notification</a></li>
                                    <li><a href="user-setting.html" class="sub-menu-item">Setting</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Real Estate</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="property-listing.html" class="sub-menu-item">Listing</a></li>
                                    <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Courses </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="course-listing.html" class="sub-menu-item">Course Listing</a></li>
                                    <li><a href="course-detail.html" class="sub-menu-item">Course Detail</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> NFT Market </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="nft-explore.html" class="sub-menu-item">Explore</a></li>
                                    <li><a href="nft-auction.html" class="sub-menu-item">Auction</a></li>
                                    <li><a href="nft-collection.html" class="sub-menu-item">Collections</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)">
                                        Creator </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="nft-creators.html" class="sub-menu-item"> Creators</a></li>
                                            <li><a href="nft-creator-profile.html" class="sub-menu-item"> Creator
                                                Profile </a></li>
                                            <li><a href="nft-creator-profile-edit.html" class="sub-menu-item"> Profile
                                                Edit </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="nft-wallet.html" class="sub-menu-item">Wallet</a></li>
                                    <li><a href="nft-create-item.html" class="sub-menu-item">Create NFT</a></li>
                                    <li><a href="nft-detail.html" class="sub-menu-item">Single NFT</a></li>
                                </ul>
                            </li>
                            <li><a href="food-recipe.html" class="sub-menu-item">Food Recipe </a></li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> eCommerce </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="shop-grid.html" class="sub-menu-item">Product Grid</a></li>
                                    <li><a href="shop-grid-two.html" class="sub-menu-item">Product Grid Two</a></li>
                                    <li><a href="shop-item-detail.html" class="sub-menu-item">Product Detail</a></li>
                                    <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                    <li><a href="shop-checkout.html" class="sub-menu-item">Checkout</a></li>
                                    <li><a href="shop-account.html" class="sub-menu-item">My Account</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Photography </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="photography-about.html" class="sub-menu-item">About Us</a></li>
                                    <li><a href="photography-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job /
                                Careers </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
                                    <li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
                                    <li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
                                    <li><a href="page-job-post.html" class="sub-menu-item">Job Post </a></li>
                                    <li><a href="page-job-career.html" class="sub-menu-item">Job Career </a></li>
                                    <li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
                                    <li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate
                                        Detail</a></li>
                                    <li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
                                    <li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Forums </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="forums-topic.html" class="sub-menu-item">Forum Topic</a></li>
                                    <li><a href="forums-comments.html" class="sub-menu-item">Forum Comments</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
                                    <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                    <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                    <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                                    <li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
                                    <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Blog
                                        Posts </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="blog-standard-post.html" class="sub-menu-item">Standard
                                                Post</a></li>
                                            <li><a href="blog-slider-post.html" class="sub-menu-item">Slider Post</a>
                                            </li>
                                            <li><a href="blog-gallery-post.html" class="sub-menu-item">Gallery Post</a>
                                            </li>
                                            <li><a href="blog-youtube-post.html" class="sub-menu-item">Youtube Post</a>
                                            </li>
                                            <li><a href="blog-vimeo-post.html" class="sub-menu-item">Vimeo Post</a></li>
                                            <li><a href="blog-audio-post.html" class="sub-menu-item">Audio Post</a></li>
                                            <li><a href="blog-blockquote-post.html" class="sub-menu-item">Blockquote</a>
                                            </li>
                                            <li><a href="blog-left-sidebar-post.html" class="sub-menu-item">Left
                                                Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email
                                Template</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                    <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a>
                                    </li>
                                    <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                    <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                    <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                    <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                    <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                    <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                    <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                    <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                    <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                    <li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
                                    <li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level
                                Menu</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span
                                        class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                            <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Portfolio</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Company </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-aboutus.html" class="sub-menu-item"> About Us</a></li>
                                    <li><a href="page-services.html" class="sub-menu-item">Services</a></li>
                                    <li><a href="page-team.html" class="sub-menu-item"> Team</a></li>
                                    <li><a href="page-pricing.html" class="sub-menu-item">Pricing</a></li>
                                    <li><a href="page-testimonial.html" class="sub-menu-item">Testimonial </a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Accounts</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="user-profile.html" class="sub-menu-item">User Profile</a></li>
                                    <li><a href="user-billing.html" class="sub-menu-item">Billing</a></li>
                                    <li><a href="user-payment.html" class="sub-menu-item">Payment</a></li>
                                    <li><a href="user-invoice.html" class="sub-menu-item">Invoice</a></li>
                                    <li><a href="user-social.html" class="sub-menu-item">Social</a></li>
                                    <li><a href="user-notification.html" class="sub-menu-item">Notification</a></li>
                                    <li><a href="user-setting.html" class="sub-menu-item">Setting</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Real Estate</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="property-listing.html" class="sub-menu-item">Listing</a></li>
                                    <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Courses </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="course-listing.html" class="sub-menu-item">Course Listing</a></li>
                                    <li><a href="course-detail.html" class="sub-menu-item">Course Detail</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> NFT Market </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="nft-explore.html" class="sub-menu-item">Explore</a></li>
                                    <li><a href="nft-auction.html" class="sub-menu-item">Auction</a></li>
                                    <li><a href="nft-collection.html" class="sub-menu-item">Collections</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)">
                                        Creator </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="nft-creators.html" class="sub-menu-item"> Creators</a></li>
                                            <li><a href="nft-creator-profile.html" class="sub-menu-item"> Creator
                                                Profile </a></li>
                                            <li><a href="nft-creator-profile-edit.html" class="sub-menu-item"> Profile
                                                Edit </a></li>
                                        </ul>
                                    </li>
                                    <li><a href="nft-wallet.html" class="sub-menu-item">Wallet</a></li>
                                    <li><a href="nft-create-item.html" class="sub-menu-item">Create NFT</a></li>
                                    <li><a href="nft-detail.html" class="sub-menu-item">Single NFT</a></li>
                                </ul>
                            </li>
                            <li><a href="food-recipe.html" class="sub-menu-item">Food Recipe </a></li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> eCommerce </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="shop-grid.html" class="sub-menu-item">Product Grid</a></li>
                                    <li><a href="shop-grid-two.html" class="sub-menu-item">Product Grid Two</a></li>
                                    <li><a href="shop-item-detail.html" class="sub-menu-item">Product Detail</a></li>
                                    <li><a href="shop-cart.html" class="sub-menu-item">Shop Cart</a></li>
                                    <li><a href="shop-checkout.html" class="sub-menu-item">Checkout</a></li>
                                    <li><a href="shop-account.html" class="sub-menu-item">My Account</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Photography </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="photography-about.html" class="sub-menu-item">About Us</a></li>
                                    <li><a href="photography-portfolio.html" class="sub-menu-item">Portfolio</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Job /
                                Careers </a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-job-grid.html" class="sub-menu-item">All Jobs</a></li>
                                    <li><a href="page-job-detail.html" class="sub-menu-item">Job Detail</a></li>
                                    <li><a href="page-job-apply.html" class="sub-menu-item">Job Apply</a></li>
                                    <li><a href="page-job-post.html" class="sub-menu-item">Job Post </a></li>
                                    <li><a href="page-job-career.html" class="sub-menu-item">Job Career </a></li>
                                    <li><a href="page-job-candidates.html" class="sub-menu-item">Job Candidates</a></li>
                                    <li><a href="page-job-candidate-detail.html" class="sub-menu-item">Candidate
                                        Detail</a></li>
                                    <li><a href="page-job-companies.html" class="sub-menu-item">All Companies</a></li>
                                    <li><a href="page-job-company-detail.html" class="sub-menu-item">Company Detail</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Forums </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="forums-topic.html" class="sub-menu-item">Forum Topic</a></li>
                                    <li><a href="forums-comments.html" class="sub-menu-item">Forum Comments</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Helpcenter </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="helpcenter.html" class="sub-menu-item">Overview</a></li>
                                    <li><a href="helpcenter-faqs.html" class="sub-menu-item">FAQs</a></li>
                                    <li><a href="helpcenter-guides.html" class="sub-menu-item">Guides</a></li>
                                    <li><a href="helpcenter-support.html" class="sub-menu-item">Support</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="blog.html" class="sub-menu-item">Blogs</a></li>
                                    <li><a href="blog-sidebar.html" class="sub-menu-item">Blogs & Sidebar</a></li>
                                    <li><a href="blog-detail.html" class="sub-menu-item">Blog Detail</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Blog
                                        Posts </a><span class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="blog-standard-post.html" class="sub-menu-item">Standard
                                                Post</a></li>
                                            <li><a href="blog-slider-post.html" class="sub-menu-item">Slider Post</a>
                                            </li>
                                            <li><a href="blog-gallery-post.html" class="sub-menu-item">Gallery Post</a>
                                            </li>
                                            <li><a href="blog-youtube-post.html" class="sub-menu-item">Youtube Post</a>
                                            </li>
                                            <li><a href="blog-vimeo-post.html" class="sub-menu-item">Vimeo Post</a></li>
                                            <li><a href="blog-audio-post.html" class="sub-menu-item">Audio Post</a></li>
                                            <li><a href="blog-blockquote-post.html" class="sub-menu-item">Blockquote</a>
                                            </li>
                                            <li><a href="blog-left-sidebar-post.html" class="sub-menu-item">Left
                                                Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Email
                                Template</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="email-confirmation.html" class="sub-menu-item">Confirmation</a></li>
                                    <li><a href="email-password-reset.html" class="sub-menu-item">Reset Password</a>
                                    </li>
                                    <li><a href="email-alert.html" class="sub-menu-item">Alert</a></li>
                                    <li><a href="email-invoice.html" class="sub-menu-item">Invoice</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                    <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                    <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                    <li><a href="auth-lock-screen.html" class="sub-menu-item">Lock Screen</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-terms.html" class="sub-menu-item">Terms of Services</a></li>
                                    <li><a href="page-privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special</a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="page-comingsoon.html" class="sub-menu-item">Coming Soon</a></li>
                                    <li><a href="page-maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                    <li><a href="page-error.html" class="sub-menu-item">Error</a></li>
                                    <li><a href="page-thankyou.html" class="sub-menu-item">Thank you</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Contact </a><span
                                class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="contact-detail.html" class="sub-menu-item">Contact Detail</a></li>
                                    <li><a href="contact-one.html" class="sub-menu-item">Contact One</a></li>
                                    <li><a href="contact-two.html" class="sub-menu-item">Contact Two</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Multi Level
                                Menu</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li><a href="javascript:void(0)" class="sub-menu-item">Level 1.0</a></li>
                                    <li class="has-submenu child-menu-item"><a href="javascript:void(0)"> Level 2.0 </a><span
                                        class="submenu-arrow"></span>
                                        <ul class="submenu">
                                            <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.1</a></li>
                                            <li><a href="javascript:void(0)" class="sub-menu-item">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">Docs</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="ui-components.html" class="sub-menu-item">Components <span
                                class="bg-yellow-500 inline-block text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5 ms-1">New</span></a>
                            </li>
                            <li><a href="documentation.html" class="sub-menu-item">Documentation</a></li>
                            <li><a href="changelog.html" class="sub-menu-item">Changelog</a></li>
                            <li><a href="widget.html" class="sub-menu-item">Widget</a></li>
                        </ul>
                    </li>

                    <li><a href="contact-one.html" class="sub-menu-item">Contact</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->

            <!--Login button Start-->
            <div class="lg:flex hidden">
                <ul class="buy-button list-none mb-0">
                    <li class="inline mb-0">
                        <a href="">
                        <span class="login-btn-primary"><span
                            class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i
                            data-feather="settings" class="h-4 w-4"></i></span></span>
                            <span class="login-btn-light"><span
                                class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                data-feather="settings" class="h-4 w-4"></i></span></span>
                        </a>
                    </li>

                    <li class="inline ps-1 mb-0">
                        <a href="https://1.envato.market/techwind" target="_blank">
                            <div class="login-btn-primary"><span
                                class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i
                                data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
                            <div class="login-btn-light"><span
                                class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
                        </a>
                    </li>
                </ul>
            </div>
            <!--Login button End-->
        </div><!--end container-->
    </nav><!--end header-->
    <!-- End Navbar -->
</template>

<style scoped>

</style>
