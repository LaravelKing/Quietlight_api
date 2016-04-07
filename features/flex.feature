Feature: Flex

Scenario: An registered user trying to create a Flex without a summary
Given that I want to make a new "Flex"
    And its "body" is "Behat Body"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/flex"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Flex
Given that I want to make a new "Flex"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/flex"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "summary_id" property
    And the response has an "id" property
    And the response has a "created_by" property
    And the "created_by" property is an object

Scenario: An registered user trying to update a Flex
Given that I want to update a "Flex"
    And I found an "id" from "/flex" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And its "body" is "Behat Flex Updated"
    And the request is sent as JSON
    When I request "/flex/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
    And the "body" property equals "Behat Flex Updated"
