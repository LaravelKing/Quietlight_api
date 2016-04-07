Feature: Disclosure

Scenario: An registered user trying to create a Disclosure without a summary
Given that I want to make a new "Disclosure"
	And its "body" is "Behat Body"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/disclosure"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Disclosure
Given that I want to make a new "Disclosure"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/disclosure"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "summary_id" property
    And the response has an "id" property

Scenario: An registered user trying to update a Disclosure
Given that I want to update a "Disclosure"
    And I found an "id" from "/disclosure" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
	And its "body" is "Behat Disclosure Updated"
    And the request is sent as JSON
    When I request "/disclosure/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "body" property equals "Behat Disclosure Updated"
