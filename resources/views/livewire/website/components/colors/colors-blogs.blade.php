{{-- wrapper --}}
<div>



    {{-- styles --}}
    @section('styles')




    <style>
        :root {

            /* fonts */
            --font-body: <?php echo "$profile->textFont" ?>;
            --font-heading: <?php echo "$profile->headingFont" ?>;


            /* colors */
            --color-theme: <?php echo "$settings->textColor" ?>;
            --color-body: <?php echo "$settings->bodyBackgroundColor" ?>;
            --color-hero: <?php echo "$settings->heroBackgroundColor" ?>;
            --color-hero-text: <?php echo "$settings->heroTextColor" ?>;
            --color-menu: <?php echo "$settings->singleBlogNavbarBackgroundColor" ?>;
            --color-menu-text: <?php echo "$settings->singleBlogNavbarTextColor" ?>;
            --color-slider-bullets: <?php echo "$settings->sliderIndicatorColor" ?>;
            --color-hr: <?php echo "$settings->hrColor" ?>;
            --color-cursor: <?php echo "$settings->cursorColor" ?>;
            --color-secondary-cursor: <?php echo "$settings->cursorSecondaryColor" ?>;

            --color-card-title: <?php echo "$settings->cardTitleColor" ?>;
            --color-card-subtitle: <?php echo "$settings->cardSubtitleColor" ?>;
            --color-card-author: <?php echo "$settings->cardAuthorColor" ?>;
            --color-card-date: <?php echo "$settings->cardDateColor" ?>;
            --color-card-button-text: <?php echo "$settings->cardButtonColor" ?>;
            --color-card-button-text-hover: <?php echo "$settings->cardButtonHoverColor" ?>;
            --color-card-button-border: <?php echo "$settings->cardButtonBorderColor" ?>;
            --color-card-button-border-hover: <?php echo "$settings->cardButtonBorderHoverColor" ?>;
            --color-card-button-shadow: <?php echo "$settings->cardButtonShadowColor" ?>;
            --color-card-button-shadow-hover: <?php echo "$settings->cardButtonShadowHoverColor" ?>;
            --color-single-blog-author: <?php echo "$settings->singleBlogAuthorColor" ?>;
            --color-mobile-menu: <?php echo "$settings->mobileMenuBackgroundColor" ?>;
            --color-mobile-menu-text: <?php echo "$settings->mobileMenuTextColor" ?>;


            --color-single-blog-tags: <?php echo "$settings->singleBlogTagColor" ?>;
            --color-single-blog-tags-hover: <?php echo "$settings->singleBlogTagHoverColor" ?>;
            --color-single-blog-tags-text: <?php echo "$settings->singleBlogTagTextColor" ?>;
            --color-single-blog-tags-text-hover: <?php echo "$settings->singleBlogTagTextHoverColor" ?>;




            /* radius */
            --radius-hero-image: <?php echo "$settings->heroPictureRadius" ?>px;



            /* align */
            --align-hero-text: <?php echo "$settings->heroTextAlignment" ?>;
            --align-blog-header: <?php echo "$settings->singleBlogHeroAlignment" ?>;
            --align-blog-section-title: <?php echo "$settings->singleBlogSectionTitleAlignment" ?>;
            --align-blog-section-content: <?php echo "$settings->singleBlogSectionContentAlignment" ?>;
        }
    </style>




    @endsection
    {{-- endSection --}}






</div>
{{-- endWrapper --}}