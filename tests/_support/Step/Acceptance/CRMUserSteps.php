<?php
namespace Step\Acceptance;

class CRMUserSteps extends \AcceptanceTester
{
	function amInQueryCustomerUi()
		{
			$I = $this;
			$I->amOnPage('/customers/query');
		}

	function fillInPhoneFieldWithDataFrom($customer_data)
		{
			$I = $this;
			$I->fillField(
			'phone_number',
			$customer_data['PhoneRecord[number]']
			);
		}

	function clickSearchButton()
		{
			$I = $this;
			$I->click('Search');
		}

	function seeIAmInListCustomersUi()
		{
			$I = $this;
			$I->seeCurrentUrlMatches('/customers/');
		}

	function seeCustomerInList($customer_data)
		{
			$I = $this;
			$I->see($customer_data['CustomerRecord[name]']);
		}

	function dontSeeCustomerInList($customer_data)
		{
			$I = $this;
			$I->dontSee($customer_data['CustomerRecord[name]']);
		}

    public function seeLargeBodyOfText()
        {
            $I = $this;
            $text = $I->grabTextFrom('p'); // naive selector
            $I->seeContentIsLong($text);
        }
}