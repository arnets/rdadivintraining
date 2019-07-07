<?php
use PHPUnit\Framework\TestCase;

class soapTest extends TestCase
{
    public function testSearch()
    {
        $googleSearch = $this->getMockFromWsdl('GoogleSearch.wsdl', 'GoogleSearch');

        $directoryCategory = new stdClass;
        $directoryCategory->fullViewableName = '';
        $directoryCategory->specialEncoding = '';

        $element = new stdClass;
        $element->summary = '';
        $element->URL = 'example.com';
        $element->snippet = '...';
        $element->title = '<b>Soap Test</b>';
        $element->cachedSize = '11k';
        $element->relatedInformationPresent = true;
        $element->hostName = 'soapTest';
        $element->directoryCategory = $directoryCategory;
        $element->directoryTitle = '';

        $result = new stdClass;
        $result->documentFiltering = false;
        $result->searchComments = '';
        $result->estimatedTotalResultsCount = 3.9000;
        $result->estimateIsExact = false;
        $result->resultElements = array($element);
        $result->searchQuery = 'code 200';
        $result->startIndex = 1;
        $result->endIndex = 1;
        $result->searchTips = '';
        $result->directoryCategories = array();
        $result->searchTime = 0.248822;

        $googleSearch->expects($this->any())
                     ->method('doGoogleSearch')
                     ->will($this->returnValue($result));

        /**
         * $googleSearch->doGoogleSearch() will now return a stubbed result and
         * the web service's doGoogleSearch() method will not be invoked.
         */
        $this->assertEquals(
            $result,
            $googleSearch->doGoogleSearch(
                'code 200',
                'soapTest',
                0,
                1,
                false,
                '',
                false,
                '',
                '',
                ''
          )
        );
    }
}
