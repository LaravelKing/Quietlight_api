Feature: Summary

Scenario: An annonymous user trying to create a Summary
Given that I want to make a new "Summary"
    And the request is sent as JSON
    When I request "/summary"
    Then the response status code should be 401
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Summary
Given that I want to make a new "Summary"
	And its "name" is "Behat Summary"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/summary"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "name" property
    And the response has an "id" property

Scenario: An annonymous user trying to delete a Summary
Given that I want to delete "Summary"
    And I found an "id" from "/summary?limit=1&offset=5" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/summary/{id}"
    Then the response status code should be 401
    And the response should be JSON
    And the response has an "error" property

Scenario: An annonymous user trying to update a Summary
Given that I want to update a "Summary"
    And I found an "id" from "/summary?limit=1&offset=5" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And its "name" is "Behat Summary Changed"
    And the request is sent as JSON
    When I request "/summary/{id}"
    Then the response status code should be 401

Scenario: An registered user trying to update a Summary
Given that I want to update a "Summary"
    And I found an "id" from "/summary?limit=1&offset=5" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And its "name" is "Behat Summary Changed"
    And the request is sent as JSON
    When I request "/summary/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "name" property
    And the response has an "id" property
    And the "name" property equals "Behat Summary Changed"

Scenario: An registered user trying to list Summaries (default limit 5)
Given I authenticated with "behat@testing.com" and "secret" at "/session/login"
	When I request "/summary"
	And the request is sent as JSON
	Then the response status code should be 200
	And the response should be an array
	And the response length should be 5

Scenario: An registered user trying to list Summaries (offset 5, should return 1)
Given I authenticated with "behat@testing.com" and "secret" at "/session/login"
	When I request "/summary?offset=5"
	And the request is sent as JSON
	Then the response status code should be 200
	And the response should be an array
	And the response length should be 1


Scenario: An registered user trying to list Summaries (limit 2)
Given I authenticated with "behat@testing.com" and "secret" at "/session/login"
	When I request "/summary?limit=2"
	And the request is sent as JSON
	Then the response status code should be 200
	And the response should be an array
	And the response length should be 2

Scenario: An registered user trying to delete a Summary
Given that I want to delete a "Summary"
    And I found an "id" from "/summary?limit=1&offset=5" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/summary/{id}"
    Then the response status code should be 200
    And the response should be JSON