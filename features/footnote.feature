Feature: Footnote

Scenario: An registered user trying to create a Footnote
Given that I want to make a new "Footnote"
	And its "table" is "Summary"
    And its "field" is "name"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/footnote"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "table" property
    And the "table" property equals "Summary"
    And the "field" property equals "name"
    And the response has a "created_by" property
    And the "created_by" property is an object

Scenario: An registered user trying to update a Footnote
Given that I want to update a "Footnote"
    And I found an "id" from "/footnote" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
	And its "table" is "Summary"
    And its "field" is "name"
    And its "associated_id" is "1"
    And its "body" is "test"
    And the request is sent as JSON
    When I request "/footnote/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "associated_id" property equals "1"
	And the "table" property equals "Summary"
	And the "field" property equals "name"
	And the "body" property equals "test"


Scenario: An registered user trying to update a Footnote with a fake association (shouldn't update)
Given that I want to update a "Title"
    And I found an "id" from "/footnote" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And its "associated_id" is "99999"
    And the request is sent as JSON
    When I request "/footnote/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "associated_id" property equals "1"
