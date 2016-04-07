Feature: Summary Section

Scenario: An registered user trying to create a Summary Section without a summary (should fail)
Given that I want to make a new "Summary Section"
    And its "table" is "Title"
    And its "associated_id" is "1"
    And its "weight" is "7"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/summarysection"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Summary Section
Given that I want to make a new "Summary Section"
    And its "table" is "Title"
    And its "associated_id" is "1"
    And its "weight" is "7"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/summarysection"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "table" property
    And the "table" property equals "Title"
    And the response has an "associated_id" property
    And the "associated_id" property equals "1"
    And the response has an "weight" property
    And the "weight" property equals "7"
    And the response has a "summary_id" property
    And the "summary_id" property equals "1"
    And the response has a "created_by" property
    And the "created_by" property is an object

Scenario: An registered user trying to update a Summary Section
Given that I want to update a "Summary Section"
    And I found an "id" from "/summarysection" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And its "table" is "Financial"
    And its "associated_id" is "1"
    And its "weight" is "6"
    And the request is sent as JSON
    When I request "/summarysection/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
    And the "associated_id" property equals "1"
    And the "table" property equals "Financial"
    And the "weight" property equals "6"


Scenario: An registered user trying to update a Summary Section with a fake association (shouldn't update)
Given that I want to update a "Summary Section"
    And I found an "id" from "/summarysection" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And its "associated_id" is "99999"
    And the request is sent as JSON
    When I request "/summarysection/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
    And the "associated_id" property equals "1"


Scenario: An registered user trying to create a Summary Section with a fake summary (should fail)
Given that I want to make a new "Summary Section"
    And its "table" is "Title"
    And its "associated_id" is "1"
    And its "weight" is "7"
    And its "summary_id" is "99999"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/summarysection"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property
