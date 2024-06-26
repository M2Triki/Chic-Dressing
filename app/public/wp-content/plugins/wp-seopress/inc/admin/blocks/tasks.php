<?php
    defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');

    if (defined('SEOPRESS_WL_ADMIN_HEADER') && SEOPRESS_WL_ADMIN_HEADER === false) {
        //do nothing
    } else {
        $class = '1' !== seopress_get_service('NoticeOption')->getNoticeTasks() ? 'is-active' : '';
    ?>

    <div id="notice-tasks-alert" class="seopress-card <?php echo esc_attr($class); ?>" style="display: none">
        <div class="seopress-card-title">
            <h2><?php esc_attr_e('Get ready to improve your SEO', 'wp-seopress'); ?></h2>
        </div>
        <div class="seopress-card-content">
            <?php
                /**
                 * Check if XML sitemaps feature is correctly enabled by the user
                 *
                 * @since 6.0
                 */
                function seopress_tasks_sitemaps() {
                    $options = get_option('seopress_xml_sitemap_option_name');
                    if (isset($options['seopress_xml_sitemap_general_enable']) && ('1' === seopress_get_toggle_option('xml-sitemap'))) {
                        return 'done';
                    }

                    return;
                }

                /**
                 * Check if Social Networds feature is correctly enabled by the user
                 *
                 * @since 6.0
                 */
                function seopress_tasks_social_networks() {
                    if ('1' === seopress_get_service('SocialOption')->getSocialFacebookOGEnable() && ('1' === seopress_get_toggle_option('social'))) {
                        return 'done';
                    }

                    return;
                }

                $tasks = [
                    [
                        'done' => seopress_tasks_sitemaps(),
                        'link' => admin_url('admin.php?page=seopress-xml-sitemap'),
                        'label' => __('Generate XML sitemaps', 'wp-seopress'),
                    ],
                    [
                        'done' => seopress_tasks_social_networks(),
                        'link' => admin_url('admin.php?page=seopress-social'),
                        'label' => __('Be social', 'wp-seopress'),
                    ]
                ];

                $tasks = apply_filters('seopress_dashboard_tasks', $tasks);
            ?>

            <ul class="seopress-list-items" role="menu">
                <?php foreach($tasks as $key => $task) { ?>
                    <li class="seopress-item has-action seopress-item-inner <?php if (empty($task['done'])) { echo 'is-active'; }; ?>">
                        <a href="<?php echo esc_url($task['link']); ?>" class="seopress-item-inner check <?php echo esc_attr($task['done']); ?>" data-index="<?php echo esc_attr($key + 1); ?>">
                            <?php echo esc_html($task['label']); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

<?php
}
