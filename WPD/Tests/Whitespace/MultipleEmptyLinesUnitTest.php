<?php

namespace WPD\Tests\Whitespace;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Class MultipleEmptyLinesUnitTest
 */
class MultipleEmptyLinesUnitTest extends AbstractSniffUnitTest {

	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		$file = func_get_arg( 0 );

		if ( $file === 'MultipleEmptyLinesUnitTest.success' ) {
			return [];
		}

		return [
			4  => 1,
			12 => 1,
			19 => 1,
			25 => 1,
		];
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList(): array {
		return [];
	}
}
