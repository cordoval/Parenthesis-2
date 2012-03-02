# features/parenthesis.feature
Feature: parenthesis validator
  In order to validate a string using grouping syntax
  As a text user
  I need to be able to validate if it follows the syntax

Scenario Outline: Validates opening and close parenthesis
  Given my input string is "<input string>"
  When I run parse
  Then I should get: <true or false>

  Examples:
    | input string | true or false |
    | ()           | true          |
    | (()          | false         |
    | (())         | true          |
    | ([])         | true          |
    | ([][])       | true          |
    | ([]])        | false         |
    | ([][])       | true          |

