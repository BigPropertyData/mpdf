<?php

namespace Issues;

use Mpdf\Mpdf;

class Issue520Test extends \Mpdf\BaseMpdfTest
{

	public function testDollarInFooterCoreFonts()
	{
		$this->mpdf->setCompression(false);
		$this->mpdf->setHtmlFooter('$123.45');

		$this->mpdf->output('out.pdf', 'F');
		$out = $this->mpdf->output('', 'S');

		$this->assertContains('$123.45', $out);
	}

}

