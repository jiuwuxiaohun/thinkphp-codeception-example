<?php 

class FirscCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/index/test/show');
        $I->see('show_test');
    }
}
