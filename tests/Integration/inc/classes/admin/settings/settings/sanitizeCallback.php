<?php

namespace WP_Rocket\Tests\Integration\inc\classes\admin\settings\Settings;

use Brain\Monkey\Functions;
use WP_Rocket\Admin\Settings;
use WPMedia\PHPUnit\Integration\TestCase;

/**
 * @covers \WP_Rocket\Admin\Settings::sanitize_callback
 * @group  AdminOnly
 * @group  AdminSettings
 */
class Test_SanitizeCallback extends TestCase {
	/**
	 * @dataProvider addDataProvider
	 */
	public function testShouldSanitize( $original, $sanitized ) {
		do_action('admin_init');
		$sanitize_callback = apply_filters( 'sanitize_option_wp_rocket_settings', $original );

		$this->assertSame(
			$sanitized,
			$sanitize_callback
		);
	}

	public function addDataProvider() {
		return $this->getTestData( __DIR__, 'sanitizeCallback' );
	}

}
