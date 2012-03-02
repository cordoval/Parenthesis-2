# features/parenthesis.feature
Feature: parenthesis validator
  In order to validate a string using grouping syntax
  As a text user
  I need to be able to validate if it follows the syntax

Scenario: Validates opening and close parenthesis
  Given my input string is "()"
  When I run parse
  Then I should get: true

Scenario: Validates (())
  Given my input string is "(()"
  When I run parse
  Then I should get: false