<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
    }

/**
     * @Given /^I am not logged in$/
     */
    public function iAmNotLoggedIn()
    {
        throw new PendingException();
    }

    /**
     * @When /^I am on "([^"]*)"$/
     */
    public function iAmOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^there should be a login form$/
     */
    public function thereShouldBeALoginForm()
    {
        throw new PendingException();
    }

    /**
     * @Given /^there should be no errors$/
     */
    public function thereShouldBeNoErrors()
    {
        throw new PendingException();
    }

    /**
     * @Given /^there is a user "([^"]*)" with password "([^"]*)"$/
     */
    public function thereIsAUserWithPassword($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When /^I try to login as "([^"]*)" with password "([^"]*)"$/
     */
    public function iTryToLoginAsWithPassword($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should not be logged in$/
     */
    public function iShouldNotBeLoggedIn()
    {
        throw new PendingException();
    }

    /**
     * @Given /^I should be redirected to "([^"]*)"$/
     */
    public function iShouldBeRedirectedTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Given /^there should be errors$/
     */
    public function thereShouldBeErrors()
    {
        throw new PendingException();
    }

    /**
     * @Then /^I should be logged in$/
     */
    public function iShouldBeLoggedIn()
    {
        throw new PendingException();
    }
    
    /**
     * @Then /^there should be a signup form$/
     */
    public function thereShouldBeASignupForm()
    {
    	throw new PendingException();
    }
    
    /**
     * @When /^I try to sign up as "([^"]*)" with password "([^"]*)"$/
     */
    public function iTryToSignUpAsWithPassword($arg1, $arg2)
    {
    	throw new PendingException();
    }
    
    /**
     * @Then /^I should not be signed up$/
     */
    public function iShouldNotBeSignedUp()
    {
    	throw new PendingException();
    }
    
    /**
     * @Given /^the signup form should have errors$/
     */
    public function theSignupFormShouldHaveErrors()
    {
    	throw new PendingException();
    }
    
    /**
     * @Given /^the errors should contain "([^"]*)"$/
     */
    public function theErrorsShouldContain($arg1)
    {
    	throw new PendingException();
    }
    
    /**
     * @Given /^there is not a user "([^"]*)"$/
     */
    public function thereIsNotAUser($arg1)
    {
    	throw new PendingException();
    }
    
    /**
     * @Then /^I should be signed up$/
     */
    public function iShouldBeSignedUp()
    {
    	throw new PendingException();
    }
    
    /**
     * @Given /^there is a user "([^"]*)"$/
     */
    public function thereIsAUser($arg1)
    {
    	throw new PendingException();
    }
    
    /**
     * @Given /^I am logged in as "([^"]*)"$/
     */
    public function iAmLoggedInAs($arg1)
    {
    	throw new PendingException();
    }
    
    /**
     * @Then /^the page should contain "([^"]*)"$/
     */
    public function thePageShouldContain($arg1)
    {
    	throw new PendingException();
    }
}
