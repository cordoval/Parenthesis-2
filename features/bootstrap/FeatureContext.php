<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use PHPPeru\Parenthesis\Parenthesis;
//
// Require 3rd-party libraries here:
//
   require_once 'PHPUnit/Autoload.php';
   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    protected $inputString;
    protected $parenthesis;
    protected $isValid;

    /**
     * Initializes context.
     * Every scenario gets it's own context object.
     *
     * @param   array   $parameters     context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        $this->parenthesis = new Parenthesis();
    }

//
// Place your definition and hook methods here:
//
//    /**
//     * @Given /^I have done something with "([^"]*)"$/
//     */
//    public function iHaveDoneSomethingWith($argument)
//    {
//        doSomethingWith($argument);
//    }
//

    /**
     * @Given /^my input string is "(?P<inputText>[^"]*)"$/
     */
    public function myInputStringIs($inputText)
    {
        $this->inputString = $inputText;
    }

    /**
     * @When /^I run parse$/
     */
    public function iRun()
    {
        $this->isValid = $this->parenthesis->validateString($this->inputString);
    }

    /**
     * @Then /^I should get: (?P<outputValue>[^"]*)$/
     */
    public function iShouldGetTrue($outputValue)
    {
        assertEquals($outputValue == 'true', $this->isValid);
    }


}
