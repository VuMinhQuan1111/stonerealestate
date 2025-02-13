<?php
global $houzez_opt_name, $allowed_html_array;
Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Agencies', 'houzez' ),
    'id'     => 'houzez-agencies',
    'desc'   => '',
    'icon'   => 'el-icon-user el-icon-small',
    'fields'        => array(
        array(
            'id'       => 'agencies-template-layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Agencies Layout', 'houzez'),
            'subtitle' => '',
            'desc'     => '',
            'options'  => array(
                'v1' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'all-agencies-style-1.jpg'
                ),
                'v2' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'all-agencies-style-2.jpg'
                ),
            ),
            'default'  => 'v1',
        ),
        array(
            'id'       => 'num_of_agencies',
            'type'     => 'text',
            'title'    => esc_html__( 'Number of Agencies', 'houzez' ),
            'subtitle'    => esc_html__( 'Number of agencies to display on the All Agencies page template', 'houzez' ),
            'desc'    => esc_html__( 'Enter the number of agencies', 'houzez' ),
            'default'  => '9'
        ),

        array(
            'id'        => 'houzez_agency_placeholder',
            'url'       => false,
            'type'      => 'media',
            'title'     => esc_html__( 'Placeholder', 'houzez' ),
            'default'   => array( 'url' => '' ),
            'subtitle'  => esc_html__( 'Upload default placeholder. Recommended Size 350 x 350 pixels', 'houzez' ),
            'desc'      => '',
        ),

        array(
            'id'       => 'agency_address',
            'type'     => 'switch',
            'title'    => esc_html__('Address', 'houzez'),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_mobile',
            'type'     => 'switch',
            'title'    => esc_html__( 'Mobile', 'houzez' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_phone',
            'type'     => 'switch',
            'title'    => esc_html__( 'Office Phone', 'houzez' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

         array(
            'id'       => 'agency_fax',
            'type'     => 'switch',
            'title'    => esc_html__( 'Fax', 'houzez' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

         array(
            'id'       => 'agency_email',
            'type'     => 'switch',
            'title'    => esc_html__( 'Email', 'houzez' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

         array(
            'id'       => 'agency_website',
            'type'     => 'switch',
            'title'    => esc_html__( 'Website', 'houzez' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),

         array(
            'id'       => 'agency_social',
            'type'     => 'switch',
            'title'    => esc_html__( 'Social', 'houzez' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
    ),
));

Redux::setSection( $houzez_opt_name, array(
    'title'  => esc_html__( 'Agency Detail Page', 'houzez' ),
    'id'     => 'agency-detail-page',
    'desc'   => '',
    'subsection' => true,
    'fields' => array(
        array(
            'id'       => 'agency-detail-layout',
            'type'     => 'image_select',
            'title'    => esc_html__('Single Agency Layout', 'houzez'),
            'subtitle' => '',
            'desc'     => '',
            'options'  => array(
                'v1' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'agency-detail-page-style-1.jpg'
                ),
                'v2' => array(
                    'alt' => '',
                    'img' => HOUZEZ_IMAGE . 'agency-detail-page-style-2.jpg'
                ),
            ),
            'default'  => 'v1',
        ),
        array(
            'id'       => 'agency_tabs',
            'type'     => 'switch',
            'title'    => esc_html__( 'Tabs', 'houzez' ),
            'subtitle' => esc_html__('Property status tabs displayed in the agency detail page', 'houzez'),
            'desc' => esc_html__( 'Enable or disable the tabs on agency detail page', 'houzez' ),
            'default'  => 0,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_detail_tab_1',
            'type'     => 'select',
            'title'    => esc_html__('Tab 1', 'houzez'),
            'subtitle' => esc_html__('Property status tab in the agency detail page', 'houzez'),
            'desc'     => esc_html__('Select the status', 'houzez'),
            'data'     => 'terms',
            'required' => array('agency_tabs', '=', '1'),
            'args'        =>  array('taxonomy'=>'property_status'),
            'default' => ''
        ),
        array(
            'id'       => 'agency_detail_tab_2',
            'type'     => 'select',
            'title'    => esc_html__('Tab 2', 'houzez'),
            'subtitle' => esc_html__('Property status tab in the agency detail page', 'houzez'),
            'desc'     => esc_html__('Select the status', 'houzez'),
            'required' => array('agency_tabs', '=', '1'),
            'data'        => 'terms',
            'args'        =>  array('taxonomy'=>'property_status'),
            'default' => ''
        ),

        array(
            'id'       => 'agency_listings_layout',
            'type'     => 'select',
            'title'    => __('Listings Layout', 'houzez'),
            'subtitle' => __('Select the listings layout for the agency detail page', 'houzez'),
            'desc'     => esc_html__('Select the layout', 'houzez'),
            'options'  => array(
                'Listings Version 1' => array(
                    'list-view-v1' => 'List View',
                    'grid-view-v1' => 'Grid View',
                ),
                'Listings Version 2' => array(
                    'list-view-v2' => 'List View',
                    'grid-view-v2' => 'Grid View',
                ),

                'Listings Version 3' => array(
                    'grid-view-v3' => 'Grid View',
                ),

                'Listings Version 4' => array(
                    'grid-view-v4' => 'Grid View',
                ),

                'Listings Version 5' => array(
                    'list-view-v5' => 'List View',
                    'grid-view-v5' => 'Grid View',
                ),

                'Listings Version 6' => array(
                    'grid-view-v6' => 'Grid View',
                ),

                'Listings Version 7' => array(
                    'list-view-v7' => 'List View',
                    'grid-view-v7' => 'Grid View',
                ),
            ),
            'default' => 'list-view-v1'
        ),
        array(
            'id'       => 'num_of_agency_listings',
            'type'     => 'text',
            'title'    => esc_html__( 'Number of Listings', 'houzez' ),
            'subtitle'    => esc_html__( 'Number of listings to display on the agency detail page', 'houzez' ),
            'desc'    => esc_html__( 'Enter the number of listings', 'houzez' ),
            'default'  => '10'
        ),
        array(
            'id'       => 'agency_listings_order',
            'type'     => 'select',
            'title'    => __('Default Order', 'houzez'),
            'subtitle' => __('Listings order on the agency detail page', 'houzez'),
            'desc' => __('Select the listings order.', 'houzez'),
            'options'  => array(
                'default' => esc_html__( 'Default', 'houzez' ),
                'a_title' => esc_html__( 'Title - ASC', 'houzez' ),
                'd_title' => esc_html__( 'Title - DESC', 'houzez' ),
                'd_date' => esc_html__( 'Date New to Old', 'houzez' ),
                'a_date' => esc_html__( 'Date Old to New', 'houzez' ),
                'd_price' => esc_html__( 'Price (High to Low)', 'houzez' ),
                'a_price' => esc_html__( 'Price (Low to High)', 'houzez' ),
                'featured_first' => esc_html__( 'Show Featured Listings on Top', 'houzez' ),
            ),
            'default' => 'default'
        ),
        array(
            'id'       => 'agency_stats',
            'type'     => 'switch',
            'title'    => esc_html__( 'Stats', 'houzez' ),
            'subtitle' => esc_html__('Enable or disable the stats on agency detail page', 'houzez'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_review',
            'type'     => 'switch',
            'title'    => esc_html__( 'Review & Rating', 'houzez' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_agents',
            'type'     => 'switch',
            'title'    => esc_html__( 'Agency Agents', 'houzez' ),
            'subtitle' => esc_html__('Enable or disable agency agents', 'houzez'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_listings',
            'type'     => 'switch',
            'title'    => esc_html__( 'Listings', 'houzez' ),
            'subtitle' => esc_html__('Enable or disable the agency listins section', 'houzez'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_bio',
            'type'     => 'switch',
            'title'    => esc_html__( 'About agency', 'houzez' ),
            'subtitle' => esc_html__('Enable or disable the about agency section', 'houzez'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_sidebar',
            'type'     => 'switch',
            'title'    => esc_html__( 'agency Sidebar', 'houzez' ),
            'subtitle' => esc_html__('Enable or disable the side on agency detail page', 'houzez'),
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
        array(
            'id'       => 'agency_sidebar_map',
            'type'     => 'switch',
            'title'    => esc_html__( 'Agency Map', 'houzez' ),
            'subtitle' => '',
            'default'  => 1,
            'on'       => 'Enabled',
            'off'      => 'Disabled',
        ),
    )
));