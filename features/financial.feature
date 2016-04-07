Feature: Financial

Scenario: An registered user trying to create a Financial without a summary
Given that I want to make a new "Financial"
	And its "body" is "Behat Body"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/financial"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Financial
Given that I want to make a new "Financial"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/financial"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "summary_id" property
    And the response has an "id" property

Scenario: An registered user trying to update a Financial
Given that I want to update a "Financial"
    And I found an "id" from "/financial" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
	And its "body" is "Behat Financial Updated"
    And the request is sent as JSON
    When I request "/financial/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "body" property equals "Behat Financial Updated"
